@extends('backend.layouts.design')
@section('title')Edit Profile: {{$user->name}} @endsection
@section('extra_css')
<style>
.profile-cover-picture {
    background: linear-gradient(90deg, rgb(63, 94, 251) 0%, rgb(102, 89, 221) 39%, rgb(118, 87, 209) 56%, rgb(252, 70, 107) 100%);
}

.each-item-wrapper .each-item {
    margin-left: 10px; /* Adjust the spacing as needed */
}
.each-item-wrapper .each-item:first-child {
    margin-left: 0;
}

.breadcrumb-img-wrapper {
    max-width: 25px;
    height: 25px; /* Adjust the height as needed */
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border: 1px solid #ccc; /* Optional: Add a border for visualization */
}

.breadcrumb-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.form-horizontal label{
    font-weight: 600 !important;
    color: #000  !important;
}

.cover-img {
    position: relative;
    height: 200px; /* Set the desired height */
    /* background-image: url({!! 'https://f8.codester.dev/storage/'.$user->cover_picture !!}); */
    background-image: url({{ asset('/storage/'.$user->cover_picture) }});
    margin-top: -80px;
}
.cover-default {
    position: relative;
    height: 200px; /* Set the desired height */
    margin-top: -80px;
}
.bottom-content {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    /* padding: 15px; */
}
.form-group input, textarea, select {
    border: 1px solid #ddd;
    color: #000 !important;
}

</style>
@endsection

@section('content')

