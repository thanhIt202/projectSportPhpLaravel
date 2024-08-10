@extends('layouts.admin')
@section('title', 'Chỉnh sửa size')
@section('main')
<h2>Chỉnh sửa size size: {{$size->name}}</h2>
<hr>
<form action="{{route('size.update',$size->id)}}" method="POST" role="form">
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên size</label>
        <input class="form-control" name="name" value="{{$size->name}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
@stop()