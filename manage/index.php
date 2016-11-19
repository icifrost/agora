<?php 
session_start();
// Start a session
define("ADMIN_IS_INCLUDED", true);// Defines the variable that controls direct
require_once ('../configuration.php');
date_default_timezone_set("Africa/Lusaka");
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>  
  <meta charset="utf-8" />
  <title>Agora Code Community | Admin</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="../js/jPlayer/jplayer.flat.css" type="text/css" />
  <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="../css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="../css/font.css" type="text/css" />
  <link rel="stylesheet" href="../css/app.css" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="../js/ie/html5shiv.js"></script>
    <script src="../js/ie/respond.min.js"></script>
    <script src="../js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
  <?php 
  if (isset($_SESSION['manage'])){
  	include"dashboard.php";
  }else{
  	include"frontpage.php";
  }
  
  
  ?>
  
  <footer class="footer footer-md bg-black">
                  <form class="" role="search">
                    <div class="form-group clearfix m-b-none">
                      <div class="input-group m-t m-b">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-sm bg-empty text-muted btn-icon"><i class="fa fa-search"></i></button>
                        </span>
                        <input type="text" class="form-control input-sm text-white bg-empty b-b b-dark no-border" placeholder="Search members">
                      </div>
                    </div>
                  </form>
                </footer>
                
  <script src="../js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../js/bootstrap.js"></script>
  <!-- App -->
  <script src="../js/app.js"></script>  
  <script src="../js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../js/app.plugin.js"></script>
  <script type="text/javascript" src="../js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="../js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="../js/jPlayer/demo.js"></script>
</body>
</html>