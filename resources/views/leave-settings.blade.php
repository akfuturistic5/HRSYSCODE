<?php $page = 'leave-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Leave Settings
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Leave Settings
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">

            <!-- Annual Leave -->
            <div class="card leave-box" id="leave_annual">
                <div class="card-body">
                    <div class="h3 card-title with-switch">
                        Annual
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_annual" checked>
                            <label class="onoffswitch-label" for="switch_annual">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="leave-item">

                        <!-- Annual Days Leave -->
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Days</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">Edit</button>
                            </div>
                        </div>
                        <!-- /Annual Days Leave -->

                        <!-- Carry Forward -->
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <label class="d-block col-form-label">Carry forward</label>
                                    <div class="leave-inline-form">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="carry_no" value="option1" disabled>
                                            <label class="form-check-label" for="carry_no">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="carry_yes" value="option2" disabled>
                                            <label class="form-check-label" for="carry_yes">Yes</label>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text">Max</span>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- /Carry Forward -->

                        <!-- Earned Leave -->
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <label class="d-block col-form-label">Earned leave</label>
                                    <div class="leave-inline-form">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="earned_no" value="option1" disabled>
                                            <label class="form-check-label" for="earned_no">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="earned_yes" value="option2" disabled>
                                            <label class="form-check-label" for="earned_yes">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- /Earned Leave -->

                    </div>

                    <!-- Custom Policy -->
                    <div class="custom-policy">
                        <div class="leave-header">
                            <div class="title">Custom policy</div>
                            <div class="leave-action">
                                <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#add_custom_policy"><i class="fa-solid fa-plus"></i> Add custom
                                    policy</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap leave-table mb-0">
                                <thead>
                                    <tr>
                                        <th class="l-name">Name</th>
                                        <th class="l-days">Days</th>
                                        <th class="l-assignee">Assignee</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5 Year Service </td>
                                        <td>5</td>
                                        <td>
                                            <a href="#" class="avatar"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="#">John Doe</a>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a aria-expanded="false" data-bs-toggle="dropdown"
                                                    class="action-icon dropdown-toggle" href="#"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#edit_custom_policy"><i
                                                            class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete_custom_policy"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /Custom Policy -->

                </div>
            </div>
            <!-- /Annual Leave -->

            <!-- Sick Leave -->
            <div class="card leave-box" id="leave_sick">
                <div class="card-body">
                    <div class="h3 card-title with-switch">
                        Sick
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_sick"
                                checked>
                            <label class="onoffswitch-label" for="switch_sick">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Days</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Sick Leave -->

            <!-- Hospitalisation Leave -->
            <div class="card leave-box" id="leave_hospitalisation">
                <div class="card-body">
                    <div class="h3 card-title with-switch">
                        Hospitalisation
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                id="switch_hospitalisation">
                            <label class="onoffswitch-label" for="switch_hospitalisation">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="leave-item">

                        <!-- Annual Days Leave -->
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Days</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- /Annual Days Leave -->

                    </div>

                    <!-- Custom Policy -->
                    <div class="custom-policy">
                        <div class="leave-header">
                            <div class="title">Custom policy</div>
                            <div class="leave-action">
                                <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#add_custom_policy"><i class="fa-solid fa-plus"></i> Add custom
                                    policy</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap leave-table mb-0">
                                <thead>
                                    <tr>
                                        <th class="l-name">Name</th>
                                        <th class="l-days">Days</th>
                                        <th class="l-assignee">Assignee</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5 Year Service </td>
                                        <td>5</td>
                                        <td>
                                            <a href="#" class="avatar"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="#">John Doe</a>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a aria-expanded="false" data-bs-toggle="dropdown"
                                                    class="action-icon dropdown-toggle" href="#"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i
                                                            class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a href="#" class="dropdown-item"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /Custom Policy -->

                </div>
            </div>
            <!-- /Hospitalisation Leave -->

            <!-- Maternity Leave -->
            <div class="card leave-box" id="leave_maternity">
                <div class="card-body">
                    <div class="h3 card-title with-switch">
                        Maternity <span class="subtitle">Assigned to female only</span>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_maternity"
                                checked>
                            <label class="onoffswitch-label" for="switch_maternity">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Days</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Maternity Leave -->

            <!-- Paternity Leave -->
            <div class="card leave-box" id="leave_paternity">
                <div class="card-body">
                    <div class="h3 card-title with-switch">
                        Paternity <span class="subtitle">Assigned to male only</span>
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                id="switch_paternity">
                            <label class="onoffswitch-label" for="switch_paternity">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Days</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Paternity Leave -->

            <!-- Custom Create Leave -->
            <div class="card leave-box mb-0" id="leave_custom01">
                <div class="card-body">
                    <div class="h3 card-title with-switch">
                        LOP
                        <div class="onoffswitch">
                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_custom01"
                                checked>
                            <label class="onoffswitch-label" for="switch_custom01">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                        <button class="btn btn-danger leave-delete-btn" type="button">Delete</button>
                    </div>
                    <div class="leave-item">

                        <!-- Annual Days Leave -->
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <div class="input-block mb-3">
                                        <label class="col-form-label">Days</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">Edit</button>
                            </div>
                        </div>
                        <!-- /Annual Days Leave -->

                        <!-- Carry Forward -->
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <label class="d-block col-form-label">Carry forward</label>
                                    <div class="leave-inline-form">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="carryForward"
                                                id="carry_no_01" value="option1" disabled>
                                            <label class="form-check-label" for="carry_no_01">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="carryForward"
                                                id="carry_yes_01" value="option2" disabled>
                                            <label class="form-check-label" for="carry_yes_01">Yes</label>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-text">Max</span>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- /Carry Forward -->

                        <!-- Earned Leave -->
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box">
                                    <label class="d-block col-form-label">Earned leave</label>
                                    <div class="leave-inline-form">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1" disabled>
                                            <label class="form-check-label" for="inlineRadio1">No</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2" disabled>
                                            <label class="form-check-label" for="inlineRadio2">Yes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-right">
                                <button class="leave-edit-btn">
                                    Edit
                                </button>
                            </div>
                        </div>
                        <!-- /Earned Leave -->

                    </div>

                    <!-- Custom Policy -->
                    <div class="custom-policy">
                        <div class="leave-header">
                            <div class="title">Custom policy</div>
                            <div class="leave-action">
                                <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#add_custom_policy"><i class="fa-solid fa-plus"></i> Add custom
                                    policy</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-nowrap leave-table mb-0">
                                <thead>
                                    <tr>
                                        <th class="l-name">Name</th>
                                        <th class="l-days">Days</th>
                                        <th class="l-assignee">Assignee</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>5 Year Service </td>
                                        <td>5</td>
                                        <td>
                                            <a href="#" class="avatar"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                    alt="User Image"></a>
                                            <a href="#">John Doe</a>
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a aria-expanded="false" data-bs-toggle="dropdown"
                                                    class="action-icon dropdown-toggle" href="#"><i
                                                        class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#edit_custom_policy"><i
                                                            class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                    <a href="#" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#delete_custom_policy"><i
                                                            class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /Custom Policy -->

                </div>
            </div>
            <!-- /Custom Create Leave -->

        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
