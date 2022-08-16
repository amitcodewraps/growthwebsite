<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
  <!-- favicon -->
  <!-- animate -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css"/>
  <!-- bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css"/>
  <!-- magnific popup -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css"/>
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css"/>
  <!-- fontawesome -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css"/>
  <!-- iconmoon css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/iconmoon.css">
  <!-- Hover CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hover-min.css"/>
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"/>
  <!-- responsive Stylesheet -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css"/>
</head>

<body>
  <!-- //. search Popup start -->
  <div class="body-overlay" id="body-overlay"></div>
  <div class="search-popup" id="search-popup">
      <form action="#" class="search-form">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Search.....">
          </div>
          <button class="close-btn border-none"><i class="icon-search-svgrepo-com-1"></i></button>
      </form>
  </div>
  <!-- Search Popup End -->
  <!-- Header-top-start -->
  <div class="header-top about">
    <div class="container nav-container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="top-social">
            <ul class="top-social-share">
              <li>
                <a href="<?php echo ot_get_option('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="<?php echo ot_get_option('linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="<?php echo ot_get_option('instagram'); ?>"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="top-single-items">
            <div class="top-single-item">
              <div class="icon">
                <i class="icon-phone"></i>
              </div>
              <div class="content">
                <h5 class="title"><a href="tel:<?php echo ot_get_option('phone'); ?>"><?php echo ot_get_option('phone'); ?></a></h5>
              </div>
            </div>
            <div class="top-single-item">
              <div class="icon">
                <i class="icon-envelope"></i>
              </div>
              <div class="content">
                <h5 class="title"><a href="mailto:<?php echo ot_get_option('email'); ?>"><?php echo ot_get_option('email'); ?></a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header-top-end -->
  <div class="header-style-01">
    <!-- support bar area end -->
    <nav class="navbar navbar-area navbar-expand-lg nav-style-01">
      <div class="container nav-container">
        <div class="responsive-mobile-menu">
          <div class="logo-wrapper">
            <a href="<?php echo get_home_url(); ?>" class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
          <ul class="navbar-nav">
            <li>
              <a href="<?php echo esc_url( get_page_link( 5 ) ); ?>"><span class="fa fa-home"></span></a>
              <div class="line">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot style-02"></span>
              </div>
            </li>

           <li class="menu-item-has-children">
              <a href="#">Classifieds</a>
          <ul class="sub-menu">
                <li><a href="#">Non Registration Classifieds</a></li>
                <li><a href="#">Indian Classifieds</a></li>
                <li><a href="#">USA Classified</a></li>
                <li><a href="#">UK Classified Sites</a></li>
                <li><a href="#">Australia Classifieds</a></li>
                <li><a href="#">Canada Classifieds</a></li>
                <li><a href="#">Dubai Classifieds</a></li>
                <li><a href="#">Germany Classified</a></li>
                <li><a href="#">Japan Classified</a></li>
                <li><a href="#">Singapore Classified</a></li>
                <li><a href="#">South Africa Classified</a></li>
                <li><a href="#">France Classified</a></li>
                <li><a href="#">Spain Classified</a></li>
                <li><a href="#">Thailand Classified</a></li>
                <li><a href="#">Malaysia Classified</a></li>
              </ul> 
              <div class="line">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot style-02"></span>
              </div>
            </li>
        
         <li class="menu-item-has-children">
              <a href="#">Business Listing</a>
          <ul class="sub-menu">
                <li><a href="#">USA Business Listing Sites</a></li>
                <li><a href="#">UK Business Listing Sites</a></li>
                <li><a href="#">Indian Business Listing Sites</a></li>
                <li><a href="#">Australia Business Listing Sites</a></li>
                <li><a href="#">Canada Business Listing Sites</a></li>
                <li><a href="#">Dubai Business Listing Sites</a></li>
                <li><a href="#">South Africa Business Listing Sites</a></li>
                <li><a href="#">Singapore Business Listing Sites</a></li>
                <li><a href="#">France Business Listing Sites</a></li>
                <li><a href="#">Germany Business Listing Sites</a></li>
                <li><a href="#">Bangladesh Business Listing Sites</a></li>
                <li><a href="#">New Zealand Business Listing Sites</a></li>
                <li><a href="#">Malaysia Business Listing Sites</a></li>
              </ul> 
              <div class="line">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot style-02"></span>
              </div>
            </li>

           
            <li class="menu-item-has-children">
              <a href="#">More SEO</a>
              <ul class="sub-menu">
                <li><a href="#">Bookmarking Sites</a></li>
                <li><a href="#">Blog Submission Sites</a></li>
                <li><a href="#">Article Posting Sites</a></li>
                <li><a href="#">PDF Submission Sites</a></li>
                <li><a href="#">PPT Submission Sites</a></li>
                <li><a href="#">Video Submission Sites</a></li>
                <li><a href="#">Press Release Sites</a></li>
                <li><a href="#">Image Sharing Sites</a></li>
              </ul>
              <div class="line">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot style-02"></span>
              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Profile Creation Sites</a>
              <div class="line">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot style-02"></span>
              </div>
            </li>
            <li>
              <a href="<?php echo esc_url( get_page_link( 11 ) ); ?>">Contact</a>
              <div class="line">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot style-02"></span>
              </div>
            </li>

            <li class="menu-item-has-children">
              <a href="#">Write for Us</a>
              <ul class="sub-menu">
                <li><a href="#">Automobile & Vehicle</a></li>
                <li><a href="#">Beauty & Fashion</a></li>
                <li><a href="#">Business Service</a></li>
                <li><a href="#">Digital Marketing</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Health & Fitness</a></li>
                <li><a href="#">Home & Furniture</a></li>
                <li><a href="#">Professional Services</a></li>
                <li><a href="#">Real Estate</a></li>
                <li><a href="#">Software & Technology</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Tour & Travel</a></li>
              </ul>
              <div class="line">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot style-02"></span>
              </div>
            </li>

          </ul>
        </div>
        <div class="nav-right-content">
          <div class="icon-part">
            <ul>
                <li id="search"><a href="#"><i class="icon-search-svgrepo-com-1"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar area end -->
  </div>