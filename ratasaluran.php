<?php
error_reporting(0);

include "koneksi.php";

$awal   = $_POST['awal'];
$akhir 	= $_POST['akhir'];

$sql = "SELECT periode, avg(ketinggian) FROM tbl_sensor1 WHERE periode BETWEEN '$awal' AND '$akhir' GROUP BY periode";

$query = mysql_query($sql);

while($data = mysql_fetch_array($query)){
    if($data['avg(ketinggian)']==0){
      echo "<br/>";
    }else{
      echo "Tanggal : ".$data['periode']." = <b>".floor($data['avg(ketinggian)'])." cm</b><br/>";
    }
}
?>
