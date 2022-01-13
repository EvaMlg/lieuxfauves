<?php

/**
 *  The template for displaying Archive 
 * 
 * 
 */
get_header();
?>



<?php
$args = array(
    'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 9999
);

$my_query = new WP_Query($args);
if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
        the_title();
        the_post_thumbnail();
    endwhile;
endif;
wp_reset_postdata();

?>


    <?php get_footer(); ?>