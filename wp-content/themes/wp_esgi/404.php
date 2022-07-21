<?php get_header() ?>
	<main id="site-content" class="page-404 px-5 px-sm-0">
		<div class="container page-404-container d-flex flex-column gap-5">
			<h1>404 Error.</h1>
			<div>
				<p>The page you were looking for couldn't be found.</p>
				<p>Maybe try a search?</p>
			</div>
			<div class="search_form">
				<?php get_search_form(); ?>
			</div>
		</div>
	</main>
<?php get_footer() ?>