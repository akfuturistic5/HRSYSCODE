<?php $page = 'attance-reports'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Attendance Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
        Attendance Report
        @endslot
    @endcomponent
<!-- Search Filter -->
<div class="row filter-row mb-4">
    <div class="col-sm-6 col-md-3">  
        <div class="input-block mb-3 form-focus">
            <input class="form-control floating" type="text">
            <label class="focus-label">Employee</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3"> 
        <div class="input-block mb-3 form-focus select-focus">
            <select class="select floating"> 
                <option>Select Department</option>
                <option>Designing</option>
                <option>Development</option>
                <option>Finance</option>
                <option>Hr & Finance</option>
            </select>
            <label class="focus-label">Department</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <div class="input-block mb-3 form-focus">
            <div class="cal-icon">
                <input class="form-control floating datetimepicker" type="text">
            </div>
            <label class="focus-label">From</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <div class="input-block mb-3 form-focus">
            <div class="cal-icon">
                <input class="form-control floating datetimepicker" type="text">
            </div>
            <label class="focus-label">To</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <div class="d-grid">
            <a href="#" class="btn btn-success"> Search </a>  
        </div>
    </div>     
</div>
<!-- /Search Filter -->

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped custom-table mb-0 datatable" id="attance_reports_data">
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Date</th>
                        <th>Workday</th>
                        <th>Work</th>
                        <th>Late Arrival</th>
                        <th>Missing Work</th>
                        <th>Extra Time</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <hr>
            <table class="table table-striped custom-table mb-0 datatable">
                <thead>
                    <tr>
                        <th>Employee Name</th>
                        <th>Total Days</th>
                        <th>Total Time</th>
                        <th>Total Time Worked</th>
                        <th>Total Late Arrival</th>
                        <th>Total Missed Work</th>
                        <th>Total Extra Work</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>
                            <h2 class="table-avatar">
                                <a href="{{url('profile')}}" class="avatar"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                                <a href="{{url('profile')}}">John Doe <span>Design</span></a>
                            </h2>
                        </td>
                        <td>01</td>
                        <td>08</td>
                        <td><button class="btn btn-outline-success btn-sm">09</button></td>
                        <td><button class="btn btn-outline-warning btn-sm">00</button></td>
                        <td><button class="btn btn-outline-danger btn-sm">00</button></td>
                        <td><button class="btn btn-outline-success btn-sm">01</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection