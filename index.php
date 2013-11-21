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

      <!-- Full width jumbotron example -->
      <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
      </div>

      <!-- Full width carousel / hero component -->
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="http://placehold.it/2600x800&text=~" alt="placeholder">
            <div class="carousel-caption">
              <h1>This is a heading</h1>
              <p>I love this planet! I've got wealth, fame, and access to the depths of sleaze that those things bring. With a warning label this big, you know they gotta be fun! Wow! A superpowers drug you can just rub onto your skin?</p>
            </div>
          </div>
          <div class="item">
            <img src="http://placehold.it/2600x800&text=~" alt="placeholder">
            <div class="carousel-caption">
              <h1>This is a heading</h1>
              <p>I love this planet! I've got wealth, fame, and access to the depths of sleaze that those things bring. With a warning label this big, you know they gotta be fun! Wow! A superpowers drug you can just rub onto your skin?</p>
            </div>
          </div>
          <div class="item">
            <img src="http://placehold.it/2600x800&text=~" alt="placeholder">
            <div class="carousel-caption">
              <h1>This is a heading</h1>
              <p>I love this planet! I've got wealth, fame, and access to the depths of sleaze that those things bring. With a warning label this big, you know they gotta be fun! Wow! A superpowers drug you can just rub onto your skin?</p>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
      </div><!-- end #carousel -->

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
