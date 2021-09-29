<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom-wpgulp
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php 
		if(have_posts()) : ?>
		<header class="page__header">
		<h2 class="page__title"><?php single_cat_title(); ?></h2>
		
		
		<?php
		// Display optional category description
		if ( category_description() ) : ?>
		<p><?php echo category_description(); ?></p>
		<?php endif; ?>
		</header>
		<?php 
		//the Loop
			while ( have_posts() ) : the_post();
			//outoput content however we please
			get_template_part( 'template-parts/content', 'archive' );
			endwhile;
			else:
				//fallback no content
			endif;
		?>
		<?php
			the_posts_pagination();
		?>

	</main><!-- #main -->

<?php

get_footer();
