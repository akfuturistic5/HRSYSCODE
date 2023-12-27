<?php $page = 'provident-fund'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Provident Fund
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Provident Fund
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable mb-0" id="provident_fund_data">
                    <thead>
                        <tr>
                            <th>Employee Name</th>
                            <th>Provident Fund Type</th>
                            <th>Employee Share</th>
                            <th>Organization Share</th>
                            <th>Status</th>
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
