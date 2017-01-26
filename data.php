<?php
error_reporting(0);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Monitoring Saluran Air Pesona Ciganitri</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="SHORTCUT ICON" href="style/images/icon.png" />
<link rel="stylesheet" href="style/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/js/fancybox/jquery.fancybox.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-buttons0ff5.css?v=1.0.2" />
<link rel="stylesheet" type="text/css" href="style/js/fancybox/helpers/jquery.fancybox-thumbs0ff5.css?v=1.0.2" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style/type/fontello.css">
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<!--[if lt IE 9]>
<script src="style/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="style/js/jquery-ui.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="style/js/twitter.min.js"></script>
<script type="text/javascript" src="style/js/selectnav.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
<script type="text/javascript" src="style/js/jquery.easytabs.min.js"></script>
<script type="text/javascript" src="style/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="style/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="style/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="style/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-buttons0ff5.js?v=1.0.2"></script>
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-thumbs0ff5.js?v=1.0.2"></script>
<script type="text/javascript" src="style/js/fancybox/helpers/jquery.fancybox-mediae209.js?v=1.0.0"></script>
<script>
  $(document).ready(function(){
    $("#sensorsatu").hide();
    $("#sensordua").hide();
    $("#sensortiga").hide();
    $("#sensorempat").hide();
    $("#sensorlima").hide();

    $("input[name='checkAll']").click(function() {
			var checked = $(this).attr("checked");
			$(".gridtable tr td input:checkbox").attr("checked", checked);
		});

  });
  function pilihanSensor(nameSelect){
    console.log(nameSelect);

    if(nameSelect){
      admOptionValue = document.getElementById("pilihanLima").value;
      admOptionValue2 = document.getElementById("pilihanEmpat").value;
      admOptionValue3 = document.getElementById("pilihanTiga").value;
      admOptionValue4 = document.getElementById("pilihanDua").value;
      admOptionValue5 = document.getElementById("pilihanSatu").value;

      // Sensor Satu
      if(admOptionValue5 == nameSelect.value){
        document.getElementById("nampilSatu").style.display = "block";
        $("#sensorsatu").show();
      }else{
        $("#sensorsatu").hide();
        document.getElementById("nampilSatu").style.display = "none";
      }

      // Sensor Dua
      if(admOptionValue4 == nameSelect.value){
        document.getElementById("nampilDua").style.display = "block";
        $("#sensordua").show();
      }else{
        $("#sensordua").hide();
        document.getElementById("nampilDua").style.display = "none";
      }

      // Sensor Tiga
      if(admOptionValue3 == nameSelect.value){
        document.getElementById("nampilTiga").style.display = "block";
        $("#sensortiga").show();
      }else{
        $("#sensortiga").hide();
        document.getElementById("nampilTiga").style.display = "none";
      }

      // Sensor Lima
      if(admOptionValue == nameSelect.value){
        document.getElementById("nampilLima").style.display = "block";
        $("#sensorlima").show();
      }else{
        $("#sensorlima").hide();
        document.getElementById("nampilLima").style.display = "none";
      }

      // Sensor Empat
      if(admOptionValue2 == nameSelect.value){
        document.getElementById("nampilEmpat").style.display = "block";
        $("#sensorempat").show();
      }else{
        $("#sensorempat").hide();
        document.getElementById("nampilEmpat").style.display = "none";
      }
    }else{
        document.getElementById("nampilLima").style.display = "none";
    }
  }
