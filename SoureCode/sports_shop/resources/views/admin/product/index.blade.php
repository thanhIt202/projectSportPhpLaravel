@extends('layouts.admin')
@section('title', 'Quản lý sản phẩm')
@section('main')
    <h2>Danh sách sản phẩm</h2>
    <hr>
    <div class="container">
        <a href="{{ route('product.create') }}" class="btn btn-success">Thêm mới sản phẩm</a>
        <hr>
        <form action="" method="get" class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" name="keyword" placeholder="Input keyword">
            </div>
            <button type="submit" class="btn btn-primary">Lọc</button>
        </form>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sale</th>
                    <th>short_content</th>
                    <th>long_content</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $prod)
                    <tr>
                        <td>{{ $prod->name }}</td>
                        <td>{{ number_format($prod->price) }}</td>
                        <td>{{ number_format($prod->sale_price) }}</td>
                        <td>{{ $prod->short_content }}</td>
                        <td>{{ $prod->long_content }}</td>
                        <td><img src="{{ url('images') }}/{{ $prod->image }}" width="60" alt=""></td>
                        <td>{{ $prod->status == '1' ? 'Hết hàng' : 'Còn hàng' }}</td>
                        <td>
                            <form action="{{ route('product.destroy', $prod->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Bạn chắc không')" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                                <a href="{{ route('product.edit', $prod->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $product->links() }}
    </div>
@stop
