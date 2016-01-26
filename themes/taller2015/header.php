<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,500,700,700italic,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300,300italic,500italic,500,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Coustard:400,900' rel='stylesheet' type='text/css'>
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">
		<header class="master_header clearfix">
			<div class="wrapper mil280">
				<h1 class="logo">
					<a href="<?php echo site_url(); ?>">Taller de Código</a>
				</h1>
				<ul class="main_menu">
					<li><a href="<?php echo site_url('#about-us'); ?>">¿Qué somos?</a></li>
					<li><a href="<?php echo site_url('#work'); ?>">Trabajo</a></li>
					<li><a href="<?php echo site_url('#method'); ?>">Metodología</a></li>
					<li><a href="<?php echo site_url('#team'); ?>">Equipo</a></li>
					<li><a href="<?php echo site_url('#contact-us'); ?>">Contacto</a></li>
				</ul>
			</div><!--  END wrapper -->
		</header>