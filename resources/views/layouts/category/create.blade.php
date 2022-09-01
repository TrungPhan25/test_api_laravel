@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Thêm danh mục bài viết') }}
                        <a href="{{ url('/home') }}"> Back </a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                            <form method="post" action="{{route('category.store')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input name="title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm danh mục</button>


                                </div>
                                <!-- /.card-body -->


                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
