<?php $page = 'payments-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Payments Report
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Payments Report
        @endslot
    @endcomponent


    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="payments_reports_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Client Name</th>
                            <th>Payment Method</th>
                            <th>Invoice</th>
                            <th class="text-center">Amount</th>
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
@endsection
