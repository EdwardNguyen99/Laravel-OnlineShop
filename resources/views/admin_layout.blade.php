<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{('public/backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css')}}" type="text/css"/>
    <link href="{{('public/backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="css/morris.css" type="text/css')}}"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{('public/backend/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{('public/backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{('public/backend/js/raphael-min.js')}}"></script>
    <script src="{{('public/backend/js/morris.js')}}"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="index.html" class="logo">
                VISITORS
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->

            <!--  notification end -->
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{('public/backend/images/2.png')}}">
                        <span class="username">
                            <?php
                            $name=Session::get('admin_name');
                            if($name){
                                echo $name;
                            }
                            ?>
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{URL::to('/dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Catalog Product</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{URL::to('/add-category-product')}}">Add product</a></li>
                            <li><a href="{{URL::to('/all-category-product')}}">Product Categories</a></li>

                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Form Components</span>
                        </a>
                        <ul class="sub">
                            <li><a href="form_component.html">Form Elements</a></li>
                            <li><a href="form_validation.html">Form Validation</a></li>
                            <li><a href="dropzone.html">Dropzone</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{URL::to('/logout')}}">
                            <i class="fa fa-user"></i>
                            <span>Log out</span>
                        </a>
                    </li>
                </ul>            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
        @yield('admin_content')
        <!-- //market-->

        </section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
<!-- <script src="{{('public/backend/js/bootstrap.js')}}"></script>
<script src="{{('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{('public/backend/js/scripts.js')}}"></script>
<script src="{{('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{('public/backend/js/jquery.nicescroll.js')}}"></script> -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{('public/backend/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<!-- <script src="{{('public/backend/js/jquery.scrollTo.js')}}"></script> -->


</body>
</html>
