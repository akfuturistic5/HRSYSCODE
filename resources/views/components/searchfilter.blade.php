  @if (Route::is(['applied-jobs', 'offered-jobs']))
      <!-- Search Filter -->
      <div class="row filter-row">
        @livewire('select2-component')
        <div class="col-sm-6 col-md-3">  
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>Select</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Internship</option>
                </select>
                <label class="focus-label">Job Type</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>Select Designation</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <div class="d-grid">
                  <a href="#" class="btn btn-success"> Search </a>
              </div>
          </div>
      </div>
      <!-- Search Filter -->
  @endif
  @if (Route::is(['attendance-employee']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input type="text" class="form-control floating datetimepicker">
                  </div>
                  <label class="focus-label">Date</label>
              </div>
          </div>
          @livewire('select2-attendance')
          <div class="col-sm-6 col-md-3"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>-</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                </select>
                <label class="focus-label">Select Year</label>
            </div>
        </div>
          <div class="col-sm-3">
              <div class="d-grid">
                  <a href="#" class="btn btn-success"> Search </a>
              </div>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['assets1']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-assets')
          <div class="col-sm-12 col-md-4">
              <div class="row">
                  <div class="col-md-6 col-sm-6">
                      <div class="input-block mb-3 form-focus">
                          <div class="cal-icon">
                              <input class="form-control floating datetimepicker" type="text">
                          </div>
                          <label class="focus-label">From</label>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                      <div class="input-block mb-3 form-focus">
                          <div class="cal-icon">
                              <input class="form-control floating datetimepicker" type="text">
                          </div>
                          <label class="focus-label">To</label>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-2">
              <div class="d-grid">
                  <a href="#" class="btn btn-success"> Search </a>
              </div>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['attendance-reports']))
      <!-- Search Filter -->
      <div class="row filter-row">

          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-attendance-reports')
          <div class="col-sm-6 col-md-3">  
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <select class="form-control floating select">
                        <option>
                            2020
                        </option>
                        <option>
                            2019
                        </option>
                        <option>
                            2018
                        </option>
                    </select>
                </div>
                <label class="focus-label">Year</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <div class="d-grid">
                  <a href="#" class="btn btn-success"> Search </a>
              </div>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['attendance']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-attendance')
          <div class="col-sm-6 col-md-3"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>-</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                </select>
                <label class="focus-label">Select Year</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <div class="d-grid">
                  <a href="#" class="btn btn-success"> Search </a>
              </div>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['clients-list', 'clients']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Client ID</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Client Name</label>
              </div>
          </div>
          @livewire('select2-clients')
          <div class="col-sm-6 col-md-3">
              <div class="d-grid">
                  <a href="#" class="btn btn-success"> Search </a>
              </div>
          </div>
      </div>
      <!-- Search Filter -->
  @endif
  @if (Route::is(['daily-reports', 'employee-reports', 'leave-reports']))
      <!-- Search Filter -->
      <div class="row filter-row mb-4">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input class="form-control floating" type="text">
                  <label class="focus-label">Employee</label>
              </div>
          </div>
          @livewire('select2-reports')
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="d-grid">
                  <a href="#" class="btn btn-success"> Search </a>
              </div>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif

  @if (Route::is(['employees-list', 'employees']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee ID</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @if(Route::is(['employees']))
          @livewire('select2-employees', ['context' => 'employees'])
          @endif
          @if(Route::is(['employees-list']))
          @livewire('select2-employees', ['context' => 'employees-list'])
          @endif
          <div class="col-sm-6 col-md-3">
              <div class="d-grid">
                  <a href="#" class="btn btn-success w-100"> Search </a>
              </div>
          </div>
      </div>
      <!-- Search Filter -->
  @endif
  @if (Route::is(['estimates']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          @livewire('select2-estimates')
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif

  @if (Route::is(['expense-reports']))
      <!-- Search Filter -->
      <div class="row filter-row">
        @livewire('select2-expense-reports')
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif

  @if (Route::is(['expenses']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Item Name</label>
              </div>
          </div>
          @livewire('select2-expense')
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option> -- Select -- </option>
                    <option> Cash </option>
                    <option> Cheque </option>
                </select>
                <label class="focus-label">Paid By</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif

  @if (Route::is(['invoice-reports']))
      <!-- Search Filter -->
      <div class="row filter-row">
        @livewire('select2-invoice-report')
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif

  @if (Route::is(['invoices']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          @livewire('select2-invoices')
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['leaves']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-leaves')
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option> -- Select -- </option>
                    <option> Pending </option>
                    <option> Approved </option>
                    <option> Rejected </option>
                </select>
                <label class="focus-label">Leave Status</label>
            </div>
       </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['payments-reports']))
      <!-- Search Filter -->
      <div class="row filter-row">

          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif

  @if (Route::is(['payslip-reports']))
      <!-- Search Filter -->
      <div class="row filter-row">

          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-attendance-reports')
          <div class="col-sm-6 col-md-3">  
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <select class="form-control floating select">
                        <option>
                            2020
                        </option>
                        <option>
                            2019
                        </option>
                        <option>
                            2018
                        </option>
                    </select>
                </div>
                <label class="focus-label">Year</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['project-list']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Project Name</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-employees', ['context' => 'project-list'])
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif

  @if (Route::is(['project-reports']))
      <!-- Content Starts -->
      <!-- Search Filter -->
      <div class="row filter-row">

        @livewire('select2-project-reports')
        <div class="col-sm-6 col-md-3">  
            <div class="input-block mb-3 form-focus">
                <select class="form-control floating select">
                    <option>
                        Active
                    </option>
                    <option>
                        Pending
                    </option>
                </select>
                <label class="focus-label">Status</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['projects']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Project Name</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-employees', ['context' => 'projects'])
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- Search Filter -->
  @endif

  @if (Route::is(['salary']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee Name</label>
              </div>
          </div>
          @livewire('select2-salary')
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option> -- Select -- </option>
                    <option> Pending </option>
                    <option> Approved </option>
                    <option> Rejected </option>
                </select>
                <label class="focus-label">Leave Status</label>
            </div>
       </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <div class="input-block mb-3 form-focus">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['users']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Name</label>
              </div>
          </div>
          @livewire('select2-users')
          <div class="col-sm-6 col-md-3"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>Select Role</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Role</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['saved-jobs', 'visited-jobs', 'archived-jobs']))
      <!-- Search Filter -->
      <div class="row filter-row">
        @livewire('select2-component')
        <div class="col-sm-6 col-md-3">  
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>Select</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Internship</option>
                </select>
                <label class="focus-label">Job Type</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>Select Designation</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- Search Filter -->
  @endif


  @if (Route::is(['shift-scheduling']))
      <!-- Search Filter -->
      <div class="row filter-row">
          <div class="col-sm-6 col-md-3">
              <div class="input-block mb-3 form-focus">
                  <input type="text" class="form-control floating">
                  <label class="focus-label">Employee</label>
              </div>
          </div>

          @livewire('select2-shift')
          <div class="col-sm-6 col-md-2">
              <div class="input-block mb-3 form-focus focused">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">From</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-2">
              <div class="input-block mb-3 form-focus focused">
                  <div class="cal-icon">
                      <input class="form-control floating datetimepicker" type="text">
                  </div>
                  <label class="focus-label">To</label>
              </div>
          </div>
          <div class="col-sm-6 col-md-2">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- Search Filter -->
  @endif


  @if (Route::is(['task-reports']))
      <!-- Search Filter -->
      <div class="row filter-row">

        @livewire('select2-task-reports')
        <div class="col-sm-6 col-md-3">  
            <div class="input-block mb-3 form-focus">
                <select class="form-control floating select">
                    <option>
                        All
                    </option>
                    <option>
                        Pending
                    </option>
                    <option>
                        Completed
                    </option>
                </select>
                <label class="focus-label">Status</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
  @if (Route::is(['user-all-jobs']))
      <!-- Search Filter -->
      <div class="row filter-row">
        @livewire('select2-component')
        <div class="col-sm-6 col-md-3">  
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>Select</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Internship</option>
                </select>
                <label class="focus-label">Job Type</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3"> 
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating"> 
                    <option>Select Designation</option>
                    <option>Web Developer</option>
                    <option>Web Designer</option>
                    <option>Android Developer</option>
                    <option>Ios Developer</option>
                </select>
                <label class="focus-label">Designation</label>
            </div>
        </div>
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- Search Filter -->
  @endif
  @if (Route::is(['user-reports']))
      <!-- Search Filter -->
      <div class="row filter-row">

        @livewire('select2-user-reports')
          <div class="col-sm-6 col-md-3">
              <a href="#" class="btn btn-success w-100"> Search </a>
          </div>
      </div>
      <!-- /Search Filter -->
  @endif
