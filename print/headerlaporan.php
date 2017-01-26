<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Saluran Air Pesona Ciganitri</title>
<link rel="SHORTCUT ICON" href="../style/images/icon.png" />
<script type="text/javascript" src="../style/js/jquery12.js"></script>
<link rel="stylesheet" type="text/css" href="../style.css" media="all" />

<style type="text/css">
body{
		background:#fff;
}
#logo{
	width: 300px;
	height: 200px;
	float:left;
}
#judul{
	margin-left: 205px;
	width: 900px;
	height: 200px;
	text-align:center;
}
#tombolprint{
	margint: 0 auto;
}
table, th, td {
border:1px solid #333;
}
</style>
<script>
jQuery(function(){
   jQuery('#modal').click();
});
</script>
</head>
<body>
<?php
ini_set("display_errors",1);
include "../koneksi.php";
?>
	<div id="tombolprint">
			<button id="modal" style="background:#fff;border:0px solid #000;width:100%;font-size:0px;" type="submit" onclick="print()" />DATA LAPORAN</button>
	</div>
