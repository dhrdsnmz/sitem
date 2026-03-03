<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lawgist
 */

use LawgistTheme\Inc\Classes\Lawgist_Main;

get_header();

$lawgistObj = new Lawgist_Main();
echo esc_html($lawgistObj->lawgist_breadcrumb_bridge());

$lawgist = get_option('lawgist');

$grid = (isset($lawgist['blog_grid'])) ? $lawgist['blog_grid'] : 'two-column';

?>

<div class="content-block">
	<div class="container">
		<div class="row blog-content-row">

			<?php
			// If Redux Framework Active
			if (class_exists('ReduxFrameworkPlugin')) :
				$lawgistObj->postMarkupGenerator($lawgist['blog_layout'], $grid);

			else : // If Redux Framework Is Not Active

				$lawgistObj->postMarkupGenerator(null, $grid);

			endif;

			?>

		</div>
	</div>
</div>

<?php
get_footer();
