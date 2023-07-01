<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tipe Data Array</title>
</head>
<body>
<script type="text/javascript">
// Array di javascript bersifat dinamis bole mmasukan data tipe data apapun
	let arrayKosong =[];
	let arrayNama = ["Hena","Sulaeman"];

	const names = [];
	names.push("Ucup");
	names.push("Alex","Ferguson");

	
	console.table(names);
	console.info('Panjang Array = '+names.length);
	// console.info(names[0]);
	// console.info(names[1]);
	// console.info(names[2]);

	 
	 console.info('ini mengubah array index ke 0  names[0]="Uprit";');
	 names[0]="Uprit";
	 console.table(names);
	// console.info(names[0]);
	// console.table(names);
	 console.info("gunakan delete names[0]; untuk menghapus berdasarkan index tertentu")
	 delete names[0];
	console.table(names);
	console.info("length masih tetap, berrti delete itu bukan berrti indexnya di hapus , itu hanya menghilangkan saja"+names.length);


	console.info("Berikut contoh array ber dimensi");
	let array2dimensi=[[1,2,3,4,5],["a","b","c","d","e"]];
	let array3dimensi=[[1,2,3,4,5],["a","b","c","d","e"],['aku','belajar','javascript']];
	console.table(array2dimensi);

	console.info("Cara menampilkan multidimensi array");

	console.info(array2dimensi[0][0]);
	console.info(array2dimensi[1][0])

</script>
</body>
</html>