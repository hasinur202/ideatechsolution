@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include('layouts.backend.include.message')

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>About Page</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <form action="{{ route('confirm.save') }}" method="POST" role="form">
                    @csrf
                <input name="id" hidden type="text" hidden value="{{ optional($about)->id }}" class="form-control" />

            <div style="float: left" class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Content of About Pages</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <textarea name="message" class="textarea" placeholder="Place some text here"
                                style="width: 100%; height: 200px !important; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {{ optional($about)->description }}
                        </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
        </div>

        </div>
    </section>
    <!-- /.content -->
  </div>

@section('js')
<script>
    $(function () {
      // Summernote
      $('.textarea').summernote()
    })
  </script>
<script>


</script>

@endsection
@endsection
