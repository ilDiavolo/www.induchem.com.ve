@extends('layout.base')

<style type="text/css">
	
	body{ padding-top: 48px; }

</style>

@section('head')
    @include('layout.head')
@endsection

@section('nav')
    @include('home.navbar-op6')
@endsection

@section('body')
   @include('quimicos.quimicos')
@endsection

@section('footer')
     @include('layout.footer')
@endsection

