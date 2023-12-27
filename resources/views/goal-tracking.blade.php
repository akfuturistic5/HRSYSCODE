<?php $page = 'goal-tracking'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Goal Tracking
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Goal Tracking
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="goal_tracking_data">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Goal Type</th>
                            <th>Subject</th>
                            <th>Target Achievement</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Description </th>
                            <th>Status </th>
                            <th>Progress </th>
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
