<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lawgist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php lawgist_post_thumbnail(); ?>
	<div class="blog-details-meta-list post-meta top">
	<div class="blog-details-cat-list">
		<h6><?php the_category(); ?></h6>
	</div>
		<div class="comment-meta">
			<?php comments_popup_link('No Comment ', '1 Comment ', '% Comments '); ?>

		</div>
		<div class="post-date">
			<?php lawgist_posted_on() ?>
		</div>
	</div>
	<div class="post-details-heading">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="single-post-content-wrap">
		<div class="entry-content clearfix">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'lawgist'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					esc_html(get_the_title())
				)
			); ?>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'lawgist'),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<footer class="entry-footer"> 

			
				
				
				<?php lawgist_entry_footer(); ?>


		</footer><!-- .entry-footer -->
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->