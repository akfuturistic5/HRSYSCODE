<?php $page = 'training-type'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Training Type
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Training Type
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="training_type_data">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Type </th>
                            <th>Description </th>
                            <th>Status </th>
                            <th class="text-end">Action</th>
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
