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