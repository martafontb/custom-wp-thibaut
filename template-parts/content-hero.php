
    <?php 
        if ( has_blocks( $post->post_content ) ) {
            $blocks = parse_blocks( $post->post_content );
                ?>
                        <div class="home-page-block">
                            <?php 
                            foreach( $blocks as $block ) {
                                echo render_block( $block );
                            }
                            ?>
                        </div>
                <?php 
            
        }
    ?>

