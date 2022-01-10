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

            <div class="actu-bloc"></div>

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

            <div class="bloc-images">
                <?php
                $section_archiurba = get_field('section_archiurba');
                if ($section_archiurba) : ?>
                    <?php $images = get_group_field('section_archiurba', 'images') ?>
                    <img src="<?php echo esc_url($images['image_droite']['url']); ?>" alt="<?php echo esc_attr($images['image']['alt']); ?>" />
                    <img src="<?php echo esc_url($images['image_gauche']['url']); ?>" alt="<?php echo esc_attr($images['image']['alt']); ?>" />
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
            <?php endif; ?>
            </div>


        </section>

        <section class="sec-ves">

            <div class="bloc-image">
                <?php
                $section_ves = get_field('section_ves');
                if ($section_ves) : ?>
                    <img src="<?php echo esc_url($section_ves['image']['url']); ?>" alt="<?php echo esc_attr($section_ves['image']['alt']); ?>" />
            </div>

            <div class="bloc-exploration"></div>

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