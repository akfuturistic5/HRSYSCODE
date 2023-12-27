<?php $page = 'change-password'; ?>
@extends('layout.mainlayout')
@section('content')
<body class="account-page">
    <div class="main-wrapper">
        <div class="account-content">
            <!-- Account Logo -->
            <div class="account-logo">
                <a href="{{url('admin-dashboard')}}"><img src="{{URL::asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
            </div>
            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Change Password</h3>
                    <form>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Old password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">New password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Confirm password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="submit-section mb-4">
                            <button class="btn btn-primary submit-btn">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
