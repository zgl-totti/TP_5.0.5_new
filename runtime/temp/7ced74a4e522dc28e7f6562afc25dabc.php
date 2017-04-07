<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\phpstudy\WWW\TP_new\public/../application/admin\view\layout\collapsed-sidebar.html";i:1491448680;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    
    <title>导航收缩</title>
    
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <!-- Bootstrap CSS -->
    
    <link rel='stylesheet' href='__PUBLIC__/admin/css/bootstrap.min.css'>
    <link rel='stylesheet' href='__PUBLIC__/admin/css/material.css'>
    <link rel='stylesheet' href='__PUBLIC__/admin/css/style.css'>
    <link rel='stylesheet' href='__PUBLIC__/admin/css/animated-masonry-gallery.css'>
    <link rel='stylesheet' href='__PUBLIC__/admin/css/rotated-gallery.css'>
    <link rel='stylesheet' href='__PUBLIC__/admin/css/sweet-alerts/sweetalert.css'>
    <link rel='stylesheet' href='__PUBLIC__/admin/css/jtree.css'>
    <script src='__PUBLIC__/admin/js/jquery.js'></script>
    <script src='__PUBLIC__/admin/js/app.js'></script>
    <script>
        jQuery(window).load(function () {
            $('.piluku-preloader').addClass('hidden');
        });
    </script>
</head>
<body>
  <div class="piluku-preloader text-center">
  <!-- <div class="progress">
      <div class="indeterminate"></div>
  </div> -->
  <div class="loader">Loading...</div>
</div>
<div class="wrapper mini-bar">

  

