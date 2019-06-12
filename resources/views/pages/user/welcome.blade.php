@extends('layouts.userapp')

@section('content')
    <div class="container-fluid">
        <img src="{{ asset('img/91.jpg') }}" alt="background-image" width="100%">
    </div>

    <!-- Modal -->
    @include('components/userlogin')
    @include('components/userregister')
@endsection
