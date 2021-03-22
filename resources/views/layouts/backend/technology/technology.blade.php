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
                    <h1>Technologies Page</h1>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-5 float-left">
                    <div class="card" id="addTechnology">
                        <div class="card-header bg-warning">
                            <h5 class="float-left text-white">Add Technology</h5>
                        </div>
                        <form method="POST" action="{{ route('store.tech') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Technologies Logo </label>
                                    <div class="service-img" style="width: 50% !important">
                                        <input id="image" type="file" class="form-control" name="logo">
                                        <img src="" id="image-img"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>SEO</label>
                                    <input name="logo_alt" placeholder="Technologies Logo Alt" type="text" class="form-control" style="width:100%">
                                </div>

                                <button type="submit" class="btn btn-success"></i> Save Changes</button>
                            </div>
                        </form>
                    </div>


                    <div class="card" id="editTechnology" style="display: none">
                        <div class="card-header bg-warning">
                            <h5 class="float-left text-white">Edit Technology</h5>
                            <a href="javascript:void(0)" class="float-right" onclick="closeEdit()"><i class="fa fa-times"></i></a>
                        </div>
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Technologies Logo </label>
                                    <div class="service-img" style="width: 50% !important">
                                        <input id="edit_image" type="file" class="form-control" name="logo">
                                        <img src="" id="edit_image_img"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>SEO</label>
                                    <input name="logo_alt" placeholder="Technologies Logo Alt" type="text" class="form-control" style="width:100%">
                                </div>

                                <button type="submit" class="btn btn-success"></i> Save Changes</button>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-md-7 float-right">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Technologies List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SI #</th>
                                        <th>Tech. Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                {{--  <tbody>
                                    @php $i=0; @endphp
                                    @foreach($technologies as $tech)
                                        @php $i++; @endphp
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="/images/services/{{ $tech->logo }}" height="50px" width="50px">
                                            </td>
                                            <td style="display:inline-flex;">
                                                <button onclick="editTech({{ $tech }})" style="margin-right: 5px" class="btn btn-dark btn-xs"><i class="fa fa-edit"></i></button>
                                                <button onclick="deleteTech({{ $tech->id }})" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>  --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>


</div>

<div class="modal fade" id="lodingModal" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
    <div class="modal-dialog-centered" role="document">
        <div class="fa-3x" id="loadingDoc" style="margin: auto;font-size: 4rem;color:#c3bcea;">
            <i style="margin-left: 3rem;" class="fas fa-spinner fa-pulse"></i>
            <p class="mt-2" style="color:#c5c5c5; font-size: 1rem !important">Processing! Please wait...</p>
        </div>
    </div>
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
    function closeEdit(){
        $("#editTechnology").hide();
        $("#addTechnology").show();
    }

    function editTech(service){
        $("#id").val(service.id);
        $("#edit_image_img").attr('src', "{{ asset('/images/services/') }}/" + service.image);
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

    $("#image").change(function() {
        imageUrl(this);
    });


    function editimageUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#edit_image_img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#edit_image").change(function() {
        editimageUrl(this);
    });




    function deleteServices(id){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                $('#lodingModal').modal('show');
                $.ajax({
                    url:"{{ route('services.delete') }}",
                    method:"POST",
                    dataType:"json",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        'id':id,
                    },
                    success: function(response) {
                        $('#lodingModal').modal('hide');
                        window.location.reload();
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    },
                    error: function() {
                        $('#lodingModal').modal('hide');
                        Swal.fire(
                            'Oops...',
                            'Something went wrong.',
                            'warning'
                        )
                    }
                })

            }
        })
    }

</script>

@endsection
@endsection
