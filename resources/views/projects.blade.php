<?php $page = 'projects'; ?>
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
        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
            <div class="card w-100">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="{{url('project-view')}}">Office Management</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
                        <span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-13.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
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
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" title="40%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
            <div class="card w-100">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="{{url('project-view')}}">Project Management</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">2</span> <span clasRs="text-muted">open tasks, </span>
                        <span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-13.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
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
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" title="40%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
            <div class="card w-100">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="{{url('project-view')}}">Video Calling App</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
                        <span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-13.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
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
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" title="40%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-sm-6 col-md-4 col-xl-3 d-flex">
            <div class="card w-100">
                <div class="card-body">
                    <div class="dropdown dropdown-action profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_project"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_project"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="project-title"><a href="{{url('project-view')}}">Hospital Administration</a></h4>
                    <small class="block text-ellipsis m-b-15">
                        <span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
                        <span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
                    </small>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. When an unknown printer took a galley of type and
                        scrambled it...
                    </p>
                    <div class="pro-deadline m-b-15">
                        <div class="sub-title">
                            Deadline:
                        </div>
                        <div class="text-muted">
                            17 Apr 2019
                        </div>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Project Leader :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor"><img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="project-members m-b-15">
                        <div>Team :</div>
                        <ul class="team-members">
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Doe"><img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Richard Miles"><img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="John Smith"><img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="tooltip" title="Mike Litorus"><img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
                            </li>
                            <li class="dropdown avatar-dropdown">
                                <a href="#" class="all-users dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">+15</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-12.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-13.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image">
                                        </a>
                                        <a class="avatar avatar-xs" href="#">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
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
                    </div>
                    <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success w-40" role="progressbar" data-bs-toggle="tooltip" title="40%"></div>
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
