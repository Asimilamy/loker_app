@extends('layouts.universal')

@section('content')
    @include('pages.home.parttwo')
    {{ session('type') }}
@endsection
