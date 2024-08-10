@extends('layouts.admin')
@section('title', 'Chỉnh sửa danh mục')
@section('main')
<h2>Chỉnh sửa danh mục danh mục: {{$category->name}}</h2>
<hr>
<form action="{{route('category.update',$category->id)}}" method="POST" role="form">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input class="form-control" name="name" value="{{$category->name}}">
        @error('name')
        <small class="help-block text-danger">{{$message}}</small>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
@stop()