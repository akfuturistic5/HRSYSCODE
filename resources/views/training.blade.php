<?php $page = 'training'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Training
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Training
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Training Type</th>
                            <th>Trainer</th>
                            <th>Employee</th>
                            <th>Time Duration</th>
                            <th>Description </th>
                            <th>Cost </th>
                            <th>Status </th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Git Training</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe </a>
                                </h2>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
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
                            <td>7 May 2019 - 10 May 2019</td>
                            <td>Lorem ipsum dollar</td>
                            <td>$400</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
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
                                            data-bs-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Swift Training</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Richard Miles</a>
                                </h2>
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
                            <td>7 May 2019 - 10 May 2019</td>
                            <td>Lorem ipsum dollar</td>
                            <td>$800</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-danger"></i> Inactive
                                    </a>
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
                                            data-bs-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Node Training</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">John Doe </a>
                                </h2>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
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
                            <td>7 May 2019 - 10 May 2019</td>
                            <td>Lorem ipsum dollar</td>
                            <td>$400</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
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
                                            data-bs-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Angular Training</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Mike Litorus </a>
                                </h2>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
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
                            <td>7 May 2019 - 10 May 2019</td>
                            <td>Lorem ipsum dollar</td>
                            <td>$400</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
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
                                            data-bs-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Git Training</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img alt=""
                                            src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}"></a>
                                    <a href="{{ url('profile') }}">Wilmer Deluna </a>
                                </h2>
                            </td>
                            <td>
                                <ul class="team-members">
                                    <li>
                                        <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}"></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Richard Miles" data-bs-toggle="tooltip"><img
                                                alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></a>
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
                            <td>7 May 2019 - 10 May 2019</td>
                            <td>Lorem ipsum dollar</td>
                            <td>$400</td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
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
                                            data-bs-target="#edit_training"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_training"><i class="fa-regular fa-trash-can m-r-5"></i>
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
