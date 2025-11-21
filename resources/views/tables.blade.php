<!DOCTYPE html>
<html>
<head>
    <title>Database Tables</title>
</head>
<body>
    <h1>Tables in Database</h1>
    <ul>
        @foreach($tables as $table)
            <li>{{ reset($table) }}</li> <!-- reset() gets the first value from the object -->
        @endforeach
    </ul>
</body>
</html>