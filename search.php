<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package lawgist
 */
use LawgistTheme\Inc\Classes\Lawgist_Main;

get_header();

$lawgistObj = new Lawgist_Main();

echo esc_html($lawgistObj->lawgist_breadcrumb_bridge());

$lawgist = get_option('lawgist');
$grid = (isset($lawgist['blog_grid'])) ? $lawgist['blog_grid'] : 'one-column';

?>

<div class="content-block sp-80">
	<div class="container">
		<div class="row blog-content-row justify-content-center">

			<?php
			// If Redux Framework Active
			if (have_posts()) :

				if (class_exists('ReduxFrameworkPlugin')) :
					// var_dump($lawgist['blog_layout']);
					$lawgistObj->postMarkupGenerator($lawgist['blog_layout'], $grid);

				else : // If Redux Framework Is Not Active

					$lawgistObj->postMarkupGenerator(null, $grid);

				endif;
			else :

				get_template_part('template-parts/contents/content-none');
			endif;
			?>
		</div>
	</div>
</div>


<?php
get_footer();
