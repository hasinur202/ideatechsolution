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

    <p style="width:960px; margin:auto; margin-top:4rem">{{ $setting->description }}
    </p>

</div>



<section class="home-services-wrapper">
    <div class="container">

        <div class="title">
            <h2>Our Services</h2>
            <div><span></span></div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services">
                    <div class="services-inner">
                        <div class="our-services-icon"> <img src="{{ asset('/images/services/'.$service->icon) }}" alt="{{ optional($service)->icon_all }}"> </div>
                        <div class="our-services-text">
                            <h4>{{ $service->title }}</h4>
                            <p>{{ $service->short_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
                        @php $i=0; @endphp
                        @foreach($processes as $process)
                        @php $i++; @endphp
                            @if($i == 1)
                            <div class="col-md-12 tab-pane active" id="tab_{{ $i }}">
                                <div class=" col-md-6 tab-content-part">
                                    <h2>{{ $process->title }}</h2>
                                    <p>{{ $process->description }}</p>
                                </div>
                                <div class="col-md-6">
                                    <figure>
                                        <img class="tab-figure" src="{{ asset('/images/workprocess/'.$process->image) }}" alt="{{ optional($process)->image_alt }}">
                                    </figure>
                                </div>
                            </div>
                            @else
                            <div class="col-md-12 tab-pane" id="tab_{{ $i }}">
                                <div class=" col-md-6 tab-content-part">
                                    <h2>{{ $process->title }}</h2>
                                    <p>{{ $process->description }}</p>
                                </div>
                                <div class="col-md-6">
                                    <figure>
                                        <img class="tab-figure" src="{{ asset('/images/workprocess/'.$process->image) }}" alt="{{ optional($process)->image_alt }}">
                                    </figure>
                                </div>
                            </div>
                            @endif
                        @endforeach

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
    <div class="counters-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-counter-item">
                        <div class="stats-item-heading"> <img src="{{asset('/icon/increase.png')}}" alt="">
                            <h4>Experience</h4>
                        </div>
                        <span class="counter">5</span>
                        <span class="counter-plus">+</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter-item">
                        <div class="stats-item-heading"> <img src="{{asset('/icon/layers.png')}}" alt="">
                            <h4>Total Project</h4>
                        </div>
                        <span class="counter">120</span> </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-counter-item">
                        <div class="stats-item-heading"> <img src="{{asset('/icon/happy.png')}}" alt="">
                            <h4>Happy Clients</h4>
                        </div>
                        <span class="counter">85</span> </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="single-counter-item">
                        <div class="stats-item-heading"> <img src="{{asset('/icon/customer-service.png')}}" alt="">
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
