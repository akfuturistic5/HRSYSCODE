@if (
    !Route::is([
        'approval-setting',
        'change-password',
        'chat',
        'compose',
        'cron-setting',
        'inbox',
        'incoming-call',
        'invoice-settings',
        'leave-type',
        'localization',
        'mail-view',
        'notifications-settings',
        'performance-setting',
        'roles-permissions',
        'salary-settings',
        'settings',
        'tasks',
        'theme-settings',
        'toxbox-setting',
        'video-call',
        'voice-call',
    ]))
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <nav class="greedys sidebar-horizantal">
                    <ul class="list-inline-item list-unstyled links">
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('admin-dashboard') ? 'active' : '' }}"
                                        href="{{ url('admin-dashboard') }}">Admin Dashboard</a></li>
                                <li><a class="{{ Request::is('employee-dashboard') ? 'active' : '' }}"
                                        href="{{ url('employee-dashboard') }}">Employee Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="{{ Request::is('chat') ? 'active' : '' }}"><a
                                        href="{{ url('chat') }}">Chat</a></li>
                                <li class="submenu">
                                    <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li class="{{ Request::is('voice-call') ? 'active' : '' }}"><a
                                                href="{{ url('voice-call') }}">Voice Call</a></li>
                                        <li class="{{ Request::is('video-call') ? 'active' : '' }}"><a
                                                href="{{ url('video-call') }}">Video Call</a></li>
                                        <li class="{{ Request::is('outgoing-call') ? 'active' : '' }}"><a
                                                href="{{ url('outgoing-call') }}">Outgoing Call</a></li>
                                        <li class="{{ Request::is('incoming-call') ? 'active' : '' }}"><a
                                                href="{{ url('incoming-call') }}">Incoming Call</a></li>
                                    </ul>
                                </li>
                                <li><a class="{{ Request::is('events') ? 'active' : '' }}"
                                        href="{{ url('events') }}">Calendar</a></li>
                                <li><a class="{{ Request::is('contacts') ? 'active' : '' }}"
                                        href="{{ url('contacts') }}">Contacts</a></li>
                                <li class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{ url('inbox') }}"><a
                                        href="{{ url('inbox') }}">Email</a></li>
                                <li><a class="{{ Request::is('file-manager') ? 'active' : '' }}"
                                        href="{{ url('file-manager') }}" href="file-manager">File Manager</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Employees</span>
                        </li>
                        <li class="submenu">
                            <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('employees', 'employees-list') ? 'active' : '' }}"
                                        href="{{ url('employees') }}">All Employees</a></li>
                                <li><a class="{{ Request::is('holidays') ? 'active' : '' }}"
                                        href="{{ url('holidays') }}">Holidays</a></li>
                                <li><a class="{{ Request::is('leaves') ? 'active' : '' }}"
                                        href="{{ url('leaves') }}">Leaves (Admin) <span
                                            class="badge rounded-pill bg-primary float-end">1</span></a></li>
                                <li><a class="{{ Request::is('leaves-employee') ? 'active' : '' }}"
                                        href="{{ url('leaves-employee') }}">Leaves (Employee)</a></li>
                                <li><a class="{{ Request::is('leave-settings') ? 'active' : '' }}"
                                        href="{{ url('leave-settings') }}">Leave Settings</a></li>
                                <li><a class="{{ Request::is('attendance') ? 'active' : '' }}"
                                        href="{{ url('attendance') }}">Attendance (Admin)</a></li>
                                <li><a class="{{ Request::is('attendance-employee') ? 'active' : '' }}"
                                        href="{{ url('attendance-employee') }}">Attendance (Employee)</a></li>
                                <li><a class="{{ Request::is('departments') ? 'active' : '' }}"
                                        href="{{ url('departments') }}">Departments</a></li>
                                <li><a class="{{ Request::is('designations') ? 'active' : '' }}"
                                        href="{{ url('designations') }}">Designations</a></li>
                                <li><a class="{{ Request::is('timesheet') ? 'active' : '' }}"
                                        href="{{ url('timesheet') }}">Timesheet</a></li>
                                <li><a class="{{ Request::is('shift-scheduling', 'shift-list') ? 'active' : '' }}"
                                        href="{{ url('shift-scheduling') }}">Shift & Schedule</a></li>
                                <li><a class="{{ Request::is('overtime') ? 'active' : '' }}"
                                        href="{{ url('overtime') }}" href="overtime">Overtime</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('clients', 'clients-list') ? 'active' : '' }}">
                            <a href="{{ url('clients') }}"><i class="la la-users"></i> <span>Clients</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('projects', 'project-list', 'project-view') ? 'active' : '' }}"
                                        href="{{ url('projects') }}">Projects</a></li>
                                <li><a class="{{ Request::is('tasks') ? 'active' : '' }}"
                                        href="{{ url('tasks') }}">Tasks</a></li>
                                <li><a class="{{ Request::is('task-board') ? 'active' : '' }}"
                                        href="{{ url('task-board') }}">Task Board</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('leads') ? 'active' : '' }}">
                            <a href="{{ url('leads') }}"><i class="la la-user-secret"></i> <span>Leads</span></a>
                        </li>
                        <li class="{{ Request::is('tickets', 'ticket-view') ? 'active' : '' }}">
                            <a href="{{ url('tickets') }}"><i class="la la-ticket"></i> <span>Tickets</span></a>
                        </li>
                        <li class="menu-title">
                            <span>HR</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('estimates', 'create-estimate', 'edit-estimate', 'estimate-view') ? 'active' : '' }}"
                                        href="{{ url('estimates') }}">Estimates</a></li>
                                <li><a class="{{ Request::is('invoices', 'create-invoice', 'edit-invoice', 'invoice-view') ? 'active' : '' }}"
                                        href="{{ url('invoices') }}">Invoices</a></li>
                                <li><a class="{{ Request::is('payments') ? 'active' : '' }}"
                                        href="{{ url('payments') }}">Payments</a></li>
                                <li><a class="{{ Request::is('expenses') ? 'active' : '' }}"
                                        href="{{ url('expenses') }}">Expenses</a></li>
                                <li><a class="{{ Request::is('provident-fund') ? 'active' : '' }}"
                                        href="{{ url('provident-fund') }}">Provident Fund</a></li>
                                <li><a class="{{ Request::is('taxes') ? 'active' : '' }}" href="{{ url('taxes') }}"
                                        href="taxes">Taxes</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('categories', 'sub-category') ? 'active' : '' }}"
                                        href="{{ url('categories') }}">Categories</a></li>
                                <li><a class="{{ Request::is('budgets') ? 'active' : '' }}"
                                        href="{{ url('budgets') }}">Budgets</a></li>
                                <li><a class="{{ Request::is('budget-expenses') ? 'active' : '' }}"
                                        href="{{ url('budget-expenses') }}">Budget Expenses</a></li>
                                <li><a class="{{ Request::is('budget-revenues') ? 'active' : '' }}"
                                        href="{{ url('budget-revenues') }}">Budget Revenues</a></li>
                            </ul>
                        </li>
                    </ul>
                    <button class="viewmoremenu">More Menu</button>
                    <ul class="hidden-links hidden">
                        <li class="submenu">
                            <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('salary') ? 'active' : '' }}"
                                        href="{{ url('salary') }}"> Employee Salary </a></li>
                                <li><a class="{{ Request::is('salary-view') ? 'active' : '' }}"
                                        href="{{ url('salary-view') }}"> Payslip </a></li>
                                <li><a class="{{ Request::is('payroll-items') ? 'active' : '' }}"
                                        href="{{ url('payroll-items') }}"> Payroll Items </a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('policies') ? 'active' : '' }}">
                            <a class="{{ Request::is('policies') ? 'active' : '' }}" href="{{ url('policies') }}"><i
                                    class="la la-file-pdf-o"></i> <span>Policies</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('expense-reports') ? 'active' : '' }}"
                                        href="{{ url('expense-reports') }}"> Expense Report </a></li>
                                <li><a class="{{ Request::is('invoice-reports') ? 'active' : '' }}"
                                        href="{{ url('invoice-reports') }}"> Invoice Report </a></li>
                                <li><a class="{{ Request::is('payments-reports') ? 'active' : '' }}"
                                        href="{{ url('payments-reports') }}"> Payments Report </a></li>
                                <li><a class="{{ Request::is('project-reports') ? 'active' : '' }}"
                                        href="{{ url('project-reports') }}"> Project Report </a></li>
                                <li><a class="{{ Request::is('task-reports') ? 'active' : '' }}"
                                        href="{{ url('task-reports') }}"> Task Report </a></li>
                                <li><a class="{{ Request::is('user-reports') ? 'active' : '' }}"
                                        href="{{ url('user-reports') }}"> User Report </a></li>
                                <li><a class="{{ Request::is('employee-reports') ? 'active' : '' }}"
                                        href="{{ url('employee-reports') }}"> Employee Report </a></li>
                                <li><a class="{{ Request::is('payslip-reports') ? 'active' : '' }}"
                                        href="{{ url('payslip-reports') }}"> Payslip Report </a></li>
                                <li><a class="{{ Request::is('attendance-reports') ? 'active' : '' }}"
                                        href="{{ url('attendance-reports') }}"> Attendance Report </a></li>
                                <li><a class="{{ Request::is('leave-reports') ? 'active' : '' }}"
                                        href="{{ url('leave-reports') }}"> Leave Report </a></li>
                                <li><a class="{{ Request::is('daily-reports') ? 'active' : '' }}"
                                        href="{{ url('daily-reports') }}"> Daily Report </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Performance</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('performance-indicator') ? 'active' : '' }}"
                                        href="{{ url('performance-indicator') }}"> Performance Indicator </a></li>
                                <li><a class="{{ Request::is('performance') ? 'active' : '' }}"
                                        href="{{ url('performance') }}"> Performance Review </a></li>
                                <li><a class="{{ Request::is('performance-appraisal') ? 'active' : '' }}"
                                        href="{{ url('performance-appraisal') }}"> Performance Appraisal </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('goal-tracking') ? 'active' : '' }}"
                                        href="{{ url('goal-tracking') }}"> Goal List </a></li>
                                <li><a class="{{ Request::is('goal-type') ? 'active' : '' }}"
                                        href="{{ url('goal-type') }}"> Goal Type </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-edit"></i> <span> Training </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('training') ? 'active' : '' }}"
                                        href="{{ url('training') }}"> Training List </a></li>
                                <li><a class="{{ Request::is('trainers') ? 'active' : '' }}"
                                        href="{{ url('trainers') }}"> Trainers</a></li>
                                <li><a class="{{ Request::is('training-type') ? 'active' : '' }}"
                                        href="{{ url('training-type') }}"> Training Type </a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('promotion') ? 'active' : '' }}"><a
                                href="{{ url('promotion') }}"><i class="la la-bullhorn"></i>
                                <span>Promotion</span></a></li>
                        <li class="{{ Request::is('resignation') ? 'active' : '' }}"><a
                                href="{{ url('resignation') }}"><i class="la la-external-link-square"></i>
                                <span>Resignation</span></a></li>
                        <li class="{{ Request::is('termination') ? 'active' : '' }}"><a
                                href="{{ url('termination') }}"><i class="la la-times-circle"></i>
                                <span>Termination</span></a></li>
                        <li class="menu-title">
                            <span>Administration</span>
                        </li>
                        <li
                            class="{{ Request::is('assets1', 'assets-new', 'assets-details', 'assets-category' . 'assets-reports') ? 'active' : '' }}">
                            <a href="{{ url('assets1') }}"><i class="la la-object-ungroup"></i>
                                <span>Assets</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('user-dashboard', 'user-all-jobs', 'saved-jobs', 'applied-jobs', 'interviewing', 'offered-jobs', 'visited-jobs', 'archived-jobs', 'job-aptitude', 'questions') ? 'active' : '' }}"
                                        href="{{ url('user-dashboard') }}"> User Dasboard </a></li>
                                <li><a class="{{ Request::is('jobs-dashboard') ? 'active' : '' }}"
                                        href="{{ url('jobs-dashboard') }}"> Jobs Dasboard </a></li>
                                <li><a class="{{ Request::is('jobs') ? 'active' : '' }}"
                                        href="{{ url('jobs') }}"> Manage Jobs </a></li>
                                <li><a class="{{ Request::is('manage-resumes') ? 'active' : '' }}"
                                        href="{{ url('manage-resumes') }}"> Manage Resumes </a></li>
                                <li><a class="{{ Request::is('shortlist-candidates') ? 'active' : '' }}"
                                        href="{{ url('shortlist-candidates') }}"> Shortlist Candidates </a></li>
                                <li><a class="{{ Request::is('interview-questions') ? 'active' : '' }}"
                                        href="{{ url('interview-questions') }}"> Interview Questions </a></li>
                                <li><a class="{{ Request::is('offer_approvals') ? 'active' : '' }}"
                                        href="{{ url('offer_approvals') }}"> Offer Approvals </a></li>
                                <li><a class="{{ Request::is('experiance-level') ? 'active' : '' }}"
                                        href="{{ url('experiance-level') }}"> Experience Level </a></li>
                                <li><a class="{{ Request::is('candidates') ? 'active' : '' }}"
                                        href="{{ url('candidates') }}"> Candidates List </a></li>
                                <li><a class="{{ Request::is('schedule-timing') ? 'active' : '' }}"
                                        href="{{ url('schedule-timing') }}"> Schedule timing </a></li>
                                <li><a class="{{ Request::is('apptitude-result') ? 'active' : '' }}"
                                        href="{{ url('apptitude-result') }}"> Aptitude Results </a></li>
                                <!-- <li><a class="{{ Request::is('jobs-applicants') ? 'active' : '' }}" href="{{ url('jobs-applicants') }}"> Applied Candidates  </a></li> -->
                            </ul>
                        </li>
                        <li class="{{ Request::is('knowledgebase', 'knowledgebase-view') ? 'active' : '' }}">
                            <a href="{{ url('knowledgebase') }}"><i class="la la-question"></i>
                                <span>Knowledgebase</span></a>
                        </li>
                        <li class="{{ Request::is('activities') ? 'active' : '' }}">
                            <a href="{{ url('activities') }}"><i class="la la-bell"></i> <span>Activities</span></a>
                        </li>
                        <li class="{{ Request::is('users') ? 'active' : '' }}">
                            <a href="{{ url('users') }}"><i class="la la-user-plus"></i> <span>Users</span></a>
                        </li>
                        <li class="{{ Request::is('settings') ? 'active' : '' }}">
                            <a href="{{ url('settings') }}"><i class="la la-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-user"></i> <span> Profile </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('profile') ? 'active' : '' }}"
                                        href="{{ url('profile') }}"> Employee Profile </a></li>
                                <li><a class="{{ Request::is('client-profile') ? 'active' : '' }}"
                                        href="{{ url('client-profile') }}"> Client Profile </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">
                                        Login </a></li>
                                <li class="{{ Request::is('register') ? 'active' : '' }}"><a
                                        href="{{ url('register') }}"> Register </a></li>
                                <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a
                                        href="{{ url('forgot-password') }}"> Forgot Password </a></li>
                                <li class="{{ Request::is('otp') ? 'active' : '' }}"><a
                                        href="{{ url('otp') }}"> OTP </a></li>
                                <li class="{{ Request::is('lock-screen') ? 'active' : '' }}"><a
                                        href="{{ url('lock-screen') }}"> Lock Screen </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a
                                        href="{{ url('error-404') }}">404 Error </a></li>
                                <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a
                                        href="{{ url('error-500') }}">500 Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('subscriptions') ? 'active' : '' }}"
                                        href="{{ url('subscriptions') }}"> Subscriptions (Admin) </a></li>
                                <li><a class="{{ Request::is('subscriptions-company') ? 'active' : '' }}"
                                        href="{{ url('subscriptions-company') }}"> Subscriptions (Company) </a></li>
                                <li><a class="{{ Request::is('subscribed-companies') ? 'active' : '' }}"
                                        href="{{ url('subscribed-companies') }}"> Subscribed Companies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('search') ? 'active' : '' }}"
                                        href="{{ url('search') }}"> Search </a></li>
                                <li><a class="{{ Request::is('faq') ? 'active' : '' }}"
                                        href="{{ url('faq') }}"> FAQ </a></li>
                                <li><a class="{{ Request::is('terms') ? 'active' : '' }}"
                                        href="{{ url('terms') }}"> Terms </a></li>
                                <li><a class="{{ Request::is('privacy-policy') ? 'active' : '' }}"
                                        href="{{ url('privacy-policy') }}"> Privacy Policy </a></li>
                                <li><a class="{{ Request::is('blank-page') ? 'active' : '' }}"
                                        href="{{ url('blank-page') }}"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>UI Interface</span>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-get-pocket"></i> <span> Base UI </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('alerts') ? 'active' : '' }}"
                                        href="{{ url('alerts') }}">Alerts</a></li>
                                <li><a class="{{ Request::is('accordions') ? 'active' : '' }}"
                                        href="{{ url('accordions') }}">Accordions</a></li>
                                <li><a class="{{ Request::is('avatar') ? 'active' : '' }}"
                                        href="{{ url('avatar') }}">Avatar</a></li>
                                <li><a class="{{ Request::is('badges') ? 'active' : '' }}"
                                        href="{{ url('badges') }}">Badges</a></li>
                                <li><a class="{{ Request::is('buttons') ? 'active' : '' }}"
                                        href="{{ url('buttons') }}">Buttons</a></li>
                                <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}"
                                        href="{{ url('buttongroup') }}">Button Group</a></li>
                                <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}"
                                        href="{{ url('breadcrumbs') }}">Breadcrumb</a></li>
                                <li><a class="{{ Request::is('cards') ? 'active' : '' }}"
                                        href="{{ url('cards') }}">Cards</a></li>
                                <li><a class="{{ Request::is('carousel') ? 'active' : '' }}"
                                        href="{{ url('carousel') }}">Carousel</a></li>
                                <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}"
                                        href="{{ url('dropdowns') }}">Dropdowns</a></li>
                                <li><a class="{{ Request::is('grid') ? 'active' : '' }}"
                                        href="{{ url('grid') }}">Grid</a></li>
                                <li><a class="{{ Request::is('images') ? 'active' : '' }}"
                                        href="{{ url('images') }}">Images</a></li>
                                <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}"
                                        href="{{ url('lightbox') }}">Lightbox</a></li>
                                <li><a class="{{ Request::is('media') ? 'active' : '' }}"
                                        href="{{ url('media') }}">Media</a></li>
                                <li><a class="{{ Request::is('modal') ? 'active' : '' }}"
                                        href="{{ url('modal') }}">Modals</a></li>
                                <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}"
                                        href="{{ url('offcanvas') }}">Offcanvas</a></li>
                                <li><a class="{{ Request::is('pagination') ? 'active' : '' }}"
                                        href="{{ url('pagination') }}">Pagination</a></li>
                                <li><a class="{{ Request::is('popover') ? 'active' : '' }}"
                                        href="{{ url('popover') }}">Popover</a></li>
                                <li><a class="{{ Request::is('progress') ? 'active' : '' }}"
                                        href="{{ url('progress') }}">Progress Bars</a></li>
                                <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}"
                                        href="{{ url('placeholders') }}">Placeholders</a></li>
                                <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}"
                                        href="{{ url('rangeslider') }}">Range Slider</a></li>
                                <li><a class="{{ Request::is('spinners') ? 'active' : '' }}"
                                        href="{{ url('spinners') }}">Spinner</a></li>
                                <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}"
                                        href="{{ url('sweetalerts') }}">Sweet Alerts</a></li>
                                <li><a class="{{ Request::is('tab') ? 'active' : '' }}"
                                        href="{{ url('tab') }}">Tabs</a></li>
                                <li><a class="{{ Request::is('toastr') ? 'active' : '' }}"
                                        href="{{ url('toastr') }}">Toasts</a></li>
                                <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}"
                                        href="{{ url('tooltip') }}">Tooltip</a></li>
                                <li><a class="{{ Request::is('typography') ? 'active' : '' }}"
                                        href="{{ url('typography') }}">Typography</a></li>
                                <li><a class="{{ Request::is('video') ? 'active' : '' }}"
                                        href="{{ url('video') }}">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-dropbox"></i> <span> Elements </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}"
                                        href="{{ url('ribbon') }}">Ribbon</a></li>
                                <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}"
                                        href="{{ url('clipboard') }}">Clipboard</a></li>
                                <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}"
                                        href="{{ url('drag-drop') }}">Drag & Drop</a></li>
                                <li><a class="{{ Request::is('rating') ? 'active' : '' }}"
                                        href="{{ url('rating') }}">Rating</a></li>
                                <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}"
                                        href="{{ url('text-editor') }}">Text Editor</a></li>
                                <li><a class="{{ Request::is('counter') ? 'active' : '' }}"
                                        href="{{ url('counter') }}">Counter</a></li>
                                <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}"
                                        href="{{ url('scrollbar') }}">Scrollbar</a></li>
                                <li><a class="{{ Request::is('notification') ? 'active' : '' }}"
                                        href="{{ url('notification') }}">Notification</a></li>
                                <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}"
                                        href="{{ url('stickynote') }}">Sticky Note</a></li>
                                <li><a class="{{ Request::is('timeline') ? 'active' : '' }}"
                                        href="{{ url('timeline') }}">Timeline</a></li>
                                <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}"
                                        href="{{ url('horizontal-timeline') }}">Horizontal Timeline</a></li>
                                <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}"
                                        href="{{ url('form-wizard') }}">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-chart-bar"></i> <span> Charts </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}"
                                        href="{{ url('chart-apex') }}">Apex Charts</a></li>
                                <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}"
                                        href="{{ url('chart-js') }}">Chart Js</a></li>
                                <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}"
                                        href="{{ url('chart-morris') }}">Morris Charts</a></li>
                                <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}"
                                        href="{{ url('chart-flot') }}">Flot Charts</a></li>
                                <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}"
                                        href="{{ url('chart-peity') }}">Peity Charts</a></li>
                                <li><a class="{{ Request::is('chart-c3') ? 'active' : '' }}"
                                        href="{{ url('chart-c3') }}">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-icons"></i> <span> Icons </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}"
                                        href="{{ url('icon-fontawesome') }}">Fontawesome Icons</a></li>
                                <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}"
                                        href="{{ url('icon-feather') }}">Feather Icons</a></li>
                                <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}"
                                        href="{{ url('icon-ionic') }}">Ionic Icons</a></li>
                                <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}"
                                        href="{{ url('icon-material') }}">Material Icons</a></li>
                                <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}"
                                        href="{{ url('icon-pe7') }}">Pe7 Icons</a></li>
                                <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}"
                                        href="{{ url('icon-simpleline') }}">Simpleline Icons</a></li>
                                <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}"
                                        href="{{ url('icon-themify') }}">Themify Icons</a></li>
                                <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}"
                                        href="{{ url('icon-weather') }}">Weather Icons</a></li>
                                <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}"
                                        href="{{ url('icon-typicon') }}">Typicon Icons</a></li>
                                <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}"
                                        href="{{ url('icon-flag') }}">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}"
                                        href="{{ url('form-basic-inputs') }}">Basic Inputs </a></li>
                                <li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}"
                                        href="{{ url('form-input-groups') }}">Input Groups </a></li>
                                <li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}"
                                        href="{{ url('form-horizontal') }}">Horizontal Form </a></li>
                                <li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}"
                                        href="{{ url('form-vertical') }}"> Vertical Form </a></li>
                                <li><a class="{{ Request::is('form-mask') ? 'active' : '' }}"
                                        href="{{ url('form-mask') }}"> Form Mask </a></li>
                                <li><a class="{{ Request::is('form-validation') ? 'active' : '' }}"
                                        href="{{ url('form-validation') }}"> Form Validation </a></li>
                                <li><a class="{{ Request::is('form-select2') ? 'active' : '' }}"
                                        href="{{ url('form-select2') }}">Form Select2 </a></li>
                                <li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}"
                                        href="{{ url('form-fileupload') }}">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="la la-table"></i> <span> Tables </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class="{{ Request::is('tables-basic') ? 'active' : '' }}"
                                        href="{{ url('tables-basic') }}">Basic Tables </a></li>
                                <li><a class="{{ Request::is('data-tables') ? 'active' : '' }}"
                                        href="{{ url('data-tables') }}">Data Table </a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Extras</span>
                        </li>
                        <li>
                            <a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span
                                    class="badge badge-primary ms-auto">v3.4</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> <span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <ul class="sidebar-vertical">
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('admin-dashboard') ? 'active' : '' }}"
                                    href="{{ url('admin-dashboard') }}">Admin Dashboard</a></li>
                            <li><a class="{{ Request::is('employee-dashboard') ? 'active' : '' }}"
                                    href="{{ url('employee-dashboard') }}">Employee Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ Request::is('chat') ? 'active' : '' }}"><a
                                    href="{{ url('chat') }}">Chat</a></li>
                            <li class="submenu">
                                <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li class="{{ Request::is('voice-call') ? 'active' : '' }}"><a
                                            href="{{ url('voice-call') }}">Voice Call</a></li>
                                    <li class="{{ Request::is('video-call') ? 'active' : '' }}"><a
                                            href="{{ url('video-call') }}">Video Call</a></li>
                                    <li class="{{ Request::is('outgoing-call') ? 'active' : '' }}"><a
                                            href="{{ url('outgoing-call') }}">Outgoing Call</a></li>
                                    <li class="{{ Request::is('incoming-call') ? 'active' : '' }}"><a
                                            href="{{ url('incoming-call') }}">Incoming Call</a></li>
                                </ul>
                            </li>
                            <li><a class="{{ Request::is('events') ? 'active' : '' }}"
                                    href="{{ url('events') }}">Calendar</a></li>
                            <li><a class="{{ Request::is('contacts') ? 'active' : '' }}"
                                    href="{{ url('contacts') }}">Contacts</a></li>
                            <li class="{{ Request::is('inbox') ? 'active' : '' }}" href="{{ url('inbox') }}"><a
                                    href="{{ url('inbox') }}">Email</a></li>
                            <li><a class="{{ Request::is('file-manager') ? 'active' : '' }}"
                                    href="{{ url('file-manager') }}" href="file-manager">File Manager</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">
                        <span>Employees</span>
                    </li>
                    <li class="submenu">
                        <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('employees', 'employees-list') ? 'active' : '' }}"
                                    href="{{ url('employees') }}">All Employees</a></li>
                            <li><a class="{{ Request::is('holidays') ? 'active' : '' }}"
                                    href="{{ url('holidays') }}">Holidays</a></li>
                            <li><a class="{{ Request::is('leaves') ? 'active' : '' }}"
                                    href="{{ url('leaves') }}">Leaves (Admin) <span
                                        class="badge rounded-pill bg-primary float-end">1</span></a></li>
                            <li><a class="{{ Request::is('leaves-employee') ? 'active' : '' }}"
                                    href="{{ url('leaves-employee') }}">Leaves (Employee)</a></li>
                            <li><a class="{{ Request::is('leave-settings') ? 'active' : '' }}"
                                    href="{{ url('leave-settings') }}">Leave Settings</a></li>
                            <li><a class="{{ Request::is('attendance') ? 'active' : '' }}"
                                    href="{{ url('attendance') }}">Attendance (Admin)</a></li>
                            <li><a class="{{ Request::is('attendance-employee') ? 'active' : '' }}"
                                    href="{{ url('attendance-employee') }}">Attendance (Employee)</a></li>
                            <li><a class="{{ Request::is('departments') ? 'active' : '' }}"
                                    href="{{ url('departments') }}">Departments</a></li>
                            <li><a class="{{ Request::is('designations') ? 'active' : '' }}"
                                    href="{{ url('designations') }}">Designations</a></li>
                            <li><a class="{{ Request::is('timesheet') ? 'active' : '' }}"
                                    href="{{ url('timesheet') }}">Timesheet</a></li>
                            <li><a class="{{ Request::is('shift-scheduling', 'shift-list') ? 'active' : '' }}"
                                    href="{{ url('shift-scheduling') }}">Shift & Schedule</a></li>
                            <li><a class="{{ Request::is('overtime') ? 'active' : '' }}"
                                    href="{{ url('overtime') }}" href="overtime">Overtime</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('clients', 'clients-list') ? 'active' : '' }}">
                        <a href="{{ url('clients') }}"><i class="la la-users"></i> <span>Clients</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-rocket"></i> <span> Projects</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('projects', 'project-list', 'project-view') ? 'active' : '' }}"
                                    href="{{ url('projects') }}">Projects</a></li>
                            <li><a class="{{ Request::is('tasks') ? 'active' : '' }}"
                                    href="{{ url('tasks') }}">Tasks</a></li>
                            <li><a class="{{ Request::is('task-board') ? 'active' : '' }}"
                                    href="{{ url('task-board') }}">Task Board</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('leads') ? 'active' : '' }}">
                        <a href="{{ url('leads') }}"><i class="la la-user-secret"></i> <span>Leads</span></a>
                    </li>
                    <li class="{{ Request::is('tickets', 'ticket-view') ? 'active' : '' }}">
                        <a href="{{ url('tickets') }}"><i class="la la-ticket"></i> <span>Tickets</span></a>
                    </li>
                    <li class="menu-title">
                        <span>HR</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-files-o"></i> <span> Sales </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('estimates', 'create-estimate', 'edit-estimate', 'estimate-view') ? 'active' : '' }}"
                                    href="{{ url('estimates') }}">Estimates</a></li>
                            <li><a class="{{ Request::is('invoices', 'create-invoice', 'edit-invoice', 'invoice-view') ? 'active' : '' }}"
                                    href="{{ url('invoices') }}">Invoices</a></li>
                            <li><a class="{{ Request::is('payments') ? 'active' : '' }}"
                                    href="{{ url('payments') }}">Payments</a></li>
                            <li><a class="{{ Request::is('expenses') ? 'active' : '' }}"
                                    href="{{ url('expenses') }}">Expenses</a></li>
                            <li><a class="{{ Request::is('provident-fund') ? 'active' : '' }}"
                                    href="{{ url('provident-fund') }}">Provident Fund</a></li>
                            <li><a class="{{ Request::is('taxes') ? 'active' : '' }}" href="{{ url('taxes') }}"
                                    href="taxes">Taxes</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('categories', 'sub-category') ? 'active' : '' }}"
                                    href="{{ url('categories') }}">Categories</a></li>
                            <li><a class="{{ Request::is('budgets') ? 'active' : '' }}"
                                    href="{{ url('budgets') }}">Budgets</a></li>
                            <li><a class="{{ Request::is('budget-expenses') ? 'active' : '' }}"
                                    href="{{ url('budget-expenses') }}">Budget Expenses</a></li>
                            <li><a class="{{ Request::is('budget-revenues') ? 'active' : '' }}"
                                    href="{{ url('budget-revenues') }}">Budget Revenues</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('salary') ? 'active' : '' }}" href="{{ url('salary') }}">
                                    Employee Salary </a></li>
                            <li><a class="{{ Request::is('salary-view') ? 'active' : '' }}"
                                    href="{{ url('salary-view') }}"> Payslip </a></li>
                            <li><a class="{{ Request::is('payroll-items') ? 'active' : '' }}"
                                    href="{{ url('payroll-items') }}"> Payroll Items </a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('policies') ? 'active' : '' }}">
                        <a class="{{ Request::is('policies') ? 'active' : '' }}" href="policies"><i
                                class="la la-file-pdf-o"></i> <span>Policies</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('expense-reports') ? 'active' : '' }}"
                                    href="{{ url('expense-reports') }}"> Expense Report </a></li>
                            <li><a class="{{ Request::is('invoice-reports') ? 'active' : '' }}"
                                    href="{{ url('invoice-reports') }}"> Invoice Report </a></li>
                            <li><a class="{{ Request::is('payments-reports') ? 'active' : '' }}"
                                    href="{{ url('payments-reports') }}"> Payments Report </a></li>
                            <li><a class="{{ Request::is('project-reports') ? 'active' : '' }}"
                                    href="{{ url('project-reports') }}"> Project Report </a></li>
                            <li><a class="{{ Request::is('task-reports') ? 'active' : '' }}"
                                    href="{{ url('task-reports') }}"> Task Report </a></li>
                            <li><a class="{{ Request::is('user-reports') ? 'active' : '' }}"
                                    href="{{ url('user-reports') }}"> User Report </a></li>
                            <li><a class="{{ Request::is('employee-reports') ? 'active' : '' }}"
                                    href="{{ url('employee-reports') }}"> Employee Report </a></li>
                            <li><a class="{{ Request::is('payslip-reports') ? 'active' : '' }}"
                                    href="{{ url('payslip-reports') }}"> Payslip Report </a></li>
                            <li><a class="{{ Request::is('attendance-reports') ? 'active' : '' }}"
                                    href="{{ url('attendance-reports') }}"> Attendance Report </a></li>
                            <li><a class="{{ Request::is('leave-reports') ? 'active' : '' }}"
                                    href="{{ url('leave-reports') }}"> Leave Report </a></li>
                            <li><a class="{{ Request::is('daily-reports') ? 'active' : '' }}"
                                    href="{{ url('daily-reports') }}"> Daily Report </a></li>
                        </ul>
                    </li>
                    <li class="menu-title">
                        <span>Performance</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('performance-indicator') ? 'active' : '' }}"
                                    href="{{ url('performance-indicator') }}"> Performance Indicator </a></li>
                            <li><a class="{{ Request::is('performance') ? 'active' : '' }}"
                                    href="{{ url('performance') }}"> Performance Review </a></li>
                            <li><a class="{{ Request::is('performance-appraisal') ? 'active' : '' }}"
                                    href="{{ url('performance-appraisal') }}"> Performance Appraisal </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('goal-tracking') ? 'active' : '' }}"
                                    href="{{ url('goal-tracking') }}"> Goal List </a></li>
                            <li><a class="{{ Request::is('goal-type') ? 'active' : '' }}"
                                    href="{{ url('goal-type') }}"> Goal Type </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-edit"></i> <span> Training </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('training') ? 'active' : '' }}"
                                    href="{{ url('training') }}"> Training List </a></li>
                            <li><a class="{{ Request::is('trainers') ? 'active' : '' }}"
                                    href="{{ url('trainers') }}"> Trainers</a></li>
                            <li><a class="{{ Request::is('training-type') ? 'active' : '' }}"
                                    href="{{ url('training-type') }}"> Training Type </a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('promotion') ? 'active' : '' }}"><a href="{{ url('promotion') }}"><i
                                class="la la-bullhorn"></i> <span>Promotion</span></a></li>
                    <li class="{{ Request::is('resignation') ? 'active' : '' }}"><a
                            href="{{ url('resignation') }}"><i class="la la-external-link-square"></i>
                            <span>Resignation</span></a></li>
                    <li class="{{ Request::is('termination') ? 'active' : '' }}"><a
                            href="{{ url('termination') }}"><i class="la la-times-circle"></i>
                            <span>Termination</span></a></li>
                    <li class="menu-title">
                        <span>Administration</span>
                    </li>
                    <li
                        class="{{ Request::is('assets1', 'assets-new', 'assets-details', 'assets-category', 'assets-reports') ? 'active' : '' }}">
                        <a href="{{ url('assets1') }}"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('user-dashboard', 'user-all-jobs', 'saved-jobs', 'applied-jobs', 'interviewing', 'offered-jobs', 'visited-jobs', 'archived-jobs', 'job-aptitude', 'questions') ? 'active' : '' }}"
                                    href="{{ url('user-dashboard') }}"> User Dasboard </a></li>
                            <li><a class="{{ Request::is('jobs-dashboard') ? 'active' : '' }}"
                                    href="{{ url('jobs-dashboard') }}"> Jobs Dasboard </a></li>
                            <li><a class="{{ Request::is('jobs') ? 'active' : '' }}" href="{{ url('jobs') }}">
                                    Manage Jobs </a></li>
                            <li><a class="{{ Request::is('manage-resumes') ? 'active' : '' }}"
                                    href="{{ url('manage-resumes') }}"> Manage Resumes </a></li>
                            <li><a class="{{ Request::is('shortlist-candidates') ? 'active' : '' }}"
                                    href="{{ url('shortlist-candidates') }}"> Shortlist Candidates </a></li>
                            <li><a class="{{ Request::is('interview-questions') ? 'active' : '' }}"
                                    href="{{ url('interview-questions') }}"> Interview Questions </a></li>
                            <li><a class="{{ Request::is('offer_approvals') ? 'active' : '' }}"
                                    href="{{ url('offer_approvals') }}"> Offer Approvals </a></li>
                            <li><a class="{{ Request::is('experiance-level') ? 'active' : '' }}"
                                    href="{{ url('experiance-level') }}"> Experience Level </a></li>
                            <li><a class="{{ Request::is('candidates') ? 'active' : '' }}"
                                    href="{{ url('candidates') }}"> Candidates List </a></li>
                            <li><a class="{{ Request::is('schedule-timing') ? 'active' : '' }}"
                                    href="{{ url('schedule-timing') }}"> Schedule timing </a></li>
                            <li><a class="{{ Request::is('apptitude-result') ? 'active' : '' }}"
                                    href="{{ url('apptitude-result') }}"> Aptitude Results </a></li>
                            <!-- <li><a class="{{ Request::is('jobs-applicants') ? 'active' : '' }}" href="{{ url('jobs-applicants') }}"> Applied Candidates  </a></li> -->
                        </ul>
                    </li>
                    <li class="{{ Request::is('knowledgebase', 'knowledgebase-view') ? 'active' : '' }}">
                        <a href="{{ url('knowledgebase') }}"><i class="la la-question"></i>
                            <span>Knowledgebase</span></a>
                    </li>
                    <li class="{{ Request::is('activities') ? 'active' : '' }}">
                        <a href="{{ url('activities') }}"><i class="la la-bell"></i> <span>Activities</span></a>
                    </li>
                    <li class="{{ Request::is('users') ? 'active' : '' }}">
                        <a href="{{ url('users') }}"><i class="la la-user-plus"></i> <span>Users</span></a>
                    </li>
                    <li class="{{ Request::is('settings') ? 'active' : '' }}">
                        <a href="{{ url('settings') }}"><i class="la la-cog"></i> <span>Settings</span></a>
                    </li>
                    <li class="menu-title">
                        <span>Pages</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-user"></i> <span> Profile </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('profile', 'user-asset-details') ? 'active' : '' }}"
                                    href="{{ url('profile') }}"> Employee Profile </a></li>
                            <li><a class="{{ Request::is('client-profile') ? 'active' : '' }}"
                                    href="{{ url('client-profile') }}"> Client Profile </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-key"></i> <span> Authentication </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">
                                    Login </a></li>
                            <li class="{{ Request::is('register') ? 'active' : '' }}"><a
                                    href="{{ url('register') }}"> Register </a></li>
                            <li class="{{ Request::is('forgot-password') ? 'active' : '' }}"><a
                                    href="{{ url('forgot-password') }}"> Forgot Password </a></li>
                            <li class="{{ Request::is('otp') ? 'active' : '' }}"><a href="{{ url('otp') }}">
                                    OTP </a></li>
                            <li class="{{ Request::is('lock-screen') ? 'active' : '' }}"><a
                                    href="{{ url('lock-screen') }}"> Lock Screen </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-exclamation-triangle"></i> <span> Error Pages </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="{{ Request::is('error-404') ? 'active' : '' }}"><a
                                    href="{{ url('error-404') }}">404 Error </a></li>
                            <li class="{{ Request::is('error-500') ? 'active' : '' }}"><a
                                    href="{{ url('error-500') }}">500 Error </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-hand-o-up"></i> <span> Subscriptions </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('subscriptions') ? 'active' : '' }}"
                                    href="{{ url('subscriptions') }}"> Subscriptions (Admin) </a></li>
                            <li><a class="{{ Request::is('subscriptions-company') ? 'active' : '' }}"
                                    href="{{ url('subscriptions-company') }}"> Subscriptions (Company) </a></li>
                            <li><a class="{{ Request::is('subscribed-companies') ? 'active' : '' }}"
                                    href="{{ url('subscribed-companies') }}"> Subscribed Companies</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-columns"></i> <span> Pages </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('search') ? 'active' : '' }}" href="{{ url('search') }}">
                                    Search </a></li>
                            <li><a class="{{ Request::is('faq') ? 'active' : '' }}" href="{{ url('faq') }}">
                                    FAQ </a></li>
                            <li><a class="{{ Request::is('terms') ? 'active' : '' }}" href="{{ url('terms') }}">
                                    Terms </a></li>
                            <li><a class="{{ Request::is('privacy-policy') ? 'active' : '' }}"
                                    href="{{ url('privacy-policy') }}"> Privacy Policy </a></li>
                            <li><a class="{{ Request::is('blank-page') ? 'active' : '' }}"
                                    href="{{ url('blank-page') }}"> Blank Page </a></li>
                        </ul>
                    </li>
                    <li class="menu-title">
                        <span>UI Interface</span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-get-pocket"></i> <span> Base UI </span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="{{ Request::is('alerts') ? 'active' : '' }}"
                                    href="{{ url('alerts') }}">Alerts</a></li>
                            <li><a class="{{ Request::is('accordions') ? 'active' : '' }}"
                                    href="{{ url('accordions') }}">Accordions</a></li>
                            <li><a class="{{ Request::is('avatar') ? 'active' : '' }}"
                                    href="{{ url('avatar') }}">Avatar</a></li>
                            <li><a class="{{ Request::is('badges') ? 'active' : '' }}"
                                    href="{{ url('badges') }}">Badges</a></li>
                            <li><a class="{{ Request::is('buttons') ? 'active' : '' }}"
                                    href="{{ url('buttons') }}">Buttons</a></li>
                            <li><a class="{{ Request::is('buttongroup') ? 'active' : '' }}"
                                    href="{{ url('buttongroup') }}">Button Group</a></li>
                            <li><a class="{{ Request::is('breadcrumbs') ? 'active' : '' }}"
                                    href="{{ url('breadcrumbs') }}">Breadcrumb</a></li>
                            <li><a class="{{ Request::is('cards') ? 'active' : '' }}"
                                    href="{{ url('cards') }}">Cards</a></li>
                            <li><a class="{{ Request::is('carousel') ? 'active' : '' }}"
                                    href="{{ url('carousel') }}">Carousel</a></li>
                            <li><a class="{{ Request::is('dropdowns') ? 'active' : '' }}"
                                    href="{{ url('dropdowns') }}">Dropdowns</a></li>
                            <li><a class="{{ Request::is('grid') ? 'active' : '' }}"
                                    href="{{ url('grid') }}">Grid</a></li>
                            <li><a class="{{ Request::is('images') ? 'active' : '' }}"
                                    href="{{ url('images') }}">Images</a></li>
                            <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}"
                                    href="{{ url('lightbox') }}">Lightbox</a></li>
                            <li><a class="{{ Request::is('media') ? 'active' : '' }}"
                                    href="{{ url('media') }}">Media</a></li>
                            <li><a class="{{ Request::is('modal') ? 'active' : '' }}"
                                    href="{{ url('modal') }}">Modals</a></li>
                            <li><a class="{{ Request::is('offcanvas') ? 'active' : '' }}"
                                    href="{{ url('offcanvas') }}">Offcanvas</a></li>
                            <li><a class="{{ Request::is('pagination') ? 'active' : '' }}"
                                    href="{{ url('pagination') }}">Pagination</a></li>
                            <li><a class="{{ Request::is('popover') ? 'active' : '' }}"
                                    href="{{ url('popover') }}">Popover</a></li>
                            <li><a class="{{ Request::is('progress') ? 'active' : '' }}"
                                    href="{{ url('progress') }}">Progress Bars</a></li>
                            <li><a class="{{ Request::is('placeholders') ? 'active' : '' }}"
                                    href="{{ url('placeholders') }}">Placeholders</a></li>
                            <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}"
                                    href="{{ url('rangeslider') }}">Range Slider</a></li>
                            <li><a class="{{ Request::is('spinners') ? 'active' : '' }}"
                                    href="{{ url('spinners') }}">Spinner</a></li>
                            <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}"
                                    href="{{ url('sweetalerts') }}">Sweet Alerts</a></li>
                            <li><a class="{{ Request::is('tab') ? 'active' : '' }}"
                                    href="{{ url('tab') }}">Tabs</a></li>
                            <li><a class="{{ Request::is('toastr') ? 'active' : '' }}"
                                    href="{{ url('toastr') }}">Toasts</a></li>
                            <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}"
                                    href="{{ url('tooltip') }}">Tooltip</a></li>
                            <li><a class="{{ Request::is('typography') ? 'active' : '' }}"
                                    href="{{ url('typography') }}">Typography</a></li>
                            <li><a class="{{ Request::is('video') ? 'active' : '' }}"
                                    href="{{ url('video') }}">Video</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-dropbox"></i> <span> Elements </span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}"
                                    href="{{ url('ribbon') }}">Ribbon</a></li>
                            <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}"
                                    href="{{ url('clipboard') }}">Clipboard</a></li>
                            <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}"
                                    href="{{ url('drag-drop') }}">Drag & Drop</a></li>
                            <li><a class="{{ Request::is('rating') ? 'active' : '' }}"
                                    href="{{ url('rating') }}">Rating</a></li>
                            <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}"
                                    href="{{ url('text-editor') }}">Text Editor</a></li>
                            <li><a class="{{ Request::is('counter') ? 'active' : '' }}"
                                    href="{{ url('counter') }}">Counter</a></li>
                            <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}"
                                    href="{{ url('scrollbar') }}">Scrollbar</a></li>
                            <li><a class="{{ Request::is('notification') ? 'active' : '' }}"
                                    href="{{ url('notification') }}">Notification</a></li>
                            <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}"
                                    href="{{ url('stickynote') }}">Sticky Note</a></li>
                            <li><a class="{{ Request::is('timeline') ? 'active' : '' }}"
                                    href="{{ url('timeline') }}">Timeline</a></li>
                            <li><a class="{{ Request::is('horizontal-timeline') ? 'active' : '' }}"
                                    href="{{ url('horizontal-timeline') }}">Horizontal Timeline</a></li>
                            <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}"
                                    href="{{ url('form-wizard') }}">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-chart-bar"></i> <span> Charts </span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}"
                                    href="{{ url('chart-apex') }}">Apex Charts</a></li>
                            <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}"
                                    href="{{ url('chart-js') }}">Chart Js</a></li>
                            <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}"
                                    href="{{ url('chart-morris') }}">Morris Charts</a></li>
                            <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}"
                                    href="{{ url('chart-flot') }}">Flot Charts</a></li>
                            <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}"
                                    href="{{ url('chart-peity') }}">Peity Charts</a></li>
                            <li><a class="{{ Request::is('chart-c3') ? 'active' : '' }}"
                                    href="{{ url('chart-c3') }}">C3 Charts</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-icons"></i> <span> Icons </span> <span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}"
                                    href="{{ url('icon-fontawesome') }}">Fontawesome Icons</a></li>
                            <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}"
                                    href="{{ url('icon-feather') }}">Feather Icons</a></li>
                            <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}"
                                    href="{{ url('icon-ionic') }}">Ionic Icons</a></li>
                            <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}"
                                    href="{{ url('icon-material') }}">Material Icons</a></li>
                            <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}"
                                    href="{{ url('icon-pe7') }}">Pe7 Icons</a></li>
                            <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}"
                                    href="{{ url('icon-simpleline') }}">Simpleline Icons</a></li>
                            <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}"
                                    href="{{ url('icon-themify') }}">Themify Icons</a></li>
                            <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}"
                                    href="{{ url('icon-weather') }}">Weather Icons</a></li>
                            <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}"
                                    href="{{ url('icon-typicon') }}">Typicon Icons</a></li>
                            <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}"
                                    href="{{ url('icon-flag') }}">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-object-group"></i> <span> Forms </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}"
                                    href="{{ url('form-basic-inputs') }}">Basic Inputs </a></li>
                            <li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}"
                                    href="{{ url('form-input-groups') }}">Input Groups </a></li>
                            <li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}"
                                    href="{{ url('form-horizontal') }}">Horizontal Form </a></li>
                            <li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}"
                                    href="{{ url('form-vertical') }}"> Vertical Form </a></li>
                            <li><a class="{{ Request::is('form-mask') ? 'active' : '' }}"
                                    href="{{ url('form-mask') }}"> Form Mask </a></li>
                            <li><a class="{{ Request::is('form-validation') ? 'active' : '' }}"
                                    href="{{ url('form-validation') }}"> Form Validation </a></li>
                            <li><a class="{{ Request::is('form-select2') ? 'active' : '' }}"
                                    href="{{ url('form-select2') }}">Form Select2 </a></li>
                            <li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}"
                                    href="{{ url('form-fileupload') }}">File Upload </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-table"></i> <span> Tables </span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Request::is('tables-basic') ? 'active' : '' }}"
                                    href="{{ url('tables-basic') }}">Basic Tables </a></li>
                            <li><a class="{{ Request::is('data-tables') ? 'active' : '' }}"
                                    href="{{ url('data-tables') }}">Data Table </a></li>
                        </ul>
                    </li>
                    <li class="menu-title">
                        <span>Extras</span>
                    </li>
                    <li>
                        <a href="#"><i class="la la-file-text"></i> <span>Documentation</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><i class="la la-info"></i> <span>Change Log</span> <span
                                class="badge badge-primary ms-auto">v3.4</span></a>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="la la-share-alt"></i> <span>Multi Level</span> <span
                                class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="submenu">
                                <a href="javascript:void(0);"> <span>Level 1</span> <span
                                        class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> <span>Level 1</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
