<?php $page = 'task-board'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Hospital Admin
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Task Board
        @endslot
    @endcomponent


    <div class="row board-view-header">
        <div class="col-4">
            <div class="pro-teams">
                <div class="pro-team-lead">
                    <h4>Lead</h4>
                    <div class="avatar-group">
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{ URL::asset('assets/img/profiles/avatar-01.jpg') }}">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{ URL::asset('assets/img/profiles/avatar-16.jpg') }}">
                        </div>
                        <div class="avatar">
                            <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal"
                                data-bs-target="#assign_leader"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pro-team-members">
                    <h4>Team</h4>
                    <div class="avatar-group">
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}">
                        </div>
                        <div class="avatar">
                            <img class="avatar-img rounded-circle border border-white" alt="User Image"
                                src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}">
                        </div>
                        <div class="avatar">
                            <a href="" class="avatar-title rounded-circle border border-white" data-bs-toggle="modal"
                                data-bs-target="#assign_user"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8 text-end">
            <a href="#" class="btn btn-white float-end ms-2" data-bs-toggle="modal"
                data-bs-target="#add_task_board"><i class="fa fa-plus"></i> Create List</a>
            <a href="{{ url('project-view') }}" class="btn btn-white float-end" title="View Board"><i
                    class="fa fa-link"></i></a>
        </div>

        <div class="col-12">
            <div class="pro-progress">
                <div class="pro-progress-bar">
                    <h4>Progress</h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 20%"></div>
                    </div>
                    <span>20%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="kanban-board card mb-0">
        <div class="card-body">
            <div class="kanban-cont">
                <div class="kanban-list kanban-danger">
                    <div class="kanban-header">
                        <span class="status-title">Pending</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Make a wireframe</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-success">Low</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-warning">Normal</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New
                            Task</a>
                    </div>
                </div>
                <div class="kanban-list kanban-info">
                    <div class="kanban-header">
                        <span class="status-title">Progress</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-warning">Normal</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New
                            Task</a>
                    </div>
                </div>
                <div class="kanban-list kanban-success">
                    <div class="kanban-header">
                        <span class="status-title">Completed</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap ks-empty">
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New
                            Task</a>
                    </div>
                </div>

                <div class="kanban-list kanban-warning">
                    <div class="kanban-header">
                        <span class="status-title">Inprogress</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-success">Low</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New
                            Task</a>
                    </div>
                </div>

                <div class="kanban-list kanban-purple">
                    <div class="kanban-header">
                        <span class="status-title">On Hold</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New
                            Task</a>
                    </div>
                </div>

                <div class="kanban-list kanban-primary">
                    <div class="kanban-header">
                        <span class="status-title">Review</span>
                        <div class="dropdown kanban-action">
                            <a href="" data-bs-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#edit_task_board">Edit</a>
                                <a class="dropdown-item" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="kanban-wrap">
                        <div class="card panel">
                            <div class="kanban-box">
                                <div class="task-board-header">
                                    <span class="status-title"><a href="task-view">Website redesign</a></span>
                                    <div class="dropdown kanban-task-action">
                                        <a href="" data-bs-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_task_modal">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-board-body">
                                    <div class="kanban-info">
                                        <div class="progress progress-xs">
                                            <div class="progress-bar" role="progressbar" style="width: 20%"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>70%</span>
                                    </div>
                                    <div class="kanban-footer">
                                        <span class="task-info-cont">
                                            <span class="task-date"><i class="fa-regular fa-clock"></i> Sep 26</span>
                                            <span class="task-priority badge bg-inverse-danger">High</span>
                                        </span>
                                        <span class="task-users">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg') }}"
                                                class="task-avatar" width="24" height="24" alt="">
                                            <span class="task-user-count">+2</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-new-task">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_task_modal">Add New
                            Task</a>
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
