<?php $page = 'policies'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Policies
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Policies
        @endslot
    @endcomponent



    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="policies_data">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Policy Name </th>
                            <th>Department </th>
                            <th>Description </th>
                            <th>Created </th>
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
