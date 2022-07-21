<?php
/*
 *
 * Template Name: Blog
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

	<div class="container d-flex flex-column gap-5 flex-md-row">
		<div class="sidebar col-12 col-md-4">
			<?php get_sidebar(); ?>
		</div>
		<div class="posts-container d-flex flex-column flex-md-row flex-wrap">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = [
				'post_type' => 'post',
				'posts_per_page' => 6,
				'post_status' => 'publish',
				'paged' => $paged
			];
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) :
					$the_query->the_post();
			?>
					<li class="col-12 col-md-6 post-item">
						<div class="post-image">

							<?php the_post_thumbnail(); ?>
							<span class="post-category"><?= the_category(); ?></span>
						</div>
						<a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<div class="d-flex my-2 post-date-category">
							<!-- <span><?= get_the_date(); ?></span> -->
						</div>
						<div class="post-excerpt"><?= the_excerpt(); ?></div>
					</li>
				<?php
				endwhile;
				?>
				<div class="pagination">
					<?php
					echo paginate_links(array(
						'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
						'total'        => $the_query->max_num_pages,
						'current'      => max(1, get_query_var('paged')),
						'format'       => '?paged=%#%',
						'show_all'     => false,
						'type'         => 'plain',
						'end_size'     => 2,
						'mid_size'     => 1,
						'prev_next'    => false,
						'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
						'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
						'add_args'     => false,
						'add_fragment' => '',
					));
					?>
				</div>
			<?php
				wp_reset_postdata();
			endif;
			?>

		</div>
	</div>

</main>


<?php get_footer(); ?>