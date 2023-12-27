<?php $page = 'register'; ?>
@extends('layout.mainlayout')
@section('content')
<div class="account-content">
    <div class="container">
    
        <!-- Account Logo -->
        <div class="account-logo">
            <a href="{{url('admin-dashboard')}}"><img src="{{ URL::asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
        </div>
        <!-- /Account Logo -->
        
        <div class="account-box">
            <div class="account-wrapper">
                <h3 class="account-title">Register</h3>
                <p class="account-subtitle">Access to our dashboard</p>
                
                <!-- Account Form -->
                <form action="{{ route('register.custom') }}" method="POST">
                    @csrf
                    <div class="input-block mb-4">
                        <label class="col-form-label">Email<span class="mandatory">*</span></label>
                        <input class="form-control" type="text" value="{{ old('email') }}" id="email" name="email">
                        <div class="text-danger pt-2">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="input-block mb-4">
                        <label class="col-form-label">Password<span class="mandatory">*</span></label>
                        <div class="position-relative">
                            <input class="form-control pass-input" type="password" id="password" value="{{ old('password') }}" name="password">
                            <span class="fa-solid fa-eye-slash" id="toggle-password"></span>
                        </div>
                        <div class="text-danger pt-2">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="input-block mb-4">
                        <label class="col-form-label">Repeat Password<span class="mandatory">*</span></label>
                        <div class="position-relative">
                            <input class="form-control pass-new-input" type="password" id="repeat-password" value="{{ old('password') }}" name="repeat-password">
                            <span class="fa-solid fa-eye-slash" id="toggle-password1"></span>
                        </div>
                        <div class="text-danger pt-2">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="input-block mb-4 text-center">
                        <button class="btn btn-primary account-btn" type="submit">Register</button>
                    </div>
                    <div class="account-footer">
                        <p>Already have an account? <a href="{{url('index')}}">Login</a></p>
                    </div>
                </form>
                <!-- /Account Form -->
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
@endsection
