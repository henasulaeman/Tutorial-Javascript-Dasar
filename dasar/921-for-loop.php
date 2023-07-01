<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>For Loop</title>
</head>
<body>
<script type="text/javascript">
//for adalah kata kunci untuk perulangan
// Blok kode yang terdapat di dalam for akan selalu di ulangi selama kondisi belum terpenuhi

let counter =1;
for(;counter<=10;){
    document.writeln("For loop ke"+counter+"<br>");
    counter++;
}

// Atau penulisannya bisa seperti ini

for(counter=1;counter<=10;counter++){
    document.writeln(`<p>Contoh Perulangan Loop Ke ${counter} </p>`);
}
</script>
</body>
</html>