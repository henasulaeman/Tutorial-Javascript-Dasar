<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function Return Value</title>
</head>
<body>
<script type="text/javascript">
	// Function adalah blok kode program yang akan bejalan saat di panggil
	// Secara default functin tidak mengembalikan value
	// agar function bisa mengembalikan value, gunakan kata kunci return

	function sayHello(firstname,lastname){
		const say = `Hello ${firstname} ${lastname}`;
		return say;
	}

	
	function getFinalScore(value){
		if (value>90) {
			return "A";
		}else if(value>80){
			return "B";
		}else if (value>70) {
			return "C";
		}else{
			return "D";
		}
	}
	const result = sayHello("Java","Script");
	const result_value = getFinalScore(81);
	document.writeln(`<p>${result}</p>`);

	document.writeln(result_value);

	// Contoh implentasi return true dan false

	

	const array = [23,34,556,1,345,6,67,45,23,34,6767,8];

	function isContains(array,searchValue){
		for(const element of array){
			console.info(element);
			if (element===searchValue) {
				return true;
			}
		}

		return false;
	}
	const search = 34;
	const found = isContains(array,search);
	document.writeln(`<p> ${found} </p>`);
</script>
</body>
</html>