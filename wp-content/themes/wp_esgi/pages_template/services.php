<?php
/*
 *
 * Template Name: Services
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

	<?php if (get_theme_mod('display-our-services') === 'Yes') : ?>
		<?php include(__DIR__ . '/../template-parts/our-services.php'); ?>
	<?php endif; ?>

	<div class="intro paragraph container">

		<?php the_content(); ?>

	</div>

	
</main>
<?php if (get_theme_mod('display-image-full-width') === 'Yes') : ?>
	<?php include(__DIR__ . '/../template-parts/image-full-width.php'); ?>
<?php endif; ?>


<?php get_footer(); ?>