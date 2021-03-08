@extends('layouts.frontend.app')

@section('css')
<link href="{{ asset('product-demo/css/text_animate.css') }}" rel="stylesheet" media="screen">

<style>
    .counter {
        color: #25af73 !important;
    }
    .counter-plus{
        color: #25af73 !important;
        font-size: 40px;
        font-weight: 700;
        line-height: 55px;
    }
    .counters-wrapper:before {
        background:none !important;
        opacity: 0.2 !important;
    }

    .stats-item-heading img{
        padding-bottom: 20px !important;
    }
</style>


@endsection

@section('content')

<div class="banner-wrapper" id="particles-js"></div>
<div class="banner-content">
    <h1 class="">Welcome To</h1>

    <h1 class="ml15">
        <span class="word">IDEA</span>
        <span class="word">TECH</span>
        <span class="word">SOLUTION</span>
    </h1>

    <p style="width:960px; margin:auto; margin-top:4rem">Idea Tech Solution is a best website design and development company in DHAKA,
              Bangladesh. We also deal in Software Development, Website Development, Graphic Design and SEO services
              and provide top quality results within limited time bounds to make your brand visibility
              to your online portal.
    </p>

</div>



<section class="home-services-wrapper">
    <div class="container">

        <div class="title">
            <h2>Our Services</h2>
            <div><span></span></div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="our-services-icon"> <img src="{{asset('/icon/world-wide-web.png')}}" alt=""> </div>
                        <div class="our-services-text">
                            <h4>Website Development</h4>
                            <p>We offer the standard & excellent interactive website Design & Development services to our clients.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="our-services-icon"> <img src="{{asset('/icon/setting.png')}}" alt=""> </div>
                        <div class="our-services-text">
                            <h4>Software Development</h4>
                            <p>Specific software is needed in almost every industry, in every business.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="our-services-icon"> <img src="{{asset('/icon/design.png')}}" alt=""> </div>
                        <div class="our-services-text">
                            <h4>Graphics Design</h4>
                            <p>A picture is worth a thousand words, and for that our expertise are always give an extra attention
                                to each shape, layout, and rhythm, Color, Texture, and Images While implementing Graphic design</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="our-services-icon"> <img src="{{asset('/icon/bullhorn.png')}}" alt=""> </div>
                        <div class="our-services-text">
                            <h4>Digital Marketing</h4>
                            <p>Digital marketing is the marketing of products or services using digital technologies,
                                mainly on the Internet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="our-services-icon"> <img src="{{asset('/icon/online-shopping.png')}}" alt=""> </div>
                        <div class="our-services-text">
                            <h4>E-Commerce</h4>
                            <p>E-commerce activity of buying or selling of products over the Internet,
                                or the transmitting of data, over an electronic network</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="our-services-icon"> <img src="{{ asset('/icon/hosting.png') }}" alt=""> </div>
                        <div class="our-services-text">
                            <h4>Hosting & Domain</h4>
                            <p>Internet hosting service that allows individuals and organizations to make their website accessible via the Worldwide Webhosting & Domain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<section>
    <div class="container">
        <div class="title">
            <h2>Our Working Process</h2>
            <div><span></span></div>
        </div>
        <div class="row service">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Requirement analysis</a></li>
                        <li><a href="#tab_2" data-toggle="tab">System Design</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Implementation</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Deployment</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Testing</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Maintenance</a></li>
                    </ul>
                    <div class="tab-content row">
                        <div class="col-md-12 tab-pane active" id="tab_1">

                            <div class=" col-md-6 tab-content-part">
                                <h2>Information Gathering</h2>

                                <p>All possible requirements of the system to be developed are
                                    captured in this phase and documented in a requirement specification document.</p>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="{{ asset('/images/Analysis.png') }}" alt=" ">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 tab-pane" id="tab_2">

                            <div class="col-md-6 tab-content-part">
                                <h2>System Design</h2>
                                <p>The requirement specifications from first phase are studied in this phase and the system design is prepared.
                                    This system design helps in specifying hardware and system requirements and helps in defining the overall system architecture.</p>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="{{ asset('/images/system-design.png') }}" alt=" ">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 tab-pane" id="tab_3">

                            <div class="col-md-6 tab-content-part">
                                <h2>Implementation</h2>
                                <p>With inputs from the system design, the system is first developed in small programs called units, which are integrated in the next phase.
                                    Each unit is developed and tested for its functionality, which is referred to as Unit Testing.</p>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="{{ asset('/images/implement.jpg') }}" alt=" ">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 tab-pane" id="tab_5">

                            <div class="col-md-6 tab-content-part">
                                <h2>Deployment of system</h2>
                                <p>Once the functional and non-functional testing is done.
                                    the product is deployed in the customer environment or released into the market.</p>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="{{ asset('/images/software.png') }}" alt=" ">
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 tab-pane" id="tab_4">

                            <div class="col-md-6 tab-content-part">
                                <h2>Integration and Testing</h2>
                                <p>All the units developed in the implementation phase are integrated into a system after testing of each unit.
                                    Post integration the entire system is tested for any faults and failures.</p>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="{{ asset('/images/testing.png') }}" alt=" ">
                                </figure>
                            </div>
                        </div>

                        <div class="col-md-12 tab-pane" id="tab_6">

                            <div class="col-md-6 tab-content-part">
                                <h2>Maintenance</h2>
                                <p>There are some issues which come up in the client environment.
                                    To fix those issues, patches are released. Also to enhance the product some better versions are released.
                                    Maintenance is done to deliver these changes in the customer environment.</p>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="{{ asset('/images/maintenance.png') }}" alt=" ">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section>
    <div class="container">
        <div class="title">
            <h2>Common Features For All Products</h2>
            <div><span></span></div>
        </div>
        <div class="row">
            <div class="col-lg-4 common-features">
                <img width="60" height="60" src="https://creativeitsoft.net/public/icons/dashboard.png" alt="Card image cap">
                <h5>Graphical Dashboard</h5>
                <p style="color: #6D7278; font-size: 18px">
                    Visualizations act as a campfire around which we gather to tell stories.
                </p>
            </div>
            <div class="col-lg-4 common-features">
                <img width="60" height="60" src="https://creativeitsoft.net/public/icons/chat.png" alt="Card image cap">
                <h5>Chat Bot</h5>
                <p style="color: #6D7278; font-size: 18px">
                    Chatbots are the future of engagement between a fan and a brand or celebrity.
                </p>
            </div>
            <div class="col-lg-4 common-features">
                <img width="60" height="60" src="https://creativeitsoft.net/public/icons/easyuse.png" alt="Card image cap">
                <h5>Easy to use</h5>
                <p style="color: #6D7278; font-size: 18px">
                    Simplicity is hard to build, easy to use. complexity is easy to build, hard to use.
                </p>
            </div>
            <div class="col-lg-4 common-features">
                <img width="60" height="60" src="https://creativeitsoft.net/public/icons/newTech.png" alt="Card image cap">
                <h5>New Technology</h5>
                <p style="color: #6D7278; font-size: 18px">
                    We always search new technology to keep us better &amp; serve better to the customer.
                </p>
            </div>
            <div class="col-lg-4 common-features">
                <img width="60" height="60" src="https://creativeitsoft.net/public/icons/branch.png" alt="Card image cap">
                <h5>Branch system</h5>
                <p style="color: #6D7278; font-size: 18px">
                    Visualizations act as a campfire around which we gather to tell stories.
                </p>
            </div>
            <div class="col-lg-4 common-features">
                <img width="60" height="60" src="https://creativeitsoft.net/public/icons/storage.png" alt="Card image cap">
                <h5>Storage System</h5>
                <p style="color: #6D7278; font-size: 18px">
                    Our all product has storing system where you can keep your whole system on our storage.
                </p>
            </div>
        </div>
    </div>