<!-- MAIN-CONTENT -->
<div class="main-content app-content">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container container-fluid">
            @if (isset($user->cover_picture))
                
                <div class="cover-img">
                
                    <!-- PAGE-HEADER -->
                    <div class="bottom-content px-2">
                        <div class="page-header d-sm-flex d-block">
                            <ol class="breadcrumb mb-sm-0 mb-3">
                                <!-- breadcrumb -->
                                <li class="breadcrumb-item"><a href="/" class="text-white">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('allUsers') }}" class="text-white">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);" class="text-white">Edit Profile</a></li>
                                @if (isset($user->name) || isset($user->picture) || !isset($user->picture))
                                <li class="breadcrumb-item active" aria-current="page">
                                    <a href="{{ route('singleUser', $user->id) }}" class="text-white" style="margin-right: 5px">{{ $user?->name }}</a>
            
                                    @if (isset($user->picture))
                                    <a href="{{ asset('/storage/'.$user->picture) }}"
                                        data-caption="{{ isset($user->name) ? $user->name : 'No Caption' }}"
                                        data-fancybox 
                                        class="breadcrumb-img-wrapper" style="border-radius: 5px"
                                    >
                                        {{-- <img src="{!! 'https://f8.codester.dev/storage/'.$user->picture !!}" class="" alt="person-image"> --}}
                                        <img src="{{ asset('/storage/'.$user->picture) }}" class="" alt="person-image">
                                    </a>
                                    @else
                                    <a href="{{ route('singleUser', $user->id) }}" class="breadcrumb-img-wrapper text-white" style="border-radius: 5px">
                                        <i class="fe fe-user" style="font-size: 1.5em;"></i>
                                    </a>
                                    @endif
                                </li> 
                                @endif

                                
                                
                            </ol><!-- End breadcrumb -->
            
                            @if ($user->status==1)<div class="mx-3 btn-sm bg-success">Active</div> @endif
                            @if ($user->status==0 && !isset($user->no_of_banned_days))<div class="mx-3 btn-sm bg-warning">Pending</div> @endif
                            @if ($user->status==0 && isset($user->no_of_banned_days))<div class="mx-3 btn-sm bg-danger">Banned</div> @endif
                            
                            <div class="ms-auto">
                                <div class="d-flex each-item-wrapper">
            
                                    <div class="dropdown each-item">
                                        <button class="btn btn-outline-default btn-sm fw-bold text-primary fs-12 d-flex align-items-center dropdown-toggle"
                                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fe fe-cloud-off fw-semibold mx-1"></i> Ban Options
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="javascript:void(0);">For 24h</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">For 7days</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">For 30days</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Stop Ban</a></li>
                                        </ul>
                                    </div>
            
                                    <a href="{{ route('singleUser', $user->id) }}" class="btn bg-dark text-white btn-sm each-item" data-bs-toggle="tooltip"
                                        title="" data-bs-placement="bottom" data-bs-original-title="View User">
                                        <span>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </a>
                                    
                                    <a href="javascript:void(0);" class="btn bg-warning text-white btn-sm each-item" data-bs-toggle="tooltip"
                                        title="" data-bs-placement="bottom" data-bs-original-title="Delete Temporarily">
                                        <span>
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </a>
                                    <a href="javascript:void(0);" class="btn bg-danger text-white btn-sm each-item" data-bs-toggle="tooltip"
                                        title="" data-bs-placement="bottom" data-bs-original-title="Delete Permanently">
                                        <span>
                                            <i class="fa fa-trash"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- END PAGE-HEADER -->

                </div>

            @else
                
            <div class="cover-default profile-cover-picture">
                
                <!-- PAGE-HEADER -->
                <div class="bottom-content px-2">
                    <div class="page-header d-sm-flex d-block">
                        <ol class="breadcrumb mb-sm-0 mb-3">
                            <!-- breadcrumb -->
                            <li class="breadcrumb-item"><a href="/" class="text-white">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('allUsers') }}" class="text-white">Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);" class="text-white">Edit Profile</a></li>
                            @if (isset($user->name) || isset($user->picture) || !isset($user->picture))
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="javascript:void(0);" class="text-white" style="margin-right: 5px">{{ $user?->name }}</a>
        
                                @if (isset($user->picture))
                                <a href="{{ route('singleUser', $user->id) }}" class="breadcrumb-img-wrapper text-white" style="border-radius: 5px">
                                    <img src="{!! 'https://f8.codester.dev/storage/'.$user->picture !!}" class="" alt="person-image">
                                </a>
                                @else
                                <a href="{{ route('singleUser', $user->id) }}" class="breadcrumb-img-wrapper text-white" style="border-radius: 5px">
                                    <i class="fe fe-user" style="font-size: 1.5em;"></i>
                                </a>
                                @endif
                            </li> 
                            @endif
                            
                        </ol><!-- End breadcrumb -->
        
                        @if ($user->status==1)<div class="mx-3 btn-sm bg-success">Active</div> @endif
                        @if ($user->status==0 && !isset($user->no_of_banned_days))<div class="mx-3 btn-sm bg-warning">Pending</div> @endif
                        @if ($user->status==0 && isset($user->no_of_banned_days))<div class="mx-3 btn-sm bg-danger">Banned</div> @endif
                        
                        <div class="ms-auto">
                            <div class="d-flex each-item-wrapper">
        
                                <div class="dropdown each-item">
                                    <button class="btn btn-outline-default btn-sm fw-bold text-primary fs-12 d-flex align-items-center dropdown-toggle"
                                        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fe fe-cloud-off fw-semibold mx-1"></i> Ban Options
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="javascript:void(0);">For 24h</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">For 7days</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">For 30days</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Stop Ban</a></li>
                                    </ul>
                                </div>
        
                                <a href="{{ route('singleUser', $user->id) }}" class="btn bg-dark-transparent text-dark btn-sm each-item" data-bs-toggle="tooltip"
                                    title="" data-bs-placement="bottom" data-bs-original-title="View User">
                                    <span>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </a>
                                
                                <a href="javascript:void(0);" class="btn bg-warning-transparent text-warning btn-sm each-item" data-bs-toggle="tooltip"
                                    title="" data-bs-placement="bottom" data-bs-original-title="Delete Temporarily">
                                    <span>
                                        <i class="fa fa-trash"></i>
                                    </span>
                                </a>
                                <a href="javascript:void(0);" class="btn bg-danger-transparent text-danger btn-sm each-item" data-bs-toggle="tooltip"
                                    title="" data-bs-placement="bottom" data-bs-original-title="Delete Permanently">
                                    <span>
                                        <i class="fa fa-trash"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- END PAGE-HEADER -->

            </div>

            @endif

            @if(Session::has('success'))
            <div class="alert alert-success mb-3 text-center">
                {{Session::get('success')}}
            </div>
            @endif

            <!-- ROW -->
            <div class="row">
                <div class="col-xl-12">
                    <!------>
                    <div class="card overflow-hidden border-0">
                        <div class="card-body">
                            {{-- <div class="d-flex">
                                <div class="ms-auto">
                                    <a href="javascript:void(0);" class="btn btn-sm btn-success mx-1">Update</a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger">Discard1</a>
                                </div>
                            </div> --}}
                            <form class="form-horizontal" method="POST" action="{{ route('editUserPost', $user->id) }}" enctype="multipart/form-data">@csrf
                                
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold text-muted-dark">Full Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name" value="{{ $user?->name }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold text-muted-dark">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Enter Username" value="{{ $user?->username }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-4">
                                            <label class="form-label fw-semibold text-muted-dark">Email</label>
                                            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{ $user?->email }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold text-muted-dark">Date of Birth</label>
                                            <input type="text" name="dob" class="form-control form_date" placeholder="Enter date of birth" value="{{ $user?->dob }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold text-muted-dark">Select Occupation</label>
                                            <select name="occupation_id" id="" class="form-control text-dark" style="border: 1px solid #ddd;">
                                                @if($userOccupation)<option value="{{ $userOccupation->id }}" selected>{{ $userOccupation->name }}</option>@endif
                                                @foreach ($occupations as $occup)
                                                    <option value="{{ $occup->id }}">{{ $occup->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label fw-semibold text-muted-dark">Select Gender</label>
                                            <select name="gender_id" id="" class="form-control text-dark" style="border: 1px solid #ddd;">
                                                @if($user->gender_id==1)<option value="1" selected>Male</option>@endif
                                                @if($user->gender_id==0)<option value="0" selected>Female</option>@endif
                                                
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-4">
                                            <label class="form-label fw-semibold text-muted-dark">Country</label>
                                            <input type="text" name="country" class="form-control" placeholder="Enter Country" value="{{ $user?->country }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fw-semibold text-muted-dark">State</label>
                                            <input type="text" name="state" class="form-control" placeholder="Enter State Location" value="{{ $user?->state }}">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label fw-semibold text-muted-dark">City</label>
                                            <input type="text" name="city" class="form-control" placeholder="Enter City Location" value="{{ $user?->city }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold text-muted-dark">Facebook</label>
                                            <input type="text" name="facebook" class="form-control" placeholder="Enter facebook link" value="{{ $facebook ? $facebook : '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold text-muted-dark">Instagram</label>
                                            <input type="text" name="instagram" class="form-control" placeholder="Enter instagram link" value="{{ $instagram ? $instagram : '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold text-muted-dark">Twitter</label>
                                            <input type="text" name="twitter" class="form-control" placeholder="Enter twitter link" value="{{ $twitter ? $twitter : '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label fw-semibold text-muted-dark">Telegram</label>
                                            <input type="text" name="telegram" class="form-control" placeholder="Enter telegram link" value="{{ $telegram ? $telegram : '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold text-muted-dark">Change Profile Image</label>
                                            <input type="file" name="picture" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold text-muted-dark">Change Cover Image</label>
                                            <input type="file" name="cover_picture" class="form-control">
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-12">
                                            <label class="form-label fw-semibold text-muted-dark">About</label>
                                            <textarea name="about" class="form-control" id="" cols="30" rows="4">{{ $user->about }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row row-sm">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-lg btn-success mx-1 w-30">Update</button>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <!------>               
                </div>
            </div>
            <!-- END ROW -->

        </div>
    </div>
</div>
<!-- END MAIN-CONTENT -->

@endsection

@section('extra_js')

<link href="{{asset('/custom/jquery.datetimepicker.min.css')}}" rel="stylesheet">
<script src="{{asset('/custom/jquery.datetimepicker.min.js')}}"></script>
<script>
  jQuery('.form_date').datetimepicker({
    datepicker:true,
    //showPeriod: true,
    format:'Y-m-d',
    timepicker:false,
  });
</script>

@endsection