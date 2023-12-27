<?php $page = 'attend-reports'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Attendance Reports
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
        Attendance Reports
        @endslot
    @endcomponent
<!-- Content Starts -->
<!-- Search Filter -->
<div class="row filter-row">
						
    <div class="col-sm-6 col-md-3">  
        <div class="input-block mb-3 form-focus">
            <input type="text" class="form-control floating">
            <label class="focus-label">Employee Name</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <div class="input-block mb-3 form-focus">
            <select class="form-control floating select">
                <option>
                    Management
                </option>
                <option>
                    Finance
                </option>
                <option>
                    Development
                </option>
            </select>
            <label class="focus-label">Department</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <div class="input-block mb-3 form-focus">
            <select class="form-control floating select">
                <option>
                    All
                </option>
                <option>
                    CEO
                </option>
                <option>
                    Finance
                </option>
            </select>
            <label class="focus-label">Designation</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">  
        <div class="d-grid">
            <a href="#" class="btn btn-success"> Search </a>  
        </div>
    </div>     
</div>
<!-- /Search Filter -->
<div class="card card-table mt-3">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Date</th>
                        <th class="text-center">Total Working days</th>
                        <th class="text-center">Workday by Employee</th>
                        <th class="text-center">Late Arrival</th>
                        <th class="text-center">Missing Work</th>
                        <th class="text-center">Night Hrs</th>
                        <th class="text-center">Extra Time</th>
                        <th>Leave Count for This Month</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h2 class="table-avatar">
                                <a href="{{url('profile')}}" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}" alt="User Image"></a>
                                <a href="{{url('profile')}}">Justin Lee <span>#0001</span></a>
                            </h2>
                        </td>
                        <td>20 Dec 2020</td>
                        <td class="text-center">
                            <button class="btn btn-outline-info btn-sm">28</button>
                        </td>
                        <td class="text-center"><span class="btn btn-danger btn-sm">26</span></td>
                        <td class="text-center"><span class="btn btn-warning btn-sm"><b>15 min</b></span></td>
                        <td class="text-center"><span class="btn btn-success btn-sm"><b>No Work missing</b></span></td>
                        <td class="text-center">3 hrs</td>
                        <td class="text-center">2 hrs</td>
                        <td class="text-center"><span class="btn btn-danger btn-sm">02</span></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /Content End -->
@endsection
