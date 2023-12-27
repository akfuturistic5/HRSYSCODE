<?php $page = 'performance-indicator'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Performance Indicator
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
                <table class="table table-striped custom-table mb-0 datatable" id="performance_indicator_data">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Added By</th>
                            <th>Create At</th>
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


    @component('components.model-popup')
    @endcomponent
@endsection
