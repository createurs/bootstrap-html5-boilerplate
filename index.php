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

      <!-- FULL WIDTH JUMBOTRON / CAROUSEL EXAMPLES -->
      <!-- ======================================== -->

      <!-- Full width jumbotron -->
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


      <!-- STICKY NAVIGATION EXAMPLE -->
      <!-- ========================= -->
      <nav class="navbar navbar-inverse sticky-nav affix-top" role="navigation" data-spy="affix">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sticky-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="sticky-nav">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <!-- GENERAL CONTENT BLOCK EXAMPLES -->
      <!-- ============================== -->
      <div class="container">
        <div class="row">
          <div class="col-md-7">

            <!-- BREADCRUMB EXAMPLE -->
            <!-- ============================== -->

            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Category</a></li>
              <li class="active">Current Page</li>
            </ol>

            <h1>A Flight to Remember</h1>
            <p>You are the last hope of the universe. I feel like I was mauled by Jesus. So, how 'bout them Knicks? Stop! Don't shoot fire stick in space canoe! Cause explosive decompression! Hello Morbo, how's the family?</p>
            <h2>War Is the H-Word</h2>
            <p>You'll have all the Slurm you can drink when you're partying with Slurms McKenzie! Ok, we'll go deliver this crate like professionals, and then we'll go ride the bumper cars. I videotape every customer that comes in here, so that I may blackmail them later. I guess if you want children beaten, you have to do it yourself. Yes, I saw. You were doing well, until everyone died. Ow, my spirit!</p>
            <ul>
            <li>Bender, you risked your life to save me!</li>
            <li>Wow, you got that off the Internet? In my day, the Internet was only used to download pornography.</li>
            <li>Isn't it true that you have been paid for your testimony?</li>
            <li>And when we woke up, we had these bodies.</li>
            </ul>
            <h3>A Pharaoh to Remember</h3>
            <p>Why would I want to know that? I was all of history's great robot actors - Acting Unit 0.8; Thespomat; David Duchovny! It doesn't look so shiny to me. I am the man with no name, Zapp Brannigan! Have you ever tried just turning off the TV, sitting down with your children, and hitting them?</p>
            <h4>Fear of a Bot Planet</h4>
            <p>Good man. Nixon's pro-war and pro-family. Bender, I didn't know you liked cooking. That's so cute. Isn't it true that you have been paid for your testimony? Ah, the 'Breakfast Club' soundtrack!  I can't wait til I'm old enough to feel ways about stuff! Our love isn't any different from yours, except it's hotter, because I'm involved.</p>
            <ol>
            <li>Robot 1-X, save my friends!  And Zoidberg!</li>
            <li>Why would I want to know that?</li>
            <li>She also liked to shut up!</li>
            <li>Anyone who laughs is a communist!</li>
            </ol>
            <h5>Insane in the Mainframe</h5>
            <p>Oh, how I wish I could believe or understand that! There's only one reasonable course of action now: kill Flexo! That's the ONLY thing about being a slave. A true inspiration for the children. In our darkest hour, we can stand erect, with proud upthrust bosoms. Negative, bossy meat creature! There, now he's trapped in a book I wrote: a crummy world of plot holes and spelling errors!</p>
            <hr>

            <!-- THUMBNAIL EXAMPLES -->
            <!-- ============= -->
            <h3>Thumbnail grid</h3>
            <div class="row">
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/600x600" alt="">
                </a>
              </div>
            </div>


          </div>
          <div class="col-md-5">
            <div class="well">
              <p>This is an example form, demonstrating all common form components used frequently in website builds.</p>
            </div>

            <!-- FORM EXAMPLES -->
            <!-- ============= -->
            <h2>Submit an enquiry</h2>
            <form role="form">
              <div class="form-group">
                <label for="">First Name</label>
                <input type="name" class="form-control" placeholder="eg. John">
              </div>
              <div class="form-group">
                <label for="">Last Name</label>
                <input type="name" class="form-control" placeholder="eg. Smith">
              </div>
              <div class="form-group">
                <label for="">Email address</label>
                <input type="email" class="form-control" id="" placeholder="something@example.com">
              </div>
              <div class="form-group">
                <label for="">How can we help?</label>
                <textarea class="form-control" rows="6"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="form-group">
                <label for="">Select and option below:</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Radio option example 1
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Radio option example 2
                  </label>
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label for="">What's your favorite colour?</label>
                <select class="form-control">
                  <option>Blue</option>
                  <option>Green</option>
                  <option>Red</option>
                  <option>Yellow</option>
                  <option>Orange</option>
                </select>
              </div>
              <hr>
              <div class="checkbox">
                <label>
                  <input type="checkbox" checked="true"> Yes, I'd like to subscribe to the newsletter
                </label>
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>

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
