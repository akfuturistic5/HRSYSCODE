<?php $page = 'jobs-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Job Dashboard
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            Job Dashboard
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-briefcase"></i></span>
                    <div class="dash-widget-info">
                        <h3>110</h3>
                        <span>Jobs</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-users"></i></span>
                    <div class="dash-widget-info">
                        <h3>40</h3>
                        <span>Job Seekers</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                    <div class="dash-widget-info">
                        <h3>374</h3>
                        <span>Employees</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body">
                    <span class="dash-widget-icon"><i class="fa-solid fa-paste"></i></span>
                    <div class="dash-widget-info">
                        <h3>220</h3>
                        <span>Applications</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 text-center d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Overview</h3>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <h3 class="card-title text-center">Latest Jobs</h3>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action">UI Developer <span
                                        class="float-end text-sm text-muted">1 Hours ago</span></li>
                                <li class="list-group-item list-group-item-action">Android Developer <span
                                        class="float-end text-sm text-muted">1 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">IOS Developer<span
                                        class="float-end text-sm text-muted">2 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">PHP Developer<span
                                        class="float-end text-sm text-muted">3 Days ago</span></li>
                                <li class="list-group-item list-group-item-action">UI Developer<span
                                        class="float-end text-sm text-muted">3 Days ago</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card card-table">
                <div class="card-header">
                    <h3 class="card-title mb-0">Applicants List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0" id="jobs_dashboard_data">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Departments</th>
                                    <th>Start Date</th>
                                    <th>Expire Date</th>
                                    <th class="text-center">Job Types</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Resume</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-table">
                <div class="card-header">
                    <h3 class="card-title mb-0">Shortlist Candidates</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-nowrap custom-table mb-0" id="jobs_dashboard_data_2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Departments</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
