<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Break</title>
</head>
<body>
<script type="text/javascript">
// Break berfungsi untuk menghentikan total perulangan

let counter=1;

while(true){
    document.writeln("<p>Perulangan while ke "+counter +"</p>")
    counter++;

    if(counter>6){
        break;
    }
}


</script>
</body>
</html>