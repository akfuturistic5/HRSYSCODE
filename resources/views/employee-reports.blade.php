<?php $page = 'employee-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Employee Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Employee Report
        @endslot
    @endcomponent
    @component('components.searchfilter')
    @endcomponent
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="employee_reports_data">
                    <thead>
                        <tr>
                            <th>Employee Name</th>
                            <th>Employee Type</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Joining Date</th>
                            <th>DOB</th>
                            <th>Martial Status</th>
                            <th>Gender</th>
                            <th>Terminated Date</th>
                            <th>Relieving Date</th>
                            <th>Salary</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Emercency Contact Details</th>
                            <th>Experience</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
