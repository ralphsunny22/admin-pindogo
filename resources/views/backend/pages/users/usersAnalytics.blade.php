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
                <div class="col-12 col-sm-4">
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

                <div class="col-12 col-sm-4">
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

                <div class="col-12 col-sm-4">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Users By Platform</h3>
                            
                        </div>
                        <div class="card-body">
                            <canvas class="platform-canvas"></canvas>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- END ROW -->

            <!-- ROW userByCountryChart -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Users By Country</h3>
                            
                        </div>
                        <div class="card-body">
                            <canvas id="userByCountryChart"></canvas>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- END ROW -->

            <!-- ROW -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Users By Month</h3>
                            
                        </div>
                        <div class="card-body">
                            <canvas class="lineMonthly-canvas"></canvas>
                        </div>
                    </div>
                </div>
                <!-- COL END -->
            </div>
            <!-- END ROW -->

            <!-- ROW -->
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header border-bottom ">
                            <h3 class="card-title mb-0">Users By Year</h3>
                        </div>
                        <div class="card-body">
                            <canvas class="barMultipleYear-canvas"></canvas>
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

<!--gender counts--->
<script>
    window.chartColors = {
        success: "rgb(25, 135, 84)",
        primary: "rgb(13, 110, 253)",
        danger: "rgb(220, 53, 69)",
        warning: "rgb(255, 193, 7)",
        info: "rgb(13, 202, 240)",
        secondary: "rgb(108, 117, 125)",
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
                    window.chartColors.secondary,
                    window.chartColors.warning
                ],
                hoverOffset: 4
            }]
        };

        var chart = new Chart(doughnutGenderCanvas, {
            type: 'pie',
            data: dataGender,
        });
        //gender ends
        /////////////////////////////////////////
    });
</script>

<!--status counts--->
<script>
    window.chartColors = {
        success: "rgb(25, 135, 84)",
        primary: "rgb(13, 110, 253)",
        danger: "rgb(220, 53, 69)",
        warning: "rgb(255, 193, 7)",
        info: "rgb(13, 202, 240)",
        secondary: "rgb(108, 117, 125)",
        purple: "rgb(134, 0, 179)",
        grey: "rgb(117, 117, 163)",
    };

    $(function () {
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

<!--platform counts--->
<script>
    window.chartColors = {
        success: "rgb(25, 135, 84)",
        primary: "rgb(13, 110, 253)",
        danger: "rgb(220, 53, 69)",
        warning: "rgb(255, 193, 7)",
        info: "rgb(13, 202, 240)",
        secondary: "rgb(108, 117, 125)",
        purple: "rgb(134, 0, 179)",
        grey: "rgb(117, 117, 163)",
    };

    $(function () {
        var platformCanvas = $(".platform-canvas");
        
        // Fetch counts of male and female users
        var webUsersCount = {{ $webUsersCount }};
        var mobileUsersCount = {{ $mobileUsersCount }};

        const dataPlatform = {
            labels: ['Web', 'Mobile'],
            datasets: [{
                label: 'Users By Gender',
                data: [webUsersCount, mobileUsersCount],
                backgroundColor: [
                    // 'rgb(54, 162, 235)',
                    window.chartColors.purple,
                    window.chartColors.primary
                ],
                hoverOffset: 4
            }]
        };

        var chart = new Chart(platformCanvas, {
            type: 'polarArea',
            data: dataPlatform,
        });
        //platform ends
        /////////////////////////////////////////
    });
</script>

<!---userCountsByCountry-->
<script>
    window.chartColors = {
        success: "rgb(25, 135, 84)",
        primary: "rgb(13, 110, 253)",
        danger: "rgb(220, 53, 69)",
        warning: "rgb(255, 193, 7)",
        info: "rgb(13, 202, 240)",
        secondary: "rgb(108, 117, 125)",
        purple: "rgb(134, 0, 179)",
        grey: "rgb(117, 117, 163)",
    };
    document.addEventListener("DOMContentLoaded", function () {
        var userCountsByCountry = @json($userCountsByCountry);

        var countryLabels = userCountsByCountry.map(function (data) {
            return data.country;
        });

        var userCounts = userCountsByCountry.map(function (data) {
            return data.user_count;
        });

        var maxUserCount = Math.max(...userCounts); // Get the maximum user count
        var maxYAxis = Math.ceil(maxUserCount / 10) * 10; // Round up to the nearest 10
        console.log('maxUserCount: ',maxUserCount);
        console.log('maxYAxis: ',maxYAxis);

        var ctx = document.getElementById('userByCountryChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: countryLabels,
                datasets: [{
                    label: 'User Count',
                    data: userCounts,
                    backgroundColor: window.chartColors.success,
                    borderColor: window.chartColors.success,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: maxYAxis, // Set the maximum value for y-axis
                        title: {
                            display: true,
                            text: 'User Count'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Country'
                        }
                    }
                }
            }
        });
    });
</script>

<!--monthly--->
<script>
    window.chartColors = {
        success: "rgb(25, 135, 84)",
        primary: "rgb(13, 110, 253)",
        danger: "rgb(220, 53, 69)",
        warning: "rgb(255, 193, 7)",
        info: "rgb(13, 202, 240)",
        secondary: "rgb(108, 117, 125)",
        purple: "rgb(134, 0, 179)",
        grey: "rgb(117, 117, 163)",
    };

    $(function () {
        //monthly starting
        var lineMonthlyCanvas = $(".lineMonthly-canvas");

        // Fetch the user registrations data for each month from the controller
        var monthlyCounts = {!! json_encode($monthlyCounts) !!};

        const dataMonthly = {
            labels: [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ],
            datasets: [{
                label: 'User Registrations',
                data: Object.values(monthlyCounts),
                fill: false,
                borderColor: window.chartColors.info,
                tension: 0.1
            }]
        };

        var chart = new Chart(lineMonthlyCanvas, {
            type: 'line',
            data: dataMonthly,
        });
        //monthly ends
        ////////////////////////////////////////////////

    });
</script>

<!---yearlyCounts-->
<script>
    $(function () {
        var barMultipleYearCanvas = $(".barMultipleYear-canvas");

        // Fetch the user registrations data for each year from the controller
        var yearlyCounts = {!! json_encode($yearlyCounts) !!};

        const dataMultipleYear = {
            labels: Object.keys(yearlyCounts),
            datasets: [{
                label: 'User Registrations',
                data: Object.values(yearlyCounts),
                backgroundColor: window.chartColors.primary,
                borderColor: window.chartColors.primary,
                borderWidth: 1
            }]
        };

        var chart = new Chart(barMultipleYearCanvas, {
            type: 'bar',
            data: dataMultipleYear,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection
