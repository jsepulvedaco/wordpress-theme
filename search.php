<?php

get_header();
if ( have_posts() ) :
?>

    <h2>Resultados para: <?php the_search_query(); ?></h2>

<?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'content', get_post_format() ); // no muestra las imágenes en la búsqueda

    endwhile;

    else :
        echo '<p>No content found</p>';
endif;

get_footer();
?>
