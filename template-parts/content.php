<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom-wpgulp
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<section class="hero__fw">
		<div class="hero" <?php

			if ( $thumbnail_id = get_post_thumbnail_id() ) {
				if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'full' ) )
					printf( ' style="background-image: url(%s);"', $image_src[0] );     
			}

			?>>
		</div>
</section>   
	
	<section class="post__body">

		<!-- Side navigation -->
		<div class="post__nav">
              <a href="<?php $cat = get_the_category(); $cat = $cat[0]; echo get_category_link($cat->cat_ID);  ?>" class="text-umber-300">Ga terug</a>
        </div>

        <!-- Page content -->
		<div class="post__main">
			<div class="post__header">
				<div class="post__tags">
				<?php
				$before = '';
				$seperator = ''; // blank instead of comma
				$after = '';
					the_tags( $before, $seperator, $after );
					?>
			</div>
				<?php
				if ( is_singular() ) :
					the_title( '<h2 class="post__title">', '</h2>' );
				else :
					the_title( '<h2 class="post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) :
					?>
					<p class="post__date">
						<?php
						custom_wpgulp_posted_on();
						?>
					</p><!-- .entry-meta -->
				<?php endif; ?>
			</div><!-- .entry-header -->
	
			<!-- .entry-content -->
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'custom-wpgulp' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
				?>
		</div>

<?php
$blocks = parse_blocks( $post->post_content );
$headings = array();
foreach( $blocks as $block ) {
	if( 'core/heading' === $block['blockName'] )
		$headings[] = wp_strip_all_tags( $block['innerHTML'] );
}
if( !empty( $headings ) ) {
	?>
		<!-- Side navigation -->
		<div class="post__sidenav">
			<div class="card__wrapper">
			<h5>INHOUD</h5>
			<?php echo '<ul type="1" id="my_toc">' . toc_get_index() . '</ul>';?>
			</div>
		</div>  

<?php
	}
?>


	</section>	



	<?php if (show_posts_nav()) : ?>

	<?php

	$previous = get_previous_post();
	$next = get_next_post();

		?>

	<section class="post__other">
        <h1>Volgende post</h1>
        <div class="card__wrapper">
        <div class="post__header">
	<?php
		if ( get_next_post() ) { ?>

          <div class="post__tags">
		  <?php echo the_tags( $next )?>
          </div>
              <h3 class="post__title"><?php echo get_the_title($next) ?></h3>
              <p class="post__date"><?php echo do_shortcode('[rt_reading_time label="" postfix="min. leestijd" postfix_singular="minute leestijd"]' ) ?>, <?php custom_wpgulp_posted_on($next) ?></p> 
              <p class="post__prev"><?php echo get_the_excerpt($next) ?></p> 
              <a href="<?php the_permalink($next); ?>" class="post__cta">Lees meer</a>
          </div>
	<?php } ?>
        </div>
      </section>
	  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
