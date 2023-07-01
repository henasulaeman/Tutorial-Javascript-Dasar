<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Element Property</title>
</head>
<body>
	<div id="content" class="content">
		<h1>Belajar Javascript DOM</h1>
		<p>Selamat Belajar Javascript DOM</p>
	</div>
<script type="text/javascript">
	const content = document.getElementById("content");
	console.info(content.id);
	console.info(content.className);
	console.info(content.tagName);
</script>
</body>
</html>