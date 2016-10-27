@extends('layout.base')

<style type="text/css">
	
	body{ padding-top: 70px; }

</style>

@section('head')
    @include('layout.head')
@endsection

@section('body')
    @include('home.body-inicio')
@endsection

@section('nav')
    @include('home.navbar-op4')
@endsection

@section('footer')
     @include('layout.footer')
@endsection
