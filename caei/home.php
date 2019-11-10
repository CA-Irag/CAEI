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
                            <?php
                                $cat = wp_list_categories(
                                    array(
                                        'use_desc_for_title' => 0,
                                        'style' => '',
                                        'separator' => ', ',
                                        'exclude' => 1,
                                        'echo' => 0
                                    )
                                );
                                echo substr($cat, 0, -3);
                            ?>
                        </div>
                        <?php if ( get_the_tags() ) { ?>
                            <div class="tags">
                                Tags: 
                                <?php the_tags('', ', ', null); ?>
                            </div>
                        <?php } ?>
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
    <section class="ad-section">
        <div class="container">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Homepage Blog Lower Banner -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-7125640118978583"
                data-ad-slot="6381643546"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </section>

<?php get_footer();
