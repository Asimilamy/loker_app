@extends('layouts.universal')

@section('loginModal')
    @include('components.auth.company_login')
@endsection

@section('registerModal')
    @include('components.auth.company_register')
@endsection
