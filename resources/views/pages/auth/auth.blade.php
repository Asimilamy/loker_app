@extends('layouts.universal')

@section('loginModal')
    @include('components.auth.loginForm')
@endsection

@if ($uri != 'admin')
    @section('registerModal')
        @include('components.auth.registerForm')
    @endsection
@endif

@section('footerScript')
    @parent
    @include('components.scripts.auth_script')
@endsection
