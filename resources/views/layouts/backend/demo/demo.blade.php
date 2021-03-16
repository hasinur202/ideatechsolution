@extends('layouts.backend.app')
<style>
    .loading-spin{
        position: absolute;
        z-index: 9999;
        left: 56%;
        top: 19%;
        display: none;
    }
    .loading-spin img{
        height: 100px;
        width: 100px;
    }
    .demo_img_wrap{
        height: 6.5rem;
        border: dashed 1.5px blue;
        background-image: repeating-linear-gradient(32deg, #b99dc714, transparent 100px);
        width: 32.5% !important;
        cursor: pointer;
    }

    .demo_img_wrap input{
        opacity: 0;
        height: 6.5rem;
        cursor: pointer;
        padding: 0px;
    }
    .demo_img_wrap img{
        height: 6.5rem;
        width: 100% !important;
        cursor: pointer;
        margin-top: -106px;
    }

    textarea.form-control {
        height: 126px !important;
    }

</style>
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-3">
                        <div id="disableDiv" style="width: 70%;
                            padding: 5px;
                            background-color: white;
                            border: 1px solid #ddd;
                            box-shadow: 1px 1px #ddd;
                            border-radius: 5px;display: inline-flex;">
                            <button onclick="demoForm()" style="padding: 10px;" class="btn btn-primary">
                                <i style="margin-right: 5px;font-size: 25px;margin-left: 5px;" class="fa fa-plus"
                                style="margin-right: 5px;"></i>
                            </button>
                            <p style="margin-left: 5px;
                            font-weight: 700;
                            margin-bottom: 0px; margin-top:10px;">Add Demo
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="row">
                <div class="loading-spin" id="spin">
                    <img src="{{ asset('/loading.gif') }}" alt="">
                </div>

                <div class="col-md-12">
                    <div id="demo_info" class="card card-primary" style="display: none; position: relative;">
                        <div class="card-header bg-primary" id="cardHeader">
                            <h3 class="card-title" id="cardTitle-add">Add New Demo</h3>
                            <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                                <span style="color: #fff" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="card-body" role="form" id="addDemo">
                            @csrf
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <select class="form-control" name="category_id">
                                        <option value="" selected="selected" hidden>Select Category</option>
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input name="title" type="text" class="form-control"
                                        placeholder="Enter demo title *" />
                                </div>
                                <div class="form-group">
                                    <input name="slug" type="text" class="form-control"
                                        placeholder="Slug *" />
                                </div>

                                <div class="form-group">
                                    <input name="link" type="text" class="form-control"
                                        placeholder="Enter demo link *" />
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect" style="width: 100%">Demos Photos *</label>
                                        <div class="demo_img_wrap" style="margin-right: 5px;">
                                            <input id="image" type="file" class="form-control" name="image">
                                            <img src="" id="image-img"/>
                                        </div>
                                        <div class="demo_img_wrap" style="margin-right: 5px;">
                                            <input id="image1" type="file" class="form-control" name="image1">
                                            <img src="" id="image-img1"/>
                                        </div>
                                        <div class="demo_img_wrap">
                                            <input id="image2" type="file" class="form-control" name="image2">
                                            <img src="" id="image-img2"/>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 float-right">
                                <label class="mr-sm-2" style="width: 100%" for="inlineFormCustomSelect">Demos Panel *</label>

                                <div class="row field_wrapper" style="margin-left: 2px">
                                    <div class="form-group">
                                        <input name="panel_name[]" type="text" placeholder="Panel Name *" style="width: 31%;margin-right:0px"/>
                                        <input name="username[]" type="text" placeholder="Username *" style="width: 31%;margin-right:0px"/>
                                        <input name="password[]" type="text" placeholder="Password *" style="width: 31%"/>
                                        <a href="javascript:void(0);" class="add_button" title="Add field" style="padding:6px;"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-12 row" style="margin-left: 0 !important">
                                <div class="form-group mt-2" style="width: 100%">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Description *</label>
                                    <textarea style="width: 100%" id="description" name="description" type="text" class="textarea"
                                    placeholder="Enter demo description"></textarea>
                                </div>
                                <button type="submit" style="width: 100%" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>


                    <div id="updateDemo" class="card card-primary" style="display: none;">
                        <div class="card-header" id="cardHeader" style="background-color: #28a745;color: #fff;">
                            <h3 class="card-title" id="cardTitle-update">Update Demo</h3>
                            <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                                <span style="color: #fff" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="card-body" role="form" id="edit_demo">
                            @csrf
                            <div class="col-md-6 float-left">
                                <div class="form-group">
                                    <select class="form-control" name="category_id">
                                        <option id="cat_val" value="" selected="selected" hidden></option>
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input name="title" id="title" type="text" class="form-control"
                                        placeholder="Enter demo title *" />
                                </div>
                                <div class="form-group">
                                    <input name="slug" id="slug" type="text" class="form-control"
                                        placeholder="Slug *" />
                                </div>

                                <div class="form-group">
                                    <input name="link" id="link" type="text" class="form-control"
                                        placeholder="Enter demo link *" />
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect" style="width: 100%">Demos Photos *</label>
                                        <div class="demo_img_wrap" style="margin-right: 5px;">
                                            <input id="e_image" type="file" class="form-control" name="image">
                                            <img src="" id="edit_img"/>
                                        </div>
                                        <div class="demo_img_wrap" style="margin-right: 5px;">
                                            <input id="e_image1" type="file" class="form-control" name="image1">
                                            <img src="" id="edit_img1"/>
                                        </div>
                                        <div class="demo_img_wrap">
                                            <input id="e_image2" type="file" class="form-control" name="image2">
                                            <img src="" id="edit_img2"/>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6 float-right">
                                <label class="mr-sm-2" style="width: 100%" for="inlineFormCustomSelect">Demos Panel *</label>

                                <div class="row field_wrap" style="margin-left: 2px" id="edit_p">

                                </div>


                            </div>

                            <div class="col-md-12 row" style="margin-left: 0 !important">
                                <div class="form-group mt-2" style="width: 100%">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Description *</label>
                                    <textarea style="width: 100%" id="edit_description" name="edit_description" type="text" class="form-control"></textarea>
                                </div>
                                <input type="hidden" id="demo_id" name="id">
                                <button id="submit" style="width: 100%" class="btn btn-success">Submit</button>
                            </div>
                        </form>

                    </div>


                    <div class="card" id="demo_table">
                        <div class="card-header">
                            <h3 class="card-title">All Demo is here</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" style="width: 166px;">
                                            Category Name
                                        </th>
                                        <th class="sorting" style="width: 204px;">
                                            Title
                                        </th>
                                        <th class="sorting" style="width: 204px;">
                                            Link
                                        </th>
                                        <th class="sorting" style="width: 204px;">
                                            Image
                                        </th>
                                        <th class="sorting" style="width: 204px;">
                                            Status
                                        </th>
                                        <th class="sorting" style="width: 99px;">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($demos as $demo)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{ $demo->get_category->title }}</td>
                                            <td class="sorting_1">{{ Str::limit($demo->title,15,'...') }}</td>
                                            <td class="sorting_1">{{ Str::limit($demo->link,15,'...') }}</td>
                                            <td class="sorting_1">
                                                <img width="50px" height="30px" src="{{asset('/images/'.$demo->image)}}" alt="">
                                            </td>
                                            <td>
                                                @if($demo->status == 1)
                                                    <a href="javascript:void(0)" onclick="changeActivity({{ $demo->id }})" class="badge badge-success">Active</a>
                                                @else
                                                    <a href="javascript:void(0)" onclick="changeActivity({{ $demo->id }})" class="badge badge-warning">Deactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <button style="margin-right: 5px;" href="#"
                                                    class="btn btn-primary btn-xs" onclick="editDemo({{ $demo }})">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@section('js')

