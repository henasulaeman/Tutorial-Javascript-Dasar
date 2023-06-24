<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Label</title>
</head>
<body>
<script type="text/javascript">
// label merupakan penanda yang bisa digunakan dengan kata kunci break dan continue
// secara default saat melakukan break atau contine, dia akan melakukan trhadap perulangan

loopi:

for (let i=0; i<100; i++){
    loopj:
        for(let j=0; j<10; j++){
            if(j>10){
                continue loopi;
            }
            document.writeln("<p>"+i+"i <--> j "+j+"</p>");
        }
}


</script>
</body>
</html>