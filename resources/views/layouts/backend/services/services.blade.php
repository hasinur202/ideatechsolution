@extends('layouts.backend.app')

@section('css')
    <style>
        .service-img{
            height: 6.5rem;
            border: dashed 1.5px blue;
            background-image: repeating-linear-gradient(32deg, #b99dc714, transparent 100px);
            width: 68.5% !important;
            cursor: pointer;
        }

        .service-img input{
            opacity: 0;
            height: 6.5rem;
            cursor: pointer;
            padding: 0px;
        }
        .service-img img{
            height: 6.5rem;
            width: 100% !important;
            cursor: pointer;
            margin-top: -134px;
        }
   </style>
@endsection

@section('content')

<div class="content-wrapper" style="min-height: 1589.56px;">
    <section class="content-header">
        @include('layouts.backend.include.message')

            <div class="container-fluid">
                <div class="row mb-2">
                    <h1>Services Page</h1>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row" id="newService" style="display: none">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h5 class="float-left text-white">Add Services</h5>
                            <a href="javascript:void(0)" class="float-right" onclick="closeAddNew()"><i class="fa fa-times"></i></a>
                        </div>
                        <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 float-left">
                                        <div class="form-group">
                                            <input name="title" placeholder="Title" type="text" required class="form-control">
                                        </div>

                                        <div class="form-group float-left" style="width: 40%">
                                            <label>Icon </label>
                                            <div class="service-img">
                                                <input id="icon" type="file" class="form-control" name="icon">
                                                <img src="" id="icon-image"/>
                                            </div>
                                        </div>
                                        <div class="form-group float-right" style="width: 56%">
                                            <label>Image </label>
                                            <div class="service-img" style="width: 70% !important">
                                                <input id="image" type="file" class="form-control" name="image">
                                                <img src="" id="image-img"/>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-7 float-right">
                                        <div class="form-group">
                                            <textarea name="description" placeholder="Description" required class="form-control" style="min-height: 108px !important"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="short_description" placeholder="Short Description" required class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label style="width: 100%">SEO</label>
                                    <div class="form-group">
                                        <input name="icon_alt" placeholder="Icon Alt" maxlength="100" size="100" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input name="image_alt" placeholder="Image Alt" maxlength="100" size="100" type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success"></i> Save Changes</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row" id="editService" style="display: none">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h5 class="float-left text-white">Edit Services</h5>
                            <a href="javascript:void(0)" class="float-right" onclick="closeAddNew()"><i class="fa fa-times"></i></a>
                        </div>
                        <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 float-left">
                                        <div class="form-group">
                                            <input name="title" id="title" placeholder="Title" type="text" required class="form-control">
                                            <input name="id" id="id" type="hidden" class="form-control">
                                        </div>

                                        <div class="form-group float-left" style="width: 40%">
                                            <label>Icon </label>
                                            <div class="service-img">
                                                <input id="edit_icon" type="file" class="form-control" name="icon">
                                                <img src="" id="edit_icon_img"/>
                                            </div>
                                        </div>
                                        <div class="form-group float-right" style="width: 56%">
                                            <label>Image </label>
                                            <div class="service-img" style="width: 70% !important">
                                                <input id="edit_image" type="file" class="form-control" name="image">
                                                <img src="" id="edit_image_img"/>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-7 float-right">
                                        <div class="form-group">
                                            <textarea name="description" id="description" placeholder="Description" required class="form-control" style="min-height: 108px !important"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="short_description" id="short_description" placeholder="Short Description" required class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label style="width: 100%">SEO</label>
                                    <div class="form-group">
                                        <input name="icon_alt" id="icon_alt" placeholder="Icon Alt" maxlength="100" size="100" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input name="image_alt" id="image_alt" placeholder="Image Alt" maxlength="100" size="100" type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success"></i> Save Changes</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row" id="serviceList">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Services List</h3>
                            <button onclick="AddNew()" class="btn btn-primary float-right">
                                <i class="fa fa-plus"></i> Add New
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SI #</th>
                                        <th>Title</th>
                                        <th>Icon</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Short Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp
                                    @foreach($services as $service)
                                        @php $i++; @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>
                                                <img src="/images/services/{{ $service->icon }}" height="50px" width="50px">
                                            </td>
                                            <td>
                                                <img src="/images/services/{{ $service->image }}" height="50px" width="80px">
                                            </td>
                                            <td>{{ Str::limit($service->description,150,'...') }}</td>
                                            <td>{{ Str::limit($service->short_description,80,'...') }}</td>

                                            <td style="display:inline-flex;">
                                                <button onclick="editService({{ $service }})" style="margin-right: 5px" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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

</script>

<script type="text/javascript">
    function AddNew(){
        $("#serviceList").hide();
        $("#newService").show();
    }

    function closeAddNew(){
        $("#newService").hide();
        $("#serviceList").show();
        $("#editService").hide();
    }

    function editService(service){
        $("#newService").hide();
        $("#serviceList").hide();
        $("#editService").show();

        $("#id").val(service.id);
        $("#title").val(service.title);
        $("#edit_icon_img").attr('src', "{{ asset('/images/services/') }}/" + service.icon);
        $("#edit_image_img").attr('src', "{{ asset('/images/services/') }}/" + service.image);

        $("#description").val(service.description);
        $("#short_description").val(service.short_description);
        $("#icon_alt").val(service.icon_alt);
        $("#image_alt").val(service.image_alt);
    }


    function iconUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#icon-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function imageUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image-img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#icon").change(function() {
        iconUrl(this);
    });
    $("#image").change(function() {
        imageUrl(this);
    });

    function editiconUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#edit_icon_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function editimageUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#edit_image_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#edit_icon").change(function() {
        editiconUrl(this);
    });
    $("#edit_image").change(function() {
        editimageUrl(this);
    });


</script>

@endsection
@endsection
