
<section class="our-gallery-wrapper">
    <div class="container">
        <div class="title">
            <h2>Technologies We Use</h2>
            <div><span></span></div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="home-gallery" class="owl-carousel">
            @foreach ($technologies as $tech)
                <div class="item"><img src="{{ asset('/images/technology/'.$tech->logo) }}" alt="{{ optional($tech)->logo_alt }}"> </div>
            @endforeach
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
                            <p>{{ optional($setting)->description }}</p>

                            <ul class="footer-social-menu list-inline ">
                                <li><a href="{{ optional($setting)->fb }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ optional($setting)->linkedin }}"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="{{ optional($setting)->whatsapp }}"><i class="fa fa-whatsapp "></i></a></li>
                                <li><a href="{{ optional($setting)->skype }}"><i class="fa fa-skype"></i></a></li>
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
                                @foreach ($datas as $cat)
                                    @foreach ($cat->get_demos as $demo)
                                        <li> <a href="{{ url('/'.$cat->title.'/'.$demo->slug) }}">{{ $demo->title }}</a> </li>
                                    @endforeach
                                @endforeach
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
                                <li><a href="javascript:void(0)"><i class="fa fa-envelope"></i>
                                    <span>Email :</span> {{ optional($setting)->email }}</a>
                                </li>
                                <li> <a href="javascript:void(0) "><i class="fa fa-phone"></i> <span>Phone : </span>
                                        {{ optional($setting)->contact }}</a> </li>
                                <li> <a href="javascript:void(0) "><i class="fa fa-phone"></i> <span>Phone : </span>
                                        {{ optional($setting)->contact2 }}</a> </li>
                                <li> <a href="javascript:void(0) "><i class="fa fa-map-o"></i><span>Address :</span>
                                        {{ optional($setting)->address }}</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
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
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script>
    const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
      })
  </script>

@yield('js')

</body>

</html>
