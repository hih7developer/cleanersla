<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title></title>
	<meta name="description" content="" />
	<meta name="author" content="admin" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.png" alt="" />
	<link href="<?php bloginfo('template_url') ?>/assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/animate.css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/swiper.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/custom.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/responsive.css" />

	<?php wp_head() ?>
</head>

<body>
	<header id="blog_scroll">
		<div class="cus_nav">
			<div class="cus_nav_outr">
				<div class="container-fluid">
					<div class="cus_nav_innr">
						<div class="logo_area">
							<a href="<?php echo home_url('/') ?>"><?php dynamic_sidebar('header-logo') ?></a>
						</div>
						<div class="nav_area">
							<div class="right_nav">
								<div class="navbar-header">
									<nav class="navbar navbar-expand-md">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
											<span class="navbar-toggler-icon"></span>
										</button>

										<?php 
										wp_nav_menu( array(
											'theme_location'  => 'primary',
											'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
											'container'       => 'div',
											'container_class' => 'collapse navbar-collapse',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav mr-auto',
											'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
											'walker'          => new WP_Bootstrap_Navwalker(),
										) );
										?>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	