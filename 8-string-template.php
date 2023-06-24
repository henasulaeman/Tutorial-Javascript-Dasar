<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Console</title>
</head>
<body>
<script type="text/javascript">
	// string template mensubtitusi data
	//Backktic = ````
	const firstname =" Ucup";
	const middlename="Alex";
	const lastname="Ferguson";
	const template = `Nama ${firstname} ${middlename} ${lastname}`;

	console.info(template);

	// Ekspression substitusi
	const nilai=70;
	const template2 = `Nama : ${template} Lulus = ${nilai>60}`;
	console.info(template2);


	// Multiline String
	const multiline = `Nama Saya Hena Sulaeman

	Sekarang saya bekerja di Kampus STTBandung

	Di tempatkan di divisi IT Support, Saya suka programming dan DevOps`;
	document.writeln("<pre>");
	document.writeln(multiline);
	document.writeln("</pre>");
</script>
</body>
</html>