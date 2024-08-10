@extends('layouts.admin')
@section('title', 'Thêm mới Banner')
@section('main')
<form action="{{route('banner.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
    @csrf  @method('PUT')
    <div class="row">
        <div class="col-md-5">
            <h2>Thêm mới</h2>
            <div class="form-group">
                <label for="">Slogan</label>
                <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder="" value="{{$banner->name}}">
                @error('name') <div>{!!$message!!}</div> @enderror

            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" class="form-control" cols="10" rows="5" >{{ $banner->content }}</textarea>
                @error('content') <div>{!!$message!!}</div> @enderror

            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" name="upload" placeholder="Tên danh mục">
                @error('upload') <div>{!!$message!!}</div> @enderror

            </div>
                
        </div>
        <div class="col-md-7">
            <h2>Mẫu</h2>
            
            <img src="{{ url('images') }}/MẪU.jpg" style="width: 100%; "alt="">
        </div>
    </div>

    <button type="submit" class="btn btn-info">Sửa</button>
</form>
@stop