<?php $page = 'shift-scheduling'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Daily Scheduling
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Employees
        @endslot
        @slot('li_3')
            Shift Scheduling
        @endslot
    @endcomponent

    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th>Scheduled Shift</th>
                            <th>Fri 21</th>
                            <th>Sat 22</th>
                            <th>Sun 23</th>
                            <th>Mon 24</th>
                            <th>Tue 25</th>
                            <th>Wed 26</th>
                            <th>Thu 27</th>
                            <th>Fri 28</th>
                            <th>Sat 29</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Richard Miles <span>Web Developer</span></a>
                                </h2>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Smith <span>Android Developer</span></a>
                                </h2>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Mike Litorus <span>IOS Developer</span></a>
                                </h2>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Wilmer Deluna <span>Team Leader</span></a>
                                </h2>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Jeffrey Warden <span>Web Developer</span></a>
                                </h2>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>

                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Bernardo Galaviz <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <h2>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_schedule"
                                            style="border:2px dashed #1eb53a">
                                            <span class="username-info m-b-10">6:30 am - 9:30 pm ( 14 hrs 15 mins)</span>
                                            <span class="userrole-info">Web Designer - SMARTHR</span>
                                        </a>
                                    </h2>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                            <td>
                                <div class="user-add-shedule-list">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#add_schedule">
                                        <span><i class="fa fa-plus"></i></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
