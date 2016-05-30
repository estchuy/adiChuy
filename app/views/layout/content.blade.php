<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/faviconLogo.ico">

        <title>ADI</title>

        <!-- Owl Carousel slider css -->
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css" />

        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/modernizr.min.js"></script>
        <style type="text/css">
            .degradadoHor {
              background: linear-gradient(#c0c0c0, #eeeeee);
            }
        </style>
    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main degradadoHor">
                <div class="container">

                    <!-- Logo container-->
                    <div class="">
                        <a href="/" class="logo" style="margin-top: 4px">
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/LogoWithText.png" height="50">
                        </a>
                    </div>
                    <!-- End Logo container-->
                    <div class="menu-extras">
                         <ul class="nav navbar-nav navbar-left pull-left logo" style="margin-top: 10px; padding-left:10px; color:#306E8C !important;">
                                Asesoria de Inversiones
                        </ul>
                        <ul class="nav navbar-nav navbar-right pull-right">
                                <li>
                                    <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                

                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- Top Bar End -->
            <!-- ========== TOP MENU ========== -->
                @include('layout.menu')
            
        </header>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <?php
              $last10homes = Home::orderBy('created_at', 'desc')->take(10)->get();
            ?>
            <div class="wrapper">
            <div class="container">
                 @yield("content")
              <div class="row">
                  <div class="col-sm-12">
                      <div class="card-box">

                          <h2 class=" m-t-0 header-title"><b>Ultimos Ingresos</b></h2>

                          <div class="owl-carousel owl-theme" id="owl-multi">
                            @foreach($last10homes as $home)
                              <div class="item">
                                <div class="thumbnail">
                                  <img class="img-responsive" src="assets/images/big/img3.jpg" onerror="this.src='packages/assets/images/greyHome.png';">
                                  <div class="caption">
                                      <h3>{{$home->nombre}}</h3>
                                      <p>
                                          Área Construida: {{$home->construccion}} <b>m<sup>2</sup></b><br>
                                          Área del Terreno: {{$home->terreno}} <b>m<sup>2</sup></b><br>
                                          Habitaciones: 3<br>
                                          Baños: {{$home->banos}}<br>

                                      </p>
                                      <p>
                                          <a href="/home/{{$home->id}}/detail" class="btn btn-info waves-effect waves-light"> <i class="fa fa-info m-r-5"></i> <span>Detalles</span> </a>
                                      </p>
                                  </div>
                                </div>
                              </div>
                            @endforeach
                          </div>
                      </div>
                  </div>
              </div>    
     

                
                      <!-- @yield("content") -->
            <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                DySChuy 2016
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div>
        </div>
        
        <!-- jQuery  -->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/bootstrap.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/detect.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/fastclick.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.slimscroll.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.blockUI.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/waves.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/wow.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.nicescroll.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.scrollTo.min.js"></script>

        <!-- Owl carousel slider js -->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/owl.carousel/dist/owl.carousel.min.js"></script>

        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.core.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                //owl carousel
                $("#owl-slider").owlCarousel({
                    loop:true,
                    nav:false,
                    autoplay:true,
                    autoplayTimeout:4000,
                    autoplayHoverPause:true,
                    animateOut: 'fadeOut',
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                });

                $("#owl-slider-2").owlCarousel({
                    loop:false,
                    nav:false,
                    autoplay:true,
                    autoplayTimeout:4000,
                    autoplayHoverPause:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                });

                //Owl-Multi
                $('#owl-multi').owlCarousel({
                    loop:true,
                    margin:20,
                    nav:false,
                    autoplay:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        480:{
                            items:2
                        },
                        700:{
                            items:4
                        },
                        1000:{
                            items:3
                        },
                        1100:{
                            items:5
                        }
                    }
                })
            });

        </script>

    </body>
</html>



