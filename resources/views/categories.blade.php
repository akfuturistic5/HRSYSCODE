<?php $page = 'categories'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Categories
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Accounts
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0" id="categories_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name </th>
                            <th>Sub-Category Name</th>
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
