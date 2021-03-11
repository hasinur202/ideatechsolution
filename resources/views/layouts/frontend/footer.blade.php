
<section class="our-gallery-wrapper">
    <div class="container">
        <div class="title">
            <h2>Technologies We Use</h2>
            <div><span></span></div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="home-gallery" class="owl-carousel">
            <div class="item"><img src="{{ asset('/images/lang/laravel.png') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/vuejs.png') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/php.png') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/html.png') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/css.png') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/bootstrap.jpg') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/java.png') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/jquery.png') }}" alt=""> </div>
            <div class="item"><img src="{{ asset('/images/lang/mysql.png') }}" alt=""> </div>
        </div>
    </div>
</section>


<div class="footer-wrapper">
    <div class="footer-top-area">
        <div class="container ">
            <div class="row ">
                <div class="col-md-4 col-sm-6 ">
                    <div class="footer-about-info-area footer-top-content ">
                        <div class="footer-widget-heading ">
                            <h3>About Us</h3>
                        </div>
                        <div class="footer-widget-content ">
                            <p>Idea Tech Solution is a best website design and development company in DHAKA, Bangladesh. We
                                also deal in Software Development, website Development, Graphic Design & SEO services
                                and provide top quality results within limited time bounds to make your brand visibility
                                to your online portal.</p>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p> --}}

                            <ul class="footer-social-menu list-inline ">
                                <li><a href="https://www.facebook.com/Ideatech.Solution"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/IdeaTech_BD"><i class="fa fa-twitter "></i></a></li>
                                <li><a href="https://www.linkedin.com/in/idea-tech-solution-a86303199/"><i
                                            class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-whatsapp "></i></a></li>
                                <li><a href="javascript:void(0) "><i class="fa fa-skype"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="footer-tags-widget ">
                        <div class="footer-widget-heading ">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="footer-widget-content ">
                            <ul class="footer-widget-menu ">
                                <li> <a href="javascript:void(0) ">School Management</a> </li>
                                <li> <a href="javascript:void(0) ">Inventory</a></li>
                                <li> <a href="javascript:void(0) ">Hospital Management</a> </li>
                                <li> <a href="javascript:void(0) ">Pos</a></li>
                                <li> <a href="javascript:void(0) ">Attendence Management</a> </li>
                                <li> <a href="javascript:void(0) ">E-Commerce</a> </li>
                                <li> <a href="javascript:void(0) ">MLM</a> </li>
                                <li> <a href="javascript:void(0) ">Blog</a> </li>
                                <li> <a href="javascript:void(0) ">Design</a> </li>
                                <li> <a href="javascript:void(0) ">Seo</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="footer-contact ">
                        <div class="footer-widget-heading ">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-widget-content ">
                            <ul class="footer-conatct-menu ">
                                <li> <a href="javascript:void(0) "><i class="fa fa-envelope"></i><span>Email :</span>
                                        ideatechsolution.bd@gmail.com</a> </li>
                                <li> <a href="javascript:void(0) "><i class="fa fa-phone"></i> <span>Phone : </span>
                                        +8801711431232</a> </li>
                                <li> <a href="javascript:void(0) "><i class="fa fa-phone"></i> <span>Phone : </span>
                                        +8801716039170</a> </li>
                                <li> <a href="javascript:void(0) "><i class="fa fa-map-o"></i><span>Address :</span>
                                        61/1 Anawara Vila Metro Housing Bosila.</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-sm-6 ">
                    <div class="footer-instagram ">
                        <div class="footer-widget-heading ">
                            <h3>Instagram Photos</h3>
                        </div>
                        <div class="footer-instagram-widget footer-widget-content ">
                            <a href="javascript:void(0) "><img src="images/testimonials1.png " alt=" "></a>
                            <a href="javascript:void(0) "><img src="images/testimonials2.png " alt=" "></a>
                            <a href="javascript:void(0) "><img src="images/testimonials3.png " alt=" "></a>
                            <a href="javascript:void(0) "><img src="images/testimonials3.png " alt=" "></a>
                            <a href="javascript:void(0) "><img src="images/testimonials2.png " alt=" "></a>
                            <a href="# "><img src="images/testimonials1.png " alt=" "></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="copyright-wrapper ">
        <div class="container ">
            <p>&copy; Copyright <span id="year "></span> Idea Tech Solution | All Rights Reserved.</p>
        </div>
    </div>
</div>

<!-- Load Facebook SDK for JavaScript -->
{{--  <div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v10.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>  --}}

<!-- Your Chat Plugin code -->
{{--  <div class="fb-customerchat" attribution="setup_tool" page_id="111923523646625" theme_color="#25af73">
</div>  --}}


<script src="/assets/jquery/jquery-1.12.0.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/jquery/plugin.js"></script>
<script src="/assets/jquery/plugins.js"></script>
<script src="/assets/jquery/slider.js"></script>
<script src="/assets/owl-carousel/js/owl.carousel.js"></script>
<script src="/assets/wow/wow.min.js "></script>
<script src="/assets/jquery/jquery.slicknav.js"></script>
<script src="/js/custom.js"></script>

@yield('js')

</body>

</html>
