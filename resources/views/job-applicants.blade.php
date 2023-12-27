<?php $page = 'job-applicants'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Job Applicants
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Job Applicants
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="job_applicants_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Apply Date</th>
                            <th class="text-center">Status</th>
                            <th>Resume</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
