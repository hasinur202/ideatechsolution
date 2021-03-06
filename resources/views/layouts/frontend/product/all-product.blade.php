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
                    <a onclick="myFFF()" href="#" data-filter="*" class="current">Show All</a>
                    @foreach ($categories as $cat)
                        <input type="hidden" id="cat" value="{{ $cat->id }}">
                        <a onclick="showProduct({{ $cat->id }},`{{ $cat->title }}`)" href="#{{ $cat->title }}" data-filter=".{{ $cat->title }}">{{ $cat->title }}</a>
                    @endforeach
                    {{--  <a href="#software" data-filter=".software">Software</a>  --}}
                </div>

                <div class="row portfolioContainer" id="pro-section">

                        @foreach ($demos as $demo)
                        <div class="col-sm-6 col-md-4" id="classAdd">
                            <div class="item-work">
                                <div class="hover">
                                    <img src="{{ asset('/images/'.$demo->image) }}" alt="Image" style="height: 23rem"/>
                                    <div class="shadow">
                                        <dir class="myitem">
                                            <a href="{{ route('product.details') }}" target="_blank" class="btn btn-success btn-sm" style="margin:auto">Details</a>
                                        </dir>
                                    </div>
                                </div>
                                <div class="info">
                                    <a href="single-work.html">{{ $demo->title }}</a>
                                    <i class="fa fa-tablet"></i>
                                    <i class="fa fa-desktop"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach


                     {{--  @include('layouts.frontend.product.product-section')  --}}



                </div>
                <!-- End Items Works filters-->
            </div>
        </div>
        <!-- End Info Resalt-->
    </section>

@section('js')

    <script>

        function myFFF(){
            $("#default").show();
        }


        function showProduct(id,title){
            //$("#spin").show();
            {{--  $("#default").hide();
            $("dynamic").show();
            $.ajax({
                url: "{{route('show.product')}}",
                method: "POST",
                data: {
                    '_token':"{{csrf_token()}}",
                    id:id
                },
                dataType:"html",
                success: function(res) {
                    //$("#spin").hide();
                    $("#pro-section").html(res);
                    $("#classAdd").addClass(title);




                },
                error: function() {

                }
            })  --}}

            $("#classAdd").addClass(title);
        }
    </script>
@endsection
@endsection
