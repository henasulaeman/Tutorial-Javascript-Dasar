<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funtion optional parameter</title>
</head>
<body>
<script type="text/javascript">
	// Secara default parameter di javascript opitonal untuk diisi , jadi ketika tidak diisi tidak mengembalikan error. hanya mengembalikan undefined jika di tampilkan di console
	function sayHello(firstname,middlename,lastname){

		console.info(firstname);
		console.info(middlename);
		console.info(lastname);
	}

	sayHello();
	sayHello("Java");
	sayHello("Java","Script");
	sayHello("Java","Script","Web");
</script>
</body>
</html>