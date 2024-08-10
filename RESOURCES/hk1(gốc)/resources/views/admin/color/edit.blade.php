@extends('layouts.admin')
@section('title', 'Chỉnh sửa màu sắc')
@section('main')
<h2>Chỉnh sửa màu sắc: {{$color->name}}</h2>
<hr>
<form action="{{route('color.update',$color->id)}}" method="POST" role="form">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên màu sắc</label>
        <input class="form-control" name="name" value="{{$color->name}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
@stop()