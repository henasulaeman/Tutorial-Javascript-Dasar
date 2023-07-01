<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Konversi String Number</title>
</head>
<body>
<script type="text/javascript">
	// const value1="1";
	const value1=parseInt("1");
	const value2 =1;
	const sum = value1+value2;

	document.writeln(`<p>${sum}</p>`);
	document.writeln(`<p>meruba ke bilangan bulat${parseInt("1.1")}</p>`);
	document.writeln(`Merubah ke Pecahan ${"1.1"}`);
	document.writeln(`<p>Merubah ke bil bulat atau pecahan ${Number("1.1")}</p>`);

	// Merubah dari number menjadi string

	const a = 1;
	const b = 1;
	const total = a+b;
	const total2= a.toString()+b.toString();
	document.writeln(`Kondisi Belum di Konversi ${total}`);
	document.writeln(`<p>Kondisi Belum di Konversi ${total2} </p>`);

	// Jika salah Nan (Not a Number)

	document.writeln(`contoh jika ada kesalan pada nilai= ${parseInt("testing")}`);
	document.writeln(`<p>contoh jika ada kesalan pada nilai tapi di awali dengan number= ${parseInt("12testing")}</p>`);
	document.writeln(`<p>contoh jika ada kesalan pada nilai tapi di awali dengan number= ${parseFloat("1.2testing")}</p>`);

	// Is Nan
	document.writeln(`<p>Contoh Menggunakan isNan Cek isNan apakah number atau bukan ?</p>`);
	document.writeln(`<p>Cek Apakah NaN ? : ${isNaN("hai")}</p>`);
	document.writeln(`<p>Cek Apakah NaN ? : ${isNaN(123456)}</p>`);
	document.writeln(`<p> Cek Apakah NaN ? : ${isNaN(NaN)}</p>`);

</script>
</body>
</html>