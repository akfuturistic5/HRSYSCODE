<?php $page = 'job-applicants'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Aptitude
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
        @slot('li_3')
            Interviewing
        @endslot
        @slot('li_4')
            Aptitude
        @endslot
    @endcomponent


    @component('components.navcontents')
    @endcomponent

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <p>Name : <b>John Richerd</b></p>
                    <p>Code : <b>#1245</b></p>
                    <p>Job Type : <b>UI Development</b></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="m-b-30">Click button to answer your question.</p>
                    <div class="row">
                        <div class="col-md-6 text-center m-b-30">
                            <a href="{{ url('questions') }}" class="btn btn-primary w-100 submit-btn">Html</a>
                        </div>
                        <div class="col-md-6 text-center m-b-30">
                            <a href="{{ url('questions') }}" class="btn btn-primary w-100 submit-btn">Css</a>
                        </div>
                        <div class="col-md-6 text-center m-b-30">
                            <a href="{{ url('questions') }}" class="btn btn-primary w-100 submit-btn">Design</a>
                        </div>
                        <div class="col-md-6 text-center m-b-30">
                            <a href="{{ url('questions') }}" class="btn btn-primary w-100 submit-btn">Javascript</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content End -->
@endsection
