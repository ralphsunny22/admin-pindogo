
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

		<!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name="Description" content="Sparic - Sparic - Laravel Multipurpose Responsive Bootstrap5 Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard, admin dashboard laravel, admin panel template, blade template, blade template laravel, bootstrap template, dashboard laravel, laravel admin, laravel admin dashboard, laravel admin panel, laravel admin template, laravel bootstrap admin template, laravel bootstrap template, laravel template, vite laravel template, vite admin template, vite laravel admin, vite laravel admin dashboard, vite laravel bootstrap admin template">

        <!-- TITLE -->
		<title> @yield('title') :: Pindogo Dashboard</title>

        <!-- FAVICON -->
        <link rel="icon" href="{{asset('/sparic/build/assets/images/brand/favicon.ico')}}" type="image/x-icon" >
		<link rel="shortcut icon" href="{{asset('/sparic/build/assets/images/brand/favicon.ico')}}" type="image/x-icon">

        <!-- BOOTSTRAP CSS -->
	    <link id="style" href="{{asset('/sparic/build/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- APP SCSS -->
        <link rel="preload" as="style" href="{{asset('/sparic/build/assets/app-881940fc.css')}}" />
        <link rel="stylesheet" href="{{asset('/sparic/build/assets/app-881940fc.css')}}" />

        <!-- ICONS CSS -->
        <link href="{{asset('/sparic/build/assets/iconfonts/icons.css')}}" rel="stylesheet">

        <!-- ANIMATE CSS -->
        <link href="{{asset('/sparic/build/assets/iconfonts/animated.css')}}" rel="stylesheet">

        <!-- APP CSS -->
        <link rel="preload" as="style" href="{{asset('/sparic/build/assets/app-e84fc687.css')}}" />
        <link rel="stylesheet" href="{{asset('/sparic/build/assets/app-e84fc687.css')}}" />
        
		@yield('extra_css')

	</head>

	<body class="app sidebar-mini ltr">

        <!-- SWITCHER -->
        <div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3 d-grid gap-2">
									<a href="https://laravelui.spruko.com/sparic" class="btn btn-primary mt-0">View Demo</a>
									<a class="btn btn-info" data-bs-target=".buynow" data-bs-toggle="modal" href="">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn btn-danger">Our
										Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft text-center">
								<h4>LTR AND RTL VERSIONS</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">LTR</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25"
													id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch54" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25"
													id="myonoffswitch55" class="onoffswitch2-checkbox">
												<label for="myonoffswitch55" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Theme</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
													id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch1" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Theme</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
													id="myonoffswitch2" class="onoffswitch2-checkbox">
												<label for="myonoffswitch2" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft switcher-nav">
								<h4>Navigation Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Vertical Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
													id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch34" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizantal Click Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
													id="myonoffswitch35" class="onoffswitch2-checkbox">
												<label for="myonoffswitch35" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Horizantal Hover Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
													id="myonoffswitch111" class="onoffswitch2-checkbox">
												<label for="myonoffswitch111" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft horizontal-switcher">
								<h4>Horizontal layout Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Default Logo</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch16" id="switchbtn-defaultlogo" class="onoffswitch2-checkbox" checked>
												<label for="switchbtn-defaultlogo" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Center Logo</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch16" id="switchbtn-centerlogo" class="onoffswitch2-checkbox">
												<label for="switchbtn-centerlogo" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Theme Primary Color</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Primary Color</span>
											<div class="">
												<input class="input-color-picker color-primary-light" value="#4454c3"
													id="colorID" type="color"
													data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
													name="lightPrimary">
											</div>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Background Color</span>
											<div class="">
												<input class="input-bg-picker background-primary-light" value="#373c56"
													id="bgID" type="color" data-id3="body"
													data-id4="theme" name="BackgroundPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft leftmenu-styles">
								<h4>Menu Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
													id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch3" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Color Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
													id="myonoffswitch4" class="onoffswitch2-checkbox">
												<label for="myonoffswitch4" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
													id="myonoffswitch5" class="onoffswitch2-checkbox">
												<label for="myonoffswitch5" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft header-styles">
								<h4>Header Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Header</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
													id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch6" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Color Header</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
													id="myonoffswitch7" class="onoffswitch2-checkbox">
												<label for="myonoffswitch7" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Header</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
													id="myonoffswitch8" class="onoffswitch2-checkbox">
												<label for="myonoffswitch8" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Layout Width Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Full Width</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch04"
													id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch9" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Boxed</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch04"
													id="myonoffswitch10" class="onoffswitch2-checkbox">
												<label for="myonoffswitch10" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft switcher-layout">
								<h4>Layout Positions</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Fixed</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
													id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch11" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Scrollable</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
													id="myonoffswitch12" class="onoffswitch2-checkbox">
												<label for="myonoffswitch12" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft vertical-switcher">
								<h4>Sidemenu layout Styles</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Default Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
													id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
												<label for="myonoffswitch13" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Closed Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
													id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
												<label for="myonoffswitch30" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon with Text</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
													id="myonoffswitch14" class="onoffswitch2-checkbox">
												<label for="myonoffswitch14" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Icon Overlay</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
													id="myonoffswitch15" class="onoffswitch2-checkbox">
												<label for="myonoffswitch15" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
													id="myonoffswitch32" class="onoffswitch2-checkbox">
												<label for="myonoffswitch32" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Hover Submenu style 1</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
													id="myonoffswitch33" class="onoffswitch2-checkbox">
												<label for="myonoffswitch33" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Double Menu</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="switchbtn-doublemenu" class="onoffswitch2-checkbox">
												<label for="switchbtn-doublemenu" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Double Menu with Tabs</span>
											<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="switchbtn-doublemenutabs" class="onoffswitch2-checkbox">
												<label for="switchbtn-doublemenutabs" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Reset All Styles</h4>
								<div class="skin-body">
									<div class="switch_section px-2">
										<button id="resetAll" class="btn btn-danger btn-block" type="button">Reset All</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- END SWITCHER -->

		<!--- GLOBAL LOADER -->
		<div id="global-loader d-none" >
			<img src="/sparic/build/assets/images/svgs/loader.svg" alt="loader">
		</div>
		<!--- END GLOBAL LOADER -->

        <!-- PAGE -->
		<div class="page">
            <div class="page-main">

                <!-- MAIN-HEADER -->
				@include('backend.layouts.header')
                <!-- END MAIN-HEADER -->

                <!-- NEWS-TICKER - MARQUEE -->
				@include('backend.partials.newsTicker')
                <!-- END NEWS-TICKER -->

                <!-- MAIN-SIDEBAR -->
				@include('backend.layouts.sidebar')
                <!-- END MAIN-SIDEBAR -->

                <!-- MAIN-CONTENT -->
				@yield('content')
                <!-- END MAIN-CONTENT -->
            </div>
            
            
            <!-- RIGHT-SIDEBAR -->
            
            <!-- END RIGHT-SIDEBAR -->

            <!-- MAIN-FOOTER -->
			@include('backend.layouts.footer')
            <!-- END MAIN-FOOTER -->

		</div>
        <!-- END PAGE-->

         <!-- BUYNOW-MODAL -->
         
        <!-- END BUYNOW-MODAL -->

        <!-- SCRIPTS -->
        
        <!-- BACK TO TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY MIN JS -->
        <script src="{{asset('/sparic/build/assets/plugins/jquery/jquery.min.js')}}"></script>

        <!-- BOOTSTRAP5 BUNDLE JS -->
        <script src="{{asset('/sparic/build/assets/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('/sparic/build/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- PERFECT-SCROLLBAR JS  -->
        <script src="{{asset('/sparic/build/assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
        <script src="{{asset('/sparic/build/assets/plugins/p-scroll/pscroll.js')}}"></script>

        <!-- CIRCLE PROGRESS JS -->
        <script src="{{asset('/sparic/build/assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

        <!-- MOMENT JS -->
        <script src="{{asset('/sparic/build/assets/plugins/moment/moment.min.js')}}"></script>

        <!-- NEWS TICKER JS -->
        <script src="{{asset('/sparic/build/assets/plugins/newsticker/breaking-news-ticker.min.js')}}"></script>
        <script src="{{asset('/sparic/build/assets/plugins/newsticker/newsticker.js')}}"></script>

        <!-- SIDEMENU JS -->
        <script src="{{asset('/sparic/build/assets/plugins/sidemenu/sidemenu.js')}}"></script>

        <!-- RIGHT SIDEBAR JS -->
        <script src="{{asset('/sparic/build/assets/plugins/sidebar/sidebar.js')}}"></script>

        <!-- SELECT2 JS -->
        <script src="{{asset('/sparic/build/assets/plugins/select2/select2.full.min.js')}}"></script>

        <!-- APEXCHART JS -->
        <script src="{{asset('/sparic/build/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>

        <!-- DATA TABLES JS -->
        <script src="{{asset('/sparic/build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('/sparic/build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('/sparic/build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('/sparic/build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INDEX JS -->
        <link rel="modulepreload" href="{{asset('/sparic/build/assets/index1-ff39d5a7.js')}}" />
        <script type="module" src="{{asset('/sparic/build/assets/index1-ff39d5a7.js')}}"></script>


        <!-- STICKY JS -->
		<script src="{{asset('/sparic/build/assets/sticky.js')}}"></script>

        <!-- THEMECOLOR JS -->
        <link rel="modulepreload" href="{{asset('/sparic/build/assets/themeColors-79569272.js')}}" />
        <link rel="modulepreload" href="{{asset('/sparic/build/assets/switcher-styles-de60cc42.js')}}" />
        <script type="module" src="{{asset('/sparic/build/assets/themeColors-79569272.js')}}"></script>

        <!-- APP JS -->
		<link rel="modulepreload" href="{{asset('/sparic/build/assets/app-5bced774.js')}}" />
        <link rel="modulepreload" href="{{asset('/sparic/build/assets/switcher-styles-de60cc42.js')}}" />
        <script type="module" src="{{asset('/sparic/build/assets/app-5bced774.js')}}"></script>

        <!-- SWITCHER JS -->
        <link rel="modulepreload" href="{{asset('/sparic/build/assets/switcher-bbf71b35.js')}}" />
        <script type="module" src="{{asset('/sparic/build/assets/switcher-bbf71b35.js')}}"></script>

        <!-- END SCRIPTS -->

		@yield('extra_js')

	</body>
</html>
