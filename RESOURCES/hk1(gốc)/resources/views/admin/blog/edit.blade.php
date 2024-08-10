@extends('layouts.admin')
@section('title', 'Thêm mới blog')
@section('main')
<form action="{{route('blog.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
        <h2>Thêm mới</h2>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder=""
                value="{{$blog->name}}">
            @error('name') <div>{!!$message!!}</div> @enderror

        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content" class="form-control" cols="10" rows="5">{{ $blog->content }}</textarea>
            @error('content') <div>{!!$message!!}</div> @enderror

        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="upload" placeholder="Tên danh mục">
            @error('upload') <div>{!!$message!!}</div> @enderror
            <hr>
            <img src="{{url('images')}}/{{$blog->image}}" width="250">
        </div>


    </div>

    <button type="submit" class="btn btn-info">Sửa</button>
</form>
@stop