@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Danh mục bài viết') }}
                        <a href="{{ url('/home') }}"> Back </a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Responsive Hover Table</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        <p>{{Session::get('success')}}</p>
                                    </div>
                                @endif
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tiêu đề </th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Quản lý</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($category as $categories)
                                        <tr>
                                            <td>{{$categories->id}}</td>
                                            <td>{{$categories->title}}</td>
                                            <td>{{$categories->update_at}}</td>
                                            <td><span class="tag tag-success">Approved</span></td>
                                            <td>
                                                <form  action="{{ route('category.destroy', $categories->id) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <input class="btn btn-danger" type="submit" value="Delete">
                                                </form>
                                                <a class="btn btn-success" href="{{route('category.show',$categories->id)}}">EDIT</a>

                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                                <!-- /.card-body -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
