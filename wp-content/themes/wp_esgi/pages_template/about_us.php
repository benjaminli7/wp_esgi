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

<main id="site-content" class="px-5 px-sm-0">
	<div class="container title-page">
		<div class="col-12 col-sm-8">
			<h1><?= the_title(); ?></h1>
		</div>
	</div>
	<div class="intro">
		<div class="row justify-content-md-end justify-content-center">
			<div class="col-12 col-sm-8">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-sm-8 col-md-4 paragraph">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php if (get_theme_mod('display-image-paragraph') === 'Yes') : ?>
		<?php include(__DIR__ . '/../template-parts/image-paragraph.php'); ?>
	<?php endif; ?>

	<?php if (get_theme_mod('display-our-team') === 'Yes') : ?>
		<?php include(__DIR__ . '/../template-parts/our-team.php'); ?>
	<?php endif; ?>

</main>


<?php get_footer(); ?>