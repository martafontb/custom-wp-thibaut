<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom-wpgulp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'header' );
			get_template_part( 'template-parts/content', 'page' );

			if (is_page( 'manifesto' ) ):
				get_template_part( 'template-parts/content', 'manifesto' );
			endif;
		
		endwhile; // End of the loop.
		?>
		<?php
			the_posts_pagination();
		?>

	</main><!-- #main -->

<?php
get_footer();
