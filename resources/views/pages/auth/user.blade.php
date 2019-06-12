@extends('layouts.universal')

@section('loginModal')
    @include('components.auth.user_login')
@endsection

@section('registerModal')
    @include('components.auth.user_register')
@endsection
