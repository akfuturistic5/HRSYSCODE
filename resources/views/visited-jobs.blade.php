<?php $page = 'visited-jobs'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Visitied Jobs
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            User Dashboard
        @endslot
        @slot('li_4')
            Visitied Jobs
        @endslot
    @endcomponent


    @component('components.navcontents')
    @endcomponent
    @component('components.searchfilter')
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable" id="visited_jobs_data">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Department</th>
                            <th>Start Date</th>
                            <th>Expire Date</th>
                            <th class="text-center">Job Type</th>
                            <th class="text-center">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /Content End -->
@endsection
