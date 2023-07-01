<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Element</title>
</head>
<body>
<p>Element merupakan turunan dari node</p>
<p>Elemen biasanya berupa element dari HTML, seperti tag h1, tag p, tag div , tag rows dll</p>

<h1 id="title"></h1>
<p id="description"></p>

<script type="text/javascript">
	const title = document.getElementById("title");
	title.textContent="Belajar Java Script"	;

	const description = document.getElementById("description");

	description.textContent="Ini deskripsi saya";
</script>
</body>
</html>