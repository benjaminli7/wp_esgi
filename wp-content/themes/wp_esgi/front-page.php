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
		<?php include('template-parts/image-paragraph.php'); ?>
	<?php endif; ?>

	<?php if (get_theme_mod('display-our-services') === 'Yes') : ?>
		<?php include('template-parts/our-services.php'); ?>
	<?php endif; ?>

	<?php if (get_theme_mod('display-our-partners') === 'Yes') : ?>
		<?php include('template-parts/our-partners.php'); ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>