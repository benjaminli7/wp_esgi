<?php
/*
 *
 * Template Name: About Us
 *
 * (You can also use other lines before or after the line above,
 *  WordPress only cares about the line that starts with "Template Name".)
 *
 */
?>


<?php get_header(); ?>


<main id="site-content">
	<div class="container title-page">
		<h1><?= the_title(); ?></h1>
	</div>
	<div class="intro">
		<?php the_post_thumbnail(); ?>
		<div class="paragraph container">
			<?php the_content(); ?>
		</div>
	</div>
	<?php if (get_theme_mod('display-image-paragraph') === 'Yes') : ?>
		<?php include(__DIR__.'/../template-parts/image-paragraph.php'); ?>
	<?php endif; ?>

	<?php if (get_theme_mod('display-our-team') === 'Yes') : ?>
		<?php include(__DIR__.'/../template-parts/our-team.php'); ?>
	<?php endif; ?>

</main>


<?php get_footer(); ?>