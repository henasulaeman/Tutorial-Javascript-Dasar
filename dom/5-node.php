<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Node</title>
</head>
<body>
<p>Node adalah abstrak base class dari document, attr,element. atau bisa disebut parent class nya</p>

<ul id="menu">
	<li id="first">First</li>
	<li id="second">Second</li>
	<li id="third">Third</li>
</ul>

<script type="text/javascript">
	const menu = document.getElementById("menu");
	const second = document.getElementById("second");
	
	console.info(menu);
	console.info(second);

</script>
</body>
</html>