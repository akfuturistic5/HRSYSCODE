<?php $page = 'client-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Clients
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Clients
        @endslot
    @endcomponent



    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable" id="clients_list_data">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Client ID</th>
                            <th>Contact Person</th>
                            <th>Email</th>
                            <th>Mobile</th>
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

