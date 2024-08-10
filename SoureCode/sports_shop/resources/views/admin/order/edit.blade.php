@extends('layouts.admin')
@section('title', 'Chỉnh sửa Đơn hàng')
@section('main')
<hr>
<form action="{{route('order.update',$order->id)}}" method="POST" role="form">
    @csrf @method('PUT')
    <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="0" {{ $order->status == 0 ? 'checked' : '' }}>
                   chờ duyệt
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" {{ $order->status == 1 ? 'checked' : '' }}>
                    đang giao
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="2" {{ $order->status == 2 ? 'checked' : '' }}>
đã giao                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="3" {{ $order->status == 3 ? 'checked' : '' }}>
                    đã hủy
                </label>
            </div>
        </div>
    
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
@stop()