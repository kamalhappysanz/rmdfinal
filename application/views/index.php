<!doctype html>
<html class="no-js" lang="en">
<head>
        <title>RMD</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- animation -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800" rel="stylesheet">
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
        <!-- et line icon -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
        <!-- revolution slider -->
        <!-- <link rel="stylesheet" href="css/extralayers.css" />
        <link rel="stylesheet" href="css/settings.css" /> -->
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.transitions.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/full-slider.css" />
        <!-- text animation -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/text-effect.css" />
        <!-- hamburger menu  -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/menu-hamburger.css" />
        <!-- common -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mobile.css" />

        <!-- responsive -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css" />


    </head>
    <style>
    .owl-carousel.light-pagination .owl-item{
      cursor: auto;
    }
    .center_menu{
      color: #fff;
      font-size: 13px;
      font-weight: 500;
    }
    .center_menu:hover{
        color: #fff;

    }
    .main_menu{
      display: none;
    }
    .letter-spacing-10 {
    letter-spacing: 3px !important;
    word-spacing: 10px;
}
.web_logo{
  max-width: 100%;
  float: right;
  position: absolute;
  left: 0px;
  bottom: 30px;
  margin-left: 0px;

}
.menu_box{
    float: right;
    position: absolute;
    bottom: 32px;
    right: 0px;
}
.owl-controls{
  display: none !important;
}
.opacity-full{
  opacity: 0;
}
@media  (max-width: 667px) {
  .web_logo{
    bottom: 100px !important;
  }
 }
    </style>
    <body>
        <!-- navigation panel -->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-white nav-border-bottom" role="navigation">
            <div class="container-fluid">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-3 pull-left">
                      <a class="logo-light" href="<?php echo base_url(); ?>home">
					<!-- <img alt="" src="logo_white.png" class="logo"  style="max-width:100%;"/></a> -->
					<a class="logo-dark" href="<?php echo base_url(); ?>home">
					<!-- <img alt="" src="logo_white.png" class="logo" style="max-width:100%;"/></a> -->
        </div>
                    <!-- end logo -->
                    <!-- search and cart  -->

                    <!-- end search and cart  -->
                    <!-- toggle navigation -->
                    <!-- <div class="navbar-header col-sm-7 col-xs-2 pull-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only"> </button>
                    </div> -->
                    <!-- toggle navigation end -->
                    <!-- main menu -->
                    <div class="col-md-7 no-padding-right accordion-menu text-right">
                        <div class="navbar-collapse collapse" >
                            <ul id="accordion" class="nav navbar-nav navbar-right panel-group main_menu">
                                <li class="dropdown panel">
                                    <a href="<?php echo base_url(); ?>home" class="">Home <i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="dropdown panel">
                                    <a href="<?php echo base_url(); ?>about" class="">About <i class="fa fa-angle-down"></i></a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!-- end main menu -->
                </div>
            </div>
        </nav>
        <!-- end navigation panel -->
        <!-- slider -->
        <section id="slider" class="no-padding">

            <div id="owl-demo" class="owl-carousel owl-theme light-pagination square-pagination dark-pagination-without-next-prev-arrow main-slider">
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('<?php echo base_url(); ?>assets/banner/1.jpg');">
                    <div class="opacity-full bg-dark-gray"></div>
                    <div class="container full-screen position-relative">

                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <img alt="" src="<?php echo base_url(); ?>assets/banner_logo.png" class="logo web_logo"  style=""/>
                              <span class="white-text text-small text-uppercase letter-spacing-10 menu_box">
                                <a href="<?php echo base_url(); ?>architecture" class="center_menu">Architecture</a>
                                <a href="<?php echo base_url(); ?>interior" class="center_menu">Interiors</a>
                                <a href="<?php echo base_url(); ?>about" class="center_menu">About</a>
                                <a href="<?php echo base_url(); ?>contact" class="center_menu">Contact</a>
                              </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('<?php echo base_url(); ?>assets/banner/2.jpg');">
                    <div class="opacity-full bg-dark-gray"></div>
                    <div class="container full-screen position-relative">
                        <div class="slider-typography text-center">
                          <div class="slider-text-middle-main">
                              <img alt="" src="<?php echo base_url(); ?>assets/banner_logo.png" class="logo web_logo"  style=""/>
                            <span class="white-text text-small text-uppercase letter-spacing-10 menu_box">
                              <a href="<?php echo base_url(); ?>architecture" class="center_menu">Architecture</a>
                              <a href="<?php echo base_url(); ?>interior" class="center_menu">Interiors</a>
                              <a href="<?php echo base_url(); ?>about" class="center_menu">About</a>
                              <a href="<?php echo base_url(); ?>contact" class="center_menu">Contact</a>
                            </span>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- slider item -->
                <div class="item owl-bg-img" style="background-image:url('<?php echo base_url(); ?>assets/banner/3.jpg');">
                    <div class="opacity-full bg-dark-gray"></div>
                    <div class="container full-screen position-relative">
                        <div class="slider-typography text-center">
                          <div class="slider-text-middle-main">
                              <img alt="" src="<?php echo base_url(); ?>assets/banner_logo.png" class="logo web_logo"  style=""/>
                            <span class="white-text text-small text-uppercase letter-spacing-10 menu_box">

                              <a href="<?php echo base_url(); ?>architecture" class="center_menu">Architecture</a>
                              <a href="<?php echo base_url(); ?>interior" class="center_menu">Interiors</a>
                              <a href="<?php echo base_url(); ?>about" class="center_menu">About</a>
                              <a href="<?php echo base_url(); ?>contact" class="center_menu">Contact</a>
                            </span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item owl-bg-img" style="background-image:url('<?php echo base_url(); ?>assets/banner/4.jpg');">
                    <div class="opacity-full bg-dark-gray"></div>
                    <div class="container full-screen position-relative">
                        <div class="slider-typography text-center">
                          <div class="slider-text-middle-main">
                              <img alt="" src="<?php echo base_url(); ?>assets/banner_logo.png" class="logo web_logo"  style=""/>
                            <span class="white-text text-small text-uppercase letter-spacing-10 menu_box">

                              <a href="<?php echo base_url(); ?>architecture" class="center_menu">Architecture</a>
                              <a href="<?php echo base_url(); ?>interior" class="center_menu">Interiors</a>
                              <a href="<?php echo base_url(); ?>about" class="center_menu">About</a>
                              <a href="<?php echo base_url(); ?>contact" class="center_menu">Contact</a>
                            </span>
                          </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- end slider -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-hover-dropdown.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/skrollr.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/smooth-scroll.js"></script>
         <!-- jquery appear -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/page-scroll.js"></script>
        <!-- easy piechart-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.easypiechart.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>
        <!--portfolio with shorting tab -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.isotope.min.js"></script>
        <!-- owl slider  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <!-- magnific popup  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popup-gallery.js"></script>
        <!-- text effect  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/text-effect.js"></script>
        <!-- revolution slider  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.revolution.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/counter.js"></script>
         <!-- countTo -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.countTo.js"></script>
        <!-- fit videos  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fitvids.js"></script>
        <!-- imagesloaded  -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- hamburger menu-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/classie.js"></script>
        <!-- <script type="text/javascript" src="js/hamburger-menu.js"></script> -->
        <!-- setting -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>
