<?php $page = 'events'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Events
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Events
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Calendar -->
                            <div id="calendar"></div>
                            <!-- /Calendar -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