<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('edit_description');

$(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
    });
});


    function editDemo(demo){
        {{--  for(var instanceName in CKEDITOR.instances){ CKEDITOR.instances[instanceName].updateElement();}  --}}
        CKEDITOR.instances['edit_description'].setData(demo.description);
        $("#cat_val").val(demo.get_category.id);
        $("#cat_val").text(demo.get_category.title);
        $("#title").val(demo.title);
        $("#slug").val(demo.slug);
        $("#link").val(demo.link);
        $("#username").val(demo.username);
        $("#password").val(demo.password);
        document.getElementById("edit_img").src = "{{ asset('/images/') }}/" + demo.image;
        document.getElementById("edit_img1").src = "{{ asset('/images/') }}/" + demo.image1;
        document.getElementById("edit_img2").src = "{{ asset('/images/') }}/" + demo.image2;
        $("#updateDemo").show();
        $("#demo_table").hide();
        $("#demo_info").hide();
        $("#demo_id").val(demo.id);


        $('#edit_p').text('');
        var i=0;
        demo.get_panels.forEach(function (panel) {
            i++;
            if(i==1){
                $('#edit_p').append('<div class="form-group"><input name="panel_name[]" type="text" value="'+panel.panel_name+'" placeholder="Panel Name *" style="width: 31%;margin-right:0px"/><input name="username[]" value="'+panel.username+'" type="text" placeholder="Username *" style="width: 31%;margin-right:0px"/><input name="password[]" value="'+panel.password+'" type="text" placeholder="Password *" style="width: 31%"/><a href="javascript:void(0);" onclick="functin()" class="add_edit_button" title="Add field" style="padding:6px;"><i class="fa fa-plus"></i></a></div>');
            }else{
                $('#edit_p').append('<div class="form-group"><input name="panel_name[]" type="text" value="'+panel.panel_name+'" placeholder="Panel Name *" style="width: 31%;margin-right:0px"/><input name="username[]" value="'+panel.username+'" type="text" placeholder="Username *" style="width: 31%;margin-right:0px"/><input name="password[]" value="'+panel.password+'" type="text" placeholder="Password *" style="width: 31%"/></div>');

            }
        });
    }


