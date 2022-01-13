<?php

/**
 *  The template for displaying Front-page
 * 
 * 
 */
get_header();
?>



<div class="front-image">
    <?php
    $image = get_field('front_image');
    if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
</div>

<div class="container-front-page">

    <div class="split-left">

        <div class="list-chapter">
            <span>Lieux</span><br>
            <span>pour Faire</span><br>
            <span>une Architecture</span><br>
            <span>et un Urbanisme</span><br>
            <span>Vivant,</span><br>
            <span>Éthique</span><br>
            <span>et Soutenable</span><br>
        </div>


    </div>


    <div class="split-right">

        <section class="sec-lieux">

            <?php
            $section_lieux = get_field('section_lieux');
            if ($section_lieux) : ?>

                <div class="bloc-link">
                    <div class="tagline">
                        <img src="<?php echo esc_url($section_lieux['image']['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
                        <p><?php echo $section_lieux['tagline']; ?></p>
                    </div>

                    <div class="list-link">
                        <a>Logo</a>
                        <a>Valeurs</a>
                        <a>Expertises</a>
                        <a>Équipe</a>
                    </div>

                </div>

                <div class="bloc-haiku">
                    <?php $haiku = get_group_field('section_lieux', 'haiku') ?>
                    <img src="<?php echo esc_url($haiku['image']['url']); ?>" alt="<?php echo esc_attr($haiku['image']['alt']); ?>" />
                    <p><?php echo $haiku['texte']; ?></p>
                </div>

            <?php endif; ?>

        </section>


        <section class="sec-faire">

            <div class="actu-bloc">

                <?php
                // 1. Arguments => FONCTION À CRÉER POUR RÉCUPÉRER LA MANIÈRE DONT ON EST ARRIVÉ SUR LA PAGE
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'posts_per_page' => 2,


                );

                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                        the_title();
                    endwhile;
                endif;

                // 4. On réinitialise à la requête principale (important)
                wp_reset_postdata();

                ?>




            </div>

            <div class="link-bloc">
                <div class="list-link">
                    <a>logo</a>
                    <a>Rejoindre Lieux F.AU.VES</a>
                </div>
            </div>

            <div class="bloc-haiku">
                <?php
                $section_faire = get_field('section_faire');
                if ($section_faire) : ?>
                    <?php $haiku = get_group_field('section_faire', 'haiku') ?>
                    <img src="<?php echo esc_url($haiku['image']['url']); ?>" alt="<?php echo esc_attr($haiku['image']['alt']); ?>" />
                    <p><?php echo $haiku['texte']; ?></p>
                <?php endif; ?>
            </div>

        </section>

        <section class="sec-archiurba">

            <div class="blocLoop">

                <?php
                // 1. Arguments 
                $args = array(
                    'post_type' => 'projets',
                    'category_projet' => 'architecture',
                    'posts_per_page' => 2,


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

            <div class="link-bloc">
                <div class="list-link">
                    <a>logo</a>
                    <a>PROJETS</a>
                    <a>Architecture</a>
                    <a>Urbanisme</a>
                    <a>Paysage</a>
                </div>
            </div>

            <div class="bloc-haiku">
                <?php $haiku = get_group_field('section_archiurba', 'haiku') ?>
                <img src="<?php echo esc_url($haiku['image']['url']); ?>" alt="<?php echo esc_attr($haiku['image']['alt']); ?>" />
                <?php echo $haiku['texte']; ?>
            </div>


        </section>

        <section class="sec-ves">

            <div class="bloc-image">
                <?php
                $section_ves = get_field('section_ves');
                if ($section_ves) : ?>
                    <img src="<?php echo esc_url($section_ves['image']['url']); ?>" alt="<?php echo esc_attr($section_ves['image']['alt']); ?>" />
            </div>

            <div class="bloc-exploration">
                <?php
                    // 1. Arguments => 
                    $args = array(
                        'post_type' => 'explorations',
                        'category_projet' => 'architecture',
                        'orderby'   => array(
                            'date' => 'DESC',
                        )


                    );

                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
                            the_title();
                            the_post_thumbnail();
                        endwhile;
                    endif;


                    wp_reset_postdata();

                ?>



            </div>

            <div class="bloc-link">
                <div class="list-link">
                    <a>logo</a>
                    <a>EXPLORATIONS</a>
                    <a>Vivant</a>
                    <a>Éthique</a>
                    <a>Soutenable</a>
                </div>
            </div>

            <div class="bloc-haiku">
                <?php $haiku = get_group_field('section_ves', 'haiku') ?>
                <?php echo $haiku['texte']; ?>

            <?php endif; ?>
            </div>


        </section>
        <section class="sec-footer">

            <div class="bloc-image">

                <?php
                $section_footer = get_field('section_footer');
                if ($section_footer) : ?>
                    <img src="<?php echo esc_url($section_footer['image']['url']); ?>" alt="<?php echo esc_attr($section_footer['image']['alt']); ?>" />
                <?php endif; ?>

            </div>

        </section>

    </div>
</div>


<?php get_footer(); ?>