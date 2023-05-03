<?php 
  include 'controller/teamController.php';
  $players = showPlayers($connexion);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>All Players &mdash; Tunisia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php">
              <img src="images/logo.png" width=150px alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="matches.php" class="nav-link">Matches</a></li>
                <li class="active"><a href="players.php" class="nav-link">Players</a></li>
                <li><a href="tickets.php" class="nav-link">Tickets</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Players</h1>
            </div>
        </div>
      </div>
    </div>

    

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Players</h2>
          </div>
        </div>
        <!-- Players -->
        
        <div class="row no-gutters">

          <?php 
            $i=0;
            foreach($players as $player){
            $i=$i+1;
          ?>

          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="<?php echo $player["img"]; ?>" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 STYLE="font-size:30px" class="mb-3"><?php echo $player["name"]; ?></h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <h4 STYLE="font-size:45px"><?php echo $player["id"]; ?></h4>
                    </div>
                    <div class="text">
                      
                      <span STYLE="font-size:18px">Tunisia &bullet; <?php echo $player["age"]; ?> Years Old</span>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <?php 
            if($i % 3 ==0 ){
          ?> </div> <div class="row no-gutters">
          
          <?php } ?>

          
          <?php } ?>  
        </div>
        
        <!-- Players -->

      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Highlights</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="images/cap1.jpg" alt="Image" class="img-fluid">
              <a href="https://youtu.be/_183YddkRJo" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Tunisia VS Danemark</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/cap2.jpg" alt="Image" class="img-fluid">
              <a href="https://youtu.be/7PxhLxNCfxs" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Tunisia VS Australia</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/cap3.jpg" alt="Image" class="img-fluid">
              <a href="https://youtu.be/lT6epp9BdvQ" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Tunisia VS France</h3>
                </div>
              </a>
            </div>
          </div>

        
          

        </div>

      </div>
    </div>






    <footer class="footer-section">
      <div class="container">
        

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
             All rights reserved | Made by Ahmed Ghliss & Louay Chaabane <i class="icon-heart"
                  aria-hidden="true"></i> 
                
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>


  <script src="js/main.js"></script>

</body>

</html>