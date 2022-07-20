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
	<?php if(get_theme_mod('image-paragraph') === 'Yes') : ?>
		<h1>lo</h1>
		
	<?php endif; ?>

</main>


<?php get_footer(); ?>