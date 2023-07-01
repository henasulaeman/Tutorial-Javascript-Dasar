<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function</title>
</head>
<body>
<script type="text/javascript">
	// Function adalah blok kode program yang akan bejalan saat di panggil

	function sayHelloWorld() {
		document.writeln("<p>Hello World</p>");

	}

// function yang ada parameternya
	function Perkanalan(firstname,lastname){
		document.writeln(`<p>Nama Depan : ${firstname}</p>`);
		document.writeln(`<p>Nama Belakang : ${lastname} </p>`);
	}

	sayHelloWorld();
	Perkanalan("Java","Script");
</script>
</body>
</html>