<div class="left-bar ">
	<div class="admin-logo">
		<div class="logo-holder pull-left">
			<img class="logo" src="__PUBLIC__/admin/images/example.png" alt="logo">	
		</div>
		<!-- logo-holder -->			
		<a href="#" class="menu-bar  pull-right"><i class="ti-menu"></i></a>
	</div>
	<!-- admin-logo -->
	<ul class="list-unstyled menu-parent" id="mainMenu">
		<li>
			<a href="index.html" class="waves-effect waves-light">
				<i class="icon ti-home"></i>
				<span class="text ">Dashboard</span>
			</a>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#layouts">
				<i class="icon ti-layout"></i>
				<span class="text">Unique Layouts</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled">
				<li class='current'><a class='current' href="collapsed-sidebar.html">Collapsed Sidebar</a></li>
				<li><a href="left-sidebar-version2.html">Menu with header</a></li>
				<li><a href="horizontal-menu.html">Horizontal Menu</a></li>					
				<li><a href="right-sidebar.html">Right Sidebar</a></li>
				<li><a href="boxed-layout.html">Boxed Layout</a></li>
				<li><a href="static-sidebar.html">Static Sidebar</a></li>
			</ul>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#piluku_premium">
				<i class="icon ti-gift"></i>
				<span class="text">Piluku Premium</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled" id="piluku_premium">
				<li><a href="widgets.html">Widgets</a></li>
				<li><a href="tasks.html">Tasks</a></li>
				<li><a href="mailbox.html">Mailbox</a></li>
				<li><a href="profile.html">Profile</a></li>
				<li><a href="invoice.html">Invoice</a></li>
				<li><a href="timeline.html">Timeline</a></li>
				<li><a href="pricing.html">Pricing</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="masonry-gallery.html">Masonry Gallery</a></li>
				<li><a href="rotated-gallery.html">Rotated Gallery</a></li>
			</ul>
		</li>
		<li>
			<a href="typography.html">
				<i class="icon ti-smallcap"></i>
				<span class="text">Typography</span>
			</a>
		</li>				
		<li class="submenu">
			<a class="waves-effect waves-light" href="#components">
				<i class="icon ti-briefcase"></i>
				<span class="text">Components</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled" id="components">
				<li class="submenu">
					<a class="waves-effect waves-light" href="#alerts">
						Alerts
						<span class="pull-right drop-arrow">
							<i class="drop-indicator ti-angle-right chevron"></i>
						</span>
					</a>
					<ul class="list-unstyled" id="alerts">
						<li><a href="basic-alerts.html">Basic Alerts</a></li>
						<li><a href="sweet-alerts.html">Sweet Alerts</a></li>
					</ul>
				</li>
				<li><a href="progress-bars.html">Progress Bars</a></li>
				<li><a href="dropdowns.html">Dropdowns</a></li>
				<li><a href="info-boxes.html">Info Boxes</a></li>
				<li><a href="notifications.html">Notifications</a></li>
				<li><a href="buttons.html">Buttons</a></li>
				<li><a href="tree-view.html">Tree View</a></li>
				<li><a href="css3-animations.html">CSS3 Animations</a></li>
				<li><a href="sliders.html">Sliders</a></li>
				<li><a href="nestable-lists.html">Nestable Lists</a></li>
				<li><a href="carousel.html">Carousel</a></li>
				<li><a href="portlets.html">Portlets</a></li>
				<li class="submenu">
					<a class="waves-effect waves-light" href="#icons">
						Icons
						<span class="pull-right drop-arrow">
							<i class="drop-indicator ti-angle-right chevron"></i>
						</span>
					</a>
					<ul class="list-unstyled" id="icons">
						<li><a href="ion-icons.html">Ion Icons</a></li>
						<li><a href="font-awesome.html">Font Awesome</a></li>
						<li><a href="themify.html">Themify Icons</a></li>
					</ul>
				</li>
				<li><a href="tooltips.html">Tooltips</a></li>
				<li><a href="labels-badges.html">Labels Badges</a></li>
				<li><a href="list-groups.html">List Groups</a></li>
				<li><a href="breadcrumbs-wells.html">Breadcrumbs</a></li>
				<li><a href="tabs-accordions.html">Tabs Accordions</a></li>
				<li><a href="file-manager.html">File Manager</a></li>
				<li><a href="modals.html">Modals</a></li>
				<li><a href="pagination.html">Pagination</a></li>

			</ul>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#forms_elements">
				<i class="icon ti-book"></i>
				<span class="text">Forms</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled">
				<li><a href="dropzone-file-upload.html">Dropzone File Upload</a></li>
				<li><a href="form-validation.html">Form Validation</a></li>
				<li><a href="form-wizard.html">Form Wizard</a></li>
				<li><a href="input-groups.html">Input Groups</a></li>
				<li><a href="form-elements.html">Form Elements</a></li>
				<li><a href="multiple-file-upload.html">Multiple File Upload</a></li>
				<li><a href="image-crop-zoom.html">Image Crop Zoom</a></li>
				<li><a href="wysiwig.html">WYZIWIG &amp; Markdown</a></li>
			</ul>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#tables">
				<i class="icon ti-layout-grid2"></i>
				<span class="text">Tables</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled" id="tables">
				<li><a href="basic-tables.html">Basic Tables</a></li>
				<li><a href="dynamic-tables.html">Dynamic Tables</a></li>
				<li><a href="editable-tables.html">Editable Tables</a></li>
				<li><a href="users-table.html">Users Table</a></li>
			</ul>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#piluku_utility">
				<i class="icon ti-heart"></i>
				<span class="text">Piluku Utility</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled" id="piluku_utility">
				<li class="submenu">
					<a class="waves-effect waves-light" href="#register">
						Register
						<span class="pull-right drop-arrow">
							<i class="drop-indicator ti-angle-right chevron"></i>
						</span>
					</a>
					<ul class="list-unstyled" id="register">
						<li><a href="signup.html">Modal One</a></li>
						<li><a href="signup2.html">Modal Two</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a class="waves-effect waves-light" href="#login">
						Login
						<span class="pull-right drop-arrow">
							<i class="drop-indicator ti-angle-right chevron"></i>
						</span>
					</a>
					<ul class="list-unstyled" id="login">
						<li><a href="signin.html">Modal One</a></li>
						<li><a href="signin2.html">Modal Two</a></li>
					</ul>
				</li>
				<li><a href="forgot-password.html">Forgot Password</a></li>
				<li><a href="lock-screen.html">Lock Screen</a></li>
				<li><a href="lock-screen2.html">Lock Screen 2</a></li>
				<li><a href="faq.html">FAQ</a></li>
				<li><a href="404.html">404</a></li>
				<li><a href="505.html">505</a></li>
				<li><a href="template.html">Template</a></li>
			</ul>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#charts">
				<i class="icon ti-bar-chart-alt"></i>
				<span class="text">Charts</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled" id="charts">
				<li><a href="line-area-charts.html">Line &amp; Area Charts</a></li>
				<li><a href="bar-charts.html">Bar Charts</a></li>
				<li><a href="pie-charts.html">Pie Charts</a></li>
				<li><a href="nvd3-charts.html">NVD3 Charts</a></li>
			</ul>
		</li>
		<li class="submenu">
			<a class="waves-effect waves-light" href="#maps">
				<i class="icon ti-location-pin"></i>
				<span class="text">Maps</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled" id="maps">
				<li class="submenu">
					<a class="waves-effect waves-light" href="#google_maps">
						Google Maps
						<span class="pull-right drop-arrow">
							<i class="drop-indicator ti-angle-right chevron"></i>
						</span>
					</a>
					<ul class="list-unstyled" id="google_maps">
						<li><a href="google-maps.html">Basic Maps</a></li>
						<li><a href="markers-maps.html">Markers Maps</a></li>
						<li><a href="routes-maps.html">Routes Maps</a></li>
					</ul>
				</li>
				<li><a href="vector-maps.html">Vector Maps</a></li>
			</ul>
		</li>

		<li class="submenu">
			<a class="waves-effect waves-light" href="#menu_levels">
				<i class="icon ti-layout-list-thumb"></i>
				<span class="text">Menu Levels</span>
				<i class="chevron ti-angle-right"></i>
			</a>
			<ul class="list-unstyled" id="menu_levels">
				<li class="submenu">
					<a class="waves-effect waves-light" href="#menu_level_one">Menu Level 1.1
						<span class="pull-right drop-arrow">
							<i class="drop-indicator ti-angle-right chevron"></i>
						</span>
					</a>
					<ul class="list-unstyled" id="menu_level_one">
						<li><a href="#">Menu Level 2.1</a></li>
						<li><a href="#">Menu Level 2.2</a></li>
						<li><a href="#">Menu Level 2.3</a></li>
					</ul>
				</li>
				<li><a href="#">Menu Level 1.2</a></li>
				<li><a href="#">Menu Level 1.3</a></li>
			</ul>
		</li>
	</ul>
