<?php
require './connect.php';
require './base.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Dimas Aldi Pratama">
	<title>Sistem Pendukung keputusan pemilihan Supplier</title>
	<!-- <link rel="stylesheet" type="text/css" href="asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="asset/plugin/font-icon/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="<?= BASE ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= BASE ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= BASE ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= BASE ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= BASE ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="<?= BASE ?>bower_components/morris.js/morris.css"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="<?= BASE ?>bower_components/jvectormap/jquery-jvectormap.css"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="<?= BASE ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="<?= BASE ?>bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="<?= BASE ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
</head>
<body>
<!-- <header>
    <h1>Sistem Pendukung Keputusan Pemilihan Supplier</h1>
</header> -->

<div class="k">
    <div class="header">
        <div class="inline">Sistem Pendukung keputusan pemilihan Supplier</div>
        <ul class="inline">
            <li><a href=""><i class="fas fa-user-circle"></i> Admin</a></li>
            <li><a href=""> Logout</a></li>
        </ul>
    </div>
    <nav>
        <?php include "nav.php"; ?>
    </nav>
    <main>
        <div id="bg-green"></div>
        <div id="main-body">
            <?php include "page.php"; ?>
        </div>
    </main>
</div>
<style>
    .inline{
        display:inline!important;
        color:#fff;
    }
    nav{
        width: 20%;
        position: absolute;
        top:7%!important;
        z-index:2;
        height: 100vh;
        float:left!important;
        display:inline!important;
    }
    .nav{
        display:inherit!important;
    }
    .nav li {
        padding:12px;
    }
    .nav li a i{
        color:#fff!important;
    }
    .nav li a:hover{
        width:30%!important;
        background:transparent!important;
    }
    main{
        width:80%!important;
        justify-content:normal!important;
        /* display:inherit!important; */
        float:right!important;
        z-index:2;
        /* display:inline!important; */
    }
    .panel-middle > img{
        width:80px;
    }
    #main-body{
        width:100%!important;
        margin-top:6%;
    }
    .header{
        background:#c00000;
        width:100%;
        top:0;
        color:#fff;
        padding:14px;
        position:absolute!important;
        z-index:3!important;
    }
    .header ul{
        margin-right:32px;
        float:right!important;
    }
    .header ul li{
        display:inline!important;
        /* float:right!important; */
    }
    .header ul li a, .header ul li a i{
        color:#fff!important;
    }
</style>
<script src="asset/js/jquery.js" type="text/javascript"></script>
<script src="asset/js/main.js" type="text/javascript"></script>
</body>
</html>