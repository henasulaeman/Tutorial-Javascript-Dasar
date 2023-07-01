<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Node Method</title>
</head>
<body>
<ul id="menu">
	<li id="first">First</li>
	<li id="second">Second</li>
	<li id="third">Third</li>
</ul>

<script type="text/javascript">
	const menu = document.getElementById("menu");

	menu.removeChild(document.getElementById("first"));
	menu.removeChild(document.getElementById("second"));
	 menu.removeChild(document.getElementById("third"));

	console.info(menu);




</script>
</body>
</html>