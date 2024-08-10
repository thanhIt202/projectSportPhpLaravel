@extends('layouts.admin')
@section('title', 'Thêm mới blog')
@section('main')
<form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <h2>Thêm mới</h2>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder="">
            @error('name') <div>{!!$message!!}</div> @enderror
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="content" class="form-control" cols="10" rows="5"></textarea>
            @error('content') <div>{!!$message!!}</div> @enderror
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="upload" placeholder="Tên danh mục">
            @error('upload') <div>{!!$message!!}</div> @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-info">Thêm</button>
</form>
@stop