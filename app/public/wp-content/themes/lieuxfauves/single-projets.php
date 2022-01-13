<?php

/**
 *  The template for displaying Single Projet
 * 
 * 
 */
get_header();
?>

<div class="imageWrapper">

    <?php
    $image = get_field('image');
    if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

    <div class="whiteLayout">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_taxonomies(); ?>

    </div>


<?php endwhile;
        endif; ?>



<?php
$nomenclature = get_field('nomenclature');
if ($nomenclature) : ?>
    <?php echo $nomenclature['date']; ?>
    <?php echo $nomenclature['prix']; ?>
    <?php echo $nomenclature['maitrise_douvrage']; ?>


<?php endif; ?>

</div>

</div>

<div class="titleWrapper">

    <h1><?php the_field('titre'); ?></h1>
    <h2><?php the_field('sous-titre'); ?></h2>

</div>

<div class="contentWrapper">


    <div class="leftColumn">

        <p class="cardLink">Fiche technique</p>
        <p class="cardLink">Partager</p>
        <p class="cardLink"><?php the_field('document_a_telecharger'); ?></p>
        <p class="cardLink"><?php the_field('lien_externe'); ?></p>

    </div>


    <div class="rightColumn">

        <h2><?php the_field('chapeau'); ?></h2>
        <p><?php the_field('description_projet'); ?></p>

    </div>

</div>

<div class="loopWrapper">

    <?php
    // 1. Arguments => FONCTION À CRÉER POUR RÉCUPÉRER LA MANIÈRE DONT ON EST ARRIVÉ SUR LA PAGE
    $args = array(
        'post_type' => 'projets',
        'category_projet' => 'architecture',
        'posts_per_page' => 4,


    );

    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
            the_title();
            the_post_thumbnail();
        endwhile;
    endif;

    // 4. On réinitialise à la requête principale (important)
    wp_reset_postdata();

    ?>


</div>








<?php get_footer(); ?>