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
    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="/" class="logo">
                            <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/LogoWithText.png" width="25" height="30">
                            &nbsp;&nbsp;
                            <span>Asesoría de Inmuebles</span>
                        </a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                                <li>
                                    <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group nicescroll notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog fa-2x text-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                     <em class="fa fa-cog fa-2x text-custom"></em>
                                                    </div>
                                                    <div class="media-body">
                                                      <h5 class="media-heading">New settings</h5>
                                                      <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                    </div>
                                              </div>
                                           </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
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
            <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">

                                    <!--<p class="text-muted m-b-30 font-13">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.item</code>. </p>

                                    <!-- START carousel-->
                                    <div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-captions" data-slide-to="2"></li>
                                        </ol>
                                        <div role="listbox" class="carousel-inner">
                                            <div class="item active">
                                                <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/big/img2.jpg" alt="First slide image">
                                                <div class="carousel-caption">
                                                    <h3 class="text-white font-600">First slide label</h3>
                                                    <p>
                                                        Nulla vitae elit libero, a pharetra augue mollis interdum.
                                                    </p>
                                                    <button class="btn btn-default waves-effect waves-light" type="button"><i class="fa fa-info-circle"></i> Contactenos</button>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/big/img3.jpg" alt="Second slide image">
                                                <div class="carousel-caption">
                                                    <h3 class="text-white font-600">Second slide label</h3>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/big/img4.jpg" alt="Third slide image">
                                                <div class="carousel-caption">
                                                    <h3 class="text-white font-600">Third slide label</h3>
                                                    <p>
                                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                                        <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <!-- END carousel-->
                                </div>

                                <div class="col-md-3"></div>
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
                                DySChuy 2016 www.estuardochuy.com
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



