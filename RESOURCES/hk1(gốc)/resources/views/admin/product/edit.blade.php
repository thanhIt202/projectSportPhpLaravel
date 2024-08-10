@extends('layouts.admin')
@section('title', 'Chỉnh sửa sản phẩm')
@section('main')
    <h2>Chỉnh sửa sản phẩm: {{ $product->name }}</h2>
    <hr>
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="">Danh mục sản phẩm</label>
            <select name="category_id" class="form-control">
                @foreach ($cat as $c)
                    <option value="{{ $c->id }}" {{ $product->category_id == $c->id ? 'selected' : '' }}>
                        {{ $c->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div>{!! $message !!}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" placeholder="Input tên sp"
                value="{{ $product->name }}">
            @error('name')
                <div>{!! $message !!}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Giá sản phẩm</label>
            <input type="text" class="form-control" name="price" placeholder="Input tên sp"
                value="{{ $product->price }}">
            @error('price')
                <div>{!! $message !!}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Giá KM</label>
            <input type="text" class="form-control" name="sale_price" placeholder="Input tên sp"
                value="{{ $product->sale_price }}">
            @error('sale_price')
                <div>{!! $message !!}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" {{ $product->status == 0 ? 'checked' : '' }}>
                    Còn hàng
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" {{ $product->status == 1 ? 'checked' : '' }}>
                    Hết hàng
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="">Mô tả ngắn</label>
            <input type="text" class="form-control" name="short_content" placeholder="Input tên sp"
                value="{{ $product->short_content }}">
            @error('short_content')
                <div>{!! $message !!}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Mô tả dài</label>
            <input type="text" class="form-control" name="long_content" placeholder="Input tên sp"
                value="{{ $product->long_content }}">
            @error('long_content')
                <div>{!! $message !!}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Ảnh đại diện</label>
            <input type="file" class="form-control" name="upload" />
            @error('upload')
                <div>{!! $message !!}</div>
            @enderror
            <hr>
            <img src="{{ url('images') }}/{{ $product->image }}" width="250">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>


@stop()
