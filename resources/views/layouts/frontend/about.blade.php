@extends('layouts.frontend.app')

@section('css')
<style>

</style>
@endsection


@section('content')

<div class="breadcromb-wrapper">
    <div class="breadcromb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="breadcromb-left">
                    <h3>Know Idea Tech Solution</h3>
                </div>
            </div>
        </div>
        <div class="breadcromb-text">
            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i>home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Pages</li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>about</li>
            </ul>
        </div>
    </div>
</div>

{{--  <section class="feature-title">
    <div class="title">
        <h2>Know Idea Tech Solution</h2>
        <div><span></span></div>
    </div>
</section>  --}}

<section>
    <div class="container" style="margin-top: 2rem">
        <div class="row service">
            <div class="title-left">
                <h2>About Idea Tech Solution</h2>
            </div>
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <div class="tab-content row">
                        <div class="col-md-12">

                            <div class="col-md-6 tab-content-part">
                                <h2>Testing</h2>
                                <p>Exactly like the original bootstrap tabs except you should use the custom wrapper. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                    I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend</p>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="/images/Customized-Software-Development.gif" alt=" ">
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
        <div class="row service">
            <div class="title-right">
                <h2>Mission & Vision</h2>
            </div>
            <div class="col-md-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <div class="tab-content row">
                        <div class="col-md-12">

                            <div class="col-md-6">
                                <figure>
                                    <img class="tab-figure" src="/images/Customized-Software-Development.gif " alt=" ">
                                </figure>
                            </div>
                            <div class="col-md-6 tab-content-part">
                                <h2>Testing</h2>
                                <p>Exactly like the original bootstrap tabs except you should use the custom wrapper. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                    I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend</p>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->
            </div>
        </div>
    </div>
</section>

@section('js')




@endsection
@endsection
