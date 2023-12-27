<?php $page = 'user-asset-details'; ?>
@extends('layout.mainlayout')

@section('content')
    @component('components.breadcrumb')
        @slot('title')
        Profile
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
        Profile
        @endslot
    @endcomponent
    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">John Doe</h3>
                                        <h6 class="text-muted">UI/UX Design Team</h6>
                                        <small class="text-muted">Web Designer</small>
                                        <div class="staff-id">Employee ID : FT-0001</div>
                                        <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                        <div class="staff-msg"><a class="btn btn-custom" href="{{url('chat')}}">Send Message</a></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="">9876543210</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="">johndoe@example.com</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Birthday:</div>
                                            <div class="text">24th July</div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
                                        </li>
                                        <li>
                                            <div class="title">Gender:</div>
                                            <div class="text">Male</div>
                                        </li>
                                        <li>
                                            <div class="title">Reports to:</div>
                                            <div class="text">
                                               <div class="avatar-box">
                                                  <div class="avatar avatar-xs">
                                                     <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="">
                                                  </div>
                                               </div>
                                               <a href="{{url('profile')}}">
                                                    Jeffery Lalor
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom">
                    <li class="nav-item"><a href="profile#emp_profile" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="profile#emp_projects" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="profile#bank_statutory" class="nav-link">Bank & Statutory <small class="text-danger">(Admin Only)</small></a></li>
                    <li class="nav-item"><a href="profile#emp_assets" class="nav-link active">Assets</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="assign-head">
        <div class="assign-content">
            <img src="{{ URL::asset('/assets/img/keyboard.png')}}" alt="img">
            <h6>Dell Keyboard</h6>
        </div>
        <div class="assign-content">
            <a href="#" class="btn btn-assign" data-bs-toggle="modal" data-bs-target="#raise-issue"><i class="fas fa-hand-paper"></i> Raise Issue  </a>
        </div>
    </div>
    
    <div class="card asset-box">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-7">
                    <h5>Asset Info</h5>
                    <div class="asset-info">
                        {{-- <div class="asset-info-img">
                            <img src="{{ URL::asset('/assets/img/key.jpg')}}" alt="">
                        </div> --}}
                        <div class="asset-info-det">
                            <h6>Wired Keyboard</h6>
                            <p>SE5214 - 2022 2022 2022 </p>
                            <ul>
                                <li>Type <span>Keybaord</span></li>
                                <li>Serial Number <span>3647952145678</span></li>
                                <li>Brand <span>Dell</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="assets-image">
                        <h5>Asset Images</h5>
                        <ul>
                            <li>
                                <img src="{{ URL::asset('/assets/img/img1.jpg')}}" alt="img">
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/img2.jpg')}}" alt="img">
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/img3.jpg')}}" alt="img">
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/img4.jpg')}}" alt="img">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="asset-history">
                        <h5>Asset Images</h5>
                        <ul>
                            <li>
                                <div class="aset-img">
                                    <img src="{{ URL::asset('/assets/img/icons/icon-01.svg')}}" alt="img">
                                </div>
                                <div class="asset-inf">
                                    <h6>Vendor</h6>
                                    <p>Compusoft Systems Ltd.,</p>
                                </div>
                            </li>
                            <li>
                                <div class="aset-img">
                                    <img src="{{ URL::asset('/assets/img/icons/icon-03.svg')}}" alt="img">
                                </div>
                                <div class="asset-inf">
                                    <h6>Category</h6>
                                    <p>Computer</p>
                                </div>
                            </li>
                            <li>
                                <div class="aset-img">
                                    <img src="{{ URL::asset('/assets/img/icons/icon-04.svg')}}" alt="img">
                                </div>
                                <div class="asset-inf">
                                    <h6>Cost</h6>
                                    <p>₹ 1,200</p>
                                </div>
                            </li>
                            <li>
                                <div class="aset-img">
                                    <img src="{{ URL::asset('/assets/img/icons/icon-05.svg')}}" alt="img">
                                </div>
                                <div class="asset-inf">
                                    <h6>Location</h6>
                                    <p>123 Street, Vivekanandhar Road, Coimbatore - 32</p>
                                </div>
                            </li>
                            <li>
                                <div class="aset-img">
                                    <img src="{{ URL::asset('/assets/img/icons/icon-02.svg')}}" alt="img">
                                </div>
                                <div class="asset-inf">
                                    <h6>Warranty</h6>
                                    <p>From 11-12-2022   -   To  11-12-2022</p>
                                </div>
                            </li>									
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection

