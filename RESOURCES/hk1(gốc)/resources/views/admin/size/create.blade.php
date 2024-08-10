@extends('layouts.admin')
@section('title', 'Thêm mới size')
@section('main')
<h2>Thêm mới size</h2>
<hr>
<form action="{{route('size.store')}}" method="POST" role="form">
    @csrf
    <div class="form-group">
        <label for="">Tên size</label>
        <input class="form-control" name="name" placeholder="Ten size">

    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
</form>
@stop()
