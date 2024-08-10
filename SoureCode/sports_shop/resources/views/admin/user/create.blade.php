@extends('layouts.admin')
@section('title', 'Thêm mới tài khoản')
@section('main')
<h2>Thêm mới tài khoản</h2>
<hr>
<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" role="form">
    @csrf
    <div class="form-group @error('name') has-error @enderror">
        <label for="">Họ tên</label>
        <input type="text" class="form-control" name="name"> 
        @error('name') <div>{!!$message!!}</div> @enderror
    </div>
    <div class="form-group @error('text') has-error @enderror">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">
        @error('email') <div>{!!$message!!}</div> @enderror
    </div>
    <div class="form-group @error('password') has-error @enderror">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
        @error('password') <div>{!!$message!!}</div> @enderror
    </div>
    <div class="form-group @error('confirm_password') has-error @enderror">
        <label for="">Confirm password</label>
        <input type="password" class="form-control" name="confirm_password">
        @error('confirm_password') <div>{!!$message!!}</div> @enderror
    </div>
    <div class="form-group">
        <label for="">Chọn ảnh</label>
        <input type="file" class="form-control" name="upload" placeholder="Ten danh mục">
        @error('upload') <div>{!!$message!!}</div> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop()