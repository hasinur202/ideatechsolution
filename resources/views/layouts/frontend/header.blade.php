<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Idea Tech Solution</title>
    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="assets/animate/animate.css" rel="stylesheet">
    <!-- Mobile Menu Css -->
    <link href="assets/css/slicknav.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            background: #fff !important;
        }

        .tab-content {
            border-top: 1px solid #25af73 !important;
            border-left: 2px solid #25af73 !important;
            border-right: 2px solid #25af73 !important;
            border-bottom: 2px solid #25af73 !important;
        }
        .services-inner {
            border: 2px solid #25af73 !important;
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
            background: #25af73 !important;
            font-size: 15px;
            text-align: center;
            padding: 10px;
        }

        .nav-tabs>li>a:hover {
            background: #fff !important;
            border-color: #25af73 !important;
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
            height: 230px;
        }

        .tab-content-part{
            border: 1px solid #ddd;
            height: 230px;
            padding: 20px;
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

        section {
            padding-top: 0px !important;
            padding-bottom: 80px !important;
        }

        .home-services-wrapper {
            padding-top: 30px !important;
        }

        #particles-js {
            width: 100%;
            height: 100%;
            /* background-color: #b61924; */
            background-image: url(style.css);
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(45,166,120,1) 0%, rgba(102,94,160,1) 0%, rgba(67,138,136,1) 29%, rgba(37,175,115,1) 50%, rgba(132,149,95,1) 100%, rgba(252,115,69,0.9640231092436975) 100%) !important;
            /* background: rgb(215, 27, 136) !important;
            background: linear-gradient(90deg, rgba(215, 27, 136, 0.865983893557423) 0%, rgba(91, 84, 199, 0.969625350140056) 48%, rgba(11, 116, 138, 1) 100%) !important; */
            height: 450px !important;
        }
        .breadcromb-wrapper {
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(45,166,120,1) 0%, rgba(102,94,160,1) 0%, rgba(67,138,136,1) 29%, rgba(37,175,115,1) 50%, rgba(132,149,95,1) 100%, rgba(252,115,69,0.9640231092436975) 100%) !important;
            position: relative;
            padding: 60px 0 10px;
            float: left;
            width: 100%;
        }
        .breadcromb-text ul {
            background: #25af73 !important;
        }

        .copyright-wrapper p {
            color: #fff !important;
        }

        .copyright-wrapper {
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(45,166,120,1) 0%, rgba(102,94,160,1) 0%, rgba(67,138,136,1) 29%, rgba(37,175,115,1) 50%, rgba(132,149,95,1) 100%, rgba(252,115,69,0.9640231092436975) 100%) !important;
        }

        .top-wrapper {
            background: #25af73 !important;
        }


        .banner-content {
            text-align: center;
            color: #fff;
            margin-top: 10% !important;
            position: absolute;
            left: 15%;
        }

        .fa-chevron-left{
            margin-top: 15px !important;
        }
        .fa-chevron-right{
            margin-top: 15px !important;
        }
        .footer-social-menu li a i{
            margin-top: 15px !important;
        }
        .footer-social-menu li a:hover{
            background-color: #25af73 !important;
        }

        #scrollUp {
            background: #25af73 !important;
        }
        .footer-widget-menu li a:hover{
            background-color: #25af73 !important;
        }

        .footer-widget-heading h3:before {
            background: #25af73 !important;
        }
        .title div span {
            background: #25af73 !important;
        }

        .banner-content h1 {
            font-size: 60px !important;
            margin-bottom: 15px !important;
        }

        .banner-content p {
            font-size: 20px !important;
            line-height: 25px !important;
        }

        .common-features {
            text-align: center;
            padding: 0 35px;
            margin-bottom: 3rem;
        }

        .common-features h5 {
            font-size: 20px !important;
            margin-bottom: 10px !important;
            margin-top: 5px !important;
        }

        .common-features p {
            font-size: 15px !important;
            line-height: 15px !important;
        }

        #stats {
            display: none !important;
        }

        .top-wrapper {
            padding: 4px 0px !important;
        }

        .our-gallery-wrapper .owl-carousel .owl-item img {
            height: 125px !important;
            width: 100% !important;
        }

        .our-gallery-wrapper .owl-nav {
            top: 70% !important;
        }

        #first-slider .slide1,
        .slide2,
        .slide3 {
            background-image: url(images/lang/1376-development_lifecycle.jpg) !important;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .footer-top-area {
            background: #253139;
            padding: 25px 0 65px !important;
        }

        .list-inline {
            margin-top: 30px !important;
        }

        .footer-widget-content p {
            line-height: 20px !important;
        }

        .footer-about-info-area .footer-widget-content {
            margin-top: 25px !important;
        }

        .footer-conatct-menu li {
            margin: 6px 0px;
        }

        .contact-form .form-control {
            border: 1px solid #ddd !important;
            box-shadow: none;
            height: 50px;
            margin-bottom: 30px;
            padding-left: 25px;
            background: #fff !important;
        }
        .owl-item{
            width: 130px !important;
        }
        .our-services-icon {
            margin-right: 10px !important;
        }
        .our-services-icon img{
            width: 40px;
            height: 40px;
            margin-top: 10px;
        }
        .our-services-icon{
            width: 60px;
            height: 60px;
            background: #25af73;
            border-radius: 50%;
            line-height: 92px;
            text-align: center;
        }
        .service{
            margin-right: 0px !important;
            margin-left: 0px !important;
        }
        .title h2 {
            color: #25af73 !important;
            font-weight: 700;
        }
        .counters-wrapper {
            padding: 0px 0 18px !important;
        }
        .navbar-header{
            width:12% !important;
        }
        .navbar-brand{
            padding: 3px !important;
            width:100% !important;
        }
        .navbar-brand img{
            width: 100%;
            height: 55px;
        }
    </style>
</head>

<body>

