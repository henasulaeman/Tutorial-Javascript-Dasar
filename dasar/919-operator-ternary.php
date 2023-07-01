<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tenary operator</title>
</head>
<body>
<script type="text/javascript">
    const nilai= 75;
    let ucapan;

    // Perbandingan jika menggunakan IF baris code akan lebih panjang
    // Sedangkan dengan tenary operator, kita bis menyerderhanakannya

    if(nilai>=75){
        ucapan="Selamat Anda Lulus";
        
    }else{
        ucapan="Silahkan Coba Lagi";
        
    }
    document.writeln(`<p>${ucapan}</p>`);

    // Menggunakan Operator Tenary yaitu menggunakan tanda  ? 
    ucapan = nilai>=75 ? "Selama Anda Lulus":"Silahkan Coba lagi";
    document.writeln(`<p>${ucapan}</p>`)


    
   
</script>
</body>
</html>