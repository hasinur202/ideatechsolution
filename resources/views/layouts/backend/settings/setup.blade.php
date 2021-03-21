@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Website Settings</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <form action="{{ route('settings.save') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                <input name="id" hidden type="text" hidden value="{{ optional($setting)->id }}" class="form-control" placeholder="Enter Email" />

            <div style="float: left" class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Setup Basic Info</h3>
                    </div>
                    <div class="card-body">

                        <div class="col-md-6" style="float: left; padding-left: 0">
                            <div class="form-group">
                                <label>Website Title *</label>
                                <input name="title" type="text" value="{{ optional($setting)->title }}" class="form-control" placeholder="Enter website title" />
                            </div>
                            <div class="form-group">
                                <label>Contact No1. *</label>
                                <input name="contact" value="{{ optional($setting)->contact }}" type="text" class="form-control" placeholder="Enter contact number" />
                            </div>
                            <div class="form-group">
                                <label>Contact No2.</label>
                                <input name="contact2" value="{{ optional($setting)->contact2 }}" type="text" class="form-control" placeholder="Enter contact number2" />
                            </div>

                        </div>

                        <div class="col-md-6" style="float: right; padding-right:0px !important">
                            <div class="form-group">
                                <label for="logo">Logo *</label>
                                <div style="height: 7.7rem; border: dashed 1.5px blue;
                                background-image: repeating-linear-gradient(45deg, black, transparent 100px);
                                width: 100% !important; cursor: pointer;">
                                <input id="image" type="file" class="form-control" name="logo" style="opacity: 0; height: 7.7rem; cursor: pointer; padding: 0px;">
                                <img src="images/logo/{{ optional($setting)->logo }}" id="image-img" style="height: 7.7rem; width: 100% !important; cursor: pointer;margin-top: -154px;" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" value="{{ optional($setting)->email }}" type="email" class="form-control" placeholder="Enter Email" />
                        </div>

                    </div>
                        <div class="form-group">
                            <label style="width: 100%">Address</label>
                            <input name="address" value="{{ optional($setting)->address }}" type="text" class="form-control" placeholder="Enter Address"/>
                        </div>
                        <div class="form-group">
                            <label style="width: 100%">Website Description</label>
                            <textarea name="description" type="text" class="form-control" placeholder="Enter description">{{ optional($setting)->description }}</textarea>
                        </div>
                    </div>
                </div>

            </div>

            <div style="float: right" class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Social Link</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input value="{{ optional($setting)->fb }}" name="fb" type="text" class="form-control" placeholder="Facebook link" />
                        </div>
                        <div class="form-group">
                            <label>Linked-In</label>
                            <input value="{{ optional($setting)->linkedin }}" name="linkedin" type="text" class="form-control" placeholder="Linkedin link" />
                        </div>
                        <div class="form-group">
                            <label>Whatsapp</label>
                            <input value="{{ optional($setting)->whatsapp }}" name="whatsapp" type="text" class="form-control" placeholder="Whatsapp link" />
                        </div>
                        <div class="form-group">
                            <label>Skype</label>
                            <input value="{{ optional($setting)->skype }}" name="skype" type="text" class="form-control" placeholder="Skype link" />
                        </div>
                    </div>
                </div>
            </div>
                <div class="card" style="width: 100%">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
        </form>
        </div>

        </div>
    </section>
    <!-- /.content -->
  </div>

@section('js')
<script>

    function imageUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image-img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    $("#image").change(function() {
        imageUrl(this);
    });


</script>

@endsection
@endsection
