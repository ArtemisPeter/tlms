@extends('layout.app')
@section('title', 'neil')

@section('shaker')
@include('components.logo')
@endsection
@section('header')
@include('components.header')
@endsection
@section('menu')
@include('components.menu')
@endsection
@section('contentTitle', 'Dashboard')
@section('contentInfo', 'Dashboard')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1>Hello</h1>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@include('components.footer')
@endsection
