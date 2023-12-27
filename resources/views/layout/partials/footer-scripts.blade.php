       <!-- jQuery -->
       <script src="{{ URL::asset('/assets/js/jquery-3.7.0.min.js') }}"></script>

       <!-- Bootstrap Core JS -->
       <script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>

       <!-- Slimscroll JS -->
       <script src="{{ URL::asset('/assets/js/jquery.slimscroll.min.js') }}"></script>

       @if (
           !Route::is([
               'index',
               'register',
               'otp',
               'forgot-password',
               'lock-screen',
               'job-list',
               'job-view',
               'error-404',
               'error-500',
           ]))
           <!-- Theme Settings JS -->
           <script src="{{ URL::asset('/assets/js/layout.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/theme-settings.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/greedynav.js') }}"></script>
       @endif
       @if (Route::is(['chat']))
           <script src="{{ URL::asset('/assets/js/dropfiles.js') }}"></script>
       @endif
       @if (Route::is([
               'applied-jobs',
               'approval-setting',
               'apptitude-result',
               'archived-jobs',
               'assets-details',
               'assets-new',
               'assets-reports',
               'assets1',
               'attance-reports',
               'attend-reports',
               'attendance-employee',
               'attendance-reports',
               'attendance',
               'calendar',
               'candidates',
               'clients-list',
               'clients',
               'compose',
               'create-estimate',
               'create-invoice',
               'daily-reports',
               'designations',
               'edit-estimate',
               'edit-invoice',
               'email-settings',
               'employee-reports',
               'employees-list',
               'employees',
               'estimates',
               'events',
               'expense-reports',
               'expenses',
               'experiance-level',
               'form-horizontal',
               'form-vertical',
               'goal-tracking',
               'goal-type',
               'interview-questions',
               'invoice-reports',
               'invoices',
               'job-applicants',
               'job-aptitude',
               'job-details',
               'job-list',
               'job-view',
               'jobs',
               'jobs-dashboard',
               'leave-reports',
               'leave-settings',
               'leaves-employee',
               'leaves',
               'localization',
               'manage-resumes',
               'offer_approvals',
               'offered-jobs',
               'overtime',
               'payments-reports',
               'payroll-items',
               'payslip-reports',
               'performance-appraisal',
               'performance-indicator',
               'performance',
               'policies',
               'profile',
               'project-list',
               'project-reports',
               'project-view',
               'projects',
               'promotion',
               'provident-fund',
               'questions',
               'resignation',
               'salary',
               'saved-jobs',
               'schedule-timing',
               'settings',
               'shift-list',
               'shift-scheduling',
               'shortlist-candidates',
               'sub-category',
               'subscribed-companies',
               'subscriptions',
               'task-board',
               'task-reports',
               'tasks',
               'taxes',
               'termination',
               'ticket-view',
               'tickets',
               'timesheet',
               'trainers',
               'training-type',
               'training',
               'user-all-jobs',
               'user-asset-details',
               'user-reports',
               'users',
               'visited-jobs',
               'client-profile',
               'search',
               'budget-expenses',
               'budget-revenues',
               'interviewing',
           ]))
           <!-- Select2 JS -->
           <script src="{{ URL::asset('/assets/js/select2.min.js') }}"></script>
       @endif
       <!-- Datatables JS -->
       <script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
       <script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js') }}"></script>
       @if (Route::is([
               'apptitude-result',
               'assets-category',
               'assets-new',
               'assets-reports',
               'assets1',
               'attance-reports',
               'attendance-employee',
               'attendance',
               'budget-expenses',
               'budget-revenues',
               'budgets',
               'calendar',
               'candidates',
               'categories',
               'create-estimate',
               'create-invoice',
               'daily-reports',
               'edit-estimate',
               'edit-invoice',
               'employee-reports',
               'employees-list',
               'employees',
               'estimates',
               'events',
               'expense-reports',
               'expenses',
               'experiance-level',
               'goal-tracking',
               'holidays',
               'interview-questions',
               'invoice-reports',
               'invoices',
               'job-applicants',
               'job-details',
               'job-list',
               'job-view',
               'jobs',
               'jobs-dashboard',
               'leave-reports',
               'leave-settings',
               'leaves-employee',
               'leaves',
               'manage-resumes',
               'offer_approvals',
               'overtime',
               'payments-reports',
               'payroll-items',
               'performance-appraisal',
               'performance-indicator',
               'profile',
               'project-list',
               'project-view',
               'projects',
               'promotion',
               'resignation',
               'salary',
               'schedule-timing',
               'shift-list',
               'shift-scheduling',
               'shortlist-candidates',
               'sub-category',
               'subscribed-companies',
               'task-board',
               'tasks',
               'termination',
               'tickets',
               'timesheet',
               'training',
               'user-asset-details',
               'users',
               'client-profile',
               'search',
           ]))
           <!-- Datetimepicker JS -->
           <script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
       @endif
       @if (Route::is(['task-board']))
           <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/jquery.ui.touch-punch.min.js') }}"></script>
       @endif
       @if (Route::is(['form-validation']))
           <!-- Form Validation JS -->
           <script src="{{ URL::asset('/assets/js/form-validation.js') }}"></script>
       @endif
       @if (Route::is(['tasks', 'project-view']))
           <!-- Task JS -->
           <script src="{{ URL::asset('/assets/js/task.js') }}"></script>
       @endif
       @if (Route::is(['questions']))
           <script>
               $('.next').click(function() {
                   var nextId = $(this).parents('.tab-pane').next().attr("id");
                   $('[href="#' + nextId + '"]').tab('show');
                   return false;
               })

               $('.first').click(function() {

                   $('#myWizard a:first').tab('show')

               });
           </script>
       @endif
       @if (Route::is(['clipboard']))
           <!-- Clipboard JS -->
           <script src="{{ URL::asset('/assets/plugins/clipboard/clipboard.min.js') }}"></script>
       @endif
       @if(Route::is(['drag-drop']))
       <!-- Dragula JS -->
       <script src="{{ URL::asset('/assets/plugins/dragula/js/dragula.min.js') }}"></script>
       <script src="{{ URL::asset('/assets/plugins/dragula/js/drag-drop.min.js') }}"></script>
       @endif
       @if (Route::is(['rating']))
           <!-- Raty JS -->
           <script src="{{ URL::asset('/assets/plugins/raty/jquery.raty.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/raty/custom.raty.js') }}"></script>
       @endif
       @if (Route::is(['counter']))
           <!-- Stickynote JS -->
           <script src="{{ URL::asset('/assets/plugins/countup/jquery.counterup.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/countup/jquery.waypoints.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/countup/jquery.missofis-countdown.js') }}"></script>
       @endif
       @if (Route::is(['text-editor']))
           <!-- Summernote JS -->
           <script src="{{ URL::asset('/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
       @endif
       @if (Route::is(['rangeslider']))
           <!-- Rangeslider JS -->
           <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
       @endif
       @if (Route::is(['form-mask']))
           <!-- Mask JS -->
           <script src="{{ URL::asset('/assets/js/jquery.maskedinput.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/mask.js') }}"></script>
       @endif
       @if (Route::is(['sweetalerts']))
           <!-- Sweetalert 2 -->
           <script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>
       @endif
       @if (Route::is(['scrollbar']))
           <!-- Plyr JS -->
           <script src="{{ URL::asset('/assets/plugins/scrollbar/scrollbar.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/scrollbar/custom-scroll.js') }}"></script>
       @endif
       @if (Route::is(['notification']))
           <!-- Alertify JS -->
           <script src="{{ URL::asset('/assets/plugins/alertify/alertify.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/alertify/custom-alertify.min.js') }}"></script>
       @endif
       @if (Route::is(['stickynote']))
           <!-- Stickynote JS -->
           <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/stickynote/sticky.js') }}"></script>
       @endif
       @if (Route::is(['horizontal-timeline']))
           <!-- Timeline JS -->
           <script src="{{ URL::asset('/assets/plugins/timeline/horizontal-timeline.js') }}"></script>
       @endif
       @if (Route::is(['toastr']))
           <!-- Mask JS -->
           <script src="{{ URL::asset('/assets/plugins/toastr/toastr.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/toastr/toastr.js') }}"></script>
       @endif
       @if (Route::is(['chart-apex']))
           <!-- Apexchart JS -->
           <script src="{{ URL::asset('/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/apexchart/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['chart-c3']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/c3-chart/d3.v5.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/c3-chart/c3.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/c3-chart/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['chart-flot']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/flot/jquery.flot.pie.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/flot/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['lightbox']))
           <!-- lightbox JS -->
           <script src="{{ URL::asset('/assets/plugins/lightbox/glightbox.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/lightbox/lightbox.js') }}"></script>
       @endif
       @if (Route::is(['chart-js']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/chartjs/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['chart-morris']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/morris/raphael-min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/morris/morris.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/morris/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['chart-peity']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/peity/jquery.peity.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/peity/chart-data.js') }}"></script>
       @endif
       @if (Route::is(['form-select2']))
           <!-- Select 2 -->
           <script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/select2/js/custom-select.js') }}"></script>
       @endif
       @if (Route::is(['form-fileupload']))
           <!-- Fileupload JS -->
           <script src="{{ URL::asset('/assets/plugins/fileupload/fileupload.min.js') }}"></script>
       @endif
       @if (Route::is([
               'applied-jobs',
               'apptitude-result',
               'archived-jobs',
               'assets-category',
               'assets-details',
               'assets-new',
               'assets-reports',
               'assets1',
               'attance-reports',
               'attendance-reports',
               'candidates',
               'clients-list',
               'daily-reports',
               'data-tables',
               'departments',
               'designations',
               'employee-reports',
               'employees-list',
               'expense-reports',
               'expenses',
               'experiance-level',
               'goal-tracking',
               'goal-type',
               'interview-questions',
               'interviewing',
               'invoice-reports',
               'job-applicants',
               'job-aptitude',
               'job-details',
               'job-list',
               'job-view',
               'jobs',
               'leads',
               'leave-reports',
               'leave-type',
               'leaves-employee',
               'leaves',
               'manage-resumes',
               'offer_approvals',
               'offered-jobs',
               'overtime',
               'payments-reports',
               'payments',
               'payroll-items',
               'payslip-reports',
               'performance-appraisal',
               'performance-indicator',
               'policies',
               'profile',
               'project-list',
               'project-reports',
               'promotion',
               'provident-fund',
               'questions',
               'resignation',
               'salary',
               'saved-jobs',
               'schedule-timing',
               'shift-list',
               'shift-scheduling',
               'shortlist-candidates',
               'subscribed-companies',
               'task-reports',
               'termination',
               'tickets',
               'timesheet',
               'trainers',
               'training-type',
               'training',
               'user-all-jobs',
               'user-reports',
               'users',
               'visited-jobs',
           ]))
           <!-- Datatable JS -->
           <script src="{{ URL::asset('/assets/js/jquery.dataTables.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/dataTables.bootstrap4.min.js') }}"></script>
       @endif

       @if (Route::is(['assets-category', 'assets-details', 'assets-new']))
           <!-- Daterangepikcer JS -->
           <script src="{{ URL::asset('/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
       @endif

       @if (Route::is(['admin-dashboard', 'assets-category', 'assets-new']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/plugins/morris/morris.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/raphael/raphael.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/chart.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/greedynav.js') }}"></script>
       @endif
       @if (Route::is(['user-dashboard', 'jobs-dashboard']))
           <!-- Chart JS -->
           <script src="{{ URL::asset('/assets/js/Chart.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/line-chart.js') }}"></script>
       @endif
       @if (Route::is(['calendar', 'events']))
           <!-- Calendar JS -->
           <script src="{{ URL::asset('/assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/fullcalendar.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/jquery.fullcalendar.js') }}"></script>
       @endif

       @if (Route::is(['compose', 'projects', 'tasks', 'project-list']))
           <!-- Ck Editor JS -->
           <script src="{{ URL::asset('/assets/js/ckeditor.js') }}"></script>
       @endif

       @if (Route::is(['leave-settings', 'user-asset-details']))
           <!-- Tagsinput JS -->
           <script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
           <script src="{{ URL::asset('/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
       @endif
       @if (Route::is(['leave-settings']))
           <!-- Multiselect JS -->
           <script src="{{ URL::asset('/assets/js/multiselect.min.js') }}"></script>
       @endif
       @if (Route::is(['performance']))
           <script>
               $(function() {
                   $(document).on("click", '.btn-add-row', function() {
                       var id = $(this).closest("table.table-review").attr('id'); // Id of particular table
                       console.log(id);
                       var div = $("<tr />");
                       div.html(GetDynamicTextBox(id));
                       $("#" + id + "_tbody").append(div);
                   });
                   $(document).on("click", "#comments_remove", function() {
                       $(this).closest("tr").prev().find('td:last-child').html(
                           '<button type="button" class="btn btn-danger" id="comments_remove"><i class="fa-regular fa-trash-can"></i></button>'
                       );
                       $(this).closest("tr").remove();
                   });

                   function GetDynamicTextBox(table_id) {
                       $('#comments_remove').remove();
                       var rowsLength = document.getElementById(table_id).getElementsByTagName("tbody")[0]
                           .getElementsByTagName("tr").length + 1;
                       return '<td>' + rowsLength + '</td>' +
                           '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                           '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                           '<td><input type="text" name = "DynamicTextBox" class="form-control" value = "" ></td>' +
                           '<td><button type="button" class="btn btn-danger" id="comments_remove"><i class="fa-regular fa-trash-can"></i></button></td>'
                   }
               });
           </script>
       @endif
       @if (Route::is(['admin-dashboard']))
           <script src="{{ URL::asset('/assets/js/dashboard_invoices.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/dashboard_payments.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/dashboard_clients.js') }}"></script>
           <script src="{{ URL::asset('/assets/js/dashboard_projects.js') }}"></script>
       @endif
       @if (Route::is(['applied-jobs']))
           <script src="{{ URL::asset('/assets/js/applied_jobs.js') }}"></script>
       @endif
       @if (Route::is(['apptitude-result']))
           <script src="{{ URL::asset('/assets/js/apptitude_result.js') }}"></script>
       @endif
       @if (Route::is(['archived-jobs']))
           <script src="{{ URL::asset('/assets/js/archived_jobs.js') }}"></script>
       @endif
       @if (Route::is(['assets-category']))
           <script src="{{ URL::asset('/assets/js/assets_category.js') }}"></script>
       @endif
       @if (Route::is(['assets-new']))
           <script src="{{ URL::asset('/assets/js/assets_new.js') }}"></script>
       @endif
       @if (Route::is(['assets-reports']))
           <script src="{{ URL::asset('/assets/js/assets_reports.js') }}"></script>
       @endif
       @if (Route::is(['assets1']))
           <script src="{{ URL::asset('/assets/js/assets.js') }}"></script>
       @endif
       @if (Route::is(['attance-reports']))
           <script src="{{ URL::asset('/assets/js/attance_reports.js') }}"></script>
       @endif
       @if (Route::is(['attendance-employee']))
           <script src="{{ URL::asset('/assets/js/attendance_employee.js') }}"></script>
       @endif
       @if (Route::is(['attendance-reports']))
           <script src="{{ URL::asset('/assets/js/attendance_reports.js') }}"></script>
       @endif
       @if (Route::is(['attendance']))
           <script src="{{ URL::asset('/assets/js/attendance.js') }}"></script>
       @endif
       @if (Route::is(['budget-expenses']))
           <script src="{{ URL::asset('/assets/js/budget_expenses.js') }}"></script>
       @endif
       @if (Route::is(['budget-revenues']))
           <script src="{{ URL::asset('/assets/js/budget_revenues.js') }}"></script>
       @endif
       @if (Route::is(['budgets']))
           <script src="{{ URL::asset('/assets/js/budgets.js') }}"></script>
       @endif
       @if (Route::is(['candidates']))
           <script src="{{ URL::asset('/assets/js/candidates.js') }}"></script>
       @endif
       @if (Route::is(['categories']))
           <script src="{{ URL::asset('/assets/js/categories.js') }}"></script>
       @endif
       @if (Route::is(['clients-list']))
           <script src="{{ URL::asset('/assets/js/clients_list.js') }}"></script>
       @endif
       @if (Route::is(['daily-reports']))
           <script src="{{ URL::asset('/assets/js/daily_reports.js') }}"></script>
       @endif
       @if (Route::is(['data-tables']))
           <script src="{{ URL::asset('/assets/js/data_tables.js') }}"></script>
       @endif
       @if (Route::is(['departments']))
           <script src="{{ URL::asset('/assets/js/departments.js') }}"></script>
       @endif
       @if (Route::is(['designations']))
           <script src="{{ URL::asset('/assets/js/designations.js') }}"></script>
       @endif
       @if (Route::is(['employee-reports']))
           <script src="{{ URL::asset('/assets/js/employee_reports.js') }}"></script>
       @endif
       @if (Route::is(['employees-list']))
           <script src="{{ URL::asset('/assets/js/employee_list.js') }}"></script>
       @endif
       @if (Route::is(['estimates']))
           <script src="{{ URL::asset('/assets/js/estimates.js') }}"></script>
       @endif
       @if (Route::is(['expense-reports']))
           <script src="{{ URL::asset('/assets/js/expense_reports.js') }}"></script>
       @endif
       @if (Route::is(['expenses']))
           <script src="{{ URL::asset('/assets/js/expenses.js') }}"></script>
       @endif
       @if (Route::is(['experiance-level']))
           <script src="{{ URL::asset('/assets/js/experiance_level.js') }}"></script>
       @endif
       @if (Route::is(['goal-tracking']))
           <script src="{{ URL::asset('/assets/js/goal_tracking.js') }}"></script>
       @endif
       @if (Route::is(['goal-tracking']))
           <script>
               $(document).ready(function() {
                   // Read value on page load
                   $("#result b").html($("#customRange").val());

                   // Read value on change
                   $("#customRange").change(function() {
                       $("#result b").html($(this).val());
                   });
               });
           </script>
       @endif
       @if (Route::is(['goal-type']))
           <script src="{{ URL::asset('/assets/js/goal_type.js') }}"></script>
       @endif
       @if (Route::is(['holidays']))
           <script src="{{ URL::asset('/assets/js/holidays.js') }}"></script>
       @endif
       @if (Route::is(['interview-questions']))
           <script src="{{ URL::asset('/assets/js/interview_questions.js') }}"></script>
       @endif
       @if (Route::is(['interviewing']))
           <script src="{{ URL::asset('/assets/js/interviewing.js') }}"></script>
       @endif
       @if (Route::is(['invoice-reports']))
           <script src="{{ URL::asset('/assets/js/invoice_reports.js') }}"></script>
       @endif
       @if (Route::is(['invoices']))
           <script src="{{ URL::asset('/assets/js/invoices.js') }}"></script>
       @endif
       @if (Route::is(['job-applicants']))
           <script src="{{ URL::asset('/assets/js/job_applicants.js') }}"></script>
       @endif
       @if (Route::is(['jobs-dashboard']))
           <script src="{{ URL::asset('/assets/js/jobs_dashboard.js') }}"></script>
       @endif
       @if (Route::is(['jobs']))
           <script src="{{ URL::asset('/assets/js/jobs.js') }}"></script>
       @endif
       @if (Route::is(['leave-reports']))
           <script src="{{ URL::asset('/assets/js/leave_reports.js') }}"></script>
       @endif
       @if (Route::is(['leave-type']))
           <script src="{{ URL::asset('/assets/js/leave_type.js') }}"></script>
       @endif
       @if (Route::is(['leaves-employee']))
           <script src="{{ URL::asset('/assets/js/leaves_employee.js') }}"></script>
       @endif
       @if (Route::is(['leaves']))
           <script src="{{ URL::asset('/assets/js/leaves.js') }}"></script>
       @endif
       @if (Route::is(['manage-resumes']))
           <script src="{{ URL::asset('/assets/js/manage_resumes.js') }}"></script>
       @endif
       @if (Route::is(['offer_approvals']))
           <script src="{{ URL::asset('/assets/js/offer_approvals.js') }}"></script>
       @endif
       @if (Route::is(['offered-jobs']))
           <script src="{{ URL::asset('/assets/js/offered_jobs.js') }}"></script>
       @endif
       @if (Route::is(['overtime']))
           <script src="{{ URL::asset('/assets/js/overtime.js') }}"></script>
       @endif
       @if (Route::is(['payments-reports']))
           <script src="{{ URL::asset('/assets/js/payments_reports.js') }}"></script>
       @endif
       @if (Route::is(['payments']))
           <script src="{{ URL::asset('/assets/js/payments.js') }}"></script>
       @endif
       @if (Route::is(['payslip-reports']))
           <script src="{{ URL::asset('/assets/js/payslip_reports.js') }}"></script>
       @endif
       @if (Route::is(['performance-appraisal']))
           <script src="{{ URL::asset('/assets/js/performance_appraisal.js') }}"></script>
       @endif
       @if (Route::is(['performance-indicator']))
           <script src="{{ URL::asset('/assets/js/performance_indicator.js') }}"></script>
       @endif
       @if (Route::is(['policies']))
           <script src="{{ URL::asset('/assets/js/policies.js') }}"></script>
       @endif
       @if (Route::is(['profile']))
           <script src="{{ URL::asset('/assets/js/profile.js') }}"></script>
       @endif
       @if (Route::is(['project-reports']))
           <script src="{{ URL::asset('/assets/js/project_reports.js') }}"></script>
       @endif
       @if (Route::is(['promotion']))
           <script src="{{ URL::asset('/assets/js/promotion.js') }}"></script>
       @endif
       @if (Route::is(['provident-fund']))
           <script src="{{ URL::asset('/assets/js/provident_fund.js') }}"></script>
       @endif
       @if (Route::is(['resignation']))
           <script src="{{ URL::asset('/assets/js/resignation.js') }}"></script>
       @endif
       @if (Route::is(['roles-permissions']))
           <script src="{{ URL::asset('/assets/js/roles_permissions.js') }}"></script>
       @endif
       @if (Route::is(['salary']))
           <script src="{{ URL::asset('/assets/js/salary.js') }}"></script>
       @endif
       @if (Route::is(['saved-jobs']))
           <script src="{{ URL::asset('/assets/js/saved_jobs.js') }}"></script>
       @endif
       @if (Route::is(['schedule-timing']))
           <script src="{{ URL::asset('/assets/js/schedule_timing.js') }}"></script>
       @endif
       @if (Route::is(['shift-list']))
           <script src="{{ URL::asset('/assets/js/shift_list.js') }}"></script>
       @endif
       @if (Route::is(['shortlist-candidates']))
           <script src="{{ URL::asset('/assets/js/shortlist_candidates.js') }}"></script>
       @endif
       @if (Route::is(['sub-category']))
           <script src="{{ URL::asset('/assets/js/sub_category.js') }}"></script>
       @endif
       @if (Route::is(['subscribed-companies']))
           <script src="{{ URL::asset('/assets/js/subscribed_companies.js') }}"></script>
       @endif
       @if (Route::is(['subscriptions-company']))
           <script src="{{ URL::asset('/assets/js/subscriptions_company.js') }}"></script>
       @endif
       @if (Route::is(['subscriptions']))
           <script src="{{ URL::asset('/assets/js/subscriptions.js') }}"></script>
       @endif
       @if (Route::is(['tables-basic']))
           <script src="{{ URL::asset('/assets/js/tables_basic.js') }}"></script>
       @endif
       @if (Route::is(['task-reports']))
           <script src="{{ URL::asset('/assets/js/task_reports.js') }}"></script>
       @endif
       @if (Route::is(['taxes']))
           <script src="{{ URL::asset('/assets/js/taxes.js') }}"></script>
       @endif
       @if (Route::is(['termination']))
           <script src="{{ URL::asset('/assets/js/termination.js') }}"></script>
       @endif
       @if (Route::is(['tickets']))
           <script src="{{ URL::asset('/assets/js/tickets.js') }}"></script>
       @endif
       @if (Route::is(['timesheet']))
           <script src="{{ URL::asset('/assets/js/timesheet.js') }}"></script>
       @endif
       @if (Route::is(['trainers']))
           <script src="{{ URL::asset('/assets/js/trainers.js') }}"></script>
       @endif
       @if (Route::is(['training-type']))
           <script src="{{ URL::asset('/assets/js/training_type.js') }}"></script>
       @endif
       @if (Route::is(['user-all-jobs']))
           <script src="{{ URL::asset('/assets/js/user_all_jobs.js') }}"></script>
       @endif
       @if (Route::is(['user-reports']))
           <script src="{{ URL::asset('/assets/js/user_reports.js') }}"></script>
       @endif
       @if (Route::is(['users']))
           <script src="{{ URL::asset('/assets/js/users.js') }}"></script>
       @endif
       @if (Route::is(['visited-jobs']))
           <script src="{{ URL::asset('/assets/js/visited_jobs.js') }}"></script>
       @endif

       @livewireScriptConfig

       <!-- Custom JS -->
       <script src="{{ URL::asset('/assets/js/app.js') }}"></script>
