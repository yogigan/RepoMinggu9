<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <!-- The above 3 meta tags *must* come first in the head; any
other head content must come *after* these tags -->
 <meta name="description" content="">
 <meta name="author" content="">
 <title>Login + Hak Akses (PHP)</title>
 <!-- Load File CSS Bootstrap -->
 <link href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/Font-Awesome/css/font-awesome.css'); ?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/Font-Awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5
elements and media queries -->
 <script
src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <style>
 body {
 min-height: 2000px;
 padding-top: 70px;
 }
 </style>
</head>
<body>
 <!-- Fixed navbar -->
 <nav class="navbar navbar-default navbar-fixed-top">
 <?php
 /*
 * Variabel $headernya diambil dari core MY_Controller
 * (application/core/MY_Controller.php)
 * */
 echo $headernya;
 ?>
 </nav>
 <div class="container">
 <?php
 /*
 * Variabel $contentnya diambil dari core MY_Controller
 * (application/core/MY_Controller.php)
 * */
 echo $contentnya;
 ?>
 </div>
 <!-- Load file Javascript Bootstrap & jQuery -->
 <script src="<?php echo base_url('bootstrap/js/tests/vendor/jquery-1.9.1.min.js');
?>"></script>
 <script src="<?php echo base_url('bootstrap/dist/js/bootstrap.min.js');
?>"></script>
</body>
</html>