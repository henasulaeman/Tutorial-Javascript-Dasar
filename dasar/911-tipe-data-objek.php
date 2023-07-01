<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tipe Data Objek</title>
</head>
<body>
<script type="text/javascript">
	console.info("Belajar Type Data Objek");
	console.info("type data objek bisa menggunakan string dalam index array, {} objek menggunakan kurung kurawal , kalau array menggunakan [] ");
	console.info("Contoh");

	const orang = {};
	orang["nama"]="Hena Sulaeman";
	orang["alamat"]="Jl GG Sukarma";
	orang["umur"]=30;
	console.table(orang);

	console.info("untuk operasi operasi nya mirip dengan array, contoh misalkan delete orang['nama'];");

	delete orang["nama"];
	console.table(orang);

	console.info("memasukan objek langsung dengan atributnya");
	const nama_sayuran = {"sayur1":"Wortel","sayur2":"Brokoli","sayur3":"Bayam"};
	console.table(nama_sayuran);

	console.info("cara mengakses objek berdasarkan properti");
	console.info(`Nama sayuran 1 ${nama_sayuran.sayur1}`);
	console.info("Lebih simple dari array , karena bisa langsung memanggil objeknya tanpa menggunakan kurung kurawal")


</script>
</body>
</html>