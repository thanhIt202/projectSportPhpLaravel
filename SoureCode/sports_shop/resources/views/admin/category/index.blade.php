@extends('layouts.admin')
@section('title', 'Quản lý danh mục')
@section('main')
    <h2>Danh sách danh mục</h2>
    <hr>
    <div class="container">
        <a href="{{ route('category.create') }}" class="btn btn-success">Thêm mới danh mục</a>
        <hr>
        <form action="" method="get" class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" name="keyword" placeholder="Input keyword">
            </div>
            <button type="submit" class="btn btn-primary">Lọc</button>
        </form>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>
                            <form action="{{ route('category.destroy', $cat->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Bạn chắc không')" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                                <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    {{ $category->links() }}
@stop()
