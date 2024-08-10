@extends('layouts.admin')
@section('title', 'Quản lý màu sắc')
@section('main')
    <h2>Danh sách màu sắc</h2>
    <hr>
    <div class="container">
        <a href="{{ route('color.create') }}" class="btn btn-success">Thêm mới màu sắc</a>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($color as $color)
                    <tr>
                        <td>{{ $color->name }}</td>
                        <td>
                            <form action="{{ route('color.destroy', $color->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Bạn chắc không')" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                                <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>

@stop()