</script>
</head>
<body class="full-layout">
<!-- Begin Body Wrapper -->
<div class="body-wrapper">
  <!-- Begin Top Wrapper -->
  <div class="top-wrapper">
    <div class="inner">
      <!-- Begin Header -->
      <header>
        <div class="logo"><a href="index.php"><img src="style/images/logo.png" alt="" /></a></div>
        <!-- Begin Menu -->
        <nav id="menu" class="menu">
          <ul id="tiny">
            <li><a href="index.php" target="_blank">Home</a></li>
            <li><a href="data.php">Data</a></li>
          </ul>
        </nav>
        <!-- End Menu -->
        <div class="clear"></div>
      </header>
      <!-- End Header -->
    </div>
  </div>
  <!-- End Top Wrapper -->
  <!-- Begin Wrapper -->
  <div class="wrapper">
    <div class="inner light">
      <!-- Begin Column -->
      <div class="one-half">
        <div class="tabs tab-container">
          <ul class="etabs">
            <h3>Riwayat Kondisi Saluran Air</h3>
            <hr>
            <table>
                <tr>
                    <td>Pilih Sensor</td>
                    <td>:</td>
                    <td>
                        <select onchange="pilihanSensor(this);" style="margin:5px;width:100px" class="style-2">
                            <option>-</option>
                            <option id="pilihanSatu" value="1">1</option>
                            <option id="pilihanDua" value="2">2</option>
                            <option id="pilihanTiga" value="3">3</option>
                            <option id="pilihanEmpat" value="4">4</option>
                            <option id="pilihanLima" value="5">5</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br/>
            <ul class="item-info">
  	          <li>
                  <span class="lite1">Keterangan :</span>
                  <div id="nampilSatu" style="display:none;">Sensor Satu Terpilih</div>
                  <div id="nampilDua" style="display:none;">Sensor Dua Terpilih</div>
                  <div id="nampilTiga" style="display:none;">Sensor Tiga Terpilih</div>
                  <div id="nampilEmpat" style="display:none;">Sensor Empat Terpilih</div>
                  <div id="nampilLima" style="display:none;">Sensor Lima Terpilih</div>
              </li>
  	        </ul>
            <form action="proses/deletesensor1.php" method="POST">
            <div id="sensorsatu" style="height:250px;overflow:scroll;">
              <input type="hidden" value="saluran1" name="saluran" />
              <input type="submit" value="Hapus" id="hapusdata" name="hapusdata" style="width:150px;border:1px solid #000;float:right;"/>
              <table class="gridtable">
                  <tr>
                    <th>Ketinggian</th>
                    <th>Mengalir/Tidak</th>
                    <th>BLN/TGL/THN</th>
                    <th>Jam</th>
                    <th>Hapus<input type="checkbox" id="checkAll" name="checkAll" /></th>
                  </tr>
                  <?php
                  include "koneksi.php";

                  $sql = "SELECT * FROM tbl_sensor1";
                  $query = mysql_query($sql);
                  while($data = mysql_fetch_array($query)){
                  ?>
                    <tr>
                      <td>
                        <?php echo $data['ketinggian']; ?> cm
                      </td>
                      <td>
                          <?php
                          $mengalir = "Mengalir";
                          $tidak    = "Tidak Mengalir";

                          if($data['status_mengalir']=='1'){
                              echo $mengalir;
                          }else if($data['status_mengalir']=='0'){
                              echo $tidak;
                          }
                          ?>
                      </td>
                      <td><?php echo $data['periode']; ?></td>
                      <td><?php echo $data['jam']; ?></td>
                      <td><input type="checkbox" name="hapus[]" id="hapus" value="<?php echo $data['id_sensor1']; ?>" /></td>
                    </tr>
                  <?php
                  }
                  ?>
              </table>
            </div>
          </form>
            <div id="sensordua" style="height:250px;overflow:scroll;">
              <input type="hidden" value="saluran2" name="saluran" />
              <table class="gridtable">
                  <tr>
                    <th>Ketinggian (cm)</th>
                    <th>Mengalir/Tidak</th>
                    <th>BLN/TGL/THN</th>
                    <th>Jam</th>
                  </tr>
                  <?php
                  include "koneksi.php";

                  $sql = "SELECT * FROM tbl_sensor2";
                  $query = mysql_query($sql);
                  while($data = mysql_fetch_array($query)){
                  ?>
                    <tr>
                      <td><?php echo $data['ketinggian']; ?> cm</td>
                      <td>
                          <?php
                          $mengalir = "Mengalir";
                          $tidak    = "Tidak Mengalir";

                          if($data['status_mengalir']=='1'){
                              echo $mengalir;
                          }else if($data['status_mengalir']=='0'){
                              echo $tidak;
                          }
                          ?>
                      </td>
                      <td><?php echo $data['periode']; ?></td>
                      <td><?php echo $data['jam']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
              </table>
            </div>
            <div id="sensortiga" style="height:250px;overflow:scroll;">
              <input type="hidden" value="saluran3" name="saluran" />
              <table class="gridtable">
                  <tr>
                    <th>Ketinggian (cm)</th>
                    <th>Mengalir/Tidak</th>
                    <th>BLN/TGL/THN</th>
                    <th>Jam</th>
                  </tr>
                  <?php
                  include "koneksi.php";

                  $sql = "SELECT * FROM tbl_sensor3";
                  $query = mysql_query($sql);
                  while($data = mysql_fetch_array($query)){
                  ?>
                    <tr>
                      <td><?php echo $data['ketinggian']; ?> cm</td>
                      <td>
                          <?php
                          $mengalir = "Mengalir";
                          $tidak    = "Tidak Mengalir";

                          if($data['status_mengalir']=='1'){
                              echo $mengalir;
                          }else if($data['status_mengalir']=='0'){
                              echo $tidak;
                          }
                          ?>
                      </td>
                      <td><?php echo $data['periode']; ?></td>
                      <td><?php echo $data['jam']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
              </table>
            </form>
            </div>
            <div id="sensorempat" style="height:250px;overflow:scroll;">
              <input type="hidden" value="saluran4" name="saluran" />
              <table class="gridtable">
                  <tr>
                    <th>Ketinggian (cm)</th>
                    <th>Mengalir/Tidak</th>
                    <th>BLN/TGL/THN</th>
                    <th>Jam</th>
                  </tr>
                  <?php
                  include "koneksi.php";

                  $sql = "SELECT * FROM tbl_sensor4";
                  $query = mysql_query($sql);
                  while($data = mysql_fetch_array($query)){
                  ?>
                    <tr>
                      <td><?php echo $data['ketinggian']; ?> cm</td>
                      <td>
                          <?php
                          $mengalir = "Mengalir";
                          $tidak    = "Tidak Mengalir";

                          if($data['status_mengalir']=='1'){
                              echo $mengalir;
                          }else if($data['status_mengalir']=='0'){
                              echo $tidak;
                          }
                          ?>
                      </td>
                      <td><?php echo $data['periode']; ?></td>
                      <td><?php echo $data['jam']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
              </table>
            </div>
            <div id="sensorlima" style="height:250px;overflow:scroll;">
              <input type="hidden" value="saluran5" name="saluran" />
              <table class="gridtable">
                  <tr>
                    <th>Ketinggian (cm)</th>
                    <th>Mengalir/Tidak</th>
                    <th>BLN/TGL/THN</th>
                    <th>Jam</th>
                  </tr>
                  <?php
                  include "koneksi.php";

                  $sql = "SELECT * FROM tbl_sensor5";
                  $query = mysql_query($sql);
                  while($data = mysql_fetch_array($query)){
                  ?>
                    <tr>
                      <td><?php echo $data['ketinggian']; ?> cm</td>
                      <td>
                          <?php
                          $mengalir = "Mengalir";
                          $tidak    = "Tidak Mengalir";

                          if($data['status_mengalir']=='1'){
                              echo $mengalir;
                          }else if($data['status_mengalir']=='0'){
                              echo $tidak;
                          }
                          ?>
                      </td>
                      <td><?php echo $data['periode']; ?></td>
                      <td><?php echo $data['jam']; ?></td>
                    </tr>
                  <?php
                  }
                  ?>
              </table>
            </div>
            <form action="print/report_saluran.php">
              <input type="submit" style="width:150px;border:1px solid #000;" value="Print Data" name="kirim" />
            </form>
          </ul>
          <div class="panel-container">
          </div>
        </div>
      </div>
      <!-- End Column -->
      <!-- Begin Column -->
      <div class="one-half last">
        <!-- Begin Toggle -->
        <div class="toggle">
        </div>
        <!-- End Toggle -->

      </div>
      <!-- End Column -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- End Wrapper -->

  <!-- Begin Sub Footer Wrapper -->
  <div class="subfooter">
    <!-- Begin Inner -->
    <div class="inner">
      <p>© 2016 Monitoring Saluran Air Pesona Ciganitri.</p>
      <div class="clear"></div>
    </div>
    <!-- Begin Inner -->
  </div>
  <!-- End Sub Footer Wrapper -->

</div>
<!-- End Body Wrapper -->
<script type="text/javascript" src="style/js/scripts.js"></script>
</body>
</html>
