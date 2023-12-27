<?php $page = 'data-tables'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Data Tables
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Data Tables
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Default Datatable</h4>
                    <p class="card-text">
                        This is the most basic example of the datatables with zero configuration. Use the
                        <code>.datatable</code> class to initialize datatables.
                    </p>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="datatable table table-stripped mb-0" id="data_tables_data">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
