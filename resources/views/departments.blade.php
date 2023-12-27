<?php $page = 'departments'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Department
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Department
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div>
                <table class="table table-striped custom-table mb-0 datatable" id="departments_data">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Department Name</th>
                            <th class="text-center">Action</th>
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
