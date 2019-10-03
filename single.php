<?php get_header(); ?>

	<section id="caei-template-single" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content' );
                    }
                } else {    
                    echo 'No posts available.';
                }
                ?>
            </div>
		</main>
	</section>

<?php get_footer();
