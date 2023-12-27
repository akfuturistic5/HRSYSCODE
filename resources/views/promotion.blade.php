<?php $page = 'promotion'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Promotion
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Promotion
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">

                <!-- Promotion Table -->
                <table class="table table-striped custom-table mb-0 datatable" id="promotion_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Promoted Employee </th>
                            <th>Department</th>
                            <th>Promotion Designation From </th>
                            <th>Promotion Designation To </th>
                            <th>Promotion Date </th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
                <!-- /Promotion Table -->

            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
