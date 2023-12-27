<?php $page = 'project-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Projects
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Projects
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
                            <th>Project</th>
                            <th>Project Id</th>
                            <th>Leader</th>
                            <th>Team</th>
                            <th>Deadline</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Office Management</a>
                            </td>
                            <td>PRO-0001</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members text-nowrap">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li class="dropdown avatar-dropdown">
                                        <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">+15</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="avatar-group">
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-13.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-01.jpg') }}">
                                                </a>
                                                <a class="avatar avatar-xs" href="#">
                                                    <img alt=""
                                                        src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="avatar-pagination">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="visually-hidden">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Project Management</a>
                            </td>
                            <td>PRO-0002</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-warning"></i> Medium </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Video Calling App</a>
                            </td>
                            <td>PRO-0003</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Low </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Hospital Administration</a>
                            </td>
                            <td>PRO-0004</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Office Management</a>
                            </td>
                            <td>PRO-0005</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Project Management</a>
                            </td>
                            <td>PRO-0006</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Video Calling App</a>
                            </td>
                            <td>PRO-0007</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Hospital Administration</a>
                            </td>
                            <td>PRO-0008</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Office Management</a>
                            </td>
                            <td>PRO-0009</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Project Management</a>
                            </td>
                            <td>PRO-0010</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="{{ url('project-view') }}">Video Calling App</a>
                            </td>
                            <td>PRO-0011</td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}"></a>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="John Doe" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="John Smith" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Mike Litorus" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="all-users">+15</a>
                                    </li>
                                </ul>
                            </td>
                            <td>17 Apr 2019 </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-danger"></i> High </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> High</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-warning"></i> Medium</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Low</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-regular fa-circle-dot text-success"></i> Active </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
