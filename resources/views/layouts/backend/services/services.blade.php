@extends('layouts.backend.app')

@section('css')
    <style>

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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h5>Add Services</h5>
                        </div>
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="col-md-5 float-left">
                                    <div class="form-group">
                                        <input name="title" placeholder="Title" type="text" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Icon </label>
                                        <input name="icon" type="file" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Image </label>
                                        <input name="image" type="file" required class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-7 float-right">
                                    <div class="form-group">
                                        <textarea name="description" placeholder="Description" required class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="short_description" placeholder="Short Description" required class="form-control"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success col-12"></i> Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Documents List</h3>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{--  @php $i=0; @endphp
                                    @foreach($documents as $doc)
                                        @php $i++; @endphp  --}}
                                        {{--  <tr>
                                            <td></td>

                                            <td style="display:inline-flex;">
                                                <button style="margin-left: 5px" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>  --}}
                                    {{--  @endforeach  --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>


</div>

@section('js')


<script type="text/javascript">

</script>
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

@endsection
@endsection
