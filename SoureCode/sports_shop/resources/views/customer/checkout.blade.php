@extends('layouts.master')
@section('title')
@section('link', '../')
@section('main')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('') }}">TrangChủ</a></li>
                <li class='active'>Đặt hàng</li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" class="form-control" name="name" value="{{$auth->name}}"
                        >
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$auth->email}}"
                        >
                </div>
                <div class="form-group">
                    <label for="">Điện thoại</label>
                    <input type="text" class="form-control" name="phone" value="{{$auth->phone}}"
                        >
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="{{$auth->address}}"
                        >
                </div>
                <button type="submit" class="btn btn-primary">Mua ngay</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <h2>Giỏ hàng của quý khách</h2>
                </div>
                <div class="col-md-6">
                    <h2>Total Price: {{number_format($cart->totalPrice)}}</h2>
                </div>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>buy_Price</th>
                        <th>QUantity</th>
                        <th>Sub Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart->items as $item)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>
                            <img src="{{ url('images') }}/{{ $item->image }}" style="width: 60px !important">
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{number_format($item->buy_price)}} đ</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{number_format($item->quantity * $item->buy_price)}} đ</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr>

@endsection