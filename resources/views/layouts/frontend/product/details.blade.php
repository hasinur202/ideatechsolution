@extends('layouts.frontend.app')
    <style>
        .demo-btn {
            color: #fff !important;
            font-weight: 700 i !important;
            background-color: #f47629 !important;
        }
        
        .demo-btn:hover {
            background-color: #01b1d7 !important;
        }
        
        .tab-content {
            border-top: 1px solid #1CB5E0 !important;
            border-left: 2px solid #1CB5E0 !important;
            border-right: 2px solid #1CB5E0 !important;
            border-bottom: 2px solid #1CB5E0 !important;
        }
        
        .nav-tabs {
            border-bottom: none !important;
            margin-left: 12px;
            width: 100%;
        }
        
        .nav-tabs li {
            color: white;
            border: none;
            outline: none;
            cursor: pointer;
            width: 16%;
            margin-right: 5px;
        }
        
        .nav-tabs li a {
            color: #fff;
            background: linear-gradient(to right, #0f7fb5 0%, #0f81b6 100%) !important;
        }
        
        .nav-tabs>li>a:hover {
            background: #fff !important;
            border-color: #00bfd8 !important;
            color: #555 !important;
        }
        
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            background: #fff !important;
        }
        
        .tab-content {
            padding: 20px !important;
        }
        
        .tab-figure {
            width: 80%;
            margin-left: 30px;
        }
        
        .tab-content-part h2 {
            color: #555 !important;
            text-align: center;
            font-size: 30px;
            margin-bottom: 10px;
        }
        
        .tab-content-part p {
            font-size: 15px !important;
            line-height: 25px !important;
        }
    </style>
@section('content')

    <header>
        <div class="top-wrapper hidden-xs">
            <div class="container">
                {{-- <div class="pull-left"> <i class="fa fa-map-o" aria-hidden="true"></i> Sydney NSW 2052, Australia </div> --}}
                <div class="quick-contacts pull-right"> <span><i class="fa fa-phone"></i> +8801711431232</span> <span><i class="fa fa-envelope"></i><a href="mailto:ideatechsolution.bd@gmail.com">ideatechsolution.bd@gmail.com</a></span> </div>
            </div>
        </div>
        <!-- Navigation Start -->
        <nav class="navbar navbar-default main-navigation affix-top" data-offset-top="197" data-spy="affix">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('/idea-logo.png')}}" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li class="dropdown dropdown-toggle"> <a href="{{route('all.product')}}">Products <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('product.details')}}">Hospital Management</a></li>
                                <li><a href="{{route('product.details')}}">School Management</a></li>
                                <li><a href="{{route('product.details')}}">Inventory</a></li>
                                <li><a href="{{route('product.details')}}">POS</a></li>
                            </ul>
                        </li>
                        <li> <a href="services.html">Services</a>

                        </li>
                        <li> <a href="about-us.html">About Us</a>

                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <ul class="wpb-mobile-menu">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li> <a href="#">Courses</a>
                        <ul>
                            <li><a href="courses-list.html">Courses List</a></li>
                            <li><a href="courses-grid.html">Courses Grid</a></li>
                            <li><a href="courses-single.html">Single Course</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Pages</a>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="clients-testimonials.html">Clients Testimonials</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Events</a>
                        <ul>
                            <li><a href="event-grid.html">Events Grid</a></li>
                            <li><a href="event.html">Single Event</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Blog</a>
                        <ul>
                            <li><a href="blog-right-sidebar.html">Blog - Right Sidebar</a></li>
                            <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                            <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                            <li><a href="single-post.html">Blog Single Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!-- Navigation End -->
    </header>
    <!-- Header End -->
    <!-- Breadcromb Wrapper Start -->
    <div class="breadcromb-wrapper">
        {{-- <div class="breadcromb-overlay"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>Software Details</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="index.html"><i class="fa fa-home"></i>home</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Pages</li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>Demo</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->
    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="about-text">
                        <div class="about-text">
                            <div class="about-inner">
                                <div class="since-year clearfix">
                                    <div class="work"><strong>MLM</strong><span>Multilevel Marketing E-commerce</span></div>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue justo scelerisque mattis iaculis. Maecenas vestibulum faucibus enim scelerisque egestas. Praesent facilisis, tortor vel vehicula imperdiet, felis
                                    massa ultrices metus, sed consectetur massa ex vitae sem. Integer eu sodales augue. Suspendisse eget placerat lorem. Phasellus ac hendrerit leo. Morbi quis iaculis eros. Sed tincidunt augue ante
                                </div>
                            </div>
                        </div>
                    </div>
                    <a target="_blank" href="#" class="btn demo-btn">View Demo</a>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="about-main">
                        <div class="about-inner">
                            <div class="image"> <img src="images/about-inner-1.jpg" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection