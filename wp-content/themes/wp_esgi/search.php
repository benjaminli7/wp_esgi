<?php get_header() ?>
<main id="site-content" class="px-5 px-sm-0">
	<div class="container search-container">

		<h1 class="search-title">Search results for: <span class="search-query"><?= get_search_query(); ?></span></h1>

		<?php
		$s = get_search_query();
		$args = array(
			's' => $s
		);

		$the_query = new WP_Query($args);
		if ($the_query->have_posts()) {
		?>
			<div class="search-results d-flex flex-column flex-md-row flex-wrap">
		<?php
			while ($the_query->have_posts()) {
				$the_query->the_post();
				?>
				<li class="col-12 col-md-4 post-item">
					<a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<div class="d-flex my-2 post-date-category">
						<span class="post-category"><?= the_category(); ?></span>, 
						<span><?= get_the_date(); ?></span>
					</div>
					<div class="post-excerpt"><?= the_excerpt(); ?></div>
				</li>
			<?php
			}
		?>
			</div>
		<?php
		} else {
			?>
			<h2 style='font-weight:bold;color:#000'>Aucun résultat</h2>
			<div class="alert alert-info">
				<p>Désolé, mais rien ne correspond à vos critères de recherche. Veuillez réessayer avec d'autres mots-clés.</p>
			</div>
		<?php } ?>

	</div>
</main>
<?php get_footer() ?>