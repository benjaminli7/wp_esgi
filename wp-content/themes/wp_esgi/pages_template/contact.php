<?php
/*
 *
 * Template Name: Contact
 *
 * (You can also use other lines before or after the line above,
 *  WordPress only cares about the line that starts with "Template Name".)
 *
 */
?>


<?php get_header(); ?>


<main id="site-content" class="px-5 px-sm-0">
	<div class="container title-page">
		<div class="col-12 col-sm-8">
			<h1><?= the_title(); ?></h1>
		</div>
	</div>
	<div class="container content">
		<?php the_content(); ?>
	</div>

	<?php if (get_theme_mod('display-contact') === 'Yes') : ?>
		<?php include(__DIR__ . '/../template-parts/contact.php'); ?>
	<?php endif; ?>



</main>


<?php get_footer(); ?>