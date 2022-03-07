<?php

/**
 *  The template for displaying Single Projet
 * 
 * 
 */
get_header();
?>

<div class="headerProjetWrapper">


    <div class="imageWrapper">

        <?php
        $image = get_field('image');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="navNextPrev">
       <a href="/projets"><img class="close-icon" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_projet_picto-fermer.svg"></span></a>
    

        <?php
        $prev_post = get_previous_post();
        $id = $prev_post->ID;
        $permalink = get_permalink($id);
        ?>
        <?php
        $next_post = get_next_post();
        $nid = $next_post->ID;
        $permalink = get_permalink($nid);
        ?>
   

        <span class="nav-previous"><?php previous_post_link('%link', __('<img STYLE="height:20px;width:20px" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_slide_picto-prev.svg">')); ?>
            <h2><a href="<?php echo $permalink; ?>"></a></h2>
        </span>


        <span class="nav-next"><?php next_post_link('%link', __('<span class="meta-nav"><img STYLE="height:20px;width:20px" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_slide_picto-next.svg">')); ?>
            <h2><a href="<?php echo $permalink; ?>"></a></h2>

        </span>

    </div>

    <div class="whiteLayout">

        <img src="/wp-content/themes/lieuxfauves/src/assets/img/LF_projet_logo.svg">




        <div class="nomenclature">

            <?php
            $args = array(
                'post_type' => 'explorations', 'post_status' => 'publish', 'posts_per_page' => 9999
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
            ?>
                    <?php echo wpdocs_custom_taxonomies_terms_links(); ?>
            <?php endwhile;
            endif;
            wp_reset_postdata();

            ?>

            <?php
            $nomenclature = get_field('nomenclature');
            if ($nomenclature) : ?>
                <div class="nomenclature-wrapper">
                    <span>Date&nbsp;:&nbsp;<?php echo $nomenclature['date']; ?></span><br>
                    <span>Prix&nbsp;:&nbsp;<?php echo $nomenclature['prix']; ?></span><br>
                    <span>Maitrîse&nbsp;d'ouvrage&nbsp;:&nbsp;<?php echo $nomenclature['maitrise_douvrage']; ?></span>
                </div>
                </p>
        </div>


    <?php endif; ?>
    </div>

</div>


<div class="contentWrapperProjet">


    <div class="titleWrapper">

        <h1 class="singleProjetTitle"><?php the_field('titre'); ?></h1>
        <h2 class="singleProjetSubTitle"><?php the_field('sous-titre'); ?></h2>

    </div>



    <div class="galleryWrapper">


        <?php $images = get_field('galerie_projet');
        if ($images) : ?>
            <?php foreach ($images as $image) : ?>
                <div class="single-slide-image">
                    <img class="logo-categorie" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <span class="zoom-image"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>

    </div>
    <div class="zoom-image-slider">
        <div class="div-zoom">
            <img src="" />
            <span class="close"><i class="fa-solid fa-xmark"></i></span>
        </div>

    </div>
    <div class="projetWrapper">


        <div class="leftColumn">


            <div class="cardLinkJungle">
                <p class="cardLink">Fiche technique</p><button class="logoOuvrir"><img class="logo-categorie" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_plus_ouvrir.svg"></button>
            </div>
            <div class="ficheTechnique">
                <div class="FTright columnFT">
                    <div class="wrapperItems">
                        <h3>Programme</h3>
                        <p>Le gymnase est composé d’une salle multisports, d’une salle d’armes, de locaux annexes et d’une tribune 300 places</p>
                    </div>
                    <div class="wrapperItems">
                        <h3>Maîtrise d’ouvrage</h3>
                        <p>Bordeaux Métropole</p>
                    </div>
                    <div class="wrapperItems">
                        <h3>Maîtrise d’oeuvre</h3>
                        <p>TEKHNE, Architecte Mandataire - NODE, Architecte associé - AMOES, Fluides & QEB - ARBORESCENCE, Structure Bois - DENIZOU, Économie - PEUTZ, Acoustique - OVERDRIVE, VRD & OPC
                    </div>
                </div>
                <div class="FTleft columnFT">
                    <div class="wrapperItems">
                        <h3>Surface</h3>
                        <p>2233 m2 SU</p>
                    </div>
                    <div class="wrapperItems">
                        <h3>Coûts</h3>
                        <p>4800 k€ HT</p>
                    </div>
                    <div class="wrapperItems">
                        <h3>Dates / Livraison</h3>
                        <p>Etudes en cours</p>
                    </div>
                    <div class="wrapperItems">
                        <h3>perf environnementale</h3>
                        <p>EC1</p>
                    </div>
                </div>
            </div>
            <div class="boutonWrapperProjet">
                <p class="cardLink cardLinkLight shareLinks"><img class="logo-categorie" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-partager.svg"> &nbsp; Partager</p>
                <p class="cardLink cardLinkLight shareLinks"><img class="logo-categorie" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-telecharger.svg"> &nbsp; <?php the_field('document_a_telecharger'); ?></p>
                <p class="cardLink cardLinkLight shareLinks"><img class="logo-categorie" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-lien.svg"> &nbsp; <?php the_field('lien_externe'); ?></p>
            </div>





        </div>


        <div class="rightColumn">

            <h2><?php the_field('chapeau'); ?></h2>
            <h3> Description </h3>
            <p><?php the_field('description_projet'); ?></p>

        </div>

    </div>

</div>


<div class="projetsLoop">


    <div class="titleLoop">
        <img class="logo-categorie" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_logo_categories.svg">
        <a>PROJETS</a>
        <a>Architecture</a>
    </div>

    <div class="loopWrapper">

        <?php
        $args = array(
            'post_type' => 'projets',
            'category_projet' => 'architecture',
            'posts_per_page' => 4,


        );

        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="projectCard">
                    <a href="<?php the_permalink(); ?>">
                        <div class="projectThumbnail"><?php the_post_thumbnail(); ?></div>
                        <div class="projectTitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
                    </a>
                </div>

        <? endwhile;
        endif;

        wp_reset_postdata();
        ?>


    </div>
</div>


</div>





<?php get_footer(); ?>