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
                                    {{ $slug }}
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



@section('js')
    <script>


    </script>
@endsection
@endsection
