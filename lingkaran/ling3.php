<?php
error_reporting(0);
?>
<style type="text/css">
.tomboltiga input{
  width:40px;
  position:absolute;
  margin-left:17px;
  margin-top:25px;
}
.tombolnampil{
  width:40px;
  position:absolute;
  margin-left:17px;
  margin-top:25px;
}
#biru{
float:left;
width:73px;
height:73px;
color:white;
font-weight:bold;
background:#002aff;
border-radius:100px;
-moz-border-radius:100px;
-webkit-border-radius:100px;
}
#hijau{
float:left;
width:73px;
height:73px;
color:white;
font-weight:bold;
background:#00ff12;
border-radius:100px;
-moz-border-radius:100px;
-webkit-border-radius:100px;
}
#kuning{
float:left;
width:73px;
height:73px;
color:white;
font-weight:bold;
background:#f6ff00;
border-radius:100px;
-moz-border-radius:100px;
-webkit-border-radius:100px;
}
#merah{
float:left;
width:73px;
height:73px;
color:white;
font-weight:bold;
background:#ff0000;
border-radius:100px;
-moz-border-radius:100px;
-webkit-border-radius:100px;
}
</style>
<div class="tomboltiga">
  <form name="form" action="" method="post">
    <input style="text-align:center;" name="nilai" type="hidden" readonly value="<?php echo rand(0,50); ?>" maxlength="4" />
    <input style="text-align:center;" name="nilaibiner" type="hidden" readonly value="<?php echo rand(0,1); ?>" maxlength="4" />
    <input name="periode" type="hidden" value='<?php echo date("m/d/Y"); ?>' />
    <?php date_default_timezone_set("Asia/Jakarta"); ?>
    <input name="jam" type="hidden" value='<?php echo date("h:i"); ?>' />

    <?php
    include "../koneksi.php";

    $ketinggian      = $_POST['nilai'];
    $status_mengalir = $_POST['nilaibiner'];
    $periode         = $_POST['periode'];
    $jam             = $_POST['jam'];

    $sql = "INSERT INTO tbl_sensor3(id_sensor3,ketinggian,status_mengalir,periode,jam) values ('','$ketinggian','$status_mengalir','$periode','$jam')";
    $kueri = mysql_query($sql);
    ?>
    <!--<script language="JavaScript">setTimeout("document.form.submit();", 2000);</script>-->
  </form>
</div>
<?php
if($_POST['nilai'] > 40){
?>
  <embed src=../peringatan.swf autoplay=1 volume=12 width=1 height=1 type=application/x-shockwave-flash wmode="transparent"></embed>
  <div id="merah">
    <input class="tombolnampil" style="text-align:center;" name="nilai" type="text" readonly value="<?php echo $_POST['nilai']; ?>" maxlength="4" />
    <font style="padding-left:32px;padding-top:10px;">3</font>
  </div>
<?php
}else if($_POST['nilai'] == 0){
?>
  <div id="biru">
    <input class="tombolnampil" style="text-align:center;" name="nilai" type="text" readonly value="<?php echo $_POST['nilai']; ?>" maxlength="4" />
    <font style="padding-left:32px;padding-top:10px;">3</font>
  </div>
<?php
}else if(($_POST['nilai'] < 40) && ($_POST['nilaibiner'] == 1)){
?>
  <div id="hijau">
    <input class="tombolnampil" style="text-align:center;" name="nilai" type="text" readonly value="<?php echo $_POST['nilai']; ?>" maxlength="4" />
    <font style="padding-left:32px;">3</font>
  </div>
<?php
}else if(($_POST['nilai'] < 40) && ($_POST['nilaibiner'] == 0)){
?>
  <div id="kuning">
    <input class="tombolnampil" style="text-align:center;" name="nilai" type="text" readonly value="<?php echo $_POST['nilai']; ?>" maxlength="4" />
    <font style="padding-left:32px;padding-top:10px;">3</font>
  </div>
<?php
}
?>
