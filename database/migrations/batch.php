<?php
// views/batch.php
// Simple view to list alumni by batch (e.g., Batch A, Batch B, or numerical batch)
// Place this file in your project's views folder

$host = 'localhost';
$db   = 'alumnus_db';   // change as needed
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (Exception $e) {
    echo "DB connection failed: " . $e->getMessage();
    exit;
}

// list distinct batches (adjust column name if different)
$stmt = $pdo->query("SELECT DISTINCT batch FROM alumni ORDER BY batch");
$batches = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Alumni - Batches</title>
  <style>
    body{font-family: Arial, sans-serif;padding:20px}
    .batch-list{list-style:none;padding:0}
    .batch-list li{margin:6px 0}
    table{border-collapse:collapse;width:100%;margin-top:12px}
    th,td{border:1px solid #ddd;padding:8px}
  </style>
</head>
<body>
  <h1>Alumni Batches</h1>
  <ul class="batch-list">
    <?php foreach($batches as $b): ?>
      <li><a href="?view=by_batch&batch=<?php echo urlencode($b) ?>"><?php echo htmlspecialchars($b) ?></a></li>
    <?php endforeach; ?>
  </ul>

  <?php
  if(isset($_GET['view']) && $_GET['view'] === 'by_batch' && !empty($_GET['batch'])) {
      $batch = $_GET['batch'];
      $s = $pdo->prepare("SELECT id,fullname,email,graduation_year FROM alumni WHERE batch = ? ORDER BY fullname");
      $s->execute([$batch]);
      $rows = $s->fetchAll(PDO::FETCH_ASSOC);
      echo "<h2>Alumni in batch: ".htmlspecialchars($batch)."</h2>";
      if($rows){
          echo '<table><tr><th>Name</th><th>Email</th><th>Year</th></tr>';
          foreach($rows as $r){
              echo '<tr><td>'.htmlspecialchars($r['fullname']).'</td><td>'.htmlspecialchars($r['email']).'</td><td>'.htmlspecialchars($r['graduation_year']).'</td></tr>';
          }
          echo '</table>';
      } else {
          echo '<p>No alumni found for this batch.</p>';
      }
  }
  ?>
</body>
</html>