@endif

@if (Route::is([
        'approval-setting',
        'change-password',
        'cron-setting',
        'email-settings',
        'invoice-settings',
        'leave-type',
        'localization',
        'notifications-settings',
        'performance-setting',
        'roles-permissions',
        'salary-settings',
        'settings',
        'theme-settings',
        'toxbox-setting',
    ]))
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div class="sidebar-menu">
                <ul>
                    <li class="{{ Request::is('admin-dashboard') ? 'active' : '' }}">
                        <a href="{{ url('admin-dashboard') }}"><i class="la la-home"></i> <span>Back to
                                Home</span>
                        </a>
                    </li>
                    
                    <li class="menu-title">Settings</li>

                    <li class="{{ Request::is('settings') ? 'active' : '' }}">
                        <a href="{{ url('settings') }}"><i class="la la-building"></i><span>Company
                                Settings</span>
                        </a>
                    </li>

                    <li class="{{ Request::is('localization') ? 'active' : '' }}">
                        <a href="{{ url('localization') }}"><i class="la la-clock-o"></i><span>Localization</span>
                        </a>
                    </li>

                    <li class="{{ Request::is('theme-settings') ? 'active' : '' }}">
                        <a href="{{ url('theme-settings') }}"><i class="la la-photo"></i><span>Theme
                                Settings</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('roles-permissions') ? 'active' : '' }}">
                        <a href="{{ url('roles-permissions') }}"><i class="la la-key"></i> <span>Roles &
                                Permissions</span> </a>
                    </li>
                    <li class="{{ Request::is('email-settings') ? 'active' : '' }}">
                        <a href="{{ url('email-settings') }}"><i class="la la-at"></i><span>Email Settings</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('performance-setting') ? 'active' : '' }}">
                        <a href="{{ url('performance-setting') }}"><i class="la la-chart-bar"></i>
                            <span>Performance
                                Settings</span></a>
                    </li>
                    <li class="{{ Request::is('approval-setting') ? 'active' : '' }}">
                        <a href="{{ url('approval-setting') }}"><i class="la la-thumbs-up"></i> <span>Approval
                                Settings</span></a>
                    </li>
                    <li class="{{ Request::is('invoice-settings') ? 'active' : '' }}">
                        <a href="{{ url('invoice-settings') }}"><i class="la la-pencil-square"></i><span>Invoice
                                Settings</span> </a>
                    </li>
                    <li class="{{ Request::is('salary-settings') ? 'active' : '' }}">
                        <a href="{{ url('salary-settings') }}"><i class="la la-money"></i> <span>Salary
                                Settings</span> </a>
                    </li>
                    <li class="{{ Request::is('notifications-settings') ? 'active' : '' }}">
                        <a href="{{ url('notifications-settings') }}"><i
                                class="la la-globe"></i><span>Notifications</span> </a>
                    </li>
                    <li class="{{ Request::is('change-password') ? 'active' : '' }}">
                        <a href="{{ url('change-password') }}"><i class="la la-lock"></i><span>Change
                                Password</span> </a>
                    </li>
                    <li class="{{ Request::is('leave-type') ? 'active' : '' }}">
                        <a href="{{ url('leave-type') }}"><i class="la la-cogs"></i> <span>Leave Type </span> </a>
                    </li>
                    <li class="{{ Request::is('toxbox-setting') ? 'active' : '' }}">
                        <a href="{{ url('toxbox-setting') }}"><i class="la la-comment"></i> <span>ToxBox
                                Settings</span></a>
                    </li>
                    <li class="{{ Request::is('cron-setting') ? 'active' : '' }}">
                        <a href="{{ url('cron-setting') }}"><i class="la la-rocket"></i> <span>Cron
                                Settings</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sidebar -->
