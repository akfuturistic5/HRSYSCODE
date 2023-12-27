<?php $page = 'subscribed-companies'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Subscribed Companies
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Subscriptions
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Joining</h6>
                <h4>12 <span>This Month</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Renewal</h6>
                <h4>3 <span>This Month</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Renewal</h6>
                <h4>0 <span>Next Month</span></h4>
            </div>
        </div>
        <div class="col-md-3">
            <div class="stats-info">
                <h6>Total Companies</h6>
                <h4>312</h4>
            </div>
        </div>
    </div>

    <!-- Company List -->
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover custom-table datatable mb-0" id="subscribed_companies_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Client</th>
                            <th>Plan</th>
                            <th>Users</th>
                            <th>Plan Duration</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Amount</th>
                            <th>Plan Status</th>
                            <th>Update Plan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /Company List -->

   @component('components.model-popup')
   @endcomponent
@endsection
