@extends('layouts.admin')
@section('title', 'Thêm mới sản phẩm')
@section('css')

@stop
@section('main')
<h2>Thêm mới sản phẩm</h2>
<hr>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder="">
                @error('name') <div>{!!$message!!}</div> @enderror
            </div>

            <div class="form-check">
                <p><b>Trạng thái</b></p>
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" value="1">
                    Hết hàng
                </label>
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="status" value="0" checked>
                    Còn hàng
                </label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Chọn ảnh</label>
                <input type="file" class="form-control" name="upload" placeholder="Tên danh mục">
                @error('upload') <div>{!!$message!!}</div> @enderror
            </div>
            
            <div class="form-group">
                <label for="">Giá</label>
                <input type="number" class="form-control" name="price" aria-describedby="helpId" placeholder="">
                @error('price') <div>{!!$message!!}</div> @enderror
            </div>
            
            <div class="form-group">
                <label for="">Giá KM</label>
                <input type="number" class="form-control" name="sale_price" aria-describedby="helpId" placeholder="">
                @error('sale_price') <div>{!!$message!!}</div> @enderror
            </div>
            
            <div class="form-group">
                <label for="">Mô tả ngắn</label>
                <textarea name="short_content" class="form-control" cols="30" rows="10"></textarea>
                @error('short_content') <div>{!!$message!!}</div> @enderror
            </div>
            
            <div class="form-group">
                <label for="">Mô tả dài</label>
                <textarea name="long_content" class="form-control" cols="30" rows="10"></textarea>
                @error('long_content') <div>{!!$message!!}</div> @enderror
            </div>
            
            <div class="form-group">
                <h5 for=""><b>Danh Mục</b></h5>
                <Select name="category_id">
                    @foreach ($cat as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                </Select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-info">Thêm</button>
</form>
@stop