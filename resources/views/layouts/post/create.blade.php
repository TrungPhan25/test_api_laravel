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


                        <form method="post" enctype="multipart/form-data" action="{{route('post.store')}} ">
                            @method('POST')
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input name="title" class="form-control" id="exampleInputEmail1" placeholder="Nhập tiêu đề">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="file" name="img" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mô tả ngắn</label>
                                    <textarea id="ckeditor_shortdesc" name="short_desc" placeholder="Điền mô tả ngắn" class="form-control" rows="5" style="resize: none"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nội dung</label>
                                    <textarea id="ckeditor_desc" name="desc" placeholder="Điền nội dung" class="form-control" rows="5" style="resize: none"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục bài viết</label>
                                    <select name="post_category_id" class="form-control">
                                        @foreach($category as $key => $cate)
                                        <option value="{{$cate->id}}">{{$cate->title}}</option>
                                        @endforeach
                                    </select>
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
