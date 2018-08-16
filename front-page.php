<?php

    get_header(); ?>

	<!-- site-content -->
	<div class="site-content clearfix">
    	<?php
        if ( have_posts() ) :
    		while ( have_posts() ) :
                the_post();
                the_content();
    		endwhile;

    		else :
    			echo '<p>No content found</p>';
    	endif;

        ?>

        <div class="home-columns clearfix">
            <div class="one-half">
                <?php // posts sobre cosas
                $cosasPosts = new WP_Query( 'cat=7&post_per_page=2' );

                if ( $cosasPosts->have_posts() ) :
            		while ( $cosasPosts->have_posts() ) :
                        $cosasPosts->the_post();
                ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>

                <?php
            		endwhile;

            		else :
            			echo '<p>No content found</p>';
            	endif;

                wp_reset_postdata(); // para no perturbar los url-based queries de wordpress
                ?>
            </div>
            <div class="one-half last">
                <?php // segundo set de posts
                $variosPosts = new WP_Query( 'cat=8&post_per_page=2' );

                if ( $variosPosts->have_posts() ) :
            		while ( $variosPosts->have_posts() ) :
                        $variosPosts->the_post();
                ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>

                <?php
            		endwhile;

            		else :
            			echo '<p>No content found</p>';
            	endif;

                wp_reset_postdata();

            	?>
            </div>
        </div>


	</div><!-- /site-content -->

	<?php get_footer();

?>
