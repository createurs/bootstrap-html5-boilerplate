<?php
  // Initialisation Variables
  require_once('inc-init.php');
  $page = "home";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <?php include('inc-head.php') ?>
  </head>

  <body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- include header block -->
    <?php include('inc-header.php') ?>

    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!-- Start building here -->
          </div>
        </div>
      </div>
    </div>

    <!-- include footer block -->
    <?php include('inc-footer.php') ?>

    <!-- include JS stack -->
    <?php include('inc-js.php') ?>        
  </body>
</html>
