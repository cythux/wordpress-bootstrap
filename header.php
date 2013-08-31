<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- diese stylesheet wird noch in der function.php verlegt 
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<!-- Fixed Navbar -->
		<div class="navbar navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
				</div>

				<nav class="navbar-collapse collapse" role="navigation">
					<?php
        	  if (has_nav_menu('primary_navigation')) :
           		wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          	endif;
       		?>
				</nav><!-- / .nav-collapse -->

			</div><!-- /.container -->
		</div><!-- /.navbar -->
