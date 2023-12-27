<?php $page = 'overtime'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Overtime
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Overtime
        @endslot
    @endcomponent



    <!-- Overtime Statistics -->
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Overtime Employee</h6>
                <h4>12 <span>this month</span></h4>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Overtime Hours</h6>
                <h4>118 <span>this month</span></h4>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Pending Request</h6>
                <h4>23</h4>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="stats-info">
                <h6>Rejected</h6>
                <h4>5</h4>
            </div>
        </div>
    </div>
    <!-- /Overtime Statistics -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="overtime_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>OT Date</th>
                            <th class="text-center">OT Hours</th>
                            <th>OT Type</th>
                            <th>Description</th>
                            <th class="text-center">Status</th>
                            <th>Approved by</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
