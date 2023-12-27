<?php $page = 'termination'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Termination
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Termination
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="termination_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Terminated Employee </th>
                            <th>Department</th>
                            <th>Termination Type </th>
                            <th>Termination Date </th>
                            <th>Reason</th>
                            <th>Notice Date </th>
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
