@extends('layouts.admin')
@section('title', 'Quản lý size')
@section('main')
    <h2>Danh sách size</h2>
    <hr>
    <div class="container">
        <a href="{{ route('size.create') }}" class="btn btn-success">Thêm mới size</a>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($size as $size)
                    <tr>
                        <td>{{ $size->name }}</td>
                        <td>
                            <form action="{{ route('size.destroy', $size->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Bạn chắc không')" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                                <a href="{{ route('size.edit', $size->id) }}" class="btn btn-primary"><i
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
