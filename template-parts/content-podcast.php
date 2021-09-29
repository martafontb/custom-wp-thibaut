
<div class="card card__pod"
    data-aos="fade-in"
    data-aos-duration="800"
    data-aos-easing="ease-in-out"
    onclick="location.href='<?php echo the_field('podcast_link') ?>'">
    <div class="card__image">
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
    </div>

    <div class="card__text">
    <div class="card__link">
        <h3 class="card__title"><?php the_title(); ?></h3>
        <p class="card__date"><?php echo the_field('podcast_duration') ?> , <?php the_date(); ?></p>
    </div>
        <a href="<?php echo the_field('podcast_link') ?>" class="card__cta">Luister op Spotify</a>
    </div>
</div>
