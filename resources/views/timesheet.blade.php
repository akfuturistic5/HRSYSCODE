<?php $page = 'timesheet'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Timesheet
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Timesheet
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="timesheet_data">
                    <thead>
                        <tr>
                            <th>Employee</th>
                            <th>Date</th>
                            <th>Projects</th>
                            <th class="text-center">Assigned Hours</th>
                            <th class="text-center">Hours</th>
                            <th class="d-none d-sm-table-cell">Description</th>
                            <th class="text-end">Actions</th>
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
