<?php $page = 'chart-flot'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="content-page-header">
            <h5>Flot Chart</h5>
        </div>
    </div>
    <!-- /Page Header -->


    <div class="row">

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Bar Chart</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotBar1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Bar Chart</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotBar2"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Line Chart</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotLine1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Line ChartPoints</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotLine2"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Area Chart</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotArea1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Area Chart Points</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotArea2"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Pie Chart</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotPie1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Donut Chart</h5>
                </div>
                <div class="card-body">
                    <div class="h-250" id="flotPie2"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

    </div>
@endsection
