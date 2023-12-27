<?php $page = 'budgets'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Budgets
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Accounts
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0" id="budgets_data">
                    <thead>
                        <tr>
                            <th>Budget No</th>
                            <th>Budget Title</th>
                            <th>Budget Type</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Total Revenue</th>
                            <th>Total Expenses</th>
                            <th>Tax Amount</th>
                            <th>Budget Amount</th>
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
