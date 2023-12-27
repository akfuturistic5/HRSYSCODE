<?php $page = 'contacts'; ?>
@extends('layout.mainlayout')
@section('content')
   <!-- Contact Wrapper -->
   <div class="chat-main-wrapper">
    <div class="col-lg-12 message-view">
        <div class="chat-window">
            <div class="fixed-header">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4 class="page-title mb-0">Contacts</h4>
                    </div>
                       <div class="col-6">
                        <div class="navbar justify-content-end">
                            <div class="search-box m-t-0">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                            <ul class="nav float-end custom-menu">
                                <li class="nav-item dropdown dropdown-action">
                                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-gear"></i></a>
                                    <div class="dropdown-menu custom-dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0)">Menu 1</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Menu 2</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-contents">
                <div class="chat-content-wrap">
                    <div class="chat-wrap-inner">
                        <div class="contact-box">
                        <div class="row">
                            <div class="contact-cat col-sm-4 col-lg-3">
                                <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#add_contact"><i class="fa-solid fa-plus"></i> Add Contact</a>
                                <div class="roles-menu">
                                    <ul>
                                        <li class="active"><a href="javascript:void(0);">All</a></li>
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#">Client</a></li>
                                        <li><a href="#">Staff</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contacts-list col-sm-8 col-lg-9">
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">Web Developer</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-09.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">Web Developer</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">John Smith</span>
                                                <span class="contact-date">Android Developer</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Mike Litorus</span>
                                                <span class="contact-date">IOS Developer</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Wilmer Deluna</span>
                                                <span class="contact-date">Team Leader</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-12.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Jeffrey Warden</span>
                                                <span class="contact-date">Web Developer</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-13.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Bernardo Galaviz</span>
                                                <span class="contact-date">Web Developer</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-01.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Lesley Grauer</span>
                                                <span class="contact-date">Team Leader</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Jeffery Lalor</span>
                                                <span class="contact-date">Team Leader</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-start user-img">
                                                <a href="{{url('profile')}}" class="avatar">
                                                    <img class="rounded-circle" src="{{ URL::asset('assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
                                                    <span class="status online"></span>
                                                </a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Loren Gatlin</span>
                                                <span class="contact-date">Android Developer</span>
                                            </div>
                                            <ul class="contact-action">
                                                <li class="dropdown dropdown-action">
                                                    <a href="" class="dropdown-toggle action-icon" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit_contact">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#delete_contact">Delete</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact-alphapets">
                                <div class="alphapets-inner">
                                    <a href="#">A</a>
                                    <a href="#">B</a>
                                    <a href="#">C</a>
                                    <a href="#">D</a>
                                    <a href="#">E</a>
                                    <a href="#">F</a>
                                    <a href="#">G</a>
                                    <a href="#">H</a>
                                    <a href="#">I</a>
                                    <a href="#">J</a>
                                    <a href="#">K</a>
                                    <a href="#">L</a>
                                    <a href="#">M</a>
                                    <a href="#">N</a>
                                    <a href="#">O</a>
                                    <a href="#">P</a>
                                    <a href="#">Q</a>
                                    <a href="#">R</a>
                                    <a href="#">S</a>
                                    <a href="#">T</a>
                                    <a href="#">U</a>
                                    <a href="#">V</a>
                                    <a href="#">W</a>
                                    <a href="#">X</a>
                                    <a href="#">Y</a>
                                    <a href="#">Z</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Contact Wrapper -->
    @component('components.model-popup')
    @endcomponent
@endsection
