<?php
// views/year.php
// Simple view to list alumni by graduation year
// Place this file in your project's views folder, e.g. C:\laragon\www\Alumnus_system\views\year.php

// DB settings — update if different
$host = 'localhost';
$db   = 'alumnus_db';     // change to your DB name
$user = 'root';
$pass = '';               // Laragon default is empty
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (Exception $e) {
    echo "DB connection failed: " . $e->getMessage();
    exit;
}

// Get list of distinct years
$stmt = $pdo->query("SELECT DISTINCT graduation_year FROM alumni ORDER BY graduation_year DESC");
$years = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Alumni - Years</title>
  <style>
    body{font-family: Arial, sans-serif;padding:20px}
    .year-list{list-style:none;padding:0}
    .year-list li{margin:6px 0}
    table{border-collapse:collapse;width:100%;margin-top:12px}
    th,td{border:1px solid #ddd;padding:8px}
  </style>
</head>
<body>
  <h1>Graduation Years</h1>
  <ul class="year-list">
    <?php foreach($years as $y): ?>
      <li><a href="?view=by_year&year=<?php echo htmlspecialchars($y) ?>"><?php echo htmlspecialchars($y) ?></a></li>
    <?php endforeach; ?>
  </ul>

  <?php
  // If ?view=by_year&year=YYYY show alumni for that year
  if(isset($_GET['view']) && $_GET['view'] === 'by_year' && !empty($_GET['year'])) {
      $year = (int)$_GET['year'];
      $s = $pdo->prepare("SELECT id,fullname,email,batch FROM alumni WHERE graduation_year = ? ORDER BY fullname");
      $s->execute([$year]);
      $rows = $s->fetchAll(PDO::FETCH_ASSOC);
      echo "<h2>Alumni for year $year</h2>";
      if($rows){
          echo '<table><tr><th>Name</th><th>Email</th><th>Batch</th></tr>';
          foreach($rows as $r){
              echo '<tr><td>'.htmlspecialchars($r['fullname']).'</td><td>'.htmlspecialchars($r['email']).'</td><td>'.htmlspecialchars($r['batch']).'</td></tr>';
          }
          echo '</table>';
      } else {
          echo '<p>No alumni found for this year.</p>';
      }
  }
  ?>
</body>
</html>
