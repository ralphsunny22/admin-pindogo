@extends('backend.layouts.design')
@section('title')Users Analytics @endsection
@section('extra_css')
<style>
.app-content {
    margin-block-start: 0 !important;
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
                    <li class="breadcrumb-item active" aria-current="page">Users Analytics</li>
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
                <div class="col-12 col-sm-6">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Users By Gender</h3>
                            
                        </div>
                        <div class="card-body">
                            <canvas class="doughnutGender-canvas"></canvas>
                        </div>
                    </div>
                </div>
                <!-- COL END -->

                <div class="col-12 col-sm-6">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Users By Status</h3>
                            
                        </div>
                        <div class="card-body">
                            <canvas class="doughnutStatus-canvas"></canvas>
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

@section('extra_js')
<script>
    window.chartColors = {
        success: "rgb(25, 135, 84)",
        primary: "rgb(13, 110, 253)",
        danger: "rgb(220, 53, 69)",
        warning: "rgb(255, 193, 7)",
        info: "RGB(13, 202, 240)",
        purple: "rgb(134, 0, 179)",
        grey: "rgb(117, 117, 163)",
    };
    $(function () {
        var doughnutGenderCanvas = $(".doughnutGender-canvas");
        
        // Fetch counts of male and female users
        var malesCount = {{ $malesCount }};
        var femalesCount = {{ $femalesCount }};

        const dataGender = {
            labels: ['Males', 'Females'],
            datasets: [{
                label: 'Users By Gender',
                data: [malesCount, femalesCount],
                backgroundColor: [
                    // 'rgb(54, 162, 235)',
                    window.chartColors.success,
                    window.chartColors.primary
                ],
                hoverOffset: 4
            }]
        };

        var chart = new Chart(doughnutGenderCanvas, {
            type: 'doughnut',
            data: dataGender,
        });
        //gender ends
        /////////////////////////////////////////

        //status starting
        var doughnutStatusCanvas = $(".doughnutStatus-canvas");

        var activeCount = {{ $activeCount }};
        var pendingCount = {{ $pendingCount }};
        var bannedCount = {{ $bannedCount }};

        const dataStatus = {
            labels: ['Active', 'Pending', 'Banned'],
            datasets: [{
                label: 'Users By Status',
                data: [activeCount, pendingCount, bannedCount],
                backgroundColor: [
                    window.chartColors.success,
                    window.chartColors.danger,
                    window.chartColors.warning
                ],
                hoverOffset: 4
            }]
        };

        var chart = new Chart(doughnutStatusCanvas, {
            type: 'doughnut',
            data: dataStatus,
        });
        //status ends
        //////////////////////////////////////////

    });
</script>
@endsection
