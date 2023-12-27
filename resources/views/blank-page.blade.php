<?php $page = 'blank-page'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Blank Page
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Blank Page
        @endslot
    @endcomponent
    <!-- Content Starts -->
    Content Starts Here
    <!-- /Content End -->
@endsection
