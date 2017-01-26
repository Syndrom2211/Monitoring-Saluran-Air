<?php
include "../koneksi.php";

$id        = $_POST["hapus"];
$banyaknya = count($id);

if($_POST["hapusdata"]){
    for ($i=0; $i<$banyaknya; $i++){
      $perintahdelete = "DELETE FROM tbl_sensor2 where id_sensor2 = $id[$i]";
      $jalankanperintahdelete = mysql_query($perintahdelete);
    }

    if ($jalankanperintahdelete==1){
      echo "<script language='javascript'>alert('Data berhasil dihapus')</script>";
  		echo '<meta http-equiv="refresh" content="0; url=../data.php">';
    }else{
      echo "<script language='javascript'>alert('Data gagal dihapus')</script>";
  		echo '<meta http-equiv="refresh" content="0; url=../data.php">';
    }
}
?>
