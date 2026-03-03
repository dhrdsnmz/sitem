<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lawgist
 */

global $lawgistObj;
$lawgist        = get_option('lawgist');
$show_excerpt = isset($lawgist['show_excerpt']) ? $lawgist['show_excerpt'] : true;
$grid         = (isset($lawgist['blog_grid'])) ? $lawgist['blog_grid'] : 'one-column';
switch ($grid) {

	case 'one-column':
		$limit = 40;
		$title = get_the_title();
		break;

	case 'two-column':
		$limit = 17;
		$title = wp_trim_words(get_the_title(), 11, '...');
		break;

	default:
		$limit = 17;
		$title = wp_trim_words(get_the_title(), 11, '...');
		break;
}

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-item <?php echo esc_attr($grid)  ?>">
		<div class="post-thumbnail-wrapper">
			<?php
			if (is_sticky()) {
				echo '<span class="sticky-text" >' . esc_html__('Sticky', 'lawgist') . '</span>';
			}
			?>
			<?php lawgist_post_thumbnail(); ?>

		</div>
		<div class="post-content">
			<div class="post-meta top">
				<div class="blog-categroy">
					<?php  $category = get_the_category(); if (!empty($category)):  ?>
						<?php
							echo '<span><a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a></span>';
						?>
					<?php endif; ?>
				</div>
				<div class="comment-meta">
					<?php comments_popup_link('No Comment ', '1 Comment ', '% Comments '); ?>
				</div>
				<div class="post-date">
					<?php lawgist_posted_on() ?>
				</div>
			</div>

			<?php
			echo '<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">';
			echo esc_html($title);
			echo '</a></h2>';
			?>

			<?php if ($show_excerpt) {
				echo '<p>' . esc_html($lawgistObj->postExcerpt($limit, get_the_excerpt())) . '</p>';
			} ?>

			<div class="post-single-item-bottom-area">
				<div class="post-read-more">
					<a href="<?php echo esc_url(get_permalink()); ?>">
						<?php echo (isset($lawgist['continue_reading_title'])) ? $lawgist['continue_reading_title'] : esc_html__('Read More', 'lawgist') ?>

					</a>
				</div>
			</div>


		</div>
	</div>

</div><!-- #post-<?php the_ID(); ?> -->