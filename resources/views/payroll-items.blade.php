<?php $page = 'payroll-items'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Payroll Items
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Payroll Items
        @endslot
    @endcomponent

    <!-- Page Tab -->
    <div class="page-menu">
        <div class="row">
            <div class="col-sm-12">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_additions">Additions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_overtime">Overtime</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_deductions">Deductions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Tab -->

    <!-- Tab Content -->
    <div class="tab-content">

        <!-- Additions Tab -->
        <div class="tab-pane show active" id="tab_additions">

            <!-- Add Addition Button -->
            <div class="text-end mb-4 clearfix">
                <button class="btn btn-primary add-btn" type="button" data-bs-toggle="modal"
                    data-bs-target="#add_addition"><i class="fa-solid fa-plus"></i> Add Addition</button>
            </div>
            <!-- /Add Addition Button -->

            <!-- Payroll Additions Table -->
            <div class="payroll-table card">
                <div class="table-responsive">
                    <table class="table table-hover table-radius">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Default/Unit Amount</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Leave balance amount</th>
                                <td>Monthly remuneration</td>
                                <td>$5</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_addition"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_addition"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Arrears of salary</th>
                                <td>Additional remuneration</td>
                                <td>$8</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_addition"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_addition"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Gratuity</th>
                                <td>Monthly remuneration</td>
                                <td>$20</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_addition"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_addition"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Payroll Additions Table -->

        </div>
        <!-- Additions Tab -->

        <!-- Overtime Tab -->
        <div class="tab-pane" id="tab_overtime">

            <!-- Add Overtime Button -->
            <div class="text-end mb-4 clearfix">
                <button class="btn btn-primary add-btn" type="button" data-bs-toggle="modal"
                    data-bs-target="#add_overtime"><i class="fa-solid fa-plus"></i> Add Overtime</button>
            </div>
            <!-- /Add Overtime Button -->

            <!-- Payroll Overtime Table -->
            <div class="payroll-table card">
                <div class="table-responsive">
                    <table class="table table-hover table-radius">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Rate</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Normal day OT 1.5x</th>
                                <td>Hourly 1.5</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_overtime"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_overtime"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Public holiday OT 3.0x</th>
                                <td>Hourly 3</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_overtime"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_overtime"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Rest day OT 2.0x</th>
                                <td>Hourly 2</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_overtime"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_overtime"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Payroll Overtime Table -->

        </div>
        <!-- /Overtime Tab -->

        <!-- Deductions Tab -->
        <div class="tab-pane" id="tab_deductions">

            <!-- Add Deductions Button -->
            <div class="text-end mb-4 clearfix">
                <button class="btn btn-primary add-btn" type="button" data-bs-toggle="modal"
                    data-bs-target="#add_deduction"><i class="fa-solid fa-plus"></i> Add Deduction</button>
            </div>
            <!-- /Add Deductions Button -->

            <!-- Payroll Deduction Table -->
            <div class="payroll-table card">
                <div class="table-responsive">
                    <table class="table table-hover table-radius">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Default/Unit Amount</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Absent amount</th>
                                <td>$12</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_deduction"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_deduction"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Advance</th>
                                <td>$7</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_deduction"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_deduction"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>Unpaid leave</th>
                                <td>$3</td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_deduction"><i class="fa-solid fa-pencil m-r-5"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_deduction"><i
                                                    class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Payroll Deduction Table -->

        </div>
        <!-- /Deductions Tab -->

    </div>
    <!-- Tab Content -->



    @component('components.model-popup')
    @endcomponent
@endsection
