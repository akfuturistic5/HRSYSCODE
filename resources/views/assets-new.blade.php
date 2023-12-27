<?php $page = 'assets-new'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Assets
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Assets
        @endslot
    @endcomponent
    <!-- Search Filter -->
    <div class="row">
        <div class="col-lg-2 d-flex">
            <div class="total-widget flex-fill">
                <h6>Total Assets</h6>
                <h4>20</h4>
            </div>
        </div>
        <div class="col-lg-2 d-flex">
            <div class="total-widget flex-fill">
                <h6>Allocated</h6>
                <h4>10</h4>
            </div>
        </div>
        <div class="col-lg-2 d-flex">
            <div class="total-widget flex-fill">
                <h6>Damaged</h6>
                <h4>2</h4>
            </div>
        </div>
        <div class="col-lg-2 d-flex">
            <div class="total-widget flex-fill">
                <h6>Repaired</h6>
                <h4>1</h4>
            </div>
        </div>
        <div class="col-lg-2 d-flex">
            <div class="total-widget flex-fill">
                <h6>Not Using</h6>
                <h4>7</h4>
            </div>
        </div>
        <div class="col-lg-2 d-flex">
            <div class="total-widget flex-fill">
                <h6>Lost Items</h6>
                <h4>2</h4>
            </div>
        </div>
    </div>
    <!-- /Search Filter -->

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive table-newdatatable">
                <table class="table table-new custom-table mb-0 datatable" id="assets_new_data">
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
