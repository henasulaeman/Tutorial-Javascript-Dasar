<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Null</title>
</head>
<body>
<script type="text/javascript">
 // Data null adakag representasidari data kosong
//  Null berbeda dengan undefined. null brrti variable yang memiliki nilai, hanya saja nilainya null
// Sedangkan undefined adalah variable yang belum ditambahkan value apapun
let data=null;
if(data===null){
    alert("null")
}else if(data===undefined){
    alert("undefined");
}else{
    alert(data);
}
   
</script>
</body>
</html>