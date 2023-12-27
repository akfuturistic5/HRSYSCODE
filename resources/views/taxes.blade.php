<?php $page = 'taxes'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Taxes
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Taxes
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0" id="taxes_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tax Name </th>
                            <th>Tax Percentage (%) </th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
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
