<?php $page = 'interviewing'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Interviewing
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
            Interviewing
        @endslot
    @endcomponent
    @component('components.navcontents')
    @endcomponent

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-solid nav-justified flex-column">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#home">Apptitude</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#menu1">Schedule Interview</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div id="home" class="tab-pane show active">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0" id="interviewing_data">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Job Title</th>
                                                <th>Department</th>
                                                <th class="text-center">Job Type</th>
                                                <th class="text-center">Aptitude Test</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="card-box">
                                <div class="table-responsive">
                                    <table class="table table-striped custom-table mb-0 datatable" id="interviewing_data_2">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Job Title</th>
                                                <th>Department</th>
                                                <th class="text-center">Job Type</th>
                                                <th class="text-center">Aptitude Test</th>
                                                <th class="text-center">Schedule Interview</th>
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
            </div>
        </div>
        <!-- /Content End -->

    </div>
    <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
    @component('components.model-popup')
    @endcomponent
    @endsection
