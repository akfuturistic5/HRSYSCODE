<?php $page = 'expenses'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Expenses
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Expenses
        @endslot
    @endcomponent

    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="expenses_data">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Purchase From</th>
                            <th>Purchase Date</th>
                            <th>Purchased By</th>
                            <th>Amount</th>
                            <th>Paid By</th>
                            <th class="text-center">Status</th>
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
