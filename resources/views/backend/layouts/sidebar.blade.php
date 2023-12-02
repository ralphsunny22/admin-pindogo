<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="/">
                <img src="/sparic/build/assets/images/brand/logo.png" class="header-brand-img main-logo" alt="Sparic logo">
                <img src="/sparic/build/assets/images/brand/logo.png" class="header-brand-img darklogo" alt="Sparic logo">
                <img src="/sparic/build/assets/images/brand/icon.png" class="header-brand-img icon-logo" alt="Sparic logo">
                <img src="/sparic/build/assets/images/brand/icon2.png" class="header-brand-img icon-logo2" alt="Sparic logo">
            </a>
        </div>
        <!-- logo-->
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="/">
                        <i class="side-menu__icon ri-home-4-line"></i><span class="side-menu__label">Dashboard</span>
                        {{-- <i class="angle fe fe-chevron-right"></i> --}}
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
                                        <li><a href="#side2" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
                                        <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
                                        <li><a href="#side4" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">Dashboards</a></li>
                                            
                                        </ul>
                                        <div class="resp-tab-content-active">
                                            <h6 class="fw-semibold mb-4">Active Users</h6>
                                            <div class="row">
                                                <div class="col text-center">
                                                    <div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
                                                        <div class="chart-circle-value"><div class="">65% </div></div>
                                                    </div>
                                                    <span class="fw-semibold">Active</span>
                                                </div>
                                                <div class="col text-center">
                                                    <div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
                                                        <div class="chart-circle-value"><div class="">35% </div></div>
                                                    </div>
                                                    <span class="fw-semibold">Deactive</span>
                                                </div>
                                            </div>
                                            <h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
                                            <div class="row p-3">
                                                <div class="col-6 p-0">
                                                    <div class="border text-center border-right-0">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <p class="mb-0">Support</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="border text-center">
                                                        <i class="ti-bell fs-30 text-warning"></i>
                                                        <p class="mb-0">Notify</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="border text-center border-right-0 border-top-0">
                                                        <i class="ti-panel fs-30 text-info"></i>
                                                        <p class="mb-0">Settings</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="border text-center border-top-0">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <p class="mb-0">Layouts</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
                                            <button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side2">
                                        <h5 class="mt-3 mb-4">Settings</h5>
                                        <div class="p-3">
                                            <h5 class="mb-0">General Settings</h5>
                                        </div>
                                        <div class="p-4">
                                            <div class="switch-settings">
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Notifications</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch" class="onoffswitch2-checkbox" checked>
                                                        <label for="onoffswitch" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show your emails</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch1" class="onoffswitch2-checkbox">
                                                        <label for="onoffswitch1" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show Task statistics</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch2" class="onoffswitch2-checkbox">
                                                        <label for="onoffswitch2" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show recent activity</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch3" class="onoffswitch2-checkbox" checked>
                                                        <label for="onoffswitch3" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">System Logs</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch4" class="onoffswitch2-checkbox" >
                                                        <label for="onoffswitch4" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Error Reporting</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch5" class="onoffswitch2-checkbox" >
                                                        <label for="onoffswitch5" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show your status to all</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch6" class="onoffswitch2-checkbox" checked>
                                                        <label for="onoffswitch6" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Keep up to date</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch7" class="onoffswitch2-checkbox">
                                                        <label for="onoffswitch7" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <h5 class="mb-0">Overview</h5>
                                        </div>
                                        <div class="p-4">
                                            <div class="progress-wrapper">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-primary w-80 " role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-success w-50" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-warning w-45 " role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-danger w-75" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-teal w-70" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side3">
                                        <h5 class="mt-3 mb-4">Events</h5>
                                        <div class="latest-timeline">
                                            <div class="timeline">
                                                <div class="mt-0 event-text">
                                                    <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                </div>
                                                <div class="mb-0 event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side4">
                                        <h5 class="mt-3 mb-4">Followers</h5>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/female/2.jpg" style="background: url(/sparic/build/assets/images/users/female/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Mozelle Belt</h6>
                                                <p class="text-muted mb-0 fs-10">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/female/6.jpg" style="background: url(/sparic/build/assets/images/users/female/6.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Alina Bernier</h6>
                                                <p class="text-muted mb-0 fs-10">Administrator</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/5.jpg" style="background: url(/sparic/build/assets/images/users/male/5.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/6.jpg" style="background: url(/sparic/build/assets/images/users/male/6.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/2.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/4.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/5.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/2.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/female/3.jpg" style="background: url(/sparic/build/assets/images/users/female/3.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Florinda Carasco</h6>
                                                <p class="text-muted fs-10 mb-0">Project Manager
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>MANAGEMENT</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-users"></i><span
                            class="side-menu__label">Users</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side5" class="active" data-bs-toggle="tab"><i class="fe fe-monitor"></i><p>Home</p></a></li>
                                        <li><a href="#side6" data-bs-toggle="tab" ><i class="fe fe-message-square"></i><p>Setting</p></a></li>
                                        <li><a href="#side7" data-bs-toggle="tab"><i class="fe fe-calendar"></i><p>Events</p></a></li>
                                        <li><a href="#side8" data-bs-toggle="tab"><i class="fe fe-user"></i><p>Follower</p></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side5">
                                        <ul class="sidemenu-list">
                                            <li><a href="{{route('allUsers') }}" class="slide-item"> All Users</a></li>
                                            <li><a href="/" class="slide-item"> Active Users</a></li>
                                            <li><a href="/" class="slide-item"> Banned Users</a></li>
                                            <li><a href="{{ route('usersAnalytics') }}" class="slide-item"> Analytics</a></li>
                                            
                                        </ul>
                                        <div class="resp-tab-content-active">
                                            <h6 class="fw-semibold mb-4">Active Users</h6>
                                            <div class="row">
                                                <div class="col text-center">
                                                    <div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.65" data-thickness="5" data-color="#3ec7e8">
                                                        <div class="chart-circle-value"><div class="">65% </div></div>
                                                    </div>
                                                    <span class="fw-semibold">Active</span>
                                                </div>
                                                <div class="col text-center">
                                                    <div class="chart-circle mt-2 mb-2 chart-circle-sm" data-value="0.35" data-thickness="5" data-color="#5eba00">
                                                        <div class="chart-circle-value"><div class="">35% </div></div>
                                                    </div>
                                                    <span class="fw-semibold">Deactive</span>
                                                </div>
                                            </div>
                                            <h6 class="fw-semibold mt-5 mb-4">Notifications</h6>
                                            <div class="row p-3">
                                                <div class="col-6 p-0">
                                                    <div class="border text-center border-right-0">
                                                        <i class="ti-headphone fs-30 text-secondary"></i>
                                                        <p class="mb-0">Support</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="border text-center">
                                                        <i class="ti-bell fs-30 text-warning"></i>
                                                        <p class="mb-0">Notify</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="border text-center border-right-0 border-top-0">
                                                        <i class="ti-panel fs-30 text-info"></i>
                                                        <p class="mb-0">Settings</p>
                                                    </div>
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="border text-center border-top-0">
                                                        <i class="ti-layers fs-30 text-danger"></i>
                                                        <p class="mb-0">Layouts</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-info mt-3 btn-block"><i class="fe fe-eye mr-1 mt-1"></i> View All</button>
                                            <button type="button" class="btn btn-secondary mt-3 btn-block"><i class="fe fe-plus mr-1 mt-1"></i> Add New page</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side6">
                                        <h5 class="mt-3 mb-4">Settings</h5>
                                        <div class="p-3">
                                            <h5 class="mb-0">General Settings</h5>
                                        </div>
                                        <div class="p-4">
                                            <div class="switch-settings">
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Notifications</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch8" class="onoffswitch2-checkbox" checked>
                                                        <label for="onoffswitch8" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show your emails</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch9" class="onoffswitch2-checkbox">
                                                        <label for="onoffswitch9" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show Task statistics</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch10" class="onoffswitch2-checkbox">
                                                        <label for="onoffswitch10" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show recent activity</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch11" class="onoffswitch2-checkbox" checked>
                                                        <label for="onoffswitch11" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">System Logs</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch12" class="onoffswitch2-checkbox" >
                                                        <label for="onoffswitch12" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Error Reporting</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch13" class="onoffswitch2-checkbox" >
                                                        <label for="onoffswitch13" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Show your status to all</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch14" class="onoffswitch2-checkbox" checked>
                                                        <label for="onoffswitch14" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <span class="me-auto fs-15">Keep up to date</span>
                                                    <div class="onoffswitch2">
                                                        <input type="checkbox" name="onoffswitch2" id="onoffswitch15" class="onoffswitch2-checkbox">
                                                        <label for="onoffswitch15" class="onoffswitch2-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <h5 class="mb-0">Overview</h5>
                                        </div>
                                        <div class="p-4">
                                            <div class="progress-wrapper">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Achieves<span class="float-end text-muted fs-12">80%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-primary w-80 " role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Projects<span class="float-end text-muted fs-12">60%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-secondary w-60 " role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Earnings<span class="float-end text-muted fs-12">50%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-success w-50" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Balance<span class="float-end text-muted fs-12">45%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-warning w-45 " role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Toatal Profits<span class="float-end text-muted fs-12">75%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-danger w-75" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-wrapper pt-2">
                                                <div class="mb-3">
                                                    <p class="mb-2 fs-13">Total Likes<span class="float-end text-muted fs-12">70%</span></p>
                                                    <div class="progress h-1">
                                                        <div class="progress-bar bg-teal w-70" role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side7">
                                        <h5 class="mt-3 mb-4">Events</h5>
                                        <div class="latest-timeline">
                                            <div class="timeline">
                                                <div class="mt-0 event-text">
                                                    <h6 class="mb-0"><a target="_blank" href="#" class="timeline-head fw-semibold">Employees Meeting</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">23 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut labore et. </p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Ramazan Festival  Celebration</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">21 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor  magna aliqua nisi ut. </p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Best Employee Announcement</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">18 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Weekend trip</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">16 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                </div>
                                                <div class="event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">New Project Started..</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">15 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor incididunt ut aliquip.</p>
                                                </div>
                                                <div class="mb-0 event-text">
                                                    <h6 class="mb-0"><a href="#" class="timeline-head fw-semibold">Gradening working</a></h6>
                                                    <p class="fs-11 align-items-center d-flex justify-content-between text-muted mb-0">07 May, 2019 <i class="fe fe-bell my-auto fs-12 float-end mb-0 text-danger"></i></p>
                                                    <p class="fw-semibold">sed do eiusmod tempor  aliqua nisi ut aliquip. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="side8">
                                        <h5 class="mt-3 mb-4">Followers</h5>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/female/2.jpg" style="background: url(/sparic/build/assets/images/users/female/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Mozelle Belt</h6>
                                                <p class="text-muted mb-0 fs-10">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/female/6.jpg" style="background: url(/sparic/build/assets/images/users/female/6.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Alina Bernier</h6>
                                                <p class="text-muted mb-0 fs-10">Administrator</p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/5.jpg" style="background: url(/sparic/build/assets/images/users/male/5.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/6.jpg" style="background: url(/sparic/build/assets/images/users/male/6.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/2.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/4.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/5.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/male/2.jpg" style="background: url(/sparic/build/assets/images/users/male/2.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Isidro Heide</h6>
                                                <p class="text-muted fs-10 mb-0">Web Designer
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                        <div class="list-group-item d-flex px-0 border-0 align-items-center">
                                            <div class="me-2">
                                                <span class="avatar avatar-md brround cover-image" data-image-src="/sparic/build/assets/images/users/female/3.jpg" style="background: url(/sparic/build/assets/images/users/female/3.jpg) center center;"></span>
                                            </div>
                                            <div class="lh-1">
                                                <h6 class="fw-semibold fs-13">Florinda Carasco</h6>
                                                <p class="text-muted fs-10 mb-0">Project Manager
                                                </p>
                                            </div>
                                            <div class="ms-auto">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-outline-default">Follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>