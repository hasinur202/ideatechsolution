@extends('layouts.frontend.app')

<link href="{{ asset('product-demo/css/new.css') }}" rel="stylesheet" media="screen">
<style>


    .hover{

        margin:0px auto;
        position: relative;
        overflow: hidden;
    }

    .hover:hover .shadow{top: 0px;}

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
        margin-top: 45px;
    }

</style>

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
                    <a href="#desing" data-filter=".desing">Desing</a>
                    <a href="#development" data-filter=".development">Development</a>
                    <a href="#mobile" data-filter=".mobile">Mobile</a>
                    <a href="#retina" data-filter=".retina">Retina Desing</a>
                </div>
                <!-- End Nav Filters -->

                <!-- Items Works filters-->
                <div class="row portfolioContainer">
                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-4 desing">
                        <div class="item-work">
                            <div class="hover">
                                <img src="{{ asset('product-demo/img/gallery/1.jpg') }}" alt="Image"/>
                                <div class="shadow">
                                    <dir class="myitem">
                                    <h2>Java Programmer</h2>
                                    <p>Expert in java & PHP</p>
                                    </dir>
                                </div>

                            </div>
                            <div class="info">
                                <a href="single-work.html">Jekas - Creative Template</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-4 development">
                        <div class="item-work">
                            <div class="hover">
                                <img src="{{ asset('product-demo/img/gallery/2.jpg') }}" alt="Image"/>
                                <a href="{{ asset('product-demo/img/gallery/2.jpg') }}" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Mycv - One Resume Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-4 mobile">
                        <div class="item-work">
                            <div class="hover">
                                <img src="{{ asset('product-demo/img/gallery/3.jpg') }}" alt="Image"/>
                                <a href="{{ asset('product-demo/img/gallery/3.jpg') }}" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Megahost - Hosting Template</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-4 development">
                        <div class="item-work">
                            <div class="hover">
                                <img src="{{ asset('product-demo/img/gallery/4.jpg') }}" alt="Image"/>
                                <a href="{{ asset('product-demo/img/gallery/4.jpg') }}" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Studio - Landing Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-4 retina">
                        <div class="item-work">
                            <div class="hover">
                                <img src="{{ asset('product-demo/img/gallery/5.jpg') }}" alt="Image"/>
                                <a href="{{ asset('product-demo/img/gallery/5.jpg') }}" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Ebook - Landing Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->

                    <!-- Item Work-->
                    <div class="col-sm-6 col-md-4 desing">
                        <div class="item-work">
                            <div class="hover">
                                <img src="{{ asset('product-demo/img/gallery/6.jpg') }}" alt="Image"/>
                                <a href="{{ asset('product-demo/img/gallery/6.jpg') }}" class="ligbox-image" title="Image"><div class="overlay"></div></a>
                            </div>
                            <div class="info">
                                <a href="single-work.html">Gotten - Landing Page</a>
                                <i class="fa fa-tablet"></i>
                                <i class="fa fa-desktop"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Item Work-->
                </div>
                <!-- End Items Works filters-->
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>

@section('js')

    <script>

        function showProduct(id){
            $(".active").removeClass('active');
            $("#nav-li"+id).addClass('active');
            $("#spin").show();
            $.ajax({
                url: "{{route('show.product')}}",
                method: "POST",
                data: {
                    '_token':"{{csrf_token()}}",
                    id:id
                },
                dataType:"html",
                success: function(res) {
                    $("#spin").hide();
                    $("#pro-section").html(res);
                },
                error: function() {

                }
            })
        }
    </script>
@endsection
@endsection
