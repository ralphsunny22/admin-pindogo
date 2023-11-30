@extends('backend.layouts.design')
@section('title')Dashboard @endsection
@section('extra_css')@endsection

@section('content')

<div class="main-content app-content">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
                
            <!-- PAGE HEADER -->
            <div class="page-header d-sm-flex d-block">
                <ol class="breadcrumb mb-sm-0 mb-3">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol><!-- End breadcrumb -->

                <!-- rhs breadcrumb -->
                <div class="ms-auto">
                    <div>
                        <a href="javascript:void(0);" class="btn bg-secondary-transparent text-secondary btn-sm"
                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            data-bs-original-title="Rating">
                            <span>
                                <i class="fa fa-star"></i>
                            </span>
                        </a>
                        <a href="https://laravelui.spruko.com/sparic/lockscreen" class="btn bg-primary-transparent text-primary mx-2 btn-sm"
                            data-bs-toggle="tooltip" title="" data-bs-placement="bottom"
                            data-bs-original-title="lock">
                            <span>
                                <i class="fa fa-lock"></i>
                            </span>
                        </a>
                        <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm" data-bs-toggle="tooltip"
                            title="" data-bs-placement="bottom" data-bs-original-title="Add New">
                            <span>
                                <i class="fa fa-plus"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <!-- End rhs breadcrumb -->
            </div>
            <!-- END PAGE HEADER -->

            <!-- ROW -->
            <div class="row">

                <!-- Total Users -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Total Users</p>
                                            <div class="fs-12 text-muted mb-5">Includes active and banned</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">{{ $totalUsersCount }}
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-primary lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Active Users -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Active Users</p>
                                            <div class="fs-12 text-muted mb-5">Users with active accounts</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">{{ $totalUsersCount }}
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-success lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Pending Users -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Banned Users</p>
                                            <div class="fs-12 text-muted mb-5">Users that has been banned</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">{{ $bannedUsersCount }}
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-danger lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Total Groups -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Total Groups</p>
                                            <div class="fs-12 text-muted mb-5">Includes active and pending</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">3,456
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-danger lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Active Groups -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Active Groups</p>
                                            <div class="fs-12 text-muted mb-5">Currently active</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">3,456
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-success lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Pending Groups -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Pending Groups</p>
                                            <div class="fs-12 text-muted mb-5">Currently inactive</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">3,456
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-danger lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Total Paid Groups -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Total Paid Groups</p>
                                            <div class="fs-12 text-muted mb-5">Includes active and pending paid groups</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">3,456
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-primary lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Active Paid Groups -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Active Paid Groups</p>
                                            <div class="fs-12 text-muted mb-5">Currently active & paid</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">3,456
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-success lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <!-- Active Paid Groups -->
                <div class="col-sm-12 col-lg-4 col-md-4 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Pending Paid Groups</p>
                                            <div class="fs-12 text-muted mb-5">Currently paid but pending</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">3,456
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <span class="text-success lh-1 mt-3 fs-26"><i class="fe fe-users"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->

                <div class="col-sm-12 col-lg-6 col-md-6 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Employees</p>
                                            <div class="fs-12 text-muted mb-5">Overview of this month</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">4,738
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <label class="custom-switch mb-5">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <span class="text-secondary lh-1 mt-3 fs-26"><i
                                                    class="fe fe-layers"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-12 col-lg-6 col-md-6 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Task</p>
                                            <div class="fs-12 text-muted mb-5">Overview of this month</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">6,738
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <label class="custom-switch mb-5">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <span class="text-warning lh-1 mt-3 fs-26"><i
                                                    class="fe fe-file-text"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-sm-12 col-lg-6 col-md-6 col-xxl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="mb-0 fw-semibold text-dark lh-1">Earnings</p>
                                            <div class="fs-12 text-muted mb-5">Overview of this month</div>
                                            <div class="fs-30 fw-semibold mb-0 lh-1">$8,963 <i class=""></i>
                                            </div>
                                        </div>
                                        <div class="text-end d-flex flex-column align-items-center">
                                            <label class="custom-switch mb-5">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <span class="text-danger lh-1 mt-3 fs-26"><i
                                                    class="fe fe-external-link"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col end -->
            </div>
            <!-- END ROW -->

            <!-- ROW -->
            <div class="row">
                <div class="col-xxl-7 col-lg-12 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="row">
                            <div class="col-lg-4 border-end">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 fw-semibold text-muted-dark">Total
                                                Purchase</p>
                                            <h3 class="mt-2 mb-1 text-dark fw-semibold">
                                                $7,483</h3>
                                            <p class="text-muted fs-12 mb-0"><span
                                                    class="text-body fw-semibold"><i
                                                        class="fa fa-arrow-up text-success me-1"> </i>23%
                                                </span> in this year</p>
                                        </div>
                                        <div class="col mt-3 col-auto">
                                            <span>
                                                <i class="fe fe-briefcase mb-3 text-primary p-3 bg-primary-transparent fs-24 rounded-circle mb-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs mb-0 mt-3">
                                        <div
                                            class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 border-end">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 fw-semibold  text-muted-dark">Total
                                                Orders</p>
                                            <h3 class="mt-2 mb-1 text-dark fw-semibold">
                                                65,457</h3>
                                            <p class="text-muted fs-12 mb-0"><span
                                                    class="text-body fw-semibold"><i
                                                        class="fa fa-arrow-up text-success me-1"> </i>13%
                                                </span> in this year</p>
                                        </div>
                                        <div class="col mt-3 col-auto">
                                            <span>
                                                <i class="fe fe-truck mb-3 text-secondary p-3 bg-secondary-transparent fs-24 rounded-circle mb-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs mb-0 mt-3">
                                        <div
                                            class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 border-end">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <p class="mb-0 fw-semibold text-muted-dark">Total
                                                Sales</p>
                                            <h3 class="mt-2 mb-1 text-dark fw-semibold">
                                                $6,128</h3>
                                            <p class="text-muted fs-12 mb-0"><span
                                                    class="text-body fw-semibold"><i
                                                        class="fa fa-arrow-down text-danger me-1"> </i>12%
                                                </span> in this year</p>
                                        </div>
                                        <div class="col mt-3 col-auto">
                                            <span>
                                                <i class="fe fe-trending-up mb-3 text-danger p-3 bg-danger-transparent fs-24 rounded-circle mb-1"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xs mb-0 mt-3">
                                        <div
                                            class="progress-bar progress-bar-striped progress-bar-animated bg-danger w-50">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card overflow-hidden">
                        <div class="card-header border-bottom d-block d-sm-flex">
                            <h3 class="card-title mb-3 mb-sm-0">Sales Overview</h3>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm text-dark fs-13 fw-semibold">Daily</a>
                                <a href="javascript:void(0);" class="btn btn-sm text-dark fs-13 fw-semibold">Monthly</a>
                                <a href="javascript:void(0);" class="btn btn-sm text-dark fs-13 fw-semibold">Yearly</a>
                                <a href="javascript:void(0);" class="btn btn-sm fs-13 fw-semibold btn-primary"><i class="fe fe-download"></i> Report</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="timeline-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-12 col-md-12">
                    <div class="card d-inline-block overflow-hidden">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Sales Country Wise</h3>
                        </div>
                        <div class="card-body pb-0">
                            <div id="sales-country-wise"></div>
                        </div>
                        <div class="card-footer py-0">
                            <div class="row">
                                <div class="col-6 border-end">
                                    <div class="text-body fw-semibold fs-12 text-center mt-3">Monthly Average</div>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <span class="me-3 fs-20 fw-semibold">2,186</span>
                                        <span class="text-success fw-semibold mt-1"><i
                                                class="fa fa-caret-up me-1"></i>0.48%
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-body fw-semibold fs-12 text-center mt-3">Weekly Average</div>
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <span class="me-3 fs-20 fw-semibold">1,068</span>
                                        <span class="text-danger fw-semibold mt-1"><i
                                                class="fa fa-caret-down me-1"></i>0.20%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW -->

            <!-- ROW -->
            <div class="row row-deck">
                <div class="col-xxl-6 col-xl-12 col-lg-12">
                    <div class="card d-inline-block overflow-hidden">
                        <div
                            class="card-header custom-header">
                            <h3 class="card-title mb-0">Popular Products</h3>
                        </div>
                        <div class="card-body overflow-hidden p-0">
                            <div class="table-responsive">
                                <table class="table border-0 mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-dark fw-semibold ps-5 fs-13">s.no</th>
                                            <th class="border-top-0 text-dark fw-semibold fs-13">Product Name</th>
                                            <th class="border-top-0 text-dark fw-semibold fs-13">Popularity</th>
                                            <th class="border-top-0 text-dark fw-semibold pe-5 text-end fs-13">Percentage %</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td class="ps-5">
                                                <div class="text-body">01</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Samsung Smartwatches</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-50 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5">
                                                <div><span
                                                        class="btn btn-sm btn-outline-primary bg-primary-transparent">50%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-5">
                                                <div class="text-body">02</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Kids Wear</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-20 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5">
                                                <div><span
                                                        class="btn btn-sm btn-outline-secondary bg-secondary-transparent">20%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-5">
                                                <div class="text-body">03</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Home Decores</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-info w-30 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5">
                                                <div><span
                                                        class="btn btn-sm btn-outline-info bg-info-transparent">30%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-5">
                                                <div class="text-body">04</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Furnitures</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-success w-50 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5">
                                                <div><span
                                                        class="btn btn-sm btn-outline-success bg-success-transparent">45%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td class="ps-5">
                                                <div class="text-body">05</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Electroni Gadgets</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-70 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5">
                                                <div><span
                                                        class="btn btn-sm btn-outline-warning bg-warning-transparent">70%</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom-0">
                                            <td class="ps-5">
                                                <div class="text-body">06</div>
                                            </td>
                                            <td>
                                                <div class="text-dark fw-semibold">Mechanical Parts</div>
                                            </td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div
                                                        class="progress-bar progress-bar-striped progress-bar-animated bg-pink w-50 rounded">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end pe-5">
                                                <div><span
                                                        class="btn btn-sm btn-outline-pink bg-pink-transparent">45%</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-12 col-md-12">
                    <div class="card">
                        <div
                            class="card-header border-bottom">
                            <h3 class="card-title mb-0">Sales Activities</h3>
                        </div>
                        <div class="card-body">
                            <div class="timeline-label">
                                <div class="sales-activity mb-4 fs-13">
                                    <span class="text-muted ms-5">14:20</span>
                                    <h6 class="my-1 ms-5 fw-semibold">New Customer</h6>
                                    <p class="mb-0 ms-5 text-muted fs-12"><a href="javascript:void(0);"
                                            class="text-azure fw-semibold p-0">Jhon124</a> successfully
                                        Signed </p>
                                </div>
                                <div class="sales-activity mb-4">
                                    <span class="text-muted ms-5">08:00</span>
                                    <h6 class="my-1 mb-0 ms-5 fw-semibold">Potential Customer</h6>
                                    <p class="mb-0 ms-5 text-muted fs-12">User <a href="javascript:void(0);"
                                            class="text-azure">Charlie_T</a> checked out <a href="javascript:void(0);"
                                            class="text-purple">Item #42</a>. <a href="javascript:void(0);"
                                            class="text-success fw-semibold">View</a></p>
                                </div>
                                <div class="sales-activity mb-4">
                                    <span class="text-muted ms-5">16:24</span>
                                    <h6 class="my-1 mb-0 ms-5 fw-semibold">New Ticket Arrived</h6>
                                    <p class="mb-0 ms-5 text-muted fs-12">User <a href="javascript:void(0);"
                                            class="text-azure">Michael85</a> Submitted a ticket <a href="javascript:void(0);"
                                            class="text-success fw-semibold">Details</a></p>
                                </div>
                                <div class="sales-activity">
                                    <span class="text-muted ms-5">04:16</span>
                                    <h6 class="my-1 mb-0 ms-5 fw-semibold">Monthly Sales Report</h6>
                                    <p class="mb-0 ms-5 text-muted fs-12"><a href="javascript:void(0);" class="text-danger">4
                                            days left</a> notification to submit the monthly sales report.
                                        <a href="javascript:void(0);" class="text-success fw-semibold">View report</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3  col-xl-6 col-lg-12 col-md-12">
                    <div class="card">
                        <div
                            class="card-header border-bottom">
                            <h3 class="card-title mb-0">Recent Orders</h3>
                        </div>
                        <div class="card-body px-0">
                            <div id="recent-orders"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row pb-0 mb-0">
                                <div class="col-md-6 col justify-content-center text-center border-end">
                                    <p class="mb-0 d-flex fw-semibold text-muted justify-content-center">
                                        <span class="legend bg-primary"></span>Last Month
                                    </p>
                                    <h4 class="mb-0 fw-semibold">$3,006</h4>
                                </div>
                                <div class="col-md-6 col text-center float-end">
                                    <p class="mb-0 d-flex fw-semibold text-muted justify-content-center ">
                                        <span class="legend bg-secondary"></span>This Month
                                    </p>
                                    <h4 class="mb-0 fw-semibold">$4,026</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END ROW -->

            <!-- ROW -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Product Sales</h3>
                            <div class="dropdown ms-auto">
                                <button class="btn btn-outline-default btn-sm fw-bold text-primary fs-12 d-flex align-items-center dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-calendar-date fw-semibold mx-1"></i> Week
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table border p-0 text-nowrap mb-0">
                                    <thead class="bg-light text-dark">
                                        <tr>
                                            <th
                                                class="fw-semibold fs-14 border-bottom-0 w-5">
                                                Order ID</th>
                                            <th
                                                class="fw-semibold fs-14 border-bottom-0">
                                                Customer</th>
                                            <th
                                                class="fw-semibold fs-14 border-bottom-0">
                                                Order Date</th>
                                            <th
                                                class="fw-semibold fs-14 border-bottom-0">
                                                Product name</th>
                                            <th
                                                class="fw-semibold fs-14 border-bottom-0">
                                                Price</th>
                                            <th
                                                class="fw-semibold fs-14 border-bottom-0">
                                                Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <h6 class="mb-0 fw-semibold text-dark">#420153</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex contact-image">
                                                    <img src="/sparic/build/assets/images/users/male/33.jpg" class="avatar avatar-md brround" alt="person-image">
                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Jake poole</h6>
                                                        <span
                                                            class="fs-12 text-muted">jacke123@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                            <td class="fs-13 fw-semibold text-dark">Sofa</td>
                                            <td class="fs-13 fw-semibold text-dark">$426.56</td>
                                            <td class="fs-15 fw-semibold">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span
                                                        class="badge text-white bg-danger fw-semibold fs-11">Out
                                                        Stock</span>
                                                    <div class="dropdown">
                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                            <li><a href="javascript:void(0);">Add</a></li>
                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                            <li><a href="javascript:void(0);">More</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <h6 class="mb-0 fw-semibold text-dark">#243153</h6>
                                                </div>
                                            </td>
                                            <td class="d-flex border-bottom-0">
                                                <div>
                                                    <span class="avatar avatar-md me-2"><img src="/sparic/build/assets/images/users/female/19.jpg" alt="img" class="rounded-circle cover-image"></span>
                                                </div>
                                                <div class="flex-1 mt-1 lh-1">
                                                    <h6 class="mb-1 fs-14 fw-semibold text-dark">Virginia Mak
                                                    </h6>
                                                    <span
                                                        class="fs-12 text-muted">virginia456@gmail.com</span>
                                                </div>
                                            </td>
                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>20-11-2020 </td>
                                            <td class="fs-13 fw-semibold text-dark">Watch</td>
                                            <td class="fs-13 fw-semibold text-dark">$265.04</td>
                                            <td class="fs-15 fw-semibold">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span
                                                        class="badge text-white bg-success fw-semibold fs-11">In
                                                        Stock</span>

                                                    <div class="dropdown">
                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                            <li><a href="javascript:void(0);">Add</a></li>
                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                            <li><a href="javascript:void(0);">More</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <h6 class="mb-0 fw-semibold text-dark">#230153</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex contact-image">
                                                    <img src="/sparic/build/assets/images/users/female/21.jpg" class="avatar avatar-md brround" alt="person-image">
                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Kylie north</h6>
                                                        <span
                                                            class="fs-12 text-muted">kylie@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                            <td class="fs-13 fw-semibold text-dark">Coat</td>
                                            <td class="fs-13 fw-semibold text-dark">$652.00</td>
                                            <td class="fs-15 fw-semibold">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span
                                                        class="badge text-white bg-danger fw-semibold fs-11">out
                                                        Stock</span>

                                                    <div class="dropdown">
                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                            <li><a href="javascript:void(0);">Add</a></li>
                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                            <li><a href="javascript:void(0);">More</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <h6 class="mb-0 fw-semibold text-dark">#124153</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex contact-image">
                                                    <img src="/sparic/build/assets/images/users/male/13.jpg" class="avatar avatar-md brround" alt="person-image">
                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Jan Hodges</h6>
                                                        <span class="fs-12 text-muted">jan@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                            <td class="fs-13 fw-semibold text-dark">Shoes</td>
                                            <td class="fs-13 fw-semibold text-dark">$200.56</td>
                                            <td class="fs-15 fw-semibold">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span
                                                        class="badge text-white bg-success fw-semibold fs-11">In
                                                        Stock</span>

                                                    <div class="dropdown">
                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                            <li><a href="javascript:void(0);">Add</a></li>
                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                            <li><a href="javascript:void(0);">More</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <h6 class="mb-0 fw-semibold text-dark">#024153</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex contact-image">
                                                    <img src="/sparic/build/assets/images/users/male/8.jpg" class="avatar avatar-md brround" alt="person-image">
                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Trevor Thomson
                                                        </h6>
                                                        <span
                                                            class="fs-12 text-muted">trevor@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                            <td class="fs-13 fw-semibold text-dark">T-shirts</td>
                                            <td class="fs-13 fw-semibold text-dark">$364.56</td>
                                            <td class="fs-15 fw-semibold">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span
                                                        class="badge text-white bg-danger fw-semibold fs-11">Out
                                                        Stock</span>

                                                    <div class="dropdown">
                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                            <li><a href="javascript:void(0);">Add</a></li>
                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                            <li><a href="javascript:void(0);">More</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-bootom">
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <h6 class="mb-0 fw-semibold text-dark">#420153</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex contact-image">
                                                    <img src="/sparic/build/assets/images/users/female/23.jpg" class="avatar avatar-md brround" alt="person-image">
                                                    <div class="d-flex mt-1 flex-column ms-2">
                                                        <h6 class="mb-0 fs-14 fw-semibold text-dark">Emily Lewis</h6>
                                                        <span
                                                            class="fs-12 text-muted">emily@gmail.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>19-11-2020 </td>
                                            <td class="fs-13 fw-semibold text-dark ">Jeans</td>
                                            <td class="fs-13 fw-semibold text-dark ">$56.035</td>
                                            <td class="fs-15 fw-semibold">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span
                                                        class="badge text-white bg-success fw-semibold fs-11">In
                                                        Stock</span>

                                                    <div class="dropdown">
                                                        <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                            <li><a href="javascript:void(0);">Add</a></li>
                                                            <li><a href="javascript:void(0);">Remove</a></li>
                                                            <li><a href="javascript:void(0);">More</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- END ROW -->


        </div>
    </div>
</div>

@endsection

@section('extra_js')@endsection