@extends('layouts.admin')
@section('title', 'Quản lý blog')
@section('main')
    <h2>Danh sách blog</h2>
    <hr>
    <div class="container">
        <a href="{{ route('blog.create') }}" class="btn btn-success">Thêm mới blog</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blog as $b)
                    <tr>
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->content }}</td>
                        <td><img src="{{ url('images') }}/{{ $b->image }}" width="60" alt=""></td>
                        <td>
                            <form action="{{ route('blog.destroy', $b->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Bạn chắc không')" class="btn btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                                <a href="{{ route('blog.edit', $b->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blog->links() }}
    </div>
@stop
