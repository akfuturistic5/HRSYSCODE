<?php $page = 'job-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Job Details
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Job Details
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-8">
            <div class="job-info job-widget">
                <h3 class="job-title">Android Developer</h3>
                <span class="job-dept">App Development</span>
                <ul class="job-post-det">
                    <li><i class="fa fa-calendar"></i> Post Date: <span class="text-blue">Feb 18, 2019</span></li>
                    <li><i class="fa fa-calendar"></i> Last Date: <span class="text-blue">May 31, 2019</span></li>
                    <li><i class="fa fa-user-o"></i> Applications: <span class="text-blue">4</span></li>
                    <li><i class="fa fa-eye"></i> Views: <span class="text-blue">3806</span></li>
                </ul>
            </div>
            <div class="job-content job-widget">
                <div class="job-desc-title">
                    <h4>Job Description</h4>
                </div>
                <div class="job-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="job-desc-title">
                    <h4>Job Description</h4>
                </div>
                <div class="job-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum</p>
                    <ul class="square-list">
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="job-det-info job-widget">
                <a class="btn job-btn" href="#" data-bs-toggle="modal" data-bs-target="#edit_job">Edit</a>
                <div class="info-list">
                    <span><i class="fa fa-bar-chart"></i></span>
                    <h5>Job Type</h5>
                    <p> Full Time</p>
                </div>
                <div class="info-list">
                    <span><i class="fa fa-money"></i></span>
                    <h5>Salary</h5>
                    <p>$32k - $38k</p>
                </div>
                <div class="info-list">
                    <span><i class="fa fa-suitcase"></i></span>
                    <h5>Experience</h5>
                    <p>2 Years</p>
                </div>
                <div class="info-list">
                    <span><i class="fa fa-ticket"></i></span>
                    <h5>Vacancy</h5>
                    <p>5</p>
                </div>
                <div class="info-list">
                    <span><i class="fa fa-map-signs"></i></span>
                    <h5>Location</h5>
                    <p> Dreamguy's Technologies
                        <br> 3864 Quiet Valley Lane,
                        <br> Sherman Oaks,
                        <br> California, 91403
                    </p>
                </div>
                <div class="info-list">
                    <p class="text-truncate"> 818-978-7102
                        <br> <a href="mailto:danielporter@example.com"
                            title="danielporter@example.com">danielporter@example.com</a>
                        <br> <a href="https://www.example.com" target="_blank"
                            title="https://www.example.com">https://www.example.com</a>
                    </p>
                </div>
                <div class="info-list text-center">
                    <a class="app-ends" href="#">Application ends in 2d 7h 6m</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
