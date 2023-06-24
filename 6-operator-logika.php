<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operator Logika</title>
</head>
<body>
<script type="text/javascript">
	const nilaiUjian =76;
	const nilaiAbsensi = 76;

	const lulusUjian = nilaiUjian>75;
	const lulusAbsensi = nilaiAbsensi>75

	const lulus = lulusUjian && lulusAbsensi;
	document.writeln(lulus);
</script>
</body>
</html>