@extends('layouts.admin')
@section('title', 'Quản lý tài khoản')
@section('main')

    <a href="{{ route('user.create') }}" class="btn btn-success">Cấp tài khoản nhân viên</a>
    <hr>
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
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><img src="{{ url('images') }}/{{ $user->avatar }}" width="60" alt=""></td>
                    <td>
                        @if ($user->status == 'admin')
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-sm btn-danger"><i
                                        class="fa-solid fa-trash"></i></button>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    {{ $users->links() }}

@stop()
