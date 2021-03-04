@extends('layouts.backend.app')

@section('content')
<div class="content-wrapper" style="min-height: 1589.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12 text-center">
                <h3>Welcome To Idea Tech Backend</h3>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            
        <div class="row">
            {{-- <div class="card col-12" style="border: 1px solid #ddd;display:block;">
                <div class="card-header">
                    <h3 class="card-title">Message List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr role="row">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Message
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody id="countRow">
                            @foreach ($messages as $msg)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{ optional($msg)->name }}</td>
                                    <td class="sorting_1">{{ optional($msg)->email }}</td>
                                    <td class="sorting_1">{{ optional($msg)->msg}}</td>
                                    
                                    <td style="display: inline-flex;">
                                        <button class="btn btn-danger btn-xs" onclick="deleteMsg({{$msg->id}})">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
      </div>
    </div>
  </section>

@section('js')
    <script>
        

    </script>
@endsection
@endsection
