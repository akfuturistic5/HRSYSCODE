<?php $page = 'subscriptions'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Subscriptions
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Subscriptions
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-10 mx-auto">

            <!-- Plan Tab -->
            <div class="row justify-content-center mb-4">
                <div class="col-auto">
                    <nav class="nav btn-group">
                        <a href="#monthly" class="btn btn-outline-secondary active show" data-bs-toggle="tab">Monthly Plan</a>
                        <a href="#annual" class="btn btn-outline-secondary" data-bs-toggle="tab">Annual Plan</a>
                    </nav>
                </div>
            </div>
            <!-- /Plan Tab -->

            <!-- Plan Tab Content -->
            <div class="tab-content">

                <!-- Monthly Tab -->
                <div class="tab-pane fade active show" id="monthly">

                    <div class="row mb-30 equal-height-cards">
                        <div class="col-md-4">
                            <div class="card pricing-box">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <h3>Free</h3>
                                        <span class="display-4">$0</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i> <b>1 User</b></li>
                                        <li><i class="fa fa-check"></i> 5 Projects </li>
                                        <li><i class="fa fa-check"></i> 5 GB Storage</li>
                                        <li><i class="fa fa-check"></i> Unlimited Message</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal"
                                        data-bs-target="#edit_plan">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card pricing-box">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <h3>Professional</h3>
                                        <span class="display-4">$21</span>
                                        <span>/mo</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i> <b>30 Users</b></li>
                                        <li><i class="fa fa-check"></i> 50 Projects</li>
                                        <li><i class="fa fa-check"></i> 100 GB Storage</li>
                                        <li><i class="fa fa-check"></i> Unlimited Message</li>
                                        <li><i class="fa fa-check"></i> 24/7 Customer Support</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal"
                                        data-bs-target="#edit_plan">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card pricing-box">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <h3>Enterprise</h3>
                                        <span class="display-4">$38</span>
                                        <span>/mo</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i> <b>Unlimited Users </b></li>
                                        <li><i class="fa fa-check"></i> Unlimited Projects</li>
                                        <li><i class="fa fa-check"></i> 500 GB Storage</li>
                                        <li><i class="fa fa-check"></i> Unlimited Message</li>
                                        <li><i class="fa fa-check"></i> Voice and Video Call</li>
                                        <li><i class="fa fa-check"></i> 24/7 Customer Support</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal"
                                        data-bs-target="#edit_plan">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Monthly Plan Details -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-table mb-0">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Plan Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0" id="subscriptions_data">
                                            <thead>
                                                <tr>
                                                    <th>Plan</th>
                                                    <th>Plan Type</th>
                                                    <th>Create Date</th>
                                                    <th>Modified Date</th>
                                                    <th>Amount</th>
                                                    <th>Subscribed Users</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Monthly Plan Details -->

                </div>
                <!-- /Monthly Tab -->

                <!-- Annual Plan Tab -->
                <div class="tab-pane fade" id="annual">
                    <div class="row mb-30 equal-height-cards">
                        <div class="col-md-4">
                            <div class="card pricing-box">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <h3>Free</h3>
                                        <span class="display-4">$0</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i> <b>1 User</b></li>
                                        <li><i class="fa fa-check"></i> 5 Projects </li>
                                        <li><i class="fa fa-check"></i> 5 GB Storage</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal"
                                        data-bs-target="#edit_plan">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card pricing-box">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <h3>Professional</h3>
                                        <span class="display-4">$199</span>
                                        <span>/mo</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i> <b>30 Users</b></li>
                                        <li><i class="fa fa-check"></i> 50 Projects</li>
                                        <li><i class="fa fa-check"></i> 100 GB Storage</li>
                                        <li><i class="fa fa-check"></i> Unlimited Message</li>
                                        <li><i class="fa fa-check"></i> 24/7 Customer Support</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal"
                                        data-bs-target="#edit_plan">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card pricing-box">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <h3>Enterprise</h3>
                                        <span class="display-4">$399</span>
                                        <span>/mo</span>
                                    </div>
                                    <ul>
                                        <li><i class="fa fa-check"></i> <b>Unlimited Users </b></li>
                                        <li><i class="fa fa-check"></i> Unlimited Projects</li>
                                        <li><i class="fa fa-check"></i> 500 GB Storage</li>
                                        <li><i class="fa fa-check"></i> Unlimited Message</li>
                                        <li><i class="fa fa-check"></i> Voice and Video Call</li>
                                        <li><i class="fa fa-check"></i> 24/7 Customer Support</li>
                                    </ul>
                                    <a href="#" class="btn btn-lg btn-secondary mt-auto" data-bs-toggle="modal"
                                        data-bs-target="#edit_plan">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Yearly Plan Details -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-table mb-0">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Plan Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Plan</th>
                                                    <th>Plan Type</th>
                                                    <th>Create Date</th>
                                                    <th>Modified Date</th>
                                                    <th>Amount</th>
                                                    <th>Subscribed Users</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Free Trial</td>
                                                    <td>Yearly</td>
                                                    <td>9 Nov 2019</td>
                                                    <td>8 Dec 2019</td>
                                                    <td>Free</td>
                                                    <td><a class="btn btn-info btn-sm" href="{{url('subscribed-companies')}}">62 Users</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Professional</td>
                                                    <td>Yearly</td>
                                                    <td>9 Nov 2019</td>
                                                    <td>8 Dec 2019</td>
                                                    <td>$199</td>
                                                    <td><a class="btn btn-info btn-sm" href="{{url('subscribed-companies')}}">157 Users</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Enterprise</td>
                                                    <td>Yearly</td>
                                                    <td>9 Nov 2019</td>
                                                    <td>8 Dec 2019</td>
                                                    <td>$399</td>
                                                    <td><a class="btn btn-info btn-sm" href="{{url('subscribed-companies')}}">241 Users</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Yearly Plan Details -->

                </div>
                <!-- /Annual Plan Tab -->

            </div>
            <!-- /Plan Tab Content -->

            @component('components.model-popup')
            @endcomponent


        </div>
    </div>
@endsection