function functin(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_edit_button'); //Add button selector
    var wrapper = $('.field_wrap'); //Input field wrapper
    var fieldHTML = '<div class="form-group"><input name="panel_name[]" type="text" placeholder="Panel Name *" style="width: 31%;margin-right:2px"/><input name="username[]" type="text" placeholder="Username *" style="width: 31%;margin-right:2px"/><input name="password[]" type="text" placeholder="Password *" style="width: 31%"/><a href="javascript:void(0);" class="remove_edit_button" title="Remove field" style="padding:6px;"><i class="fa fa-times"></i></a></div>';
    var x = 1; //Initial field counter is 1

    //Check maximum number of input fields
    if(x < maxField){
        x++; //Increment field counter
        $(wrapper).append(fieldHTML); //Add field html
    }

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_edit_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
}

</script>

  <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="form-group"><input name="panel_name[]" type="text" placeholder="Panel Name *" style="width: 31%;margin-right:2px"/><input name="username[]" type="text" placeholder="Username *" style="width: 31%;margin-right:2px"/><input name="password[]" type="text" placeholder="Password *" style="width: 31%"/><a href="javascript:void(0);" class="remove_button" title="Remove field" style="padding:6px;"><i class="fa fa-times"></i></a></div>';
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });


</script>

    <script>
        function changeActivity(id){
            $("#spin").show();
            $.ajax({
                url:"{{ route('demo.activity') }}",
                method:"POST",
                dataType:"json",
                data:{
                    "_token": "{{ csrf_token() }}",
                    'id':id,
                },
                success: function(response) {
                    $("#spin").hide();
                    window.location.reload();
                    Toast.fire({
                        icon: 'success',
                        title: 'Status Changes Successfully...'
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

        function closeForm(){
            $("#updateDemo").hide();
            $("#demo_table").show();
            $("#demo_info").hide();
            $("#disableDiv").show();
        }



        function demoForm(){
            $("#demo_table").hide();
            $("#demo_info").show();
            $("#updateDemo").hide();
            $("#disableDiv").hide();
        }


        $(document).ready(function () {
            {{--  for(var instanceName in CKEDITOR.instances){ CKEDITOR.instances[instanceName].updateElement();}  --}}

            $('#addDemo').validate({
                rules: {
                    category_id: {
                        required: true
                    },
                    title: {
                        required: true
                    },
                    slug: {
                        required: true
                    },
                    link: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    username: {
                        required: true
                    },
                    description: {
                        required: true
                    },
                    image: {
                        required: true
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form){
                    $("#spin").show();
                    $("#demo_info").css({
                        'opacity':'.4'
                    });
                    $.ajax({
                        url: "{{route('demo.add')}}",
                        method: "POST",
                        data: new FormData(document.getElementById("addDemo")),
                        enctype: 'multipart/form-data',
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(res) {
                            $("#spin").hide();
                            window.location.reload();
                            Toast.fire({
                                icon: 'success',
                                title: 'Demo uploaded successfully'
                            })
                        },
                        error: function(err) {
                            $("#spin").hide();

                            if(err.status == 422){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Slug should be unique'
                                })
                            }
                        }
                    })
                }
            });

        });

        $(document).ready(function () {
            $('#edit_demo').validate({
                rules: {
                    category_id: {
                        required: true
                    },
                    title: {
                        required: true
                    },
                    slug: {
                        required: true
                    },
                    link: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                    username: {
                        required: true
                    },
                    description: {
                        required: true
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
                submitHandler: function(form){
                    $("#spin").show();
                    $("#updateDemo").css({
                        'opacity':'.4'
                    });
                    $.ajax({
                        url: "{{route('demo.update')}}",
                        method: "POST",
                        data: new FormData(document.getElementById("edit_demo")),
                        enctype: 'multipart/form-data',
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(res) {
                            $("#spin").hide();
                            window.location.reload();
                            Toast.fire({
                                icon: 'success',
                                title: 'Demo update successfull.'
                            })
                        },
                        error: function() {
                            $("#spin").hide();
                            Swal.fire({
                                icon: 'error',
                                title: 'Slug should be unique'
                            })
                        }
                    })
                }
            });

        });




        function imageUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function imageUrl1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-img1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function imageUrl2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-img2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function urlImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#edit_img').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function urlImage1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#edit_img1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function urlImage2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#edit_img2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            imageUrl(this);
        });
        $("#image1").change(function() {
            imageUrl1(this);
        });
        $("#image2").change(function() {
            imageUrl2(this);
        });

        $("#e_image").change(function() {
            urlImage(this);
        });
        $("#e_image1").change(function() {
            urlImage1(this);
        });
        $("#e_image2").change(function() {
            urlImage2(this);
        });

    </script>
@endsection
@endsection
