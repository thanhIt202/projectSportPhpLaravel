@extends('layouts.admin')
@section('title', 'Chỉnh sửa tài khoản')
@section('main')
<h2>Chỉnh sửa tài khoản: {{$user->name}}</h2>
<hr>
<form action="{{ route('user.update',  $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="form-group @error('name') has-error @enderror">
        <label for="">Họ tên</label>
        <input type="text" class="form-control" name="name" placeholder="Input name" value="{{$user->name}}">
        @error('name') <div>{!!$message!!}</div> @enderror
    </div>

    <div class="form-group @error('password') has-error @enderror">
        <label for="">Mật khẩu</label>
        <input type="password" class="form-control" name="password" placeholder="Input email">
        @error('password') <div>{!!$message!!}</div> @enderror
    </div>
    <div class="form-group @error('confirm_password') has-error @enderror">
        <label for="">Confirm password</label>
        <input type="password" class="form-control" name="confirm_password" placeholder="Input email">
        @error('confirm_password') <div>{!!$message!!}</div> @enderror
    </div>
    <div class="form-group">
        <label for="">Ảnh đại diện</label>
        <input type="file" class="form-control" name="upload" />
        @error('upload') <div>{!!$message!!}</div> @enderror

        <hr>
        <img src="{{url('images')}}/{{$user->avatar}}" width="250">
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
@stop()