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
  
  <!-- theme meta -->
  <meta name="theme-name" content="medic" />
  
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
        <li class="nav-item @@team">
          <a class="nav-link" href="#register">Register</a>
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

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
  <!-- Slider Item -->
  <div class="slider-item slide1" style="background-image:url(<?= base_url(); ?>assets/img/images/slider/banner-1.jpeg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content style text-center">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">Pekan Olahraga Permata Insani</h2>
            <p class="tag-text mb-4" data-animation-in="slideInRight">Sport Competition</p>
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">Register Now</a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(<?= base_url(); ?>assets/img/images/slider/banner-2.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start-->
          <div class="content style text-center">
            <h2 class="text-white" data-animation-in="slideInRight">We Chalenging in Sport Competition</h2>
            <p class="tag-text mb-4" data-animation-in="slideInRight" data-duration-in="0.6">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">register now</a>
          </div>
          <!-- Slide Content End-->
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Item -->
  <div class="slider-item" style="background-image:url(<?= base_url(); ?>assets/img/images/slider/banner-3.jpeg)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Slide Content Start -->
          <div class="content text-center style">
            <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">Best Competition In Town</h2>
            <p class="tag-text mb-4" data-animation-in="slideInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, <br>eius pariatur minus itaque nostrum.</p>
            <a href="about.html" class="btn btn-main btn-white" data-animation-in="slideInRight"  data-duration-in="1.2">register now</a>
          </div>
          <!-- Slide Content End -->
        </div>
      </div>
    </div>
  </div>
</div>

<!--====  End of Page Slider  ====-->

<section class="cta">
  <div class="container">
    <div class="cta-block row no-gutters">
      <div class="col-lg-4 col-md-6 emmergency item">
        <i class="fa fa-phone"></i>
        <h2>Contact Person</h2>
        <a href="tel:1-800-700-6200">1-800-700-6200</a>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      </div>
      <div class="col-lg-4 col-md-6 top-doctor item">
        <i class="fa fa-users"></i>
        <h2>About PORPIIS</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta suscipit
          vel eum</p>
        <a href="service.html" class="btn btn-main">Read more</a>
      </div>
      <div class="col-lg-4 col-md-12 working-time item">
        <i class="fa fa-hourglass-o"></i>
        <h2>Timeline</h2>
        <ul class="w-hours">
          <li>Mon - Fri - <span>8:00 - 17:00</span></li>
          <li>Mon - Fri - <span>8:00 - 17:00</span></li>
          <li>Mon - Fri - <span>8:00 - 17:00</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--about section-->
<section class="feature-section section bg-gray" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="image-content">
					<div class="section-title text-center">
						<h3>Best Event <span>of Our Competition</span></h3>
						<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br> nam error officia vero tempora alias? Sunt?</p>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html"><img loading="lazy" src="<?= base_url(); ?>assets/img/images/resource/icon-1.png" alt="features image"></a>
									</figure>
								</div>
								<h3 class="mb-2">Sportivitas</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
									ex sunt, est aspernatur
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="<?= base_url(); ?>assets/img/images/resource/icon-3.jpg" alt="features image">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Loyalitas</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
									ex sunt, est aspernatur
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="<?= base_url(); ?>assets/img/images/resource/icon-2.jpg" alt="features image">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Competitive</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
									ex sunt, est aspernatur
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="item">
								<div class="icon-box">
									<figure>
										<a href="services.html">
											<img loading="lazy" src="<?= base_url(); ?>assets/img/images/resource/icon-4.jpg" alt="features image">
										</a>
									</figure>
								</div>
								<h3 class="mb-2">Teamwork</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil ducimus veniam illo quibusdam pariatur
									ex sunt, est aspernatur
									at debitis eius vitae vel nostrum dolorem labore autem corrupti odit mollitia?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End about section-->

<!--Start about us area-->
<section class="service-tab-section section" id="service">
  <div class="outer-box clearfix">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Nav tabs -->
          <div class="tabs mb-5">
            <ul class="nav nav-tabs justify-content-center" id="aboutTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="dormitory-tab" data-toggle="tab" href="#dormitory" role="tab" aria-controls="dormitory" aria-selected="true">Futsal</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="orthopedic-tab" data-toggle="tab" href="#orthopedic" role="tab" aria-controls="orthopedic" aria-selected="false">Badminton</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="sonogram-tab" data-toggle="tab" href="#sonogram" role="tab" aria-controls="sonogram" aria-selected="false">E-Sport</a>
              </li>
              <!-- <li class="nav-item" role="presentation">
                <a class="nav-link" id="x-ray-tab" data-toggle="tab" href="#x-ray" role="tab" aria-controls="x-ray" aria-selected="false">x-ray</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="diagnostic-tab" data-toggle="tab" href="#diagnostic" role="tab" aria-controls="diagnostic" aria-selected="false">diagnostic</a> -->
              </li>
            </ul>
          </div>
          <!--Start single tab content-->
          <div class="tab-content" id="aboutTab">
            <div class="service-box tab-pane fade show active" id="dormitory">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?= base_url(); ?>assets/img/images/services/service-1.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Futsal</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added. then a
                        dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added. then a dental
                        prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="orthopedic">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?= base_url(); ?>assets/img/images/services/service-2.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>Badminton</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="sonogram">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?= base_url(); ?>assets/img/images/services/service-3.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>E-Sport</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="x-ray">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?= base_url(); ?>assets/img/images/services/service-four.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>x-ray</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
            <!--Start single tab content-->
            <div class="service-box tab-pane fade" id="diagnostic">
              <div class="row">
                <div class="col-lg-6">
                  <img loading="lazy" class="img-fluid" src="<?= base_url(); ?>assets/img/images/services/service-five.jpg" alt="service-image">
                </div>
                <div class="col-lg-6">
                  <div class="contents">
                    <div class="section-title">
                      <h3>diagnostic</h3>
                    </div>
                    <div class="text">
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                      <p>The implant fixture is first placed, so that it ilikely to osseointegrate,
                        then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    </div>
                    <ul class="content-list">
                      <li>
                        <i class="far fa-dot-circle"></i>Whitening is among the most popular dental
                      </li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                      <li>
                        <i class="far fa-dot-circle"></i>Teeth cleaning is part of oral hygiene and
                        involves</li>
                    </ul>
                    <a href="services.html" class="btn btn-style-one">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!--End single tab content-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End about us area-->

<!--Service Section-->
<section class="service-section bg-gray section" id="gallery">
  <div class="container">
    <div class="section-title text-center">
      <h3>Documentation
        <span>Event</span>
      </h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque <br>
        fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!</p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="items-container">
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="<?= base_url(); ?>assets/img/images/gallery/futsal-1.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Futsal</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="<?= base_url(); ?>assets/img/images/gallery/futsal-2.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Futsal</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="<?= base_url(); ?>assets/img/images/gallery/badminton-1.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Badminton</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="<?= base_url(); ?>assets/img/images/gallery/futsal-3.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Futsal</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="<?= base_url(); ?>assets/img/images/gallery/badmin-2.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Badminton</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.html">
                  <img loading="lazy" src="<?= base_url(); ?>assets/img/images/gallery/badmin-3.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.html">
                  <h6>Badminton</h6>
                </a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Service Section-->

<!--team section-->
<!-- <section class="team-section section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Our Expert
        <span>Doctors</span>
      </h3>
      <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
        <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="<?= base_url(); ?>assets/img/images/team/doctor-2.jpg" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4>Dr. Robert Barrethion</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
            <a href="appointment.html" class="btn btn-main">Book Appointment</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="<?= base_url(); ?>assets/img/images/team/doctor-lab-3.jpg" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4>Dr. Marry Lou</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
            <a href="appointment.html" class="btn btn-main">Book Appointment</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="team-member">
          <img loading="lazy" src="<?= base_url(); ?>assets/img/images/team/event-2.jpg" alt="doctor" class="img-fluid">
          <div class="contents text-center">
            <h4>Dr. Sansa Stark</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
            <a href="appointment.html" class="btn btn-main">Book Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--End team section-->

<!-- Contact Section -->
<section class="appoinment-section section">
  <div class="container">
    <div class="row">
        <div class="accordion-section">
  <div class="section-title">
    <h3>FAQ</h3>
  </div>
  <div class="accordion-holder">
    <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h4 class="card-title">
            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Bagaimana Cara Mendaftar Event PORPIIS?
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Dimana Event PORPIIS Dilaksanakan?
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              Siapa Saja Yang Dapat Mengikuti Event PORPIIS?
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
          <div class="card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
            tempor,
            sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
            helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
            haven't
            heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
</div>
      </div>
      <!-- <div class="col-lg-6">
        <div class="contact-area pl-0 pl-lg-5">
  <div class="section-title">
    <h3>Request
      <span>Appointment</span>
    </h3>
  </div>
  <form name="contact_form" class="default-form contact-form" action="!#" method="post">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Name" placeholder="Name" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="Email" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <select class="form-control" name="subject">
            <option>Departments</option>
            <option>Diagnostic</option>
            <option>Psychological</option>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <input class="form-control" type="text" name="Phone" placeholder="Phone" required="">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="Date" placeholder="Date" required="" id="datepicker" autocomplete="off">
          <i class="fa fa-calendar" aria-hidden="true"></i>
        </div>
        <div class="form-group">
          <select class="form-control" name="subject">
            <option>Doctor</option>
            <option>Diagnostic</option>
            <option>Psychological</option>
          </select>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <textarea class="form-control" name="form_message" placeholder="Your Message" required=""></textarea>
        </div>
        <div class="form-group text-center">
          <button type="submit" class="btn-style-one">submit now</button>
        </div>
      </div>
    </div>
  </form>
</div>
      </div>
    </div>                    
  </div> -->
</section>
<!-- End Contact Section -->

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
<script src="<?= base_url(); ?>assets/vendor/plugins/bootstrap/bootstrap.min.js"></script>
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

