 <?php $page = 'tasks'; ?>
 @extends('layout.mainlayout')
 @section('content')
 <div class="col-lg-7 message-view task-view task-left-sidebar">
    <div class="chat-window">
        <div class="fixed-header">
            <div class="navbar">
                <div class="float-start me-auto">
                    <div class="add-task-btn-wrapper">
                        <span class="add-task-btn btn btn-white btn-sm">
                            Add Task
                        </span>
                    </div>
                </div>
                <a class="task-chat profile-rightbar float-end" id="task_chat" href="#task_window"><i class="fa fa fa-comment"></i></a>
                <ul class="nav float-end custom-menu">
                    <li class="nav-item dropdown dropdown-action">
                        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-gear"></i></a>
                        <div class="dropdown-menu dropdown-menu-end custom-dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">Pending Tasks</a>
                            <a class="dropdown-item" href="javascript:void(0)">Completed Tasks</a>
                            <a class="dropdown-item" href="javascript:void(0)">All Tasks</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="chat-contents">
            <div class="chat-content-wrap">
                <div class="chat-wrap-inner">
                    <div class="chat-box">
                        <div class="task-wrapper">
                            <div class="task-list-container">
                                <div class="task-list-body">
                                    <ul id="task-list">
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Patient appointment booking</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Appointment booking with payment gateway</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="completed task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label">Doctor available module</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Patient and Doctor video conferencing</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Private chat module</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Patient Profile add</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="task-list-footer">
                                    <div class="new-task-wrapper">
                                        <textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
                                        <span class="error-message hidden">You need to enter a task first</span>
                                        <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                        <span class="btn" id="close-task-panel">Close</span>
                                    </div>
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
<div class="col-lg-5 message-view task-chat-view task-right-sidebar" id="task_window">
    <div class="chat-window">
        <div class="fixed-header">
            <div class="navbar">
                <div class="task-assign">
                    <a class="task-complete-btn" id="task_complete" href="javascript:void(0);">
                        <i class="material-icons">check</i> Mark Complete
                    </a>
                </div>
                <ul class="nav float-end custom-menu">
                    <li class="dropdown dropdown-action">
                        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-end custom-dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">Delete Task</a>
                            <a class="dropdown-item" href="javascript:void(0)">Settings</a>
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
                            <h4>Hospital Administration Phase 1</h4>
                            <div class="task-header">
                                <div class="assignee-info">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#assignee">
                                        <div class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                        </div>
                                        <div class="assigned-info">
                                            <div class="task-head-title">Assigned To</div>
                                            <div class="task-assignee">John Doe</div>
                                        </div>
                                    </a>
                                    <span class="remove-icon">
                                        <i class="fa fa-close"></i>
                                    </span>
                                </div>
                                <div class="task-due-date">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#assignee">
                                        <div class="due-icon">
                                            <span>
                                                <i class="material-icons">date_range</i>
                                            </span>
                                        </div>
                                        <div class="due-info">
                                            <div class="task-head-title">Due Date</div>
                                            <div class="due-date">Mar 26, 2019</div>
                                        </div>
                                    </a>
                                    <span class="remove-icon">
                                        <i class="fa fa-close"></i>
                                    </span>
                                </div>
                            </div>
                            <hr class="task-line">
                            <div class="task-desc">
                                <div class="task-desc-icon">
                                    <i class="material-icons">subject</i>
                                </div>
                                <div class="task-textarea">
                                    <textarea class="form-control" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <hr class="task-line">
                            <div class="task-information">
                                <span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">created task</span></span>
                                <div class="task-time">Jan 20, 2019</div>
                            </div>
                            <div class="task-information">
                                <span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">added to Hospital Administration</span></span>
                                <div class="task-time">Jan 20, 2019</div>
                            </div>
                            <div class="task-information">
                                <span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">assigned to John Doe</span></span>
                                <div class="task-time">Jan 20, 2019</div>
                            </div>
                            <hr class="task-line">
                            <div class="task-information">
                                <span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">changed the due date to Sep 28</span> </span>
                                <div class="task-time">9:09pm</div>
                            </div>
                            <div class="task-information">
                                <span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">assigned to you</span></span>
                                <div class="task-time">9:10pm</div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a href="profile.html" class="avatar">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-bubble">
                                        <div class="chat-content">
                                            <span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
                                            <p>I'm just looking around.</p>
                                            <p>Will you tell me something about yourself? </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="completed-task-msg"><span class="task-success"><a href="#">John Doe</a> completed this task.</span> <span class="task-time">Today at 9:27am</span></div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a href="profile.html" class="avatar">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image">
                                    </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-bubble">
                                        <div class="chat-content">
                                            <span class="task-chat-user">John Doe</span> <span class="file-attached">attached 3 files <i class="fa-solid fa-paperclip"></i></span> <span class="chat-time">Feb 17, 2019 at 4:32am</span>
                                            <ul class="attach-list">
                                                <li><i class="fa fa-file"></i> <a href="#">project_document.avi</a></li>
                                                <li><i class="fa fa-file"></i> <a href="#">video_conferencing.psd</a></li>
                                                <li><i class="fa fa-file"></i> <a href="#">landing_page.psd</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a href="profile.html" class="avatar">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
                                    </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-bubble">
                                        <div class="chat-content">
                                            <span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa-solid fa-paperclip"></i></span> <span class="chat-time">Yesterday at 9:16pm</span>
                                            <ul class="attach-list">
                                                <li class="pdf-file"><i class="fa-regular fa-file-pdf"></i> <a href="#">Document_2016.pdf</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat chat-left">
                                <div class="chat-avatar">
                                    <a href="profile.html" class="avatar">
                                        <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
                                    </a>
                                </div>
                                <div class="chat-body">
                                    <div class="chat-bubble">
                                        <div class="chat-content">
                                            <span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa-solid fa-paperclip"></i></span> <span class="chat-time">Today at 12:42pm</span>
                                            <ul class="attach-list">
                                                <li class="img-file">
                                                    <div class="attach-img-download"><a href="#">avatar-1.jpg</a></div>
                                                    <div class="task-attach-img"><img src="{{ URL::asset('/assets/img/user.jpg')}}" alt="User Image"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="task-information">
                                <span class="task-info-line">
                                    <a class="task-user" href="#">John Doe</a>
                                    <span class="task-info-subject">marked task as incomplete</span>
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
                    <a class="link attach-icon" href="#"><img src="{{ URL::asset('/assets/img/attachment.png')}}" alt="Attachment Icon"></a>
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
                <a class="avatar" href="#" data-bs-toggle="tooltip" title="Jeffery Lalor">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="User Image">
                </a>
                <a class="avatar" href="#" data-bs-toggle="tooltip" title="Richard Miles">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="User Image">
                </a>
                <a class="avatar" href="#" data-bs-toggle="tooltip" title="John Smith">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="User Image">
                </a>
                <a class="avatar" href="#" data-bs-toggle="tooltip" title="Mike Litorus">
                    <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="User Image">
                </a>
                <a href="#" class="followers-add" data-bs-toggle="modal" data-bs-target="#task_followers"><i class="material-icons">add</i></a>
            </div>
        </div>
    </div>
</div>

@component('components.model-popup')
@endcomponent
 @endsection
