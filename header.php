<?php
/**
 * The header for the theme
 *
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
	<nav class="navbar navbar-expand-md navbar-light bg-light py-3">
		<div class="container d-flex justify-content-between">
			<a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo.png"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link font-weight-bold" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link font-weight-bold" href="#">Company</a>
					</li>
					<li class="nav-item">
						<a class="nav-link font-weight-bold" href="#">About Us</a>
					</li>
				</ul>
				<button class="btn btn-primary my-2 ml-3 my-sm-0 ls-2 text-uppercase" type="button">Register</button>
			</div>
		</div>
	</nav>
</header>

<main role="main">