@extends('adminlte::page')

@section('title', 'Medical+')

@section('content_header')
    <h1></h1>
@stop

@section('content')
@yield('hijos')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 


