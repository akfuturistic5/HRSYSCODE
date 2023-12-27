<?php $page = 'goal-type'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Goal Type
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Goal Type
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="goal_type_data">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Type </th>
                            <th>Description </th>
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
