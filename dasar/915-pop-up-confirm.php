<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>If Ekspression</title>
</head>
<body>
<script type="text/javascript">
   
   // Contoh Prompt
   // jika menggunakan promp bisa menangkap variable
   const masuk = confirm("Anda Yakin Masuk ?");
   if(masuk){
    const name = prompt("Siapa nama Anda ? ");
    alert(`Hello ${name}`);
   }else{
    alert("bye bye");
   }
   
</script>
</body>
</html>