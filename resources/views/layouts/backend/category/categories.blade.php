@extends('layouts.backend.app')
<style>
    .loading-spin{
        position: absolute;
        z-index: 9999;
        left: 29%;
        top: 13%;
        display: none;
    }
    .loading-spin img{
        height: 100px;
        width: 100px;
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
                            <a href="{{route('demos')}}" style="padding: 10px;" class="btn btn-primary">
                                <i style="margin-right: 5px;font-size: 25px;margin-left: 5px;" class="fa fa-plus"
                                style="margin-right: 5px;"></i>
                            </a>
                            <p style="margin-left: 5px;
                            font-weight: 700;
                            margin-bottom: 0px;">Add Demo
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
                <div id="addCat" class="card card-primary col-4" style="margin-left: 15px;
                        padding-top: 8px;
                        height:230px;
                        display: block;
                        position: relative;
                    ">
                    <div class="card-header" id="cardHeader" style="background-color: #007bff;
                    color: #fff;">
                        <h3 class="card-title" id="cardTitle-add">Add New Category</h3>
                        <h3 class="card-title" style="display: none;" id="cardTitle-update">Update Category</h3>
                        <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                            <span style="color: #fff" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" id="addCategory">
                        @csrf

                        <div class="card-body" style="position: relative">
                            <input type="text" id="id" name="id" hidden>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Category Name</label>
                                <input id="name" name="title" type="text" class="form-control"
                                    placeholder="Enter category name" />

                            </div>
                        </div>
                        <button id="submit" style="width: 100%" class="btn btn-primary">
                            Submit
                        </button>

                        <button id="update" style="width: 100%;display:none;" onclick="updateCategory()" class="btn btn-success">
                          Submit
                      </button>
                    </form>
                </div>

                <div id="updateCat" class="card card-primary col-4" style="margin-left: 15px;
                        padding-top: 8px;
                        height:230px;
                        display: none;
                    ">
                    <div class="card-header" id="cardHeader" style="background-color: #28a745;
                    color: #fff;">
                        <h3 class="card-title" id="cardTitle-update">Update Category</h3>
                        <button type="button" onclick="closeForm()" class="close" aria-label="Close">
                            <span style="color: #fff" aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form role="form" id="updateCategory">
                        @csrf

                        <div class="card-body" style="position: relative">
                            <input type="text" id="cat_id" name="id" hidden>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Category Name</label>
                                <input id="edit_name" name="title" type="text" class="form-control"
                                    placeholder="Enter category name" />

                            </div>
                        </div>

                        <button type="submit" style="width: 100%;" class="btn btn-success">
                          Submit
                      </button>
                    </form>
                </div>

                <div class="card col-7" style="margin-left: 50px;">
                    <div class="card-header">
                        <h3 class="card-title">All Categories is here</h3>
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
                                        Status
                                    </th>
                                    <th class="sorting" style="width: 99px;">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $cat)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">{{ $cat->title }}</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>
                                            <button style="margin-right: 5px;" href="#"
                                                class="btn btn-primary btn-xs" onclick="editCat({{ $cat }})">
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

        function editCat(cat) {
            $("#addCat").hide();
            $("#updateCat").show();
            $("#edit_name").val(cat.title);
            $("#cat_id").val(cat.id);
        }

        function closeForm() {
            $("#addCat").show();
            $("#updateCat").hide();
            $("#edit_name").val('');
            $("#cat_id").val('');
        }

    $(document).ready(function () {
        $('#addCategory').validate({
            rules: {
                title: {
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
                $("#addCat").css({
                    'opacity':'.4'
                });
                $.ajax({
                    url: "{{route('category.add')}}",
                    method: "POST",
                    data: new FormData(document.getElementById("addCategory")),
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
                            title: 'Category upload successfull.'
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
        $('#updateCategory').validate({
            rules: {
                title: {
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
                $("#updateCat").css({
                    'opacity':'.4'
                });
                $.ajax({
                    url: "{{route('category.update')}}",
                    method: "POST",
                    data: new FormData(document.getElementById("updateCategory")),
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
                            title: 'Category update successfull.'
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
@endsection
@endsection
