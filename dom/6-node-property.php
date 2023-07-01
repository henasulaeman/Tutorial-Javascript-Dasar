<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Node Property</title>
</head>
<body>
<p>Node Property mengmabil data di dalam node berdasarkan property .</p>

<ul id="menu">
	<li id="first">First</li>
	<li id="second">Second</li>
	<li id="third">Third</li>
</ul>

<script type="text/javascript">
	const menu = document.getElementById("menu");
	console.info(menu);
	console.info(menu.childNodes);

	const second = document.getElementById("second");
	console.info(second);
	console.info(second.textContent) //Mengambil detail dari id second
	console.info(second.previousSibling.previousSibling);
	console.info(second.nextSibling);
</script>
</body>
</html>