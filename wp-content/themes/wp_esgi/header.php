<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="site-header" class="site-header">
		<div class="container">
			<div class="menu-container">
				<div class="logo">
					<?php

					if (function_exists('the_custom_logo')) {
						the_custom_logo();
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
					?>
				</div>

				<div class="hamburger">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/Open_menu.png" alt="Hamburger" />
				</div>
				<div class="close hide">
					<img src="<?php echo get_template_directory_uri(); ?>/src/images/Close.svg" alt="Close" />
				</div>
			</div>
			<div class="menu-flex">
				<div class="d-flex justify-content-between">
					<div class="search-form">
						<?php get_search_form(); ?>
					</div>
					<?php
					// Afficher le menu principal
					if (has_nav_menu('primary')) {
						wp_nav_menu([
							'theme_location' => 'primary',
							'container' => 'nav',
							'container_class' => 'main-nav'
						]);
					}
					?>
				</div>
			</div>
		</div>
	</header>