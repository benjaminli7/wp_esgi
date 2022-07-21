<?php get_header(); ?>


<main id="site-content" class="px-5 px-sm-0">
	<div class="container title-page">
		<div class="col-12 col-sm-8">
			<h1><?= the_title(); ?></h1>
		</div>
	</div>
	<div class="container d-flex flex-column flex-md-row">
		<div class="sidebar col-12 col-md-4">
			<?php get_sidebar(); ?>
		</div>
		<div class="post">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?= the_post_thumbnail(); ?>
					<?php the_title(); ?>
					<?php the_content(); ?>
					<?php echo get_the_date(); ?>

				<?php endwhile; ?>
			<?php endif; ?>
			<div class="comments">
				<?php
				$comments_arr = get_comments('post_id=' . get_the_ID());
				$comments = null;
				?>
				<h2>Comments (<?= count($comments_arr) ?>)</h2>
				<?php foreach ($comments_arr as $comment) : ?>
					<div class="comment">
						<h3><?= $comment->comment_author; ?></h3>
						<p><?= $comment->comment_content ?></p>
						<?= get_comment_reply_link([
							'depth' => 1,
							'max_depth' => 2,
							'add_below' => 'comment',
							'reply_text' => 'Reply',
							'before' => '<div class="reply">',
							'after' => '</div>'
						]); ?>
					</div>
				<?php endforeach; ?>

				<?php comment_form(); ?>
			</div>
		</div>

	</div>
</main>


<?php get_footer(); ?>