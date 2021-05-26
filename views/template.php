
<?php
ini_set('session.cookie_lifetime', 8640000);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('session.gc_maxlifetime', 3600 * 24);
session_set_cookie_params(3600 * 24);
session_start();

?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CASI</title>
  
    <link rel="icon" href="views/dist/img/plantilla/logocircle2.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/CASI/views/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="http://localhost/CASI/views/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="http://localhost/CASI/views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="http://localhost/CASI/views/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/CASI/views/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="http://localhost/CASI/views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/CASI/views/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="http://localhost/CASI/views/plugins/summernote/summernote-bs4.min.css">

<!-- jQuery -->
<script src="http://localhost/CASI/views/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/CASI/views/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="http://localhost/CASI/views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="http://localhost/CASI//views/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/CASI/views/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="http://localhost/CASI/views/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="http://localhost/CASI/views/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="http://localhost/CASI/views/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/CASI/views/plugins/moment/moment.min.js"></script>
<script src="http://localhost/CASI/views/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="http://localhost/CASI/views/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="http://localhost/CASI/views/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="http://localhost/CASI/views/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/CASI/views/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/CASI/views/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/CASI/views/dist/js/pages/dashboard.js"></script>

</head>
<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition sidebar-mini layout-fixed login-page">
   <?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
  

   echo '<div class="wrapper">';

    /*=============================================
    CABECERA
    =============================================*/

    include "pages/head.php";
    
    /*=============================================
    MENU
    =============================================*/

    include "pages/menu.php";

    /*=============================================
    MENU DERECHO
    =============================================*/

    include "pages/menuderecho.php";

    /*=============================================
    CONTENIDO
    =============================================*/


    if(isset($_GET["ruta"])){
  

      if($_GET["ruta"] == "inicio"){

        include "pages/".$_GET["ruta"].".php";

      }else{

        include "pages/404.php";

      }

    }else{
       

      include "pages/inicio.php";

    }

    /*=============================================
    FOOTER
    =============================================*/

    include "pages/footer.php";

    echo '</div>';

  }else{

    include "pages/login.php";

  }

  ?>

</body>
</html>
