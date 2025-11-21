<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- @extends(layouts.header) -->
	<!-- @section('table_name') -->
	
	<h2>Alumnus</h2>
	<ul>
    @foreach($alumni as $alum)
        <li>{{ $alum->name }} - {{ $alum->section }}</li>
    @endforeach
</ul>

</body>
</html>