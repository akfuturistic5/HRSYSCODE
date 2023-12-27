<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    @if (Route::is(['activities']))
        <title>Activities - HRMS admin template</title>
    @endif
    @if (Route::is(['admin-dashboard']))
        <title>Dashboard - HRMS admin template</title>
    @endif
    @if (Route::is(['applied-jobs']))
        <title>Applied Jobs - HRMS admin template</title>
    @endif
    @if (Route::is(['approval-setting']))
        <title>Approval Setting - HRMS admin template</title>
    @endif
    @if (Route::is(['apptitude-result']))
        <title>Shortlist Candidates - HRMS admin template</title>
    @endif
    @if (Route::is(['archived-jobs']))
        <title>Archived Jobs - HRMS admin template</title>
    @endif
    @if (Route::is(['assets-category', 'assets-details', 'assets-new', 'assets-reports', 'assets1']))
        <title>Assets - HRMS admin template</title>
    @endif
    @if (Route::is(['attance-reports']))
        <title>Attendance Report - HRMS admin template</title>
    @endif
    @if (Route::is([
            'attend-reports',
            'attendance-reports',
            'payments-reports',
            'payslip-reports',
            'project-reports',
            'task-reports',
            'user-reports',
        ]))
        <title>Reports - HRMS admin template</title>
    @endif
    @if (Route::is(['attendance-employee', 'attendance']))
        <title>Attendance - HRMS admin template</title>
    @endif
    @if (Route::is(['blank-page']))
        <title>Blank Page - HRMS admin template</title>
    @endif
    @if (Route::is(['budget-expenses', 'budget-revenues', 'categories', 'sub-category']))
        <title>Categories - HRMS admin template</title>
    @endif
    @if (Route::is(['budgets']))
        <title>Budgets - HRMS admin template</title>
    @endif
    @if (Route::is(['events']))
        <title>Events - HRMS admin template</title>
    @endif
    @if (Route::is(['candidates']))
        <title>Candidates - HRMS admin template</title>
    @endif
    @if (Route::is(['change-password']))
        <title>Change Password - HRMS admin template</title>
    @endif
    @if (Route::is(['chat']))
        <title>Chat - HRMS admin template</title>
    @endif
    @if (Route::is(['client-profile']))
        <title>Client Profile - HRMS admin template</title>
    @endif
    @if (Route::is(['clients-list', 'clients']))
        <title>Clients - HRMS admin template</title>
    @endif
    @if (Route::is(['compose']))
        <title>Compose - HRMS admin template</title>
    @endif
    @if (Route::is(['contacts']))
        <title>Contacts - HRMS admin template</title>
    @endif
    @if (Route::is(['create-estimate']))
        <title>Create Estimate - HRMS admin template</title>
    @endif
    @if (Route::is(['create-invoice']))
        <title>Create Invoice - HRMS admin template</title>
    @endif
    @if (Route::is(['cron-setting']))
        <title>Cron Setting - HRMS admin template</title>
    @endif
    @if (Route::is(['daily-reports']))
        <title>Daily Report - HRMS admin template</title>
    @endif
    @if (Route::is(['data-tables']))
        <title>Data Tables - HRMS admin template</title>
    @endif
    @if (Route::is(['departments']))
        <title>Departments - HRMS admin template</title>
    @endif
    @if (Route::is(['designations']))
        <title>Designations - HRMS admin template</title>
    @endif
    @if (Route::is(['edit-estimate']))
        <title>Edit Estimate - HRMS admin template</title>
    @endif
    @if (Route::is(['edit-invoice']))
        <title>Edit Invoice - HRMS admin template</title>
    @endif
    @if (Route::is(['email-settings']))
        <title>Email Settings - HRMS admin template</title>
    @endif
    @if (Route::is(['employee-dashboard']))
        <title>Employee Dashboard - HRMS admin template</title>
    @endif
    @if (Route::is(['employee-reports']))
        <title>Employee Report - HRMS admin template</title>
    @endif
    @if (Route::is(['employees-list', 'employees']))
        <title>Employees - HRMS admin template</title>
    @endif
    @if (Route::is(['error-404']))
        <title>Error 404 - HRMS admin template</title>
    @endif
    @if (Route::is(['error-500']))
        <title>Error 500 - HRMS admin template</title>
    @endif
    @if (Route::is(['estimate-view', 'estimates']))
        <title>Estimates - HRMS admin template</title>
    @endif
    @if (Route::is(['events']))
        <title>Events - HRMS admin template</title>
    @endif
    @if (Route::is(['expense-reports']))
        <title>Expense Report - HRMS admin template</title>
    @endif
    @if (Route::is(['expenses']))
        <title>Expenses - HRMS admin template</title>
    @endif
    @if (Route::is(['experiance-level']))
        <title>Experiance Level - HRMS admin template</title>
    @endif
    @if (Route::is(['faq']))
        <title>FAQ - HRMS admin template</title>
    @endif
    @if (Route::is(['file-manager']))
        <title>File Manager - HRMS admin template</title>
    @endif
    @if (Route::is(['forgot-password']))
        <title>Forgot Password - HRMS admin template</title>
    @endif
    @if (Route::is(['form-basic-inputs']))
        <title>Form Basic Input - HRMS admin template</title>
    @endif
    @if (Route::is(['form-horizontal']))
        <title>Horizontal Form - HRMS admin template</title>
    @endif
    @if (Route::is(['form-input-groups']))
        <title>Form Input Groups - HRMS admin template</title>
    @endif
    @if (Route::is(['form-mask']))
        <title>Form Mask - HRMS admin template</title>
    @endif
    @if (Route::is(['form-validation']))
        <title>Form Validation - HRMS admin template</title>
    @endif
    @if (Route::is(['form-vertical']))
        <title>Form Vertical - HRMS admin template</title>
    @endif
    @if (Route::is(['form-select2']))
        <title>Form Select2 - HRMS admin template</title>
    @endif
    @if (Route::is(['form-fileupload']))
        <title>Form File Upload - HRMS admin template</title>
    @endif
    @if (Route::is(['goal-tracking', 'goal-type']))
        <title>Goal - HRMS admin template</title>
    @endif
    @if (Route::is(['holidays']))
        <title>Holidays - HRMS admin template</title>
    @endif
    @if (Route::is(['inbox']))
        <title>Inbox - HRMS admin template</title>
    @endif
    @if (Route::is(['incoming-call']))
        <title>Incoming Call - HRMS admin template</title>
    @endif
    @if (Route::is(['index']))
        <title>Login - HRMS admin template</title>
    @endif
    @if (Route::is(['interview-questions']))
        <title>Interview Questions - HRMS admin template</title>
    @endif
    @if (Route::is(['interviewing']))
        <title>Interviewing Page - HRMS admin template</title>
    @endif
    @if (Route::is(['invoice-reports']))
        <title>Invoice Report - HRMS admin template</title>
    @endif
    @if (Route::is(['invoice-settings']))
        <title>Invoice Settings - HRMS admin template</title>
    @endif
    @if (Route::is(['invoice-view']))
        <title>Invoice - HRMS admin template</title>
    @endif
    @if (Route::is(['invoices']))
        <title>Invoices - HRMS admin template</title>
    @endif
    @if (Route::is(['job-applicants']))
        <title>Job Applicants - HRMS admin template</title>
    @endif
    @if (Route::is(['jobs-aptitude']))
        <title>Aptitude - HRMS admin template</title>
    @endif
    @if (Route::is(['job-details', 'job-list', 'job-view', 'jobs']))
        <title>Jobs - HRMS admin template</title>
    @endif
    @if (Route::is(['jobs-dashboard']))
        <title>Job Dashboard - HRMS admin template</title>
    @endif
    @if (Route::is(['knowledgebase', 'knowledgebase-view']))
        <title>Knowledgebase - HRMS admin template</title>
    @endif
    @if (Route::is(['leads']))
        <title>Leads - HRMS admin template</title>
    @endif
    @if (Route::is(['leave-reports']))
        <title>Leave Report - HRMS admin template</title>
    @endif
    @if (Route::is(['leave-settings']))
        <title>Leave Settings - HRMS admin template</title>
    @endif
    @if (Route::is(['leave-type']))
        <title>Leave Type - HRMS admin template</title>
    @endif
    @if (Route::is(['leaves', 'leaves-employee']))
        <title>Leaves - HRMS admin template</title>
    @endif
    @if (Route::is(['localization']))
        <title>Localization - HRMS admin template</title>
    @endif
    @if (Route::is(['lock-screen']))
        <title>Lock Screen - HRMS admin template</title>
    @endif
    @if (Route::is(['mail-view']))
        <title>Mail view - HRMS admin template</title>
    @endif
    @if (Route::is(['manage-resumes']))
        <title>Manage Resumes - HRMS admin template</title>
    @endif
    @if (Route::is(['notifications-settings']))
        <title>Notifications Settings - HRMS admin template</title>
    @endif
    @if (Route::is(['offer_approvals']))
        <title>Offer Approvals - HRMS admin template</title>
    @endif
    @if (Route::is(['offered-jobs']))
        <title>Offered Jobs - HRMS admin template</title>
    @endif
    @if (Route::is(['otp']))
        <title>OTP - HRMS admin template</title>
    @endif
    @if (Route::is(['outgoing-call']))
        <title>Outgoing Call - HRMS admin template</title>
    @endif
    @if (Route::is(['overtime']))
        <title>Overtime - HRMS admin template</title>
    @endif
    @if (Route::is(['payments']))
        <title>Payments - HRMS admin template</title>
    @endif
    @if (Route::is(['payroll-items']))
        <title>Payroll Items - HRMS admin template</title>
    @endif
    @if (Route::is(['performance-appraisal']))
        <title>Performance Appraisal - HRMS admin template</title>
    @endif
    @if (Route::is(['performance-indicator']))
        <title>Performance Indicator - HRMS admin template</title>
    @endif
    @if (Route::is(['performance-setting']))
        <title>Performance Setting - HRMS admin template</title>
    @endif
    @if (Route::is(['performance']))
        <title>Performance Review - HRMS admin template</title>
    @endif
    @if (Route::is(['policies']))
        <title>Policies - HRMS admin template</title>
    @endif
    @if (Route::is(['privacy-policy']))
        <title>Privacy Policy - HRMS admin template</title>
    @endif
    @if (Route::is(['user-asset-details', 'profile']))
        <title>Employee Profile - HRMS admin template</title>
    @endif
    @if (Route::is(['projects', 'project-list']))
        <title>Projects - HRMS admin template</title>
    @endif
    @if (Route::is(['project-view']))
        <title>Project View - HRMS admin template</title>
    @endif
    @if (Route::is(['promotion']))
        <title>Promotion - HRMS admin template</title>
    @endif
    @if (Route::is(['provident-fund']))
        <title>Provident Fund - HRMS admin template</title>
    @endif
    @if (Route::is(['questions']))
        <title>Aptitude - HRMS admin template</title>
    @endif
    @if (Route::is(['register']))
        <title>Register - HRMS admin template</title>
    @endif
    @if (Route::is(['resignation']))
        <title>Resignation - HRMS admin template</title>
    @endif
    @if (Route::is(['roles-permissions']))
        <title>Roles & Permission - HRMS admin template</title>
    @endif
    @if (Route::is(['salary-settings']))
        <title>Salary Settings - HRMS admin template</title>
    @endif
    @if (Route::is(['salary', 'salary-view']))
        <title>Salary - HRMS admin template</title>
    @endif
    @if (Route::is(['saved-jobs']))
        <title>Saved Jobs - HRMS admin template</title>
    @endif
    @if (Route::is(['schedule-timing']))
        <title>Schedule timing - HRMS admin template</title>
    @endif
    @if (Route::is(['search']))
        <title>Search Results - HRMS admin template</title>
    @endif
    @if (Route::is(['settings']))
        <title>Settings - HRMS admin template</title>
    @endif
    @if (Route::is(['shift-list']))
        <title>Shift List - HRMS admin template</title>
    @endif
    @if (Route::is(['shift-scheduling']))
        <title>Shift & Schedule - HRMS admin template</title>
    @endif
    @if (Route::is(['shortlist-candidates']))
        <title>Shortlist Candidates - HRMS admin template</title>
    @endif
    @if (Route::is(['subscribed-companies', 'subscriptions-company', 'subscriptions']))
        <title>Subscriptions - HRMS admin template</title>
    @endif
    @if (Route::is(['tables-basic']))
        <title>Basic Tables - HRMS admin template</title>
    @endif
    @if (Route::is(['task-board']))
        <title>Task Board - HRMS admin template</title>
    @endif
    @if (Route::is(['tasks']))
        <title>Tasks - HRMS admin template</title>
    @endif
    @if (Route::is(['taxes']))
        <title>Taxes - HRMS admin template</title>
    @endif
    @if (Route::is(['termination']))
        <title>Termination - HRMS admin template</title>
    @endif
    @if (Route::is(['terms']))
        <title>Terms - HRMS admin template</title>
    @endif
    @if (Route::is(['theme-settings']))
        <title>Theme Settings - HRMS admin template</title>
    @endif
    @if (Route::is(['tickets', 'ticket-view']))
        <title>Tickets - HRMS admin template</title>
    @endif
    @if (Route::is(['toxbox-setting']))
        <title>Toxbox Settings- HRMS admin template</title>
    @endif
    @if (Route::is(['trainers']))
        <title>Trainers - HRMS admin template</title>
    @endif
    @if (Route::is(['training', 'training-type']))
        <title>Training - HRMS admin template</title>
    @endif
    @if (Route::is(['user-all-jobs']))
        <title>All Jobs - HRMS admin template</title>
    @endif
    @if (Route::is(['user-dashboard']))
        <title>User Dashboard - HRMS admin template</title>
    @endif
    @if (Route::is(['users']))
        <title>Users - HRMS admin template</title>
    @endif
    @if (Route::is(['video-call']))
        <title>Video Call - HRMS admin template</title>
    @endif
    @if (Route::is(['visited-jobs']))
        <title>Visited Jobs - HRMS admin template</title>
    @endif
    @if (Route::is(['voice-call']))
        <title>Voice Call - HRMS admin template</title>
    @endif
    @if (Route::is([
            'accordions',
            'alerts',
            'avatar',
            'badges',
            'buttons',
            'buttongroup',
            'breadcrumbs',
            'cards',
            'carousel',
            'dropdowns',
            'grid',
            'images',
            'lightbox',
            'media',
            'modal',
            'offcanvas',
            'pagination',
            'popover',
            'progress',
            'placeholders',
            'rangeslider',
            'spinners',
            'sweetalerts',
            'tab',
            'toastr',
            'tooltip',
            'typography',
            'video',
            'ribbon',
            'clipboard',
            'drag-drop',
            'rating',
            'text-editor',
            'counter',
            'scrollbar',
            'notification',
            'stickynote',
            'timeline',
            'horizontal-timeline',
            'form-wizard',
            'chart-apex',
            'chart-js',
            'chart-morris',
            'chart-flot',
            'chart-peity',
            'chart-c3',
            'icon-fontawesome',
            'icon-ionic',
            'icon-material',
            'icon-pe7',
            'icon-simpleline',
            'icon-themify',
            'icon-weather',
            'icon-typicon',
            'icon-flag',
            'icon-feather',
        ]))
        <title>SmartHR - HRMS admin template</title>
    @endif
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('/assets/img/favicon.png') }}">
    @include('layout.partials.head')
