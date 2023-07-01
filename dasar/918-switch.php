<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switch Statement</title>
</head>
<body>
<script type="text/javascript">
    const nilai="B";

    switch(nilai){
        case "A":
            document.writeln("Anda Lulus Dengan Baik");
            break;
        case "B":
        case "C":
            document.writeln("Anda Lulus");
            break;
        case "D":
            document.writeln("Anda Tidak Lulus");
            break;
        default:
            document.writeln("Anda Salah jurusan");
    }
   
</script>
</body>
</html>