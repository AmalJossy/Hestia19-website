<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <link rel="icon" type="image/png" href="<?=base_url();?>assets/front/img/hestia-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="theme-color" content="#1a3840">
  <meta name="description" content="Hestia 19 - National level Techno Cultural fest organized by TKM College of Engineering. March 28-31">
<meta name="keywords" content="hestia,hestia19,tkmce,hestiatkm,hestiatkmce,conjura,fest,event,technical,cultural,technocultural">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135958084-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135958084-1');
</script>


  <title>
    Hestia 19 - National Level Techno-Cultural Fest of TKM
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="<?=base_url();?>assets/front/fonts/Hestia.css?family=Hestia-Regular" rel="stylesheet">
  <link href="<?=base_url();?>assets/front/fonts/Galgo.css?family=Galgo" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=base_url();?>assets/front/css/material-kit.css?v=2.0.5" rel="stylesheet" />

  <link rel="stylesheet" href="<?=base_url();?>assets/front/carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/css/custom.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/css/main_style.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/loader/loader.css">
  <script src="<?=base_url();?>assets/front/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets/front/loader/loader.js" type="text/javascript"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script type="text/javascript">
  function initmask() {
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    if(w < 960){

      var x = document.getElementById("pcmask");
     x.setAttribute("src", "<?=base_url();?>assets/front/img/mobile_phone_front_end.png");
    }
}
   </script>

</head>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <body class="profile-page sidebar-collapse" onload="initmask()">
      <img src="<?=base_url();?>assets/front/img/landing_mask.png" id="pcmask" data-parallax="true" style="height:100vh; width: 100%; overflow: hidden; z-index: 2; position: absolute;" alt="">
  <ul class="slideshow">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>

  <div style="z-index:3;">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container-fluid">
        <div class="navbar-translate">

            <img style="max-height:40px;" class="mobile-show" src="<?=base_url();?>assets/front/img/logo-inline-with-text.png">

          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only" style="color: black;">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item ">
            &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
              &nbsp;&nbsp;
            <?php
  if($this->session->userdata('sess_logged_in')==0){
    ?>
    
<?php
  }else{
?>
 &nbsp; &nbsp; &nbsp;
             
    <?php
  }
?>

             
            </li>
          </ul>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item fade-in">
              <a href="#" class="nav-link event-click " id="events">EVENTS</a>
            </li>
            <li class="nav-item fade-in">
              <a href="#" class="nav-link">SPONSORS</a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="navbar-brand my-auto" href="#">
                <img class="fade-in-top" id="loading" style="max-height: 75px;margin-top: -20px;" src="<?=base_url();?>assets/front/img/logo.png" /></a>
            </li>
            <li class="nav-item fade-in">
              <a href="<?=base_url()?>about" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item fade-in">
              <a href="<?=base_url()?>contact" class="nav-link">CONTACT</a>
            </li>
          </ul>
       <ul class="navbar-nav">
<?php


  if($this->session->userdata('sess_logged_in')==0){
?>
    <li class="nav-item ">
      <a href="<?=$google_login_url?>" class="nav-link btn btn-outline-primary float-left " style="border-color:white; margin-left: 12%;">
        LOGIN
      </a>
    </li>

  <?php
  }else{
   if(isset($_SESSION['name'])){
    ?>

    <li class="dropdown nav-item">
      <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
        <div class="profile-photo-small" style="margin-right: 15px;margin-left:20px;">
        <img src="<?=$_SESSION['profile_pic']?>" alt="DP" class="rounded-circle img-fluid">
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <h6 class="dropdown-header"><?=$_SESSION['name']?></h6>

        <!-- <a href="#" class="dropdown-item">My Events</a>   todo-->

        <a href="<?=base_url();?>auth/logout" class="dropdown-item">Sign out</a>
      </div>
    </li>

    <?php
   }
  }
?>





          </ul> 
        </div>
      </div>
    </nav>
    <div class="container slider_text" style="z-index: 4; position: absolute;min-width:320px;">
      <h1>Hestia'19</h1>
      <h3 class="animate-right">Techno Cultural Fest</h3>
      <h3 class="animate-bottom">TKMCE Kollam</h3>
    </div>
  </div>
  <div class="container hider" style="padding-top: 115px;" id="overlay">
    <div class="overlay" id="darkbg"></div>
    <div class="owl-carousel owl-theme slide-in-bottom" id="carousel">
      <a href="<?=base_url("technical")?>">
      <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/technical_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
        <h1 class="title  event-name" style="">Technical</h1>
        </div>
      </div>
      </a>
      <a href="<?=base_url("cultural")?>">
      <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/cultural_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
          <h1 class="title  event-name" style="">Cultural</h1>
        </div>
      </div>
      </a>
      <!-- <a href="<?=base_url("events/workshops")?>">
      <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/workshop_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
          <h1 class="title  event-name " style="">Workshops</h1>
        </div>
      </div>
      </a> -->
      <a href="<?=base_url("events/online")?>">
      <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/online_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
          <h1 class="title  event-name" style="">Online</h1>
        </div>
      </div>
      </a>
      <a href="<?=base_url("events/general")?>">
      <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/general_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
      data-hash="">
      <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
        <h1 class="title  event-name" style="">General</h1>
      </div>
    </div>
    </a>


    </div>
  </div>



  <!--   Core JS Files   -->

  <script src="<?=base_url();?>assets/front/carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url();?>assets/front/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets/front/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets/front/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?=base_url();?>assets/front/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?=base_url();?>assets/front/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url();?>assets/front/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script type="text/javascript">
    if($(window).width() < 960){
      $(".pcmask").attr("src", "<?=base_url();?>assets/front/img/mobile_phone_front_end.png");
    }
   </script>

  <script>
    $('.owl-carousel').owlCarousel({
      centre: true,
      items: 1,
      stagePadding: 150,
      loop: true,
      margin: 0,
      URLhashListener:true,
      autoplayHoverPause:true,
      startPosition: 'events',
      nav: true,
      navText : ['<span class="carousel-control-prev-icon" aria-hidden="true"></span>', '<span class="carousel-control-next-icon" aria-hidden="true"></span>'],
      responsiveClass:true,
      responsive:{
        0:{
          items:1,
          stagePadding: 25,
        },
        600:{
          items:1,
          stagePadding: 100,
        },
        1000:{
          items:1,
          loop:true
        }
      }
    })
  </script>

  <script>
    $(document).ready(
      function(){
        $("#events").click("slow", function () {
          $("#overlay").fadeToggle(function(){
            $("#carousel").slideDown();
            $('.navbar-toggler').click();

          });
      });
    });

    $(document).ready(
      function(){
        $("#darkbg").click("slow", function () {
          $("#overlay").fadeToggle(function(){
            $("#carousel").toggle();
          });
      });
    });
  </script>



</body>

</html>
