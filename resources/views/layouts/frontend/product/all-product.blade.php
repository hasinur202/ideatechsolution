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
            width: 100% !important;
            margin-left: 0px !important;
            height: 180px;
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
        
        .product-item {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            margin: 0px 10px;
            width: 31.5% !important;
            margin-bottom: 10px;
        }
        .product-item>a>h2{
            font-size: 20px;
        }
        
        .product-item figure {
            width: 100%;
            padding: 20px;
            transition: 0.3s;
        }
        
        .product-item figure:hover {
            padding: 18px;
            transition: .3s;
        }
        
        section {
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }
        .loading-spin{
            position: absolute;
            z-index: 9999;
            left: 40%;
            top: 30%;
            display: none;
        }
        .loading-spin img{
            height: 100px;
            width: 100px;
        }

    </style>
@section('content')
    <header>
        <div class="top-wrapper hidden-xs">
            <div class="container">
                <div class="quick-contacts pull-right"> <span><i class="fa fa-phone"></i> +8801711431232</span> <span><i class="fa fa-envelope"></i><a href="mailto:ideatechsolution.bd@gmail.com">ideatechsolution.bd@gmail.com</a></span> </div>
            </div>
        </div>
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
    </header>
    
    <div class="breadcromb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>Demo</h3>
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
    
    <div class="inner-page-wrapper about-wrapper">
        <div class="container">
            <section>
                <div class="container">
                    <div class="title">
                        <h2>Idea Tech Solution Product</h2>
                        <div><span></span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#" onclick="showProduct()">All</a></li>
                                    @foreach ($categories as $cat)
                                    <input type="hidden" id="cat" value="{{$cat->id}}">
                                    <li id="nav-li{{$cat->id}}"><a href="#" onclick="showProduct({{$cat->id}})">{{$cat->title}}</a></li>
                                    @endforeach
                                </ul>
                                <div class="loading-spin" id="spin">
                                    <img src="{{ asset('/loading.gif') }}" alt="">
                                </div>
                                <div class="tab-content row" id="pro-section" style="position: relative">
                                    @include('layouts.frontend.product.product-section')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@section('js')
    <script>

        function showProduct(id){
            $(".active").removeClass('active');
            $("#nav-li"+id).addClass('active');
            $("#spin").show();
            $.ajax({
                url: "{{route('show.product')}}",
                method: "POST",
                data: {
                    '_token':"{{csrf_token()}}",
                    id:id
                },
                dataType:"html",
                success: function(res) {
                    $("#spin").hide();
                    $("#pro-section").html(res);
                },
                error: function() {
                    
                }
            })
        }
    </script>
@endsection
@endsection 