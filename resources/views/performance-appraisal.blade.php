<?php $page = 'performance-appraisal'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Performance Appraisal
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Performance
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="performance_appraisal_data">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Employee</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Appraisal Date</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
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
