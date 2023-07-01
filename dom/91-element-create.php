<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Element Create</title>
</head>
<body>
	<div id="content" class="content">
	
	</div>
<script type="text/javascript">
	const content = document.getElementById("content");


	// create h1
	const title = document.createElement("h1");
	title.textContent="Belajar Javascript";
	content.appendChild(title);

	const description = document.createElement("p");
	description.textContent="ini adalah deskripsi menggunakan tag p";
	content.appendChild(description);
</script>
</body>
</html>