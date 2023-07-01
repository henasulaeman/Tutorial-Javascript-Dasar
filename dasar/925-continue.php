<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Continue</title>
</head>
<body>
<script type="text/javascript">
// Continue berfungsi untuk meneruskan perulangan

for (let counter=1; counter<10; counter++) {
    if(counter % 2 ===0){
        continue;
    }
    document.writeln("<p>perulangan continue bilangan ganjil ke "+counter+"</p>")
    
}


</script>
</body>
</html>