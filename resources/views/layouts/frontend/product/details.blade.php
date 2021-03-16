@extends('layouts.frontend.app')
@section('css')
<style>
    .about-inner{
        padding-right: 0px !important;
        padding-top:0px !important;
    }

    .item img{
        height: 30.5rem !important;
    }

    .address > ul > li{
        margin-right:5rem !important;
    }
    .address > ul > li:last-child{
        margin-right: 0 !important
    }
    .address > ul > li > a{
        width: 7rem;
        height: 7rem;
    }
    .address > ul >li > a > i{
        padding:1rem;
        font-size:5rem;
    }

    @media(max-width: 768px){

        .address > ul > li{
            margin-right:1rem !important;
        }
        .address > ul > li > a{
            width: 6rem;
            height: 6rem;
        }
        .address > ul >li > a > i{
            padding:1rem;
            font-size:4rem;
        }
    }


</style>
@endsection

@section('content')

    <!-- Breadcromb Wrapper Start -->
    <div class="breadcromb-wrapper">
        {{-- <div class="breadcromb-overlay"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcromb-left">
                        <h3>{{ $details->title }} Details</h3>
                    </div>
                </div>
            </div>
            <div class="breadcromb-text">
                <ul>
                    <li><a href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li><a href="{{ route('all.product') }}">{{ $category }}</a></li>
                    <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                    <li>{{ $details->title }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcromb Wrapper End -->

    <!-- Inner Page Wrapper Start -->
    <div class="inner-page-wrapper about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-text">
                        <div class="about-text">
                            <div class="about-inner">
                                <div class="since-year clearfix">
                                    <div class="work"><strong style="font-size: 2.2rem">{{ $category }}</strong><span>{{ $details->title }}</span></div>
                                </div>
                                <div class="text">
                                    {!! htmlspecialchars_decode(optional($details)->description) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--  <a onclick="modalOpen(`{{ $details->link }}`,`{{ $details->username }}`,`{{ $details->password }}`)"
                        href="javascript:void(0)" class="btn demo-btn">View Demo</a>  --}}

                    <a onclick="modalOpen()" href="javascript:void(0)" class="btn demo-btn">View Demo</a>
                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="about-main">
                        <div class="about-inner">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="/images/{{ $details->image }}" alt="Los Angeles" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="/images/{{ $details->image1 }}" alt="Chicago" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="/images/{{ $details->image2 }}" alt="New York" style="width:100%;">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            {{--  <div class="image"> <img src="/images/{{ $details->image }}" alt=""> </div>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="margin-bottom: 10rem">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                       <h1 style="text-align: center;line-height:5.5rem">
                           Do you want to know more? <span style="color:#25D366">Get Started Now</span>
                        </h1>
                        <div style="text-align: center; margin-top:4rem; font-size:45px; font-weight:bold;color:red">
                           <i style="color: #25AF73" class="fa fa-phone"></i> +8801711431232
                        </div>

                    </div>
                </div>

                <div class="address" style="text-align: center;margin-top:5rem">
                    <ul class="social-icon-rounded contact-social-icon">
                        <li><a href="https://www.facebook.com/Ideatech.Solution"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/idea-tech-solution-a86303199/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" style="float: left" id="exampleModalLabel">Login Info.</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="min-height: 110px !important">
                <a href="{{ $details->link }}" target="_blank" style="margin-top: 1rem; width:48%; float:right" class="btn btn-default">Live Preview</a>

                <div style="width: 48%;">
                    @foreach ($details->get_panels as $panel)
                        <div>
                            <h4>{{ $panel->panel_name }} </h4>
                        </div>
                        <div>
                            <label>Username: </label>
                            <span>{{ $panel->username }}</span>
                        </div>
                        <div>
                            <label>Password: </label>
                            <span>{{ $panel->password }}</span>
                        </div>
                        <hr>
                    @endforeach
                </div>
          </div>
        </div>
      </div>
    </div>

@section('js')
    <script>
        function modalOpen(){
            $("#myModal").modal('show');
        }


    </script>
@endsection
@endsection
