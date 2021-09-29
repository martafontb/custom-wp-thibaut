<section 
    class="post__hero"
    data-aos="fade-in"
    data-aos-duration="800"
    data-aos-easing="ease-in-out">
      <div class="card"
      onclick="location.href='<?php the_permalink(); ?>'">
        <div class="card__text">
        <div class="card__tags">
        <?php
				$before = '';
				$seperator = ''; // blank instead of comma
				$after = '';
					the_tags( $before, $seperator, $after );
					?>
        </div>  
        <h3 class="card__title"><?php the_title(); ?></h3>
        <p class="card__date"><?php echo do_shortcode('[rt_reading_time label="" postfix="min read" postfix_singular="minute read"]' ) ?> , <?php the_date(); ?></p>
        <p class="card__copy"><?php
            the_excerpt();
            ?></p>
          <a href="<?php the_permalink(); ?>" class="card__cta text-umber-300">Lees meer</a>
        </div>
        <div class="card__image">
            <img src="<?php the_post_thumbnail_url('small-thumbnail'); ?>" alt="">   
        </div>
      </div>
</section>



