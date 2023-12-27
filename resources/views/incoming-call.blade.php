<?php $page = 'incoming-call'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="call-wrapper">
        <div class="call-inner">
            <div class="call-user">
                <img class="call-avatar" src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}" alt="">
                <h4>Wilmer Deluna</h4>
                <span>Calling ...</span>
            </div>
            <div class="call-items">
                <a href="{{ url('chat') }}" class="btn call-item call-end"><i class="material-icons">call_end</i></a>
                <a href="{{ url('video-call') }}" class="btn call-item call-start"><i class="material-icons">call</i></a>
            </div>
        </div>
    </div>

@endsection
