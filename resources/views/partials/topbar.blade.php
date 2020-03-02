<?php

// use Illuminate\Support\Facades\Session;



?>
<div id="page-topbar" class="page-topbar">
    <nav class="navbar navbar-expand-md navbar-dark">

        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            
            <img src="{{ asset('images/logos/logo.png') }}" alt="Pro Booking Center">
        </a>

        <div class="collapse navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else

                <li class="nav-item">

                    <a class="nav-link" href="/account/logout" data-plugin="lightbox">ออกจากระบบ</a>
                </li>

                @endguest

            </ul>
        </div>
    </nav>
</div>