</div>
<!-- left-bar -->

<div class="content" id="content">
	
	<div class="overlay"></div>			
	
	<div class="top-bar">
	<nav class="navbar navbar-default top-bar">
		<div class="menu-bar-mobile" id="open-left"><i class="ti-menu"></i>
		</div>

		<form class="navbar-left" role="search">
			<div class="search">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right top-elements">
			<li class="piluku-dropdown dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="flag_img" src="__PUBLIC__/admin/images/flags/india-flag.jpg" alt=""> English<span class="drop-icon"><i class="ion ion-chevron-down"></i></span>
				</a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow language-drop neat_drop" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="#"><img class="flag_img" src="__PUBLIC__/admin/images/flags/gm.gif" alt="flags"> German</a>
					</li>
					<li>
						<a href="#"><img class="flag_img" src="__PUBLIC__/admin/images/flags/usa.png" alt="flags"> Spanish</a>
					</li>
					<li>
						<a href="#"><img class="flag_img" src="__PUBLIC__/admin/images/flags/gm.gif" alt="flags"> german</a>
					</li>
					<li>
						<a href="#"><img class="flag_img" src="__PUBLIC__/admin/images/flags/gm.gif" alt="flags"> german</a>
					</li>
				</ul>
			</li>
			<li class="piluku-dropdown dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="ion-ios-bell-outline icon-notification"></i><span class="badge info-number message">22</span></a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow notification-drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="profile.html">
							<div class="hexagon danger">
								<span><i class="ion-ios-alarm-outline"></i></span>
							</div>
							<span class="text_info"> Privacy settings have been changed</span>
							<span class="time_info">3:30am</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="hexagon success">
								<span><i class="ion-ios-body-outline"></i></span>
							</div>
							<span class="text_info"> Tim has added you as friend</span>
							<span class="time_info">4:30am</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="hexagon warning">
								<span><i class="ion-ios-cart-outline"></i></span>
							</div>
							<span class="text_info"> New item added</span>
							<span class="time_info">6:07am</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="hexagon info">
								<span><i class="ion-ios-calendar-outline"></i></span>
							</div>
							<span class="text_info"> reminder please complete the task</span>
							<span class="time_info">3:30pm</span>
						</a>
					</li>
					<li>
						<a href="profile.html">
							<div class="outline-hexagon">
								<span><i class="ion-ios-checkmark-outline"></i></span>
							</div>
							<span class="text_info"> Marked as complete</span>
							<span class="time_info">1:30pm</span>
						</a>
					</li>
					<li>
						<a href="profile.html" class="last_info">See all notifications</a>
					</li>

				</ul>
			</li>
			<li class="piluku-dropdown dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="ion-ios-box-outline icon-notification"></i><span class="badge info-number bell">22</span></a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow message_drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="__PUBLIC__/admin/images/avatar.jpeg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>							
						</a>
					</li>
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="__PUBLIC__/admin/images/avatar.jpeg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>							
						</a>
					</li>
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="__PUBLIC__/admin/images/avatar.jpeg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>	
						</a>
					</li>
					<li>
						<a href="mailbox.html">
							<div class="avatar_left"><img src="__PUBLIC__/admin/images/avatar.jpeg" alt=""></div>
							<div class="info_right">
								<span class="text_head pull-left">Megan fox</span>
								<span class="time_info pull-right">3:30am <i class="online ion-record"></i></span>
								<div class="text_info"> Hi want to know about the company freelance for wizard</div>
							</div>	
						</a>
					</li>
				</ul>
			</li>
			<li class="piluku-dropdown dropdown">
				<!-- @todo Change design here, its bit of odd or not upto usable -->

				<a href="#" class="dropdown-toggle avatar_width" data-toggle="dropdown" role="button" aria-expanded="false"><span class="avatar-holder"><img src="__PUBLIC__/admin/images/avatar.jpeg" alt=""></span><span class="avatar_info">Bootstrap</span><span class="drop-icon"><!-- <i class="ion ion-chevron-down"></i> --></span></a>
				<ul class="dropdown-menu dropdown-piluku-menu  animated fadeInUp wow avatar_drop neat_drop dropdown-right" data-wow-duration="1500ms" role="menu">
					<li>
						<a href="profile.html"> <i class="ion-android-settings"></i>Settings</a>
					</li>
					<li>
						<a href="mailbox.html"> <i class="ion-android-chat"></i>Messages</a>
					</li>
					<li>
						<a href="dropzone-file-upload.html"> <i class="ion-android-cloud-circle"></i>Upload</a>
					</li>
					<li>
						<a href="profile.html"> <i class="ion-android-create"></i>Edit profile</a>
					</li>
					<li>
						<a href="lock-screen.html" class="logout_button"><i class="ion-power"></i>Logout</a>
					</li>   
				</ul>
			</li>
			<li class="chat_btn">
				<a href="#" class="right-bar-toggle flatRed">
					<i class="ion-ios-people-outline"></i>                              
				</a>
			</li>
		</ul>

	</nav>

