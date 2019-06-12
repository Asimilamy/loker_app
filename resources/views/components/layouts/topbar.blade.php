<?php $uri = !isset($uri) ? session('type') : $uri ?>

<div class="top-bar">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
                <a href="#" class="login-btn">
                    <i class="fa fa-building"></i>
                    <span class="d-none d-md-inline-block">{{ config('app.name', 'Laravel') }}</span>
                </a>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-md-end justify-content-between">
                    <ul class="list-inline contact-info d-block d-md-none">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                    <div class="login">
                        <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn login-modal">
                            <i class="fa fa-sign-in"></i>
                            <span class="d-none d-md-inline-block">Sign In</span>
                        </a>
                        @if ($uri != 'admin')
                            <a href="#" data-toggle="modal" data-target="#register-modal" class="signup-btn signup-modal">
                                <i class="fa fa-address-book"></i><span class="d-none d-md-inline-block">Register</span>
                            </a>
                        @endif

                        @if ($uri == 'user')
                            <a href="{{ url('company') }}" class="btn btn-warning">
                                <i class="fa fa-building"></i> <span class="d-none d-md-inline-block">Company</span>
                            </a>
                        @elseif ($uri == 'company')
                            <a href="{{ url('/') }}" class="btn btn-primary">
                                <i class="fa fa-users"></i> <span class="d-none d-md-inline-block">User</span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
