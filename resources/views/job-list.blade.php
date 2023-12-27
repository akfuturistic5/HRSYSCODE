<?php $page = 'job-list'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Jobs
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Jobs
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Web Devloper</h3>
                        <h4 class="job-department">Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Full Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Android Devloper</h3>
                        <h4 class="job-department">App Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Part Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Web Devloper</h3>
                        <h4 class="job-department">Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Full Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Android Devloper</h3>
                        <h4 class="job-department">App Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Part Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Web Devloper</h3>
                        <h4 class="job-department">Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Full Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Android Devloper</h3>
                        <h4 class="job-department">App Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Part Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Web Devloper</h3>
                        <h4 class="job-department">Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Full Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a class="job-list" href="{{ url('job-view') }}">
                <div class="job-list-det">
                    <div class="job-list-desc">
                        <h3 class="job-list-title">Android Devloper</h3>
                        <h4 class="job-department">App Development</h4>
                    </div>
                    <div class="job-type-info">
                        <span class="job-types">Part Time</span>
                    </div>
                </div>
                <div class="job-list-footer">
                    <ul>
                        <li><i class="fa-solid fa-signs-post"></i> California</li>
                        <li><i class="fa-regular fa-money-bill-1"></i> $35000-$38000</li>
                        <li><i class="fa-regular fa-clock"></i> 2 days ago</li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
    </div>
@endsection
