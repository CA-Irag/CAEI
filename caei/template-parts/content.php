<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if ( !is_singular() && has_post_thumbnail() ) : ?>
	<div class="entry-thumbnail">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php the_post_thumbnail(); ?>
		</a>		
	</div>
	<?php endif; ?>
	<div class="entry-body">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				if ( has_post_thumbnail() ) {
			?>
				<div class="entry-thumbnail-feature"><?php the_post_thumbnail(); ?></div>
			<?php
				}
				the_title( '<span class="entry-title">', '</span>' );
			?>
			<div class="singular-subtitle">
				<span class="author">By <?php the_author(); ?></span> &mdash; <span class="published"><?php the_modified_date(); ?> <?php the_modified_time(); ?></span>
				<?php if ( has_category() ) : ?>
					<div class="category-badges"><?php the_category(' '); ?></div>
				<?php endif; ?>
			</div>
			<?php
			else :
				the_title( sprintf( '<span class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' );
			endif;
			?>
		</header>
		<div class="entry-content">
			<?php
			if ( is_singular() ) {
				the_content();
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . 'Pages: ',
						'after'  => '</div>',
					)
				);
			} else {
				$excerpt = get_the_excerpt();
				$excerpt = preg_replace(" ([.*?])",'',$excerpt);
				$excerpt = strip_shortcodes($excerpt);
				$excerpt = strip_tags($excerpt);
				if (strlen($excerpt) > 230) {
					$excerpt = substr($excerpt, 0, 230);		
					$excerpt = $excerpt.'<a href="'.get_the_permalink().'">... more</a>';
					echo $excerpt;
				} else {
					the_excerpt();
				}
			}
			?>
		</div>
		<?php if ( !is_singular() ) : ?>
		<footer class="entry-footer">
			<?php if ( has_category() ) : ?>
				<span class="category-badges"><?php the_category(' '); ?>&nbsp;</span>
			<?php endif; ?>
			<span class="author">By <?php the_author(); ?></span> &mdash; <span class="published"><?php the_modified_date(); ?> <?php the_modified_time(); ?></span>
		</footer>
		<?php endif; ?>
	</div>
</article>
