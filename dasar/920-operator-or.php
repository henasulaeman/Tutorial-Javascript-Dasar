<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operator Or</title>
</head>
<body>
<script type="text/javascript">
//Operator logika OR (||) membaca dari kiri ke kanan
// Operator ini akan mengambil nilai pertama truthy
// jika tidak ada satupun yang bernilai truthy, kaka yang terakhir yang akan di ambil

// Akan tampil hello , karena truthy nya hello
    console.info("hello"|| "");

    console.info("" || []);
    console.info("0"||"NOL");
    console.info(0 || "Nol");

    const person = {"firsname":"Jepri","lastname":"Alexander"};
    console.info(person.firsname || person.lastname);
//    Silahkan explore sendiri
</script>
</body>
</html>