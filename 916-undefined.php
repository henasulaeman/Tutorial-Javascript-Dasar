<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Undefined</title>
</head>
<body>
<script type="text/javascript">
    // undefined adalah sebah kata kunci di javascript
    // undefined adalah sebuah tipe data, dan merepresentasikan data atau variable yang belum di definisikan
    // contoh
	
	let name;
	if(name==undefined){
		alert("Undefined");
	}else{
		alert("Defined");
	}

	// Contoh dalam array

	const names = ["jupri","alexander"];
	if(names[2]==undefined){
		console.info("Array Undefined");
	}else{
		console.info("Array Defined");
	}

	// Contoh dalam objek
	const person = {};
	if(person.name==undefined){
		console.info("Contoh Objek Undefined")
		console.info("Undefined");
	}else{
		console.info("Contoh Objek Defined")
		console.info("Defined");
	}
   
</script>
</body>
</html>