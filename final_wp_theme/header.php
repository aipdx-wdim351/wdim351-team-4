<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="<?php language_attributes(); ?>><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php bloginfo("name"); ?> <?php wp_title("&bull;"); ?></title>
		

		<meta name="viewport" content="width=device-width">
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		
  		<!-- stylesheet -->
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/library/css/master.css" />
  		<link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/library/css/app.css" />

		<script src="<?php bloginfo("template_url");?>/library/js/libs/jquery.js"></script>
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
	</head>
	
	<body <?php body_class(); ?>>
		<div class="whole-wrapper">
			<div class="wrapper">
				<div class="row">
					<nav class="top-bar">
						<ul class="title-area social-links">
							<!-- Title Area -->
							<li class="s-link"><a href="http://www.facebook.com">Facebook</a></li>
							<li class="s-link"><a href="http://www.twitter.com">Twitter</a></li>
							<li class="s-link"><a href="http://www.vimeo.com">Vimeo</a></li>
							<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
							<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
						</ul>    

						<section class="top-bar-section">
							<!-- Right Nav Section -->
							<ul class="right">
								<li><a href="#" class="login">Log in</a></li>
								<li class="has-form">
									<form>
										<div class="row collapse">
											<div class="small-12 columns">
												<input type="text" class="rounded" placeholder="Search...">
											</div>
										</div>
									</form>
								</li>
							</ul>
						</section>
					</nav>
				</div>
			</div>
			
			<div class="row">
				<div class="large-8 columns small-12 global-nav">
					<nav role="navigation" class="nav inline-list main-nav">
						<?php wp_nav_menu('menu=Global'); ?>
					</nav>
				</div>

				<div class="large-4 columns">
					<img src="<?php bloginfo("template_url"); ?>/library/img/logo.gif" alt="Hollywood Fitness Logo" class="logo">
				 </div>
			</div>
			<?php if(!is_page('Contact') && !is_page('Home')) { ?>
				<div class="row sub-head">
					<div class="large-8 columns">
						<h1 class="page-header"><?php if(is_home() || is_single()){ echo "George's Blog"; } else { the_title(); } ?></h1>
					</div>
					<div class="large-4 columns">
						<ul class="sub-nav-callouts">
							<li><h3>7 DAY PASS</h3><a class="round button view-more expand" href="#">View More</a></li>
							<li><h3>NEWSLETTER</h3><a class="round button view-more expand" href="#">View More</a></li>
						</ul>
					</div>
				</div>
			<?php } ?>
			<div class="content-wrapper">