<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="account-content">
    <a href="{{url('job-list')}}" class="btn btn-primary apply-btn">Apply Job</a>
    <div class="container">
    
        <!-- Account Logo -->
        <div class="account-logo">
            <a href="{{url('admin-dashboard')}}"><img src="{{ URL::asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
        </div>
        <!-- /Account Logo -->
        
        <div class="account-box">
            <div class="account-wrapper">
                <h3 class="account-title">Login</h3>
                <p class="account-subtitle">Access to our dashboard</p>
                
                <!-- Account Form -->
                <form action="{{url('custom-login')}}" method="POST">
                    @csrf
                    <div class="input-block mb-4">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="text" value="admin@dreamguystech.com" name="email" id="email">
                        <div class="text-danger pt-2">
                            @error('0')
                                {{ $message }}
                            @enderror
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="input-block mb-4">
                        <div class="row align-items-center">
                            <div class="col">
                                <label class="col-form-label">Password</label>
                            </div>
                            <div class="col-auto">
                                <a class="text-muted" href="{{url('forgot-password')}}">
                                    Forgot password?
                                </a>
                            </div>
                        </div>
                        <div class="position-relative">
                            <input class="form-control" type="password" value="123456" id="password" name="password">
                            <span class="fa-solid fa-eye-slash" id="toggle-password"></span>
                        </div>
                        <div class="text-danger pt-2">
                            @error('0')
                                {{ $message }}
                            @enderror
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="input-block mb-4 text-center">
                        <button class="btn btn-primary account-btn" type="submit">Login</button>
                    </div>
                    <div class="account-footer">
                        <p>Don't have an account yet? <a href="{{url('register')}}">Register</a></p>
                    </div>
                </form>
                <!-- /Account Form -->
                
            </div>
        </div>
    </div>
</div>
@endsection
