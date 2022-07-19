<?php get_header(); ?>


<main id="site-content">
	<div class="container">
		<h1><?= the_title(); ?></h1>
		<?php
			if(have_posts()){
				while(have_posts()){
					the_post();
					the_content();
				}
			}
		?>
	</div>
</main>


<?php get_footer(); ?>