</head>
@if (!Route::is('index', 'register', 'forgot-password', 'otp', 'lock-screen'))

    <body>
@endif
@if (Route::is('index', 'register', 'forgot-password', 'otp', 'lock-screen'))

    <body class="account-page">
@endif
<!-- Main Wrapper -->
<div class="main-wrapper">
    @if (
        !Route::is([
            'error-404',
            'error-500',
            'lock-screen',
            'otp',
            'forgot-password',
            'index',
            'register',
            'change-password',
        ]))
        @include('layout.partials.header')
        @if (!Route::is(['error-404', 'job-list', 'job-view']))
            @include('layout.partials.nav')
        @endif
        @if (!Route::is(['error-404', 'job-list', 'job-view', 'index', 'register', 'change-password']))
            @include('layout.partials.twocolumnsidebar')
        @endif
        @if (
            !Route::is([
                'chat',
                'contacts',
                'ticket-view',
                'incoming-call',
                'job-list',
                'job-view',
                'outgoing-call',
                'tasks',
                'ticket-view',
                'video-call',
                'voice-call',
                'cards',
                'carousel',
                'chart-apex',
                'chart-c3',
                'chart-flot',
                'chart-js',
                'chart-morris',
                'chart-peity',
                'clipboard',
                'counter',
                'drag-drop',
                'form-select2',
                'form-wizard',
                'horizontal-timeline',
                'modal',
                'notification',
                'offcanvas',
                'placeholders',
                'rangeslider',
                'rating',
                'ribbon',
                'scrollbar',
                'spinners',
                'stickynote',
                'sweetalerts',
                'tab',
                'tables-basic',
                'text-editor',
                'timeline',
                'toastr',
                'tooltip',
                'typography',
                'video',
            ]))
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

                    @yield('content')
                </div>
            </div>
        @endif
        <!-- /Page Wrapper -->
        @if (Route::is(['chat', 'tasks', 'ticket-view', 'video-call', 'voice-call']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Chat Main Row -->
                <div class="chat-main-row">

                    <!-- Chat Main Wrapper -->
                    <div class="chat-main-wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        @endif
        @if (Route::is(['contacts']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Contact Main Row -->
                <div class="chat-main-row">
                    @yield('content')
                </div>
            </div>
        @endif
        @if (Route::is(['incoming-call']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Incoming Call -->
                <div class="call-box incoming-box">
                    @yield('content')
                </div>
            </div>
        @endif
        @if (Route::is(['outgoing-call']))
            <!-- Page Wrapper -->
            <div class="page-wrapper">

                <!-- Outgoing Call -->
                <div class="call-box outgoing-box">
                    @yield('content')
                </div>
            </div>
        @endif

        @if (Route::is(['job-list', 'job-view']))
            <!-- Page Wrapper -->
            <div class="page-wrapper job-wrapper">

                <!-- Page Content -->
                <div class="content container">
                    @yield('content')
                </div>
            </div>
        @endif
        @if (Route::is([
                'cards',
                'carousel',
                'chart-apex',
                'chart-c3',
                'chart-flot',
                'chart-js',
                'chart-morris',
                'chart-peity',
                'clipboard',
                'counter',
                'drag-drop',
                'form-select2',
                'form-wizard',
                'horizontal-timeline',
                'modal',
                'notification',
                'offcanvas',
                'placeholders',
                'rangeslider',
                'rating',
                'ribbon',
                'scrollbar',
                'spinners',
                'stickynote',
                'sweetalerts',
                'tab',
                'tables-basic',
                'text-editor',
                'timeline',
                'toastr',
                'tooltip',
                'typography',
                'video',
            ]))
            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid pb-0">
                    @yield('content')
                </div>
            </div>
        @endif
    @endif
    @if (Route::is([
            'error-404',
            'error-500',
            'lock-screen',
            'otp',
            'forgot-password',
            'index',
            'register',
            'change-password',
        ]))
        @yield('content')
    @endif

</div>
<!-- /Main Wrapper -->
@if (Route::is(['incoming-call', 'outgoing-call']))
    @component('components.model-popup')
    @endcomponent
@endif
@if (
    !Route::is([
        'error-404',
        'error-500',
        'lock-screen',
        'otp',
        'forgot-password',
        'index',
        'register',
        'change-password',
        'job-list',
        'job-view',
    ]))
    @component('components.theme-setting')
    @endcomponent
@endif
@include('layout.partials.footer-scripts')
</body>

</html>
