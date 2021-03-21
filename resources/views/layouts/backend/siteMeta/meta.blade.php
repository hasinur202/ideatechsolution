@extends('layouts.backend.app')
<style>
    .loading-spin{
        position: absolute;
        z-index: 9999;
        left: 40%;
        top: 13%;
        display: none;
    }
    .loading-spin img{
        height: 100px;
        width: 100px;
    }
    .add_button{
        color: #fff;
        text-decoration: none;
        position: absolute;
        right: 20px;
        background: #0056b3;
        padding: 5px;
        border-radius: 12px;
        top:60px;
    }
    .add_button:hover{
        color: #fff;
    }
    .remove_button{
        color: #fff;
        text-decoration: none;
        position: absolute;
        right: 0px;
        background: red;
        padding: 5px;
        border-radius: 12px;
        top:40px;
    }
    .remove_button:hover{
        color: #fff;
    }
</style>
@section('content')
    <div class="content-wrapper" style="min-height: 1589.56px;">
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
                            <button onclick="siteMeta()" style="padding: 10px;" class="btn btn-primary">
                                <i style="margin-right: 5px;font-size: 25px;margin-left: 5px;" class="fa fa-plus"
                                style="margin-right: 5px;"></i>
                            </button>
                            <p style="margin-left: 5px;
                            font-weight: 700;
                            margin-bottom: 0px; margin-top:10px;">Add Site Meta
                            </p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->

        </section>

        <section class="content">
            <div class="row">
                <div class="loading-spin" id="spin">
                    <img src="{{ asset('/loading.gif') }}" alt="">
                </div>
                <div id="addMeta" class="card card-primary col-8" style="display: none;
                        position: relative;
                    ">
                    <div class="card-header" id="cardHeader" style="background-color: #007bff;
                    color: #fff;">
                        <h3 class="card-title" id="cardTitle-add">Add New Site Meta</h3>
                        <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                            <span style="color: #fff" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" id="addSiteMeta">
                        @csrf

                        <div class="card-body" style="position: relative">
                            <div class="field_wrapper">
                                <div style="margin-bottom: 5px;">
                                    <input class="form-control" style="width: 95%;margin-bottom:5px;" placeholder="meta name" name="name[]" type="text"/>
                                    <textarea class="form-control" style="width: 95%;margin-bottom:10px;" placeholder="meta description" name="meta_des[]" type="text"></textarea>
                                    <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <button id="submit" style="width: 100%" class="btn btn-primary">
                            Submit
                        </button>
                    </form>
                </div>
                <div id="editMeta" class="card card-primary col-8" style="display: none;position: relative;">
                    <div class="card-header" id="cardHeader" style="background-color: #1e7e34;
                        color: #fff;">
                        <h3 class="card-title" id="cardTitle-add">Update Site Meta</h3>
                        <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                            <span style="color: #fff" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" id="editSiteMeta">
                        @csrf
                        <div class="card-body" style="position: relative">
                            <div class="field_wrapper">
                                <div style="margin-bottom: 5px;">
                                    <input id="name" class="form-control" style="width: 95%;margin-bottom:5px;" placeholder="meta name" name="name" type="text"/>
                                    <textarea class="form-control" id="meta_des" style="width: 95%;margin-bottom:10px;" placeholder="meta description" name="meta_des" type="text"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="metaId" name="metaId">
                        <button id="submit" style="width: 100%" class="btn btn-success">
                            Update
                        </button>
                    </form>
                </div>

                <div id="metaTable" class="card col-12">
                    <div class="card-header">
                        <h3 class="card-title">All Site Meta is here</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" style="width: 166px;">
                                        Meta Name
                                    </th>
                                    <th class="sorting" style="width: 204px;">
                                        Meta Description
                                    </th>
                                    <th class="sorting" style="width: 99px;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($metas as $meta)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $meta->name }}</td>
                                        <td>
                                            {{ Str::limit($meta->meta_des,200) }}
                                        </td>
                                        <td>
                                            <button style="margin-right: 5px;" href="#"
                                                class="btn btn-primary btn-xs" onclick="edit({{ $meta }})">
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
        </section>

    </div>

@section('js')
    <script>
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

        function edit(meta) {
            $("#addMeta").hide();
            $("#metaTable").hide();
            $("#editMeta").show();
            $("#name").val(meta.name);
            $("#meta_des").text(meta.meta_des);
            $("#metaId").val(meta.id);
        }

        function closeForm() {
            $("#addMeta").hide();
            $("#metaTable").show();
            $("#editMeta").hide();
        }

        function siteMeta(){
            $("#addMeta").show();
            $("#metaTable").hide();
        }

    $(document).ready(function () {
        $('#addSiteMeta').validate({
            rules: {
                name: {
                    required: true
                },
                description: {
                    required: true
                },
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
                $("#addMeta").css({
                    'opacity':'.4'
                });
                $.ajax({
                    url: "{{route('meta.add')}}",
                    method: "POST",
                    data: new FormData(document.getElementById("addSiteMeta")),
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
                            title: 'Meta upload successfull.'
                        })
                    },
                    error: function() {
                        $("#spin").hide();
                        Swal.fire({
                            icon: 'error',
                            title: 'Field required'
                        })
                    }
                })
            }
        });

    });

    $(document).ready(function () {
        $('#editSiteMeta').validate({
            rules: {
                name: {
                    required: true
                },
                description: {
                    required: true
                },
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
                $("#editMeta").css({
                    'opacity':'.4'
                });
                $.ajax({
                    url: "{{route('meta.update')}}",
                    method: "POST",
                    data: new FormData(document.getElementById("editSiteMeta")),
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
                            title: 'Meta update successfull.'
                        })
                    },
                    error: function() {
                        $("#spin").hide();
                        Swal.fire({
                            icon: 'error',
                            title: 'Field required'
                        })
                    }
                })
            }
        });

    });


    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div style="margin-bottom: 5px;position:relative"><input class="form-control" placeholder="name" style="width: 95%;margin-bottom:5px;" type="text" name="name[]" value=""/><textarea class="form-control" style="width: 95%;margin-bottom:10px;" placeholder="meta description" type="text" name="meta_des[]"></textarea><a href="javascript:void(0);" class="remove_button"><i class="fa fa-times"/></a></div>';
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
@endsection
@endsection
