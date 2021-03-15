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
                                    {{ $details->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <a onclick="modalOpen(`{{ $details->link }}`,`{{ $details->username }}`,`{{ $details->password }}`)"
                        href="javascript:void(0)" class="btn demo-btn">View Demo</a>
                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="about-main">
                        <div class="about-inner">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="/images/ERP.jpg" alt="Los Angeles" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="/images/ecommerce.png" alt="Chicago" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="/images/maintenance.png" alt="New York" style="width:100%;">
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
          <div class="modal-body" style="height: 125px;">
                <a href="" id="livePreview" target="_blank" style="margin-top: 1rem; width:48%; float:right" class="btn btn-default">Live Preview</a>

                <div style="width: 48%;float: left;">
                    <div>
                        <label>Username: </label>
                        <span id="username"></span>
                    </div>
                    <div>
                        <label>Password: </label>
                        <span id="password"></span>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>

@section('js')
    <script>
        function modalOpen(link, username, password){
            $("#myModal").modal('show');

            $('#livePreview').attr('href',link);
            $('#username').text(username);
            $('#password').text(password);
        }


    </script>
@endsection
@endsection
