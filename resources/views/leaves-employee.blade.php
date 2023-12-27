<?php $page = 'leaves-employee'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Leaves
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Leaves
        @endslot
    @endcomponent


    <!-- Leave Statistics -->
    <div class="row">
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Annual Leave</h6>
                <h4>12</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Medical Leave</h6>
                <h4>3</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Other Leave</h6>
                <h4>4</h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Remaining Leave</h6>
                <h4>5</h4>
            </div>
        </div>
    </div>
    <!-- /Leave Statistics -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="leaves_employee_data">
                    <thead>
                        <tr>
                            <th>Leave Type</th>
                            <th>From</th>
                            <th>To</th>
                            <th>No of Days</th>
                            <th>Reason</th>
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
