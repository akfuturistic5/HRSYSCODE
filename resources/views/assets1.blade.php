<?php $page = 'assets1'; ?>
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
    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="assets_data">
                    <thead>
                        <tr>
                            <th>Asset User</th>
                            <th>Asset Name</th>
                            <th>Asset Id</th>
                            <th>Purchase Date</th>
                            <th>Warrenty</th>
                            <th>Warrenty End</th>
                            <th>Amount</th>
                            <th class="text-center">Status</th>
                            <th class="text-end"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
