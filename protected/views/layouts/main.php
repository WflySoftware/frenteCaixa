<?php /* @var $this Controller */ ?>
<!DOCTYPE Html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="pt" />	
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<!-- start: CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style-responsive.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/retina.css">
	<!-- end: CSS -->

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie9.css" rel="stylesheet">
	<![endif]-->

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->

	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->request->baseUrl; ?>/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/ico/favicon.png">
	<!-- end: Favicon and Touch Icons -->	
		
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<!-- Inicio do Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>
				<div class="row-fluid">
				<a class="brand span2" href="index.html"><span>Frente de Caixa</span></a>
			</div>
			<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">Transaction was canceled</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li>
									<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                            	</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressBlue">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Django Project For Google</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressRed">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">SEO for new sites</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressGreen">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">New blog posts</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressPink">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						
						<li>
							<a class="btn" href="#">
								<i class="icon-wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								
								<div class="user">
									<span class="hello">Bem Vindo</span>
									<span class="name">Mozes</span>
								</div>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									
								</li>
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
								<li><a href="#"><i class="icon-envelope"></i> Messages</a></li>
								<li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
			
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-asterisk"></i><span class="hidden-tablet"> Painel Inicial</span></a></li>	
						<li><a href="#"><i class=" icon-money"></i><span class="hidden-tablet"> Realizar Venda</span></a></li>
						<li><a href="#"><i class="icon-search"></i><span class="hidden-tablet"> Pesquisar</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-book"></i><span class="hidden-tablet"> Relatorios</span> <span class="label">4</span></a>
							<ul>
								<li><a class="submenu" href="#"><i class="icon-folder-open"></i><span class="hidden-tablet"> Fechamentos</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Graficos</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-tasks"></i><span class="hidden-tablet"> Ranking Produtos</span></a></li>
								<li><a class="submenu" href="#"><i class="icon-shopping-cart"></i><span class="hidden-tablet">  Ranking Produtos</span></a></li>
								
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-warning-sign"></i><span class="hidden-tablet"> Caixa</span> <span class="label">2</span></a>
							<ul>
								<li><a class="submenu" href="#"><i class="icon-unlock"></i><span class="hidden-tablet"> Abrir </span></a></li>
								<li><a class="submenu" href="#"><i class="icon-lock"></i><span class="hidden-tablet"> Fechar</span></a></li>
								
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
<div id="content" class="span10">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div>

	<!-- fim header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Wfly Software.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<!-- start: JavaScript-->
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-migrate-1.2.1.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.ui.touch-punch.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cookie.js"></script>	
		<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/fullcalendar.min.js'></script>	
		<script src='<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.dataTables.min.js'></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/excanvas.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.pie.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.stack.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.resize.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flot.time.js"></script>
		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.chosen.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.uniform.min.js"></script>		
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.cleditor.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.noty.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.elfinder.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.raty.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.iphone.toggle.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.uploadify-3.1.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.gritter.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.imagesloaded.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.masonry.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.knob.modified.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.sparkline.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/counter.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/raphael.2.1.0.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/justgage.1.0.1.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.autosize.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/retina.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.placeholder.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/wizard.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/core.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/charts.min.js"></script>	
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.min.js"></script>
	<!-- end: JavaScript-->
</body>
</html>
