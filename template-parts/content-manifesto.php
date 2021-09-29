<section class="about text-rose-100">
          <div class="about__wrapper">
          <div class="about__img"
              data-aos="fade-in"
              data-aos-duration="800"
              data-aos-easing="ease-in-out">
            <img src="<?php the_field('profile_image') ?>"/>
          </div>
          <div class="about__text">
            <h3>Over mij</h3>
            <p class="about__text__first__paragraph">
            <?php
            the_field('over_mij');
            ?>
            </p>
            <div class="about__open">
            <p>
            <?php
            the_field('over_mij_long');
            ?>
            </p>
            </div>
            <a class="expander">Toon meer</a>
          </div>
        </div>
</section>