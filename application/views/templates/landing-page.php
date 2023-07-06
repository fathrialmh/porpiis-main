<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>PORPIIS | PERMATA INSANI</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/bootstrap/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/fancybox/jquery.fancybox.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/fontawesome/css/all.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/animation/animate.min.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/jquery-ui/jquery-ui.css">
  <!-- timePicker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/plugins/timePicker/timePicker.css">

  
  <!-- Stylesheets -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/bs-stepper.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="<?= base_url(); ?>assets/img/images/favicon2.png" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">

  

<!--header top-->
<div class="header-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="top-left text-center text-md-left">
          <h6>Pekan Olahraga Permata Insani - 2023</h6>
        </div>
      </div>
      <div class="col-md-6">
        <div class="top-right text-center text-md-right">
          <ul class="social-links">
            <li>
              <a href="https://themefisher.com/" aria-label="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="google-plus">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://themefisher.com/" aria-label="pinterest">
                <i class="fab fa-pinterest-p"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--header top-->

<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse justify-content-center" id="navbarLinks">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="welcome">Home</a>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item @@service">
          <a class="nav-link" href="#service">Service</a>
        </li>
        <li class="nav-item @@gallery">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item dropdown @@blogs">
          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item @@blog" href="pendaftaran">Futsal</a></li>
            <li><a class="dropdown-item @@blogDetails" href="pendaftaran">Badminton</a></li>
          </ul>
        </li>
        <li class="nav-item @@appointment">
          <a class="nav-link" href="login"><b>Login</b></a>
        </li>
        <!-- <li class="nav-item dropdown @@blogs">
          <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item @@blog" href="blog.html">Blog</a></li>
            <li><a class="dropdown-item @@blogDetails" href="blog-details.html">Blog Details</a></li>
            <li class="dropdown dropdown-submenu dropright">
              <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sub Menu</a>
    
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.html">Submenu 01</a></li>
                <li><a class="dropdown-item" href="index.html">Submenu 02</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="contact.html">Contact</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<!--End Main Header -->

<div class="container-{breakpoint}">

  <?= $contents; ?>

</div>

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img loading="lazy" class="img-fluid" src="<?= base_url(); ?>assets/img/logo.png" alt="medic">
                </a>
              </figure>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
          <h2>CONTACT</h2>
          <ul class="location-link">
              <li class="item">
                <i class="fas fa-map-marker-alt"></i>
                <p>Perum Villa Permata Blok G1 Sindangsari Kab. Tangerang, Indonesia</p>
              </li>
              <li class="item">
                <i class="far fa-envelope" aria-hidden="true"></i>
                <a href="permatainsaniislamicschool@gmail.com">
                  <p>permatainsaniislamicschool@gmail.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fas fa-phone" aria-hidden="true"></i>
                <p>(021) 59353505</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li class="list-inline-item"><a href="https://facebook.com/themefisher" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/themefisher" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://instagram.com/themefisher" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://github.com/themefisher" aria-label="github"><i class="fab fa-github"></i></a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-7">
          <div class="social-links">
            <h2>Event List</h2>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left mr-3">
                    <a href="blog-details.html">
                      <img loading="lazy" src="<?= base_url(); ?>assets/img/images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5><a href="blog-details.html">Futsal</a></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left mr-3">
                    <a href="blog-details.html">
                      <img loading="lazy" src="<?= base_url(); ?>assets/img/images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h5><a href="blog-details.html">Badminton</a></h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2023. Designed &amp; Developed by Me</p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="welcome">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
  <i class="fa fa-angle-up"></i>
</div>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<!-- jquery -->
<script src="<?= base_url(); ?>assets/vendor/plugins/jquery.min.js"></script>
<!-- bootstrap -->
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Slick Slider -->
<script src="<?= base_url(); ?>assets/vendor/plugins/slick/slick.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/plugins/slick/slick-animation.min.js"></script>
<!-- FancyBox -->
<script src="<?= base_url(); ?>assets/vendor/plugins/fancybox/jquery.fancybox.min.js" defer></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="<?= base_url(); ?>assets/vendor/plugins/google-map/gmap.js" defer></script>

<!-- jquery-ui -->
<script src="<?= base_url(); ?>assets/vendor/plugins/jquery-ui/jquery-ui.js" defer></script>
<!-- timePicker -->
<script src="<?= base_url(); ?>assets/vendor/plugins/timePicker/timePicker.js" defer></script>

<!-- script js -->
<script src="<?= base_url(); ?>assets/js/script.js"></script>
</body>

</html>