@extends('layouts.frontend.app')

@section('css')
<style>
    .service-title{
        display: contents;
        width: 100%;
    }
    .tab-content-align p{
        text-align: justify;
    }
</style>
@endsection


@section('content')

<div class="breadcromb-wrapper">
    <div class="breadcromb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcromb-left">
                    <h3>Services of Idea Tech Solution</h3>
                </div>
            </div>
        </div>
        <div class="breadcromb-text">
            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i>home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Pages</li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>service</li>
            </ul>
        </div>
    </div>
</div>

<section>
    <div class="container" style="margin-top: 2rem">
        @php $i=0; @endphp
        @foreach($services as $service)
        @php $i++; @endphp
            @if($i % 2 != 0)
            <div class="row service" style="margin-top: 2rem">
                <div class="service-title">
                    <h3>{{ $service->title }}</h3>
                </div>
                <div class="col-md-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <div class="tab-content row">
                            <div class="col-md-12">
                                <div class="col-md-6 tab-content-align">
                                    <p>{{ $service->description }}</p>
                                </div>
                                <div class="col-md-6">
                                    <figure>
                                        <img class="tab-figure" src="{{ asset('/images/services/'.$service->image) }}" alt="{{ optional($service)->image_alt }}">
                                    </figure>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                </div>
            </div>
            @else

            <div class="row service" style="margin-top: 2rem">
                <div class="service-title">
                    <h3 style="text-align: right">{{ $service->title }}</h3>
                </div>
                <div class="col-md-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <div class="tab-content row">
                            <div class="col-md-12">
                                <div class="col-md-6 tab-content-align">
                                    <p>{{ $service->description }}</p>
                                </div>
                                <div class="col-md-6">
                                    <figure>
                                        <img class="tab-figure" src="{{ asset('/images/services/'.$service->image) }}" alt="{{ optional($service)->image_alt }}">
                                    </figure>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                </div>
            </div>
            @endif
        @endforeach
    </div>
</section>


@endsection
