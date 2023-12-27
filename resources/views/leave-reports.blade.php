<?php $page = 'leave-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Leave Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Leave Report
        @endslot
    @endcomponent


    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="leave_reports_data">
                    <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Date</th>
                            <th>Department</th>
                            <th>Leave Type</th>
                            <th>No.of Days</th>
                            <th>Remaining Leave</th>
                            <th>Total Leaves</th>
                            <th>Total Leave Taken</th>
                            <th>Leave Carry Forward</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
