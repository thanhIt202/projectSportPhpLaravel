@extends('layouts.admin')
@section('title', 'Thêm mới danh mục')
@section('main')
<h2>Thêm mới danh mục</h2>
<hr>
<form action="{{route('category.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input class="form-control" name="name" placeholder="Ten danh mục">
        @error('name') <div>{!!$message!!}</div> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@stop()
