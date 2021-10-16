<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-wpgulp
 */

?>
<footer id="footer">
        <!-- <div class="footer_wrapper"> -->
            <div class="contact">
            <div class="socials">
              <a href="https://www.linkedin.com/in/thibaut-verrue-a64256144/"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-spotify"></i></a>
            </div>
            <div class="email">
                <a href="mailto:thibautverrue@gmail.com">thibautverrue@gmail.com</a>
            </div>
          </div>
            <div class="back-to-top">
              <a data-scroll href="#">Terug naar boven</a>
            </div>
    
            <div class="copyright">
              <p class="text-green-200"> 
                <span class="text-rose-100">© Thibaut Verrue, 2021</span> 
                - <a href="<?php echo esc_url( __( 'https://thibautverrue.com/terms-and-conditions/', 'Nele Kempenaers' ) ); ?>">Privacy policy</a>
                - Web design: 
                <a href="<?php echo esc_url( __( 'https://nelekempenaers.com/work/', 'Nele Kempenaers' ) ); ?>">Nele Kempenaers</a> 
                - Web development: 
                <a href="<?php echo esc_url( __( 'http://anappleaday.me/index.html/', 'Marta Font' ) ); ?>">Marta Font</a>
              </p> 
            </div>
        <!-- </div> -->
      </footer> 
<!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