</div>
<!-- /top-bar -->
	
	<div class="main-content">

		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
				<div class="dashboard-stats">
					<div class="left">
						<h3 class="flatBluec">6,600</h3>
						<h4>Monthly User</h4>
					</div>
					<div class="right flatBlue">
						<i class="ion ion-ios-heart-outline"></i>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
				<div class="dashboard-stats">
					<div class="left">
						<h3 class="flatGreenc">6,600</h3>
						<h4>peoples in circles</h4>
					</div>
					<div class="right flatGreen">
						<i class="ion ion-ios-color-filter-outline"></i>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
				<div class="dashboard-stats">
					<div class="left">
						<h3 class="flatRedc">6,600</h3>
						<h4>monthly notifications</h4>
					</div>
					<div class="right flatRed">
						<i class="ion ion-ios-alarm-outline"></i>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 nopad-right">
				<div class="dashboard-stats">
					<div class="left">
						<h3 class="flatOrangec">6,600</h3>
						<h4>monthly targets</h4>
					</div>
					<div class="right flatOrange">
						<i class="ion ion-ios-analytics-outline"></i>
					</div>
				</div>
			</div>

			<div class="col-md-6 nopad-right">
				<!-- panel -->
				<div class="panel panel-piluku">
					<div class="panel-heading">
						<h3 class="panel-title">
							Monthly Earnings
							<span class="panel-options">
								<a href="#" class="panel-refresh">
									<i class="icon ti-reload"></i> 
								</a>
								<a href="#" class="panel-minimize">
									<i class="icon ti-angle-up"></i> 
								</a>
								<a href="#" class="panel-close">
									<i class="icon ti-close"></i> 
								</a>
							</span>
						</h3>
					</div>
					<div class="panel-body">
						<div class="row main-chart-parent">
							<div class="ct-chart ct-golden-section  chart-height" id="main_chart"></div>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /panel -->
			</div>
			<!-- col-md-6 -->

			<div class="col-md-6 nopad-right">
				<!-- panel -->
				<div class="panel panel-piluku">
					<div class="panel-heading">
						<h3 class="panel-title">
							Mail widget
							<span class="panel-options">
								<a href="#" class="panel-refresh">
									<i class="icon ti-reload"></i> 
								</a>
								<a href="#" class="panel-minimize">
									<i class="icon ti-angle-up"></i> 
								</a>
								<a href="#" class="panel-close">
									<i class="icon ti-close"></i> 
								</a>
							</span>
						</h3>
					</div>
					<div class="panel-body mail_widget">
						<ul class="tabs">
							<li class="tab col-md-3"><a href="#test12" class="active">Inbox</a>
							</li>
							<li class="tab col-md-3"><a href="#test13">Sent</a>
							</li>
							<li class="tab col-md-3"><a href="#test14">Important</a>
							</li>
							<li class="tab col-md-3"><a href="#test15">Personal</a>
							</li>
						</ul>
						<div class="content-holder">
							<div id="test12" class="col-md-12 no_padding">
								<div class="mail_list">
									<ul class="list-unstyled mails_holder">
										<li>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Henry richards</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Research have been going on the project will report the results asap in a few days.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Hola fan</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/seven.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Nemo</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/eight.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Tupakula Vijay</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/nine.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">lucky</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">venky</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div id="test13" class="col-md-12 no_padding">
								<div class="mail_list">
									<ul class="list-unstyled mails_holder">
										<li>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Mila kunis</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Research have been going on the project will report the results asap in a few days.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">rescort</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/three.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">deal buzz</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/four.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">carlson</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/five.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">richie rich</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Tupakula Vijay</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div id="test14" class="col-md-12 no_padding">
								<div class="mail_list">
									<ul class="list-unstyled mails_holder">
										<li>
											<a href="#">
												<div class="message_list_block starred">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Henry richards</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Research have been going on the project will report the results asap in a few days.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block starred">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/ten.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Romeo roadie</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>waiting for your approval, many pending verifications!!</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block starred">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/eight.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Jonny</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Help me urgent.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block starred">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/six.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">pretty</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>login have been going on the project will report the results asap in a few days.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block starred">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Henry richards</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Research have been going on the project will report the results asap in a few days.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
										</li>
									</ul>
								</div>
								<!-- mail_list -->
							</div>
							<div id="test15" class="col-md-12 no_padding">
								<div class="mail_list">
									<ul class="list-unstyled mails_holder">
										<li>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Henry richards</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatRedc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Research have been going on the project will report the results asap in a few days.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Hola fan</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/seven.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Nemo</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/eight.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">Tupakula Vijay</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/nine.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">lucky</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
											<a href="#">
												<div class="message_list_block">
													<div class="left">
														<div class="avatar_holder">
															<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
														</div>
													</div>
													<div class="right">
														<span class="name">venky</span>
														<div class="pull-right right_details">
															<ul class="list-unstyled list-inline">
																<li>12:30</li>
																<li><i class="ion ion-record flatGreenc status"></i>
																</li>
																<li><i class="ion-android-attach"></i>
																</li>
															</ul>
														</div>
														<h4>Searching for the best cafe around ?? come to meet at given location.</h4>
													</div>
													<!-- right -->
												</div>
											</a>
										</li>
									</ul>
								</div>
								<!-- mail-list -->
							</div>
						</div>
					</div>
				</div>
				<!-- /panel -->
			</div>
			<!-- col-md-6 -->


			<div class="col-md-4 nopad-right">
				<div class="piluku-panel no-pad panel">
					<div class="sparkline-widget">
						<div class="heading-info flatRed">
							<p class="pull-left">Company development
								<br>
							</p>
							<p class="pull-right right">4% <i class="ion-android-arrow-dropup flatGreenc"></i>
							</p>
						</div>
						<div class="svg-holder flatRed">
							<div class="line"></div>
							<svg id="chart1" class="sparkline"></svg>
						</div>
						<div class="info-bottom">
							<div class="col-md-6 left">
								Monthly
								<p class="flatRedc">4 percent</p>
							</div>
							<div class="col-md-6 right">
								Profit
								<p class="flatRedc">40%</p>
							</div>
						</div>
					</div>
					<!-- sparkline-widget -->
				</div>
				<!-- panel -->
			</div>
			<!-- col-md-6 -->

			<div class="col-md-4 nopad-right">
				<div class="piluku-panel no-pad panel">
					<div class="sparkline-widget">
						<div class="heading-info flatGreen">
							<p class="pull-left">Revenue Generation
								<br>
							</p>
							<p class="pull-right right">4% <i class="ion-android-arrow-dropdown flatRedc"></i>
							</p>
						</div>
						<div class="svg-holder flatGreen">
							<div class="line"></div>
							<svg id="chart2" class="sparkline"></svg>
						</div>
						<div class="info-bottom">
							<div class="col-md-6 left">
								Monthly
								<p class="flatGreenc">5 sales</p>
							</div>
							<div class="col-md-6 right">
								Profit
								<p class="flatGreenc">80%</p>
							</div>
						</div>
					</div>
					<!-- sparkline-widget -->
				</div>
				<!-- panel -->
			</div>
			<!-- col-md-6 -->

			<div class="col-md-4 nopad-right">
				<div class="piluku-panel no-pad panel">
					<div class="sparkline-widget">
						<div class="heading-info flatOrange">
							<p class="pull-left">Tasks Management
								<br>
							</p>
							<p class="pull-right right">9% <i class="ion-android-arrow-dropup flatGreenc"></i>
							</p>
						</div>
						<div class="svg-holder flatOrange">
							<div class="line"></div>
							<svg id="chart3" class="sparkline"></svg>
						</div>
						<div class="info-bottom">
							<div class="col-md-6 left">
								Monthly
								<p class="flatOrangec">80 Tasks</p>
							</div>
							<div class="col-md-6 right">
								Status
								<p class="flatOrangec">1245</p>
							</div>
						</div>
					</div>
					<!-- sparkline-widget -->
				</div>
				<!-- panel -->
			</div>
			<!-- col-md-6 -->

			<div class="col-md-4 nopad-right">
				<div class="piluku-panel no-pad panel">
					<div class="ios-profile-widget">
						<div class="header_cover">
							<div class="more"><a href="#"><i class="ion-more"></i></a>
							</div>
							<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
							<h3>Henry Richards</h3>
							<i class="ion ion-social-twitter"> @Richardloves</i>
						</div>
						<!-- cover -->
						<ul class="list-inline interactive_btn">
							<li>
								<a href="#" class=""><i class="ion-ios-personadd-outline"></i></a>
							</li>
							<li>
								<a href="#"><i class="ion-ios-heart-outline"></i></a>
							</li>
							<li>
								<a href="#"><i class="ion-ios-chatboxes-outline"></i></a>
							</li>
						</ul>
						<ul class="list-group">
							<li class="list-group-item">
								<span class="badge">200+</span>
								Friends
							</li>
							<li class="list-group-item">
								<span class="badge">1,400+</span>
								Followers
							</li>
							<li class="list-group-item">
								<span class="badge">3,700</span>
								Posts
							</li>
							<li class="list-group-item">
								<span class="badge">14</span>
								Pokes
							</li>
						</ul>

					</div>
					<!-- ios-profile -->
				</div>
				<!-- panel -->
			</div>
			<!-- col-md-6 -->

			<div class="col-md-4 col-xs-12 nopad-right">
				<!-- panel -->
				<div class="panel panel-piluku">
					<div class="panel-heading">
						<h3 class="panel-title">
							Login
							<span class="panel-options">
								<a href="#" class="panel-refresh">
									<i class="icon ti-reload"></i> 
								</a>
								<a href="#" class="panel-minimize">
									<i class="icon ti-angle-up"></i> 
								</a>
								<a href="#" class="panel-close">
									<i class="icon ti-close"></i> 
								</a>
							</span>
						</h3>
					</div>
					<div class="panel-body no-padding">
						<div class="piluku-login">
							<div class="form-section">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" placeholder="Username">
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" class="form-control" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-success btn-block"><strong>Log in</strong>
								</button>
							</div>
							<p>Not a member ? <a href="">Signup now</a>
							</p>
							<div class="header">
								<ul class="">
									<li><a href="#" class="btn btn-radius facebook"><i class="fa fa-facebook"></i></a>
									</li>
									<li><a href="#" class="btn btn-radius twitter"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#" class="btn btn-radius google"><i class="fa fa-google-plus"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /panel -->
			</div>
			<!-- col-md-3 -->

			<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
				<!-- panel -->
				<div class="panel panel-piluku">
					<div class="panel-heading">
						<h3 class="panel-title">
							Monthly Earnings
							<span class="panel-options">
								<a href="#" class="panel-refresh">
									<i class="icon ti-reload"></i> 
								</a>
								<a href="#" class="panel-minimize">
									<i class="icon ti-angle-up"></i> 
								</a>
								<a href="#" class="panel-close">
									<i class="icon ti-close"></i> 
								</a>
							</span>
						</h3>
					</div>
					<div class="panel-body">
						<div class="row small-bar-chart">
							<div class="ct-chart ct-minor-seventh chart-height monthly-earning-chart" id="small_bar_chart"></div>
							<ul class="list-unstyled  info_section list-inline">
								<li>
									<div class="circle flatBluec"></div>mobiles
								</li>
								<li>
									<div class="circle flatBluec2"></div>Tabs
								</li>
								<li>
									<div class="circle flatBluec3"></div>Laptops
								</li>
							</ul>
							<ul class="market_info_holder list-unstyled">
								<li>
									<div class="col-md-4 market_info">
										<h2>Apple inc</h2>
										<div class="status flatRedc">101$ <i class="ion-arrow-down-b"></i> 
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-4 market_info">
										<h2>Sony inc</h2>
										<div class="status flatGreenc">306$ <i class="ion-arrow-up-b"></i> 
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-4 market_info">
										<h2>Htc inc</h2>
										<div class="status flatRedc">112$ <i class="ion-arrow-down-b"></i> 
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /panel -->
			</div>
			<!-- col-md-3 -->

			<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
				<!-- panel -->
				<div class="panel panel-piluku">
					<div class="panel-heading">
						<h3 class="panel-title">
							Website visitors
							<span class="panel-options">
								<a href="#" class="panel-refresh">
									<i class="icon ti-reload"></i> 
								</a>
								<a href="#" class="panel-minimize">
									<i class="icon ti-angle-up"></i> 
								</a>
								<a href="#" class="panel-close">
									<i class="icon ti-close"></i> 
								</a>
							</span>
						</h3>
					</div>
					<div class="panel-body">
						<div class="row small_pie_chart">
							<ul class="tabs light-tab">
								<li class="tab col-md-4"><a href="#market1" class="active">Graphical</a>
								</li>
								<li class="tab col-md-4"><a href="#market2">Progress</a>
								</li>
								<li class="tab col-md-4"><a href="#market3">Quote</a>
								</li>
							</ul>
							<div class="content-holder">
								<div id="market1" class="col-md-12 no_padding">
									<div class="ct-chart ct-golden-section chart-height website-visits" id="small_pie_chart"></div>
									<ul class="list-unstyled  info_section list-inline">
										<li>
											<i class="ion ion-record flatOrangec"></i> Motorola
										</li>
										<li>
											<i class="ion ion-record flatRedc"></i> Keen labs
										</li>
										<li>
											<i class="ion ion-record flatBluec"></i> Facebook
										</li>
									</ul>
								</div>
								<div id="market2" class="col-md-12 no_padding">
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">January Result
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">Feb Result
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">March Result
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">April Result
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">May Result
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">Present Result
										</div>
									</div>
								</div>
								<div id="market3" class="col-md-12 no_padding">
									<h4>Documented</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora at, aliquid porro, voluptate maiores fugiat? Tempore adipisci excepturi dolores provident doloremque, eum quis placeat, cupiditate laudantium ipsam atque repellendus, error.</p>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /panel -->
			</div>
			<!-- col-md-3 -->

			<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
				<div class="piluku-panel no-pad todo_widget panel">
					<div class="todo_heading">
						<div class="left-icon">
							<div class="ms-hover">
								<input type="checkbox" class="mark-all" id="todo">
								<label for="todo"><span></span></label>
							</div>
						</div>
						Todo
						<a href="#" class="right-icon">
							<i class="ion-ios-bell"></i>
						</a>
					</div>
					<ul class="list-group list-todo">
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo1">
								<label for="todo1"><span></span>Call Head branch</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo2">
								<label for="todo2"><span></span>check the postings</label>
							</div>
							<div class="notification">
								<i class="ion-ios-bell-outline"></i>
							</div>
						</li>
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo3">
								<label for="todo3"><span></span>Recharge the Battery</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo4">
								<label for="todo4"><span></span>Jog for 30 minutes</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo5">
								<label for="todo5"><span></span>Check for updates</label>
							</div>
							<div class="notification">
								<i class="ion-ios-bell-outline"></i>
							</div>
						</li>
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo6">
								<label for="todo6"><span></span>call for tim</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo7">
								<label for="todo7"><span></span>Fix bugs</label>
							</div>
						</li>
						<li class="list-group-item">
							<div class="ms-hover">
								<input type="checkbox" class="mark-complete" id="todo8">
								<label for="todo8"><span></span>Send mail</label>
							</div>
						</li>
						<li class="list-group-item add-to-input">
							<input type="text" class="form-control" name="add_todo" id="add_todo" placeholder="Add new task here...">
						</li>
					</ul>
				</div>
				<!-- panel -->
			</div>
			<!-- col-md-6 -->

			<div class="col-md-4 col-sm-6 col-xs-12 nopad-right">
				<div class="piluku-panel no-pad panel">
					<div class="piluku-music-player">
						<div class="track-info">
							<a href="#"><i class="fa fa-volume-up"></i></a>
							<a href="#"><i class="fa fa-music pull-right"></i></a>
							<h3>FAST &amp; FURIOUS</h3>
							<p class="text-center">WE OWN IT</p>
							<div class="track-time">
								<p class="start-time">2:18</p>
								<p class="end-time pull-right">4:16</p>
							</div>
						</div>
						<div class="seek-bar">
							<div class="progress">
								<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								</div>
							</div>
						</div>
						<div class="audio-controls">
							<div class="control-buttons">
								<ul>
									<li><a href="#"><i class="ion ion-ios-rewind-outline"></i></a>
									</li>
									<li><a href="#"><i class="ion-ios-refresh-empty"></i></a>
									</li>
									<li><a href="#"><i class="ion ion-ios-play"></i></a>
									</li>
									<li><a href="#"><i class="ion-stop"></i></a>
									</li>
									<li><a href="#"><i class="ion ion-ios-fastforward-outline"></i></a>
									</li>
								</ul>
							</div>
							<ul class="list-group">
								<li class="list-group-item">
									<span class="badge bg-danger">2:60</span>
									Far from the sea
								</li>
								<li class="list-group-item">
									<span class="badge bg-danger">3:12</span>
									Let it be
								</li>
								<li class="list-group-item">
									<span class="badge bg-danger">6:42</span>
									See the shining lights
								</li>
								<li class="list-group-item">
									<span class="badge bg-danger">1:00</span>
									Act like you know
								</li>
								<li class="list-group-item">
									<span class="badge bg-danger">2:06</span>
									Happy angels dont be rude
								</li>

							</ul>
						</div>
					</div>
					<!-- end of music player -->
				</div>
				<!-- panel -->
			</div>
			<!-- col-md-6 -->

		</div>
		<!-- row -->
	</div>	