@endif

@if (Route::is(['chat', 'incoming-call', 'outgoing-call', 'video-call', 'voice-call']))
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">

                <nav class='greedy'>
                    {{-- <ul class="list-inline-item list-unstyled links"> --}}
                    <ul class="link-item">
                        <li>
                            <a href="{{ url('admin-dashboard') }}"><i class="la la-home"></i> <span>Back to
                                    Home</span></a>
                        </li>
                        <li class="menu-title"><span>Chat Groups</span> <a href="#" data-bs-toggle="modal"
                                data-bs-target="#add_group"><i class="fa-solid fa-plus"></i></a></li>
                        <li>
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/user.jpg')}}" alt="User Image">
                                </span>
                                <span class="chat-user">#General</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/user.jpg')}}" alt="User Image">
                                </span>
                                <span class="chat-user">#Video Responsive Survey</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/user.jpg')}}" alt="User Image">
                                </span>
                                <span class="chat-user">#500rs</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/user.jpg')}}" alt="User Image">
                                </span>
                                <span class="chat-user">#warehouse</span>
                            </a>
                        </li>
                        <li class="menu-title">Direct Chats <a href="#" data-bs-toggle="modal"
                                data-bs-target="#add_chat_user"><i class="fa-solid fa-plus"></i></a></li>
                        <li>
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"
                                        alt="User Image"><span class="status online"></span>
                                </span>
                                <span class="chat-user">John Doe</span> <span
                                    class="badge rounded-pill bg-danger">1</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"
                                        alt="User Image"><span class="status offline"></span>
                                </span>
                                <span class="chat-user">Richard Miles</span> <span
                                    class="badge rounded-pill bg-danger">7</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"
                                        alt="User Image"><span class="status away"></span>
                                </span>
                                <span class="chat-user">John Smith</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ url('chat') }}">
                                <span class="chat-avatar-sm user-img">
                                    <img class="rounded-circle" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}"
                                        alt="User Image"><span class="status online"></span>
                                </span>
                                <span class="chat-user">Mike Litorus</span> <span
                                    class="badge rounded-pill bg-danger">2</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
