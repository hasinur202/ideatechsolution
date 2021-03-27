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

<div class="inner-page-wrapper about-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="about-text">
            <div class="about-text">
              <div class="about-inner">
                <div class="since-year clearfix">
                  <div class="work">5 Years of<strong>Successful</strong><span>Software Services Company</span></div>
                </div>
                <div class="text" style="text-align: justify">
                    {!! htmlspecialchars_decode(optional($about)->description) !!}
                </div>
                <div class="counter-section">
                  <div class="counter-boxed">
                    <div class="counter animated">35</div>
                    <div class="offset-top-5">
                      <p>Projects</p>
                    </div>
                  </div>
                  <div class="counter-boxed">
                    <div class="counter animated">24</div>
                    <div class="offset-top-5">
                      <p>Happy Clients</p>
                    </div>
                  </div>
                  <div class="counter-boxed">
                    <div class="counter animated">5</div>
                    <div class="offset-top-5">
                      <p>Years of Experience</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@section('js')




@endsection
@endsection
