@extends('backend.layouts.design')
@section('title')All Users @endsection
@section('extra_css')
<style>
.profile-details {
    /* white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: auto; Adjust the width as needed */
}
.active-status, .banned-status {
    width: 3rem;
}

</style>
@endsection

@section('content')

<div class="main-content app-content">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
                
            <!-- PAGE HEADER -->
            <div class="page-header d-sm-flex d-block">
                <ol class="breadcrumb mb-sm-0 mb-3">
                    <!-- breadcrumb -->
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Users</li>
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
            @if(Session::has('success'))
            <div class="alert alert-success mb-3 text-center">
                {{Session::get('success')}}
            </div>
            @endif
            <!-- END ROW -->

            <!-- ROW -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">All Users</h3>
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
                                <table id="data-table" class="table table-striped border p-0 text-nowrap mb-0">
                                    <thead class="bg-light text-dark">
                                        <tr>
                                            <th class="fw-semibold fs-14 border-bottom-0">Profile</th>
                                            <th class="fw-semibold fs-14 border-bottom-0">Email</th>
                                            <th class="fw-semibold fs-14 border-bottom-0">Gender</th>
                                            <th class="fw-semibold fs-14 border-bottom-0">Country, State, City</th>
                                            <th class="fw-semibold fs-14 border-bottom-0">Date of Birth</th>
                                            <th class="fw-semibold fs-14 border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($allUsers) > 0)
                                            @foreach ($allUsers as $user)

                                            <tr class="border-bottom">
                                                <td class="profile-details border" style="width: 100%; padding-right: 4em">
                                                    <div class="d-flex contact-image">
                                                        
                                                        @if (isset($user->picture))
                                                            <img src="{!! 'https://f8.codester.dev/storage/'.$user->picture !!}" class="avatar avatar-md brround" alt="person-image"
                                                            style="border-radius: 5px !important">
                                                        @else
                                                            <i class="fe fe-user" style="font-size: 2em;"></i>
                                                        @endif
                                                        
                                                        <div class="d-flex mt-1 flex-column ms-2">
                                                            <h6 class="mb-0 fs-14 fw-semibold text-dark"><a href="{{ route('singleUser', $user->id) }}">{{ $user->name }}</a></h6>
                                                            <span class="fs-12 text-muted">{!! '@'.$user->username !!}</span>
                                                            
                                                            @if (isset($user->email_verified_at) && ($user->status==1))
                                                                <span class="badge text-white bg-success fw-semibold fs-11 active-status">Active</span> 
                                                            @endif
                                                            @if ($user->status==0)
                                                                <span class="badge text-white bg-danger fw-semibold fs-11 banned-status">Banned</span> 
                                                            @endif

                                                        </div>
                                                    </div>
                                                </td>

                                                <td class="fs-13 fw-semibold text-dark">{{ $user->email }}</td>

                                                <td class="fs-13 fw-semibold text-dark">
                                                    @if ($user->gender_id==1)Male @endif
                                                    @if ($user->gender_id==0)Female @endif
                                                </td>

                                                <td class="fs-13 fw-semibold text-dark">
                                                    @if (isset($user->country)){{ $user->country }}, @endif
                                                    @if (isset($user->state)){{ $user->state }}, @endif
                                                    @if (isset($user->city)){{ $user->city }} @endif
                                                </td>

                                                <td class="fs-13 fw-semibold text-dark"><i class="fe fe-calendar me-2"></i>{{ $user->dob }} </td>

                                                <td class="fs-15 fw-semibold">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <div class="dropdown">
                                                            <a href="" class="fw-semibold" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                                <span class="fs-14 text-dark"><i class="fe fe-more-vertical fw-semibold"></i></span>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <li><a href="{{ route('singleUser', $user->id) }}">View</a></li>
                                                                <li><a href="{{ route('editUser', $user->id) }}">Edit</a></li>
                                                                <li>
                                                                    <a href="{{ route('forceDelete', $user->id) }}" 
                                                                        onclick="return confirm('Are you sure you want permanently delete this user?')"
                                                                    >
                                                                        Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                        @endif
                                        
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