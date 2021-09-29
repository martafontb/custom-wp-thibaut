<div class="header">
<?php 
  get_header();
?>
</div>




<?php

while ( have_posts() ) :
  the_post();

  get_template_part( 'template-parts/content-hero', get_post_type() );

endwhile; // End of the loop.
?>


<div class="footer">
  <?php
  get_footer();
  ?>
</div>