@extends('layouts.admin')
@section('title', 'Quản lý Banner')
@section('css')
    <style>
        .w {
            margin-top: 50%;
        }

        ;

        .carousel-caption {
            text-shadow: 0 1px 20px rgb(0 0 0 / 100%);
        }

        .img {
            width: 1005px !important;
            height: 425px !important;
        }
    </style>

@stop()
@section('main')
    <a class="btn btn-lg btn-success" href="{{ route('banner.create') }}"> Thêm mới banner</a>
    <hr>
    @foreach ($banner as $ban)
        <div class="row ">
            <div class="col-md-10">
                <div class="carousel-item">
                    <img class="img" src="{{ url('images') }}/{{ $ban->img }}" alt="...">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>{{ $ban->name }}</h1>
                            <p>{{ $ban->content }}</p>
                            <p>
                            <p class="btn btn-lg btn-success">Xem ngay</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="w">
                    <form action="{{ route('banner.destroy', $ban->id) }}" method="post">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Bạn chắc không')" class="btn btn-danger btn-lg btn-block"><i
                                class="fa-solid fa-trash"></i></button>
                        <a href="{{ route('banner.edit', $ban->id) }}" class="btn btn-primary btn-lg btn-block"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
    {{ $banner->links() }}

@stop()
