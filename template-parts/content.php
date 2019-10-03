<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
	</header>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . 'Pages: ',
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="entry-footer">
		<span class="author"><?php the_author(); ?></span> <span class="published"><?php the_date(); ?> <?php the_time(); ?></span>
	</footer>
</article>
