@extends('layouts.frontend.app')
@section('css')
<link href="{{ asset('product-demo/css/new.css') }}" rel="stylesheet" media="screen">
<style>
    .hover{
        margin:0px auto;
        position: relative;
        overflow: hidden;
    }
    .hover:hover .shadow{top: 0px;}
    .hover img{
        height: 23rem;
    }
    .shadow{
        background: rgba(0, 0, 0, 0.6);
        width: 100%;
        height: 100%;
        position: absolute;
        top: -100%;
        transition: .6s;
    }
    .myitem {
        color: #fff;
        border: 1px solid #fff;
        margin: 60px;
        padding: 10px;
        line-height: 26px;
        margin-top: 80px;
        text-align:center;
    }
    .myitem a{
        margin:auto !important;
    }
</style>
@endsection
@section('content')

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

    <section class="content_info">
        <!-- Info Resalt-->
        <div class="info_resalt borders">
           <div class="container wow fadeInUp">

                <!-- Nav Filters -->
                <div class="portfolioFilter">
                    <a href="#" data-filter="*" class="current">Show All</a>
                    @foreach ($datas as $cat)
                        <input type="hidden" id="cat" value="{{ $cat->id }}">
                        <a href="#" data-filter=".{{ $cat->title }}">{{ $cat->title }}</a>
                    @endforeach
                </div>

                <div class="row portfolioContainer">
                    @foreach ($datas as $cat)
                    @foreach ($cat->get_demos as $demo)
                        <div class="col-sm-6 col-md-4 {{ $cat->title }}">
                            <div class="item-work">
                                <div class="hover">
                                    <img src="{{ asset('/images/'.$demo->image) }}" alt="Image"/>
                                    <div class="shadow">
                                        <dir class="myitem">
                                            <a href="{{ url('/'.$cat->title.'/'.$demo->slug) }}" target="_blank" class="btn btn-success btn-sm" style="margin:auto">Details</a>
                                        </dir>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="{{ url('/'.$cat->title.'/'.$demo->slug) }}">{{ $demo->title }}</a>
                                    <i class="fa fa-tablet"></i>
                                    <i class="fa fa-desktop"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>


@section('js')
    <script>


    </script>
@endsection
@endsection
