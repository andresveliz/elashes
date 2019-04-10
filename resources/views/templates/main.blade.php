<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>E-lashes</title>

		<meta name="description" content="with draggable and editable events" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<script type="text/javascript">
 
 
  	$(function(){	
        $('ul.nav li').click(function() {
          
            $(this).addClass("active");
            
           
        
		});
 });

</script>
	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.html" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							E - lashes Oruro
						</small>
					</a>
				</div>

				
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				

				<ul class="nav nav-list">
					<li class="active">
						<a href="#">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Inicio </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="{{url('reservas/')}}">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Reservas

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text"> Trabajos </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{url('productos/')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Ver
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="{{url('productos/create')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Nuevo codigo
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-shopping-cart"></i>
							<span class="menu-text"> Ventas </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{url('ventas/')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Ver
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="{{url('ventas/create')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Nueva venta
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-calculator"></i>
							<span class="menu-text">
								Reportes
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<a href="{{url('reportes/operador')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Pago Diario a operarias
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="{{url('reportes/diario')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Total Diario
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Por Fechas
								</a>

								<b class="arrow"></b>
							</li>

							
							
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Diario </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="tables.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Inicio de caja diario
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="jqgrid.html">
									<i class="menu-icon fa fa-caret-right"></i>
									jqGrid plugin
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> Productos </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{url('productos/')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Ver
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="{{url('productos/create')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Agregar
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					<li class="">
						<a href="" class="dropdown-toggle">
							<i class="menu-icon fa fa-exchange"></i>
							<span class="menu-text"> Servicios </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{url('servicios/')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Ver
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="{{url('servicios/create')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Agregar
								</a>

								<b class="arrow"></b>
							</li>

												

							
						</ul>
					</li>


					<li class="">
						<a href="widgets.html">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Inventario </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> Operadores </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{url('productos/')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Ver
								</a>

								<b class="arrow"></b>
							</li>


							<li class="">
								<a href="{{url('productos/create')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Agregar
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

					

					

					

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Calendar</li>
						</ul><!-- /.breadcrumb -->

						<!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							

							
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Calendario
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Reservas E-lashes Oruro
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-12">

										<section>
                       					@include('flash::message')
                       					@yield('content')
                     					</section>
										<div class="space"></div>

										<div id="calendar"></div>

									</div>

								
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">E-lashes Oruro</span>
							Developed by Andras Crow &copy; 2018
						</span>

						&nbsp; &nbsp;
						
					</div>
				</div>
			</div>

		
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->
		<script src="{{asset('assets/js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.ui.touch-punch.min.js')}}"></script>
		

		
		<script src="{{asset('assets/js/bootbox.js')}}"></script>
		<script src="{{asset('assets/js/es.js')}}"></script>
		<!-- ace scripts -->
		<script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
		<script src="{{asset('assets/js/ace.min.js')}} "></script>

		
		<!-- inline scripts related to this page -->
		<!-- MODIFICADO/BORRADO DESDE AQUI -->
		
	</body>
</html>
