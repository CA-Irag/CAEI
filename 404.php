<?php get_header(); ?>

    <section id="caei-template-404" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
                <h2 class="title">Page not found</h2>
                <p class="message">Sorry, the page you're looking for doesn't exist or has been removed.</p>
                <button class="action" onclick="window.history.back()">Return to previous page</button>
                <?php get_search_form(); ?>
            </div>
		</main>
	</section>

<?php get_footer(); ?>