</div>
<!---content -->


	<div class="side-bar right-bar ">
		<div class="contacts">
			<div class="col col-md-12">
				<ul class="tabs">
					<li class="tab col-md-3"><a href="#test1" class="active">Chat</a></li>
					<li class="tab col-md-3"><a href="#test2">Settings</a></li>
					<li class="tab col-md-3"><a href="#test3">Messages</a></li>
				</ul>
			</div>
			<div class="content-holder">
				<div id="test1" class="col-md-12 no_padding">					
					<div class="panel-body no_padding">
						<div class="panel-group piluku-accordion piluku-accordion-two" id="accordionOne" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalOne">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalOne" aria-expanded="true" aria-controls="collapseOne">
											Online <i class="chevron ti-angle-down"></i>
										</a>
									</h4>
								</div>
								<div id="collapseModalOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body no_padding">
										<ul class="list-group contacts-list">
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
													</div>
													<span class="name">Richards carlson</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
													</div>
													<span class="name">Firing Arc</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/three.png" alt="">
													</div>
													<span class="name">strapzen</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/four.png" alt="">
													</div>
													<span class="name">Reeves</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/five.png" alt="">
													</div>
													<span class="name">Bootstrap Guru</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/six.png" alt="">
													</div>
													<span class="name">Carlson</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/seven.png" alt="">
													</div>
													<span class="name">Paris hilton</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/eight.png" alt="">
													</div>
													<span class="name">Henry Richards</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/nine.png" alt="">
													</div>
													<span class="name">Richie Rich</span>
													<i class="ion ion-record online"></i>
												</a>
											</li>

										</ul>	
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalTwo">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalTwo" aria-expanded="false" aria-controls="collapseTwo">
											offline
										</a>
									</h4>
								</div>
								<div id="collapseModalTwo" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingTwo">
									
									<div class="panel-body no_padding">
										<ul class="list-group contacts-list">
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
													</div>
													<span class="name">Richards carlson</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
													</div>
													<span class="name">Firing Arc</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/three.png" alt="">
													</div>
													<span class="name">strapzen</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/four.png" alt="">
													</div>
													<span class="name">Reeves</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/five.png" alt="">
													</div>
													<span class="name">Bootstrap Guru</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/six.png" alt="">
													</div>
													<span class="name">Carlson</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/seven.png" alt="">
													</div>
													<span class="name">Paris hilton</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/eight.png" alt="">
													</div>
													<span class="name">Henry Richards</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/nine.png" alt="">
													</div>
													<span class="name">Richie Rich</span>
													<i class="ion ion-record offline"></i>
												</a>
											</li>

										</ul>	
									</div>
									
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalThree">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseModalThree" aria-expanded="false" aria-controls="collapseThree">
											Away
										</a>
									</h4>
								</div>
								<div id="collapseModalThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">									
									<div class="panel-body no_padding">
										<ul class="list-group contacts-list">
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/one.png" alt="">
													</div>
													<span class="name">Richards carlson</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/two.png" alt="">
													</div>
													<span class="name">Firing Arc</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/three.png" alt="">
													</div>
													<span class="name">strapzen</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/four.png" alt="">
													</div>
													<span class="name">Reeves</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/five.png" alt="">
													</div>
													<span class="name">Bootstrap Guru</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/six.png" alt="">
													</div>
													<span class="name">Carlson</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/seven.png" alt="">
													</div>
													<span class="name">Paris hilton</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/eight.png" alt="">
													</div>
													<span class="name">Henry Richards</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#">
													<div class="avatar">
														<img src="__PUBLIC__/admin/images/avatar/nine.png" alt="">
													</div>
													<span class="name">Richie Rich</span>
													<i class="ion ion-record away"></i>
												</a>
											</li>
										</ul>	
									</div>
								</div>
							</div>
						</div>	
					</div> 
				</div>
				<div id="test2" class="col-md-12 no_padding">
				<br>										
					<div class="form-group">
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">Reminders</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">theme options</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch1" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch1"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">dark / light theme</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch2" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch2"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">Email Updates</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch3" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch3"><i></i>
									</label>
								</div>
							</div>
						</div>
						<div class="toggle-switch">
							<label class="col-sm-8 control-label">Notifications</label>
							<div class="col-sm-4">
								<input type="checkbox" class="mark-complete" id="toggle-switch4" name="" value="" checked="">
								<div class="toggle">
									<label for="toggle-switch4"><i></i>
									</label>
								</div>
							</div>
						</div>							

						<div class="form-group check-radio">
							<label class="col-sm-9 control-label">Loader animation</label>
							<div class="col-sm-3">
								<ul class="list-inline checkboxes-radio">
									<li class="ms-hover">
										<input type="checkbox" class="mark-complete" id="c1">
										<label for="c1"><span></span></label>
									</li>                                                                               
								</ul>
							</div>
						</div>
						<div class="form-group check-radio">
							<label class="col-sm-9 control-label">delay load</label>
							<div class="col-sm-3">
								<ul class="list-inline checkboxes-radio">
									<li class="ms-hover">
										<input type="checkbox" class="mark-complete" id="c2">
										<label for="c2"><span></span></label>
									</li>                                                                               
								</ul>
							</div>
						</div>
						<div class="form-group check-radio">
							<label class="col-sm-9 control-label">Graphs animations</label>
							<div class="col-sm-3">
								<ul class="list-inline checkboxes-radio">
									<li class="ms-hover">
										<input type="checkbox" class="mark-complete" id="c3" checked="">
										<label for="c3"><span></span></label>
									</li>                                                                               
								</ul>
							</div>
						</div>
					</div>						
				</div>
				<div id="test3" class="col-md-12 no_padding">
					<div class="heading no_border_bottom">
						Todays
						<div class="left"><a href="#"><i class="ion-android-refresh"></i></a></div>
						<div class="right"><a href="#"><i class="ion-gear-a"></i></a></div>						
					</div>
					<div class="list-group message-list">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">henry richards</h4>
							<p class="list-group-item-text">has pushed all the code to github and saved some fixes too..</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">mary </h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto accusamus officiis vero magnam amet, quas corru</p>
						</a>							
					</div>	
					<div class="heading no_border_bottom">
						june 15 1990
						<div class="left"><a href="#"><i class="ion-android-refresh"></i></a></div>
						<div class="right"><a href="#"><i class="ion-gear-a"></i></a></div>						
					</div>
					<div class="list-group message-list">
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">henry richards</h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto accusamus officiis vero magnam amet, quas corru</p>
						</a>
						<a href="#" class="list-group-item">
							<h4 class="list-group-item-heading">mary </h4>
							<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto accusamus officiis vero magnam amet, quas corru</p>
						</a>							
					</div>	
				</div>
			</div>
			<!-- content_holder -->
		</div>
	</div>
	<!-- /Right-bar -->