</section> --}}

<section>
    <div class="container">
        <div class="title">
            <h2>Why Choose Us</h2>
            <div><span></span></div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-4 common-features">
                    <img width="60" height="60" src="{{asset('/images/handshake.png')}}" alt="Card image cap">
                    <h5>Commitment</h5>
                    <p style="color: #6D7278; font-size: 18px">
                        We respect the given deadlines from each of our clients and we assure to deliver a premium service to you just on time.
                    </p>
                </div>
                <div class="col-md-4 common-features">
                    <img width="60" height="60" src="{{asset('/images/star.png')}}" alt="Card image cap">
                    <h5>Expertise</h5>
                    <p style="color: #6D7278; font-size: 18px">
                        We work with a solid group of programmers, marketing experts and project managers.
                        Our developers are highly knowledgeable.
                    </p>
                </div>
                <div class="col-md-4 common-features">
                    <img width="60" height="60" src="{{asset('/images/support.png')}}" alt="Card image cap">
                    <h5>Supports</h5>
                    <p style="color: #6D7278; font-size: 18px">
                        Our customers can always expect our top notch assistance when it comes to website maintenance.
                    </p>
                </div>
                <div class="col-md-4 common-features">
                    <img width="60" height="60" src="{{asset('/images/money-back.png')}}" alt="Card image cap">
                    <h5>Money back guarantee</h5>
                    <p style="color: #6D7278; font-size: 18px">
                        If you’re having difficulty installing our product, then let us know, and we’ll install it for
                         you for free.
                    </p>
                </div>
                <div class="col-md-4 common-features">
                    <img width="60" height="60" src="{{asset('/images/official-documents.png')}}" alt="Card image cap">
                    <h5>Well-documented</h5>
                    <p style="color: #6D7278; font-size: 18px">
                        This comforting finding presumably explains the well-documented Technical observation that confrontation is
                         commoner in User than Technician is.
                    </p>
                </div>
                <div class="col-md-4 common-features">
                    <img width="60" height="60" src="{{asset('/images/cost.png')}}" alt="Card image cap">
                    <h5>Affordable price</h5>
                    <p style="color: #6D7278; font-size: 18px">
                        One of the key issues here, indeed perhaps the key issue, will be offering that equipment at an affordable price.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="counters-wrapper ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-3">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading "> <img src="{{asset('/icon/increase.png')}}" alt="">
                            <h4>Experience</h4>
                        </div>
                        <span class="counter">5</span>
                        <span class="counter-plus">+</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading "> <img src="{{asset('/icon/layers.png')}}" alt="">
                            <h4>Total Project</h4>
                        </div>
                        <span class="counter ">120</span> </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading "> <img src="{{asset('/icon/happy.png')}}" alt="">
                            <h4>Happy Clients</h4>
                        </div>
                        <span class="counter ">85</span> </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="single-counter-item ">
                        <div class="stats-item-heading "> <img src="{{asset('/icon/customer-service.png')}}" alt="">
                            <h4>Support</h4>
                        </div>
                        <span class="counter">24</span>
                        <span class="counter-plus">/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





@section('js')
<script src="particles/js/particles.min.js"></script>
<script src="particles/js/app.js"></script>
<!-- stats.js -->
<script src="particles/js/lib/stats.js"></script>

<script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>


<script src="product-demo/js/anime.min.js"></script>
<script src="product-demo/js/text_animate.js"></script>


@endsection
@endsection
