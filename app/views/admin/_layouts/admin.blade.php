<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{ $title or 'Advaita Ashrama' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="layout" content="main"/>    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
	{{-- HTML::style('css/admin.css')--}}
    <script src="{{ url() }}/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <script src="{{ url() }}/js/jquery/jquery-1.11.1.min.js" type="text/javascript" ></script>
    <link href= "{{ url() }}/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
    <link href= "{{ url() }}/css/DT_bootstrap.css" type="text/css" media="screen, projection" rel="stylesheet" />
</head>   
<body>
@if( Auth::check() )  
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{ url() }}/admin" class="brand"><i class="icon-leaf">Clean Dashboard</i></a>
				<div id="app-nav-top-bar" class="nav-collapse">
					<ul class="nav">                            
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">TRY ME!
								<b class="caret hidden-phone"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="dashboard.html">Dashboard</a>
								</li>
								<li>
									<a href="form.html">Form</a>
								</li>
								<li>
									<a href="custom-view.html">Custom View</a>
								</li>
								<li>
									<a href="login.html">Login Page</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">CHANGE NAV BAR
								<b class="caret hidden-phone"></b>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="demo-horizontal-nav.html">Horizontal</a>
								</li>
								<li>
									<a href="demo-horizontal-fixed-nav.html">Horizontal Fixed</a>
								</li>
								<li>
									<a href="demo-vertical-nav.html">Vertical</a>
								</li>
								<li>
									<a href="demo-vertical-fixed-nav.html">Vertical Fixed</a>
								</li>
							</ul>
						</li>                            
					</ul>
					<ul class="nav pull-right">
						<li>
							<a href="{{ url() }}/admin/logout">Logout</a>
						</li>						
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- navbar navbar-fixed-top ends -->       
@endif
	<div id="body-container">
		<div id="body-content">
				@if( Auth::check() )      
					<div class="body-nav body-nav-horizontal body-nav-fixed">
						<div class="container">
							<ul>
								<li>
									<a href="#">
										<i class="icon-dashboard icon-large"></i> Users
									</a>
								</li>
								<li>
									<a href="{{ url() }}/admin/posts">
										<i class="icon-calendar icon-large"></i> Posts
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-map-marker icon-large"></i> Map It
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-tasks icon-large"></i> Widgets
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-cogs icon-large"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-list-alt icon-large"></i> Forms
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-bar-chart icon-large"></i> Charts
									</a>
								</li>
							</ul>
						</div>
					</div>
				<section class="nav nav-page">
				@yield('nav')
			</section><!-- nav nav-page end -->
			@endif
			<section class="page container">
					@yield('content')
			</section><!-- page container end -->		
		</div><!-- body-content end -->
	</div><!-- body-container end -->        
	<div id="spinner" class="spinner" style="display:none;">
		Loading…
	</div>
	<!-- Application Footer -->
	<footer class="application-footer">
		<div class="container">
			<p>Brandsoft Infotech Pvt. Ltd.</p>
			<div class="disclaimer">
			&copy; {{ date('Y')}} Nandini Bhaduri
			</div>
		</div>
	</footer>
	<!--<footer>
	<div class="container">			
		&copy; {{ date('Y')}} Nandini Bhaduri		
	</div>
	</footer>-->
	<script src="{{ url() }}/js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>        
	<script src="{{ url() }}/js/jquery/jquery-chosen.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/jquery/virtual-tour.js" type="text/javascript" ></script>              
	<script src="{{ url() }}/js/jquery/jquery.dataTables.min.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
	<script src="{{ url() }}/js/jquery/dataTables.bootstrap.js" type="text/javascript" ></script>
    </body>
</html>
