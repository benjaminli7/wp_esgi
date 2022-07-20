<?php
/*
 *
 * Template Name: Partners
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

    <h1>Partners Template</h1>


</main>


<?php get_footer(); ?>