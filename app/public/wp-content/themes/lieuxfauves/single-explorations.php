<?php

/**
 *  The template for displaying Single Exploration
 * 
 * 
 */
get_header();
?>

<div class="headerExplo">

<a href="<?php echo get_option('home'); ?>/" ><img class="logoArchiveExplo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_logo.svg"><a>

</div>

<div class="mainExploration">


    <div class="leftColumnExploration">

        <div class="tagsWrapperExploration">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php echo wpdocs_custom_taxonomies_terms_links(); ?>

            <?php endwhile;
            endif; ?>

        </div>

        <div class="article-thumbnail" ><?php the_post_thumbnail(); ?></div>

        <div class="boutonWrapperExploration">

        <span class="shareLinks"><img class="logo-categorie logo-explo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-partager.svg"> Partager Fb-Ig-Tt</span>
            <span class="shareLinks"><img class="logo-categorie logo-explo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-telecharger.svg"> <?php the_field('document_a_telecharger'); ?></span>
            <span class="shareLinks"><img class="logo-categorie logo-explo" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_picto_fleche-lien.svg"> <?php the_field('lien_externe'); ?></span>

        </div>

    </div>

    <div class="rightColumnExploration">

        <div class="titleWrapperExploration">

            <h1><?php the_field('titre'); ?></h1>

        </div>

        <div class="contentWrapperExploration">

            <div class="chapeauWrapperExploration">
                <o><?php the_field('chapeau'); ?></p>
            </div>

            <div class="subtitleWrapperExploration">
                <h3><?php the_field('sous-titre'); ?></h3>
            </div>

            <div class="texteWrapperExploration">
                <p><?php the_field('contenu'); ?></p>
            </div>

        </div>
    </div>

</div>
	 <div class="galleryWrapper mainExploration">

        <!-- FAIRE UN SLIDER  -->
		<?php $images = get_field('galerie_exploration');
			if( $images ): ?>
        		<?php foreach( $images as $image ): ?>
					<div class="single-slide-image">
                     	<img class="logo-categorie" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<span class="zoom-image"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
					</div>
        		
				<?php endforeach; ?>
			<?php endif; ?>
		
    </div>
	<div class="zoom-image-slider">
		<div class="div-zoom">
			<img src=""/>
			<span class="close"><i class="fa-solid fa-xmark"></i></span>
		</div>
		
	</div>
</div>

<div class="projetsLoop projetsLoopExplo">

    <div class="titleLoop">
        <img class="logo-categorie" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_logo_categories.svg">
        <span>PROJETS</span>
        <a href="projets" class="fauveUnderline">Architecture</a>
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
                    <p class="projectLoopLieu"><?php the_field('lieu', $post->ID); ?></p>
                </a>
                </div>

        <? endwhile;
        endif;

        wp_reset_postdata();
        ?>


    </div>

</div>

<div class="projetsLoop projetsLoopExplo">


    <div class="titleLoop">
        <img class="logo-categorie" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_logo_categories.svg">
        <span>ACTUALITÉS</span>
        <a href="projets" class="fauveUnderline">Vivant</a>
    </div>

    <div class="loopWrapper">

        <?php
        $args = array(
            'post_type' => 'post',
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




</div>



</div>

</div>





<?php get_footer(); ?>