<?php $page = 'assets-reports'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Reports
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Reports
        @endslot
    @endcomponent
    <div class="row filter-row mb-4">
        <div class="col-sm-6 col-md-3 col-xxl-3">
            <div class="input-block mb-3">
                <div class="cals-icon">
                    <input class="form-control" type="text" placeholder="Search by asset name">
                    <span class="icon-text"><i class="fa fa-laptop"></i></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xxl-3">
            <div class="input-block mb-3">
                <div class="cals-icon">
                    <input class="form-control" type="text" placeholder="Search by allocated name">
                    <span class="icon-text"><i class="fa fa-user"></i></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xxl-2">
            <div class="input-block mb-3 ">
                <div class="cals-icon">
                    <input class="form-control" type="text" placeholder="Asset ID">
                    <span class="icon-text"><i class="fa-regular fa-folder-open"></i></span>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xxl-2">
            <div class="input-block mb-3">
                <div class="cal-icon">
                    <input class="form-control" type="text" placeholder="Category">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 col-xxl-2">
            <a href="#" class="btn btn-primary w-100 text-capitalize"><i class="file-text"></i> Generate Report</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive table-newdatatable">
                <table class="table table-new custom-table mb-0 datatable" id="assets_reports_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Asset ID</th>
                            <th>Category</th>
                            <th>Department</th>
                            <th>Allocated to</th>
                            <th>Status</th>
                            <th>Action</th>
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
