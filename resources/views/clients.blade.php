<?php $page = 'clients'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Clients
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Clients
        @endslot
    @endcomponent

    @component('components.searchfilter')
    @endcomponent

    <div class="row staff-grid-row">
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                            src="{{ URL::asset('assets/img/profiles/avatar-19.jpg') }}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i
                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Global
                        Technologies</a></h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Barry Cuda</a></h5>
                <div class="small text-muted">CEO</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                            src="{{ URL::asset('assets/img/profiles/avatar-29.jpg') }}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i
                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Delta Infotech</a>
                </h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Tressa Wexler</a>
                </h5>
                <div class="small text-muted">Manager</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img
                            src="{{ URL::asset('assets/img/profiles/avatar-07.jpg') }}" alt=""></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                            class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i
                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Cream Inc</a></h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Ruby Bartlett</a>
                </h5>
                <div class="small text-muted">CEO</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img
                            src="{{ URL::asset('assets/img/profiles/avatar-06.jpg') }}" alt=""></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Wellware
                        Company</a></h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Misty Tison</a>
                </h5>
                <div class="small text-muted">CEO</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                            src="{{ URL::asset('assets/img/profiles/avatar-14.jpg') }}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Mustang
                        Technologies</a></h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Daniel Deacon</a>
                </h5>
                <div class="small text-muted">CEO</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                            src="{{ URL::asset('assets/img/profiles/avatar-18.jpg') }}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">International
                        Software Inc</a></h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Walter Weaver</a>
                </h5>
                <div class="small text-muted">CEO</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                            src="{{ URL::asset('assets/img/profiles/avatar-28.jpg') }}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Mercury Software
                        Inc</a></h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Amanda Warren</a>
                </h5>
                <div class="small text-muted">CEO</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{ url('client-profile') }}" class="avatar"><img alt=""
                            src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}"></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i
                                class="fa fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                            data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Carlson Tech</a>
                </h4>
                <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="{{ url('client-profile') }}">Betty Carlson</a>
                </h5>
                <div class="small text-muted">CEO</div>
                <a href="{{ url('chat') }}" class="btn btn-white btn-sm m-t-10">Message</a>
                <a href="{{ url('client-profile') }}" class="btn btn-white btn-sm m-t-10">View Profile</a>
            </div>
        </div>
    </div>
    </div>


    @component('components.model-popup')
    @endcomponent
@endsection

