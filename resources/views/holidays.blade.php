<?php $page = 'holidays'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Holidays 2019
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Holidays
        @endslot
    @endcomponent



    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title </th>
                            <th>Holiday Date</th>
                            <th>Day</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody id="holidays_data">
                        
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