@endif


@if (Route::is(['compose']))
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ url('inbox') }}"><i class="la la-home"></i> <span>Back to Inbox</span></a>
                    </li>
                    <li>
                        <a href="{{ url('inbox') }}">Inbox <span class="mail-count">(21)</span></a>
                    </li>
                    <li>
                        <a href="#">Starred</a>
                    </li>
                    <li>
                        <a href="#">Sent Mail</a>
                    </li>
                    <li>
                        <a href="#">Draft <span class="mail-count">(8)</span></a>
                    </li>
                    <li>
                        <a href="#">Trash</a>
                    </li>
                    <li class="menu-title">Label <a href="#"><i class="fa fa-plus"></i></a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
@endif
@if (Route::is(['inbox', 'mail-view']))
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">

                <ul>
                    <li>
                        <a href="{{ url('admin-dashboard') }}"><i class="la la-home"></i> <span>Back to
                                Home</span></a>
                    </li>
                    @if (Route::is(['mail-view']))
                        <li class="menu-title">
                            <span>Mail</span>
                        </li>
                    @endif
                    <li class="active">
                        <a href="{{ url('inbox') }}">Inbox <span class="mail-count">(21)</span></a>
                    </li>
                    <li>
                        <a href="#">Starred</a>
                    </li>
                    <li>
                        <a href="#">Sent Mail</a>
                    </li>
                    <li>
                        <a href="#">Trash</a>
                    </li>
                    <li>
                        <a href="#">Draft <span class="mail-count">(8)</span></a>
                    </li>
                    <li class="menu-title">Label <a href="#"><i class="fa-solid fa-plus"></i></a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
@endif
@if (Route::is(['tasks']))
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">

                <ul>
                    <li>
                        <a href="{{ url('admin-dashboard') }}"><i class="la la-home"></i> <span>Back to
                                Home</span></a>
                    </li>
                    <li class="menu-title">Projects <a href="#" data-bs-toggle="modal"
                            data-bs-target="#create_project"><i class="fa-solid fa-plus"></i></a></li>
                    <li>
                        <a href="{{ url('tasks') }}">Project Management</a>
                    </li>
                    <li class="active">
                        <a href="{{ url('tasks') }}">Hospital Administration</a>
                    </li>
                    <li>
                        <a href="{{ url('tasks') }}">Video Calling App</a>
                    </li>
                    <li>
                        <a href="{{ url('tasks') }}">Office Management</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
@endif
