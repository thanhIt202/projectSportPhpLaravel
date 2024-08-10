@extends('layouts.admin')
@section('title', 'Quản lý màu sắc')
@section('main')
<h2>Thêm mới màu sắc</h2>
<hr>
<form action="{{route('color.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên màu sắc</label>
        <input class="form-control" name="name" placeholder="Tên màu sắc">
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@stop()
