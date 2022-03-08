<?php

/**
 *  The template for displaying Archive Exploration
 * 
 * 
 */
get_header();
?>


<div class="explorationsContainer">

    <div class="headerExploration">

        <div class="logoHeader">

            <a href="<?php echo get_option('home'); ?>/"><img class="logoArchiveExplo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_logo_fiches.svg"></a>

            <h1 class="exploPageName">EXPLORATIONS</h1>

        </div>

        <div class="categoryHeader catHeaderOff">
			


			<?php foreach (get_terms('thematique', array('hide_empty' => false, 'parent' => 0)) as $parent_term) { ?>
				<div class="catArchi catWrapper">
					<span class="catName"><?= $parent_term->name ?></span>
					<div class="div-to-toggle">
						<div data-cat="<?= $parent_term->slug ?>" data-id="thematique" class="subCatName">
							<span data-id="tous">Tous</span>
							<?php foreach (get_terms('thematique', array('hide_empty' => false, 'parent' => $parent_term->term_id)) as $child_term) { ?>
								<span data-id="<?= $child_term->slug ?>"><?= $child_term->name ?></span>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>


    </div>



    <?php
    $args = array(
        'post_type' => 'explorations', 'post_status' => 'publish', 'posts_per_page' => 9999
    );

    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
    ?>
            <div class="preExplorationWrapper">
                <div class="explorationWrapper">
                    <div class="taxThumbnailWrapper">
                        <div class="taxExplo">


                            <?php echo wpdocs_custom_taxonomies_terms_links_2(); ?>


                        </div>



                        <a href="<?php the_permalink(); ?>">

                            <div class="imageExplo"><?php the_post_thumbnail(); ?></div>

                        </a>
                    </div>
                    <div class="wrapperExplo">
                        <div class="contentWrapperExploration">
                            <div class="titleExplo"> <?php the_title(); ?></div>
                            <div class="excerptExplo"><?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>"><img class="logo-load" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_load.svg"></a>
                            </div>
                        </div>
                        <div class="boutonWrapperExploration">
                            <button><img class="logo-categorie logo-explo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-partager.svg"> &nbsp; Partager</button>
                            <button><img class="logo-categorie logo-explo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-telecharger.svg"> &nbsp; <?php the_field('document_a_telecharger'); ?></button>
                            <button><img class="logo-categorie logo-explo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-lien.svg"> &nbsp; <?php the_field('lien_externe'); ?></button>
                        </div>
                    </div>


                </div>
            </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();

    ?>

</div>


<?php get_footer(); ?>