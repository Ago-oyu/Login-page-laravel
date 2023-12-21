@extends('layout')
@section('title', "Home Page")
@section('content')
    @auth
        Welcome {{auth()->user()->name}}
    @else
        Not logged in.
    @endauth
@endsection