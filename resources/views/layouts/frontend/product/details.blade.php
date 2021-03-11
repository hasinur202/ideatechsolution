@extends('layouts.frontend.app')
@section('css')
<style>

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
                <div class="col-md-7 col-sm-12">
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
                    <a target="_blank" href="{{ $details->link }}" class="btn demo-btn">View Demo</a>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="about-main">
                        <div class="about-inner">
                            <div class="image"> <img src="/images/{{ $details->image }}" alt=""> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@section('js')
    <script>


    </script>
@endsection
@endsection
