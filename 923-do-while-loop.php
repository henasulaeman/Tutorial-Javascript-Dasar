<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Do While Loop</title>
</head>
<body>
<script type="text/javascript">
// Hampir sama dengan while loop , 
// hanya saja jika di do while loop pengecekan kondisi di while dilakukan di awal, 
// sebelum perulangan dilakukan

let counter = 1;
do {
	document.writeln(`<p>Perulangan Do While ke ${counter}</p>`)
	counter++;
}
while(counter<=10);

</script>
</body>
</html>