</div>
<!-- wrapper -->

<script src='__PUBLIC__/admin/js/jquery-ui-1.10.3.custom.min.js'></script>
<script src='__PUBLIC__/admin/js/bootstrap.min.js'></script>
<script src='__PUBLIC__/admin/js/jquery.nicescroll.min.js'></script>
<script src='__PUBLIC__/admin/js/wow.min.js'></script>
<script src='__PUBLIC__/admin/js/jquery.loadmask.min.js'></script>
<script src='__PUBLIC__/admin/js/jquery.accordion.js'></script>
<script src='__PUBLIC__/admin/js/materialize.js'></script>
<script src='__PUBLIC__/admin/js/chartist.min.js'></script>
<script src='__PUBLIC__/admin/js/CustomChart.js'></script>
<script src='__PUBLIC__/admin/js/build/d3.min.js'></script>
<script src='__PUBLIC__/admin/js/nvd3/nv.d3.js'></script>
<script src='__PUBLIC__/admin/js/sparkline.js'></script>
<script src='__PUBLIC__/admin/js/weather.js'></script>
<script src='__PUBLIC__/admin/js/bic_calendar.js'></script>
<script src='__PUBLIC__/admin/js/widgets.js'></script>
<script src='__PUBLIC__/admin/js/core.js'></script>

<script src="__PUBLIC__/admin/js/jquery.countTo.js"></script>
</body>
</html>