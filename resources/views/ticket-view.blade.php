<?php $page = 'ticket-view'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="col-lg-8 message-view task-view">
        <div class="chat-window">
            <div class="fixed-header">
                <div class="navbar">
                    <div class="float-start ticket-view-details">
                        <div class="ticket-header">
                            <span>Status: </span> <span class="badge badge-warning">New</span> <span
                                class="m-l-15 text-muted">Client: </span>
                            <a href="#">Delta Infotech</a>
                            <span class="m-l-15 text-muted">Created: </span>
                            <span>5 Jan 2019 07:21 AM </span>
                            <span class="m-l-15 text-muted">Created by:</span>
                            <span><a href="{{ url('profile') }}">John Doe</a></span>
                        </div>
                    </div>
                    <a class="task-chat profile-rightbar float-end" id="task_chat" href="#task_window"><i
                            class="fa fa fa-comment"></i></a>
                </div>
            </div>
            <div class="chat-contents">
                <div class="chat-content-wrap">
                    <div class="chat-wrap-inner">
                        <div class="chat-box">
                            <div class="task-wrapper">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="project-title">
                                            <div class="m-b-20">
                                                <span class="h5 card-title ">Laptop Issue</span>
                                                <div class="float-end ticket-priority"><span>Priority:</span>
                                                    <div class="btn-group">
                                                        <a href="#" class="badge badge-danger dropdown-toggle"
                                                            data-bs-toggle="dropdown">Highest </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fa-regular fa-circle-dot text-danger"></i> Highest
                                                                priority</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fa-regular fa-circle-dot text-info"></i> High
                                                                priority</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fa fa-dot-circle-o text-primary"></i> Normal
                                                                priority</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fa-regular fa-circle-dot text-success"></i> Low
                                                                priority</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                            himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie
                                            tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam
                                            suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique
                                            lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci
                                            augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero
                                            non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula,
                                            a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat.
                                            Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa
                                            porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel
                                            ullamcorper ligula fermentum at. </p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.
                                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                            himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie
                                            tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam
                                            suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique
                                            lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci
                                            augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero
                                            non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula,
                                            a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat.
                                            Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa
                                            porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel
                                            ullamcorper ligula fermentum at. </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title m-b-20">Uploaded image files</h5>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6">
                                                <div class="uploaded-box">
                                                    <div class="uploaded-img">
                                                        <img src="{{ URL::asset('assets/img/placeholder.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="uploaded-img-name">
                                                        demo.png
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="uploaded-box">
                                                    <div class="uploaded-img">
                                                        <img src="{{ URL::asset('assets/img/placeholder.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="uploaded-img-name">
                                                        demo.png
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="uploaded-box">
                                                    <div class="uploaded-img">
                                                        <img src="{{ URL::asset('assets/img/placeholder.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>

                                                    <div class="uploaded-img-name">
                                                        demo.png
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="uploaded-box">
                                                    <div class="uploaded-img">
                                                        <img src="{{ URL::asset('assets/img/placeholder.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="uploaded-img-name">
                                                        demo.png
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <h5 class="card-title m-b-20">Uploaded files</h5>
                                        <ul class="files-list">
                                            <li>
                                                <div class="files-cont">
                                                    <div class="file-type">
                                                        <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                                                    </div>
                                                    <div class="files-info">
                                                        <span class="file-name text-ellipsis"><a
                                                                href="#">Ticket_document.xls</a></span>
                                                        <span class="file-author"><a href="#">John Doe</a></span>
                                                        <span class="file-date">May 5th at 8:21 PM</span>
                                                        <div class="file-size">Size: 14.8Mb</div>
                                                    </div>
                                                    <ul class="files-action">
                                                        <li class="dropdown dropdown-action">
                                                            <a href="" class="dropdown-toggle btn btn-link"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="material-icons">more_horiz</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0)">Download</a>
                                                                <a class="dropdown-item" href="#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#share_files">Share</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0)">Delete</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="files-cont">
                                                    <div class="file-type">
                                                        <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                                                    </div>
                                                    <div class="files-info">
                                                        <span class="file-name text-ellipsis"><a
                                                                href="#">Issue_report.xls</a></span>
                                                        <span class="file-author"><a href="#">John Doe</a></span>
                                                        <span class="file-date">May 5th at 5:41 PM</span>
                                                        <div class="file-size">Size: 14.8Mb</div>
                                                    </div>
                                                    <ul class="files-action">
                                                        <li class="dropdown dropdown-action">
                                                            <a href="" class="dropdown-toggle btn btn-link"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="material-icons">more_horiz</i></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0)">Download</a>
                                                                <a class="dropdown-item" href="#"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#share_files">Share</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0)">Delete</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-popup hide">
                                <p>
                                    <span class="task"></span>
                                    <span class="notification-text"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 message-view task-chat-view ticket-chat-view" id="task_window">
        <div class="chat-window">
            <div class="fixed-header">
                <div class="navbar">
                    <div class="task-assign">
                        <span class="assign-title">Assigned to </span>
                        <a href="#" data-bs-toggle="tooltip" data-placement="bottom" title="John Doe"
                            class="avatar">
                            <img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}" alt="">
                        </a>
                        <a href="#" class="followers-add" title="Add Assignee" data-bs-toggle="modal"
                            data-bs-target="#assignee"><i class="material-icons">add</i></a>
                    </div>
                    <ul class="nav float-end custom-menu">
                        <li class="nav-item dropdown dropdown-action">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#edit_ticket">Edit Ticket</a>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                    data-bs-target="#delete_ticket">Delete Ticket</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="chat-contents task-chat-contents">
                <div class="chat-content-wrap">
                    <div class="chat-wrap-inner">
                        <div class="chat-box">
                            <div class="chats">
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a href="{{ url('profile') }}" class="avatar">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-bubble">
                                            <div class="chat-content">
                                                <span class="task-chat-user">John Doe</span> <span class="chat-time">8:35
                                                    am</span>
                                                <p>I'm just looking around.</p>
                                                <p>Will you tell me something about yourself? </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="completed-task-msg">
                                    <span class="task-success">
                                        <a href="#">John Doe</a> closed this ticket.
                                    </span>
                                    <span class="task-time">Today at 9:27am</span>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a href="{{ url('profile') }}" class="avatar">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-bubble">
                                            <div class="chat-content">
                                                <span class="task-chat-user">John Doe</span>
                                                <span class="file-attached">attached 3 files <i
                                                        class="fa fa-paperclip"></i></span>
                                                <span class="chat-time">Feb 17, 2019 at 4:32am</span>
                                                <ul class="attach-list">
                                                    <li><i class="fa fa-file"></i> <a
                                                            href="#">project_document.avi</a></li>
                                                    <li><i class="fa fa-file"></i> <a
                                                            href="#">video_conferencing.psd</a></li>
                                                    <li><i class="fa fa-file"></i> <a href="#">landing_page.psd</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a href="{{ url('profile') }}" class="avatar">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-bubble">
                                            <div class="chat-content">
                                                <span class="task-chat-user">Jeffery Lalor</span>
                                                <span class="file-attached">attached file <i
                                                        class="fa fa-paperclip"></i></span>
                                                <span class="chat-time">Yesterday at 9:16pm</span>
                                                <ul class="attach-list">
                                                    <li class="pdf-file"><i class="fa-regular fa-file-pdf"></i> <a
                                                            href="#">Document_2016.pdf</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a href="{{ url('profile') }}" class="avatar">
                                            <img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-bubble">
                                            <div class="chat-content">
                                                <span class="task-chat-user">Jeffery Lalor</span>
                                                <span class="file-attached">attached file <i
                                                        class="fa fa-paperclip"></i></span>
                                                <span class="chat-time">Today at 12:42pm</span>
                                                <ul class="attach-list">
                                                    <li class="img-file">
                                                        <div class="attach-img-download"><a
                                                                href="#">avatar-1.jpg</a></div>
                                                        <div class="task-attach-img"><img
                                                                src="{{ URL::asset('assets/img/user.jpg') }}"
                                                                alt=""></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="task-information">
                                    <span class="task-info-line">
                                        <a class="task-user" href="#">John Doe</a>
                                        <span class="task-info-subject">marked ticket as reopened</span>
                                    </span>
                                    <div class="task-time">1:16pm</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-footer">
                <div class="message-bar">
                    <div class="message-inner">
                        <a class="link attach-icon" href="#"><img src="{{ URL::asset('/assets/img/attachment.png')}}"
                                alt=""></a>
                        <div class="message-area">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Type message..."></textarea>
                                <button class="btn btn-primary" type="button"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-members task-followers">
                    <span class="followers-title">Followers</span>
                    <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                        <img src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                        <img src="{{ URL::asset('assets/img/profiles/avatar-10.jpg') }}" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                        <img src="{{ URL::asset('assets/img/profiles/avatar-05.jpg') }}" alt="">
                    </a>
                    <a href="#" data-bs-toggle="tooltip" title="Wilmer Deluna" class="avatar">
                        <img src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}" alt="">
                    </a>
                    <a href="#" class="followers-add" data-bs-toggle="modal" data-bs-target="#task_followers"><i
                            class="material-icons">add</i></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
