<?php $page = 'daily-reports'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Daily Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Daily Report
        @endslot
    @endcomponent

    <!-- Content Starts -->
    <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3><b>101</b></h3>
                    <p>Total Employees</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-success"><b>84</b></h3>
                    <p>Today Present</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-danger"><b>12</b></h3>
                    <p>Today Absent</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3><b>5</b></h3>
                    <p>Today Left</p>
                </div>
            </div>
        </div>
    </div>
    @component('components.searchfilter')
    @endcomponent
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="daily_reports_data">
                    <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Date</th>
                            <th>Department</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- /Content End -->
@endsection
