<?php get_header(); ?>

	<section id="caei-template-search" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <?php
                if ( have_posts() ) {
                    ?>
                    <div class="search-query">
                        All results for &mdash; <span><?php the_search_query(); ?></span>
                    </div>
                    <?php
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content' );
                    }
                } else {    
                    ?>
                    <div class="search-query">
                        Sorry, no results found.
                    </div>
                    <?php
                }
                ?>
            </div>
		</main>
	</section>

<?php get_footer();
