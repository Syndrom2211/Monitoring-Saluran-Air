<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Monitoring Saluran Air Pesona Ciganitri</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="SHORTCUT ICON" href="style/images/icon.png" />
<link rel="stylesheet" type="text/css" href="style/css/media-queries.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/css/jquery-ui.css" media="all" />
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
<script type="text/javascript" src="style/js/jquery12.js"></script>
<script type="text/javascript" src="style/js/jquery-ui.js"></script>
<script type="text/javascript" src="style/js/jquery.zoom.js"></script>
<script type="text/javascript" src="style/js/jquery.zoom.min.js"></script>
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
<script type="text/javascript" src="style/js/scripts.js"></script>
<script>
$(document).ready(function(){
    $('#ex1').zoom();
    $('#tabs').tabs();
});
</script>
<script>
function pilih_awal(awal){
	$.ajax({
        url: 'http://localhost/ciganitri/ratasaluran.php',
        data : 'awal=' + awal,
				type: "post",
        dataType: "html",
				timeout: 10000,
				success: function(response){
					$('#ratarata').html(response);
				}
    });
}
function pilih_akhir(akhir){
	$.ajax({
        url: 'http://localhost/ciganitri/ratasaluran.php',
        data : 'akhir=' + akhir,
				type: "post",
        dataType: "html",
				timeout: 10000,
        success: function(response){
					$('#ratarata').html(response);
        }
    });
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
            <li><a href="index.php">Home</a></li>
            <li><a href="data.php" target="_blank">Data</a></li>
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
            <li class="tab"><a href="#tab-3">Peta</a></li>
              <span class='zoom' id='ex1'>
                <img src="style/images/blokc.jpg" width='555' height='250' style="max-width:100%;display:block;border:1px solid #000;" />
              </span>
          </ul>
          <div class="panel-container">
            <div id="tab-3" style="margin-left:10px;">
                <h3><center>Penomoran Saluran Air</center></h3>
                <!-- <iframe style="margin-left:40px;" src="nomor_air.php" frameborder="0" width="100%"></iframe> -->
                <?php include "nomor_air.php"; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- End Column -->
      <!-- Begin Column -->
      <div class="one-half last">
        <img src="style/images/tombolbiru.png" width="35px" class="lingkaran" /><h3 style="margin-top:5px;">Normal</h3>
        <img src="style/images/tombolkuning.png" width="35px" class="lingkaran" /><h3 style="margin-top:5px;">Tersumbat</h3>
        <img src="style/images/tombolhijau.png" width="35px" class="lingkaran" /><h3 style="margin-top:5px;">Mengalir</h3>
        <img src="style/images/tombolmerah.png" width="35px" class="lingkaran" /><h3 style="margin-top:5px;">Berpotensi Banjir</h3>

        <hr>

        <!-- Begin Toggle -->
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1" style="font-size:12px;">Saluran 1</a></li>
            <li><a href="#tabs-2" style="font-size:12px;">Saluran 2</a></li>
            <li><a href="#tabs-3" style="font-size:12px;">Saluran 3</a></li>
            <li><a href="#tabs-4" style="font-size:12px;">Saluran 4</a></li>
            <li><a href="#tabs-5" style="font-size:12px;">Saluran 5</a></li>
          </ul>

          <div id="tabs-1">
            <form action="" method="POST">
            <tr>
                <td>Periode</td>
                <td>:</td>
                <td><input id="datepicker" type="text" class="style-2" style="margin:5px;width:120px" onchange="pilih_awal(this.value);" placeholder="BLN/TGL/THN" name="awal" /></td>
                <td>S/D</td>
                <td><input id="datepicker2" type="text" class="style-2" style="margin:5px;width:120px" onchange="pilih_akhir(this.value);" placeholder="BLN/TGL/THN" name="akhir" /><br/></td>
                <td><u>Rata-Rata :</u> </td>
            </tr>
            <tr>
              <td><div id="ratarata"></div></td>
            </tr>
            </form>
          </div>

          <div id="tabs-2">
            <p>TES 2</p>
          </div>

          <div id="tabs-3">
            <p>TES 3</p>
          </div>

          <div id="tabs-4">
            <p>TES 4</p>
          </div>

          <div id="tabs-5">
            <p>TES 5</p>
          </div>
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
</body>
</html>
