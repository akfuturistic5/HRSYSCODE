<?php $page = 'lock-screen'; ?>
@extends('layout.mainlayout')
@section('content')


            <div class="account-content">
                <div class="container">

                    <!-- Account Logo -->
                    <div class="account-logo">
                        <a href="{{ url('dashboard') }}"><img src="{{ URL::asset('assets/img/logo2.png') }}"
                                alt="Dreamguy's Technologies"></a>
                    </div>
                    <!-- /Account Logo -->

                    <div class="account-box">
                        <div class="account-wrapper">

                            <!-- Lock User Img -->
                            <div class="lock-user">
                                <img alt="" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"
                                    class="rounded-circle">
                                <h4>John Doe</h4>
                            </div>
                            <!-- /Lock User Img -->

                            <!-- Account Form -->
                            <form action="{{url('admin-dashboard')}}">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password">
                                </div>
                                <div class="input-block mb-3 text-center">
                                    <button class="btn btn-primary account-btn" type="submit">Enter</button>
                                </div>
                                <div class="account-footer">
                                    <p>Sign in as a different user? <a href="{{ url('register') }}">Login</a></p>
                                </div>
                            </form>
                            <!-- /Account Form -->

                        </div>
                    </div>
                </div>
            </div>

    @endsection
