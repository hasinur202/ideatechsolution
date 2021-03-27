@extends('layouts.frontend.app')

@section('css')
<style>
    .contact-form .form-control {
        border: 1px solid #ddd;
        box-shadow: none;
        height: 50px;
        margin-bottom: 30px;
        padding-left: 25px;
        background: #fff;
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
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
        <div class="breadcromb-text">
            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i>home</a></li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Pages</li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcromb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper contact-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact-form">
                    <h3>Get in Touch  <span id="spin" style="display: none"><i class="fa fa-spinner fa-pulse"></i></span></h3>
                    <form id="formStore">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="nameId" required name="name" placeholder="Full Name *" type="text">
                                </div>
                            </div>
                            <!-- .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="emailId" required name="email" placeholder="Email Address *" type="email">
                                </div>
                            </div>
                            <!-- .col-md-6 -->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="subjectId" required name="subject" placeholder="Subject *" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" required id="mobileId" name="mobile" placeholder="Mobile" type="text">
                                </div>
                            </div>
                        </div>

                        <textarea class="form-control text-area" rows="3" id="messageId" placeholder="Message *"></textarea>

                        <button type="button" onclick="submitForm()" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="address">
                    <h3 class="contact-title">Contact Info</h3>
                    <ul class="contact-address">
                        <li>
                            <div class="contact-content">
                                <p><i class="fa fa-map-o"></i> {{ optional($setting)->address }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-content">
                                <p><i class="fa fa-phone"></i> {{ optional($setting)->contact }}</p>
                                <p><i class="fa fa-phone"></i> {{ optional($setting)->contact2 }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-content">
                                <p><i class="fa fa-envelope"></i> {{ optional($setting)->email }}</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="social-icon-rounded contact-social-icon">
                        <li><a href="{{ optional($setting)->fb }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ optional($setting)->linkedin }}" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="{{ optional($setting)->skype }}" target="_blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="{{ optional($setting)->whatsapp }}" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Google Map Start -->
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.229077050284!2d90.3520185!3d23.7453371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc320411398d71db9!2sIdea%20Tech%20Solution!5e0!3m2!1sen!2sbd!4v1615027978087!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
    <!-- Google Map End -->
</div>


@section('js')
<script>

    function submitForm(){
        $("#spin").show();
        $.ajax({
            url:"{{ route('message.store') }}",
            method:"POST",
            dataType:"json",
            data:{
                "_token": "{{ csrf_token() }}",
                'name':$("#nameId").val(),
                'email':$("#emailId").val(),
                'subject':$("#subjectId").val(),
                'mobile':$("#mobileId").val(),
                'description':$("#messageId").val(),
            },
            success: function(response) {
                $("#spin").hide();
                window.location.reload();
                Swal.fire({
                    icon: 'success',
                    title: 'Message Send Successfully'
                })
            },
            error: function() {
                $("#spin").hide();
                Swal.fire({
                    icon: 'error',
                    title: 'Something Wrong'
                })
            }
        })
    }

</script>


@endsection
@endsection
