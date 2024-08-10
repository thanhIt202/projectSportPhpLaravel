@extends('layouts.admin')
@section('title', 'Trang quản trị')
@section('main')

<div class="jumbotron">
    <div class="container text-center">
        <h1>Hello, {{ auth()->user()->name}}</h1>
        <p>Chào mừng đến với trang quản trị</p>
        
    </div>
</div>

@endsection