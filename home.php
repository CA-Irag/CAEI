<?php get_header(); ?>

	<section id="caei-template-home" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <?php
                if ( have_posts() ) {
                    ?>
                    <div class="archive-navigation">
                        <div class="categories">
                            Categories: 
                            <?php wp_list_categories(
                                array(
                                    'use_desc_for_title' => 0,
                                    'style' => '',
                                    'separator' => ' '
                                )
                            ); ?>
                        </div>
                        <div class="tags">
                            Tags: 
                            <?php the_tags('', ' ', null); ?>
                        </div>                      
                    </div>
                    <?php
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
