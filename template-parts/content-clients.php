<div class="client__card"
    data-aos="fade-in"
    data-aos-duration="800"
    data-aos-easing="ease-in-out"
onclick="location.href='<?php the_permalink(); ?>'">
    <div class="client__image">
        <img src="<?php the_field('client_image') ?>" 
             alt=""
             width="100%" 
             loading="lazy">
    </div>
    <div class="client__words">
        <img src="<?php the_field('client_logo') ?>" 
             alt="logo"
             width="450px"
             loading="lazy">
    <div> 
    <h4><?php the_title(); ?></h4>
    <p> <?php the_excerpt(); ?></p>
    </div>
    <a class="client__cta" href="<?php the_permalink(); ?>">Bekijk de case study</a>
    </div>
</div>