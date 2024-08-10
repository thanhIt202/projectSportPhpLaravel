@extends('layouts.admin')
@section('title', 'Quản lý Đơn hàng')
@section('main')
    <h2>
        Danh sách đơn hàng</h2>
    <hr>
    <div class="container">
        <form action="" method="get" class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" name="keyword" placeholder="Input keyword">
            </div>
            <button type="submit" class="btn btn-primary">Lọc</button>
        </form>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Người đặt</th>
                    <th>Trạng thái</th>
                    <th>Thời gian đặt hàng</th>
                    <th>Cập nhật</th>
                    <th>Chi tiết</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $detail)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $detail->name }}</td>
                        @if ($detail->status == 0)
                            <td>Chờ duyệt</td>
                        @elseif($detail->status == 1)
                            <td>Đang giao</td>
                        @elseif($detail->status == 2)
                            <td>Đã giao</td>
                        @else
                            <td>Đã hủy</td>
                        @endif
                        <td>{{ $detail->created_at }}</td>
                        <td>
                            @if ($detail->status == 2)
                                <a class="btn btn-primary" disabled>Đã hoàn thành</a>
                            @elseif($detail->status == 3)
                                <a class="btn btn-primary" disabled>Đã hủy</a>
                            @else
                                <a class="btn btn-primary" data-toggle="modal" href='#{{ $detail->id }}'>Cập nhật trạng
                                    thái</a>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-success" data-toggle="modal" href='#mo-{{ $detail->id }}'>Chi tiết</a>
                            <div class="modal fade" id="mo-{{ $detail->id }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Đơn hàng của : {{ $detail->name }}</h4>
                                            <h6 class="modal-title">Địa chỉ : {{ $detail->address }}</h6>
                                            <h6 class="modal-title">Số điện thoại : {{ $detail->phone }}</h6>
                                            <h6 class="modal-title">Trạng thái : @if ($detail->status == 0)
                                                    Chờ duyệt
                                                @elseif($detail->status == 1)
                                                    Đang giao
                                                @elseif($detail->status == 2)
                                                    Đã giao
                                                @else
                                                    Đã hủy
                                                @endif
                                            </h6>
                                            <h6 class="modal-title">Ngày đặt : {{ $detail->created_at }}</h6>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Ảnh SP</th>
                                                        <th>Tên SP</th>
                                                        <th>Số lượng</th>
                                                        <th>Giá</th>
                                                        <th>Tổng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($detail->details($detail->id) as $dt)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>
                                                                <img style="width:50px !important"
                                                                    src="{{ url('images') }}/{{ $dt->image }}"
                                                                    alt="">
                                                            </td>
                                                            <td>{{ $dt->name }}</td>
                                                            <td>{{ $dt->quantity }}</td>
                                                            <td>{{ number_format($dt->buy_price) }} Đ</td>
                                                            <td>{{ number_format($dt->TotalPrice) }} Đ</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Cập nhật trạng thái -->
                    <div class="modal fade" id="{{ $detail->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Trạng thái Đơn hàng</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('order.update', $detail->id) }}" method="POST" role="form">
                                        @csrf @method('PUT')
                                        <div class="form-group">
                                            @if ($detail->status == 0)
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status" value="0"
                                                            {{ $detail->status == 0 ? 'checked' : '' }}>
                                                        chờ duyệt
                                                    </label>
                                                </div>
                                            @endif
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" value="1"
                                                        {{ $detail->status == 1 ? 'checked' : '' }}>
                                                    đang giao
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" value="2"
                                                        {{ $detail->status == 2 ? 'checked' : '' }}>
                                                    đã giao </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" value="3"
                                                        {{ $detail->status == 3 ? 'checked' : '' }}>
                                                    đã hủy
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
        {{ $order->links() }}
    </div>
@stop()
