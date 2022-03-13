<?php
/**
 * The header for our theme
 *
 * 
 */
?>

<!DOCTYPE html>
<!--  language_attributes() : Builds up a set of HTML attributes containing the text direction and language information for the page. -->
<html lang="<?php language_attributes() ?>">
<head>

<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <link rel="stylesheet" href="bower_components/aos/dist/aos.css" />

</head>



    <meta charset="<?php bloginfo( "charset" ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(  )?>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body <?php body_class(''); if ( is_page(89) ) { ?> style="overflow:hidden;" <?php } ?> >



<?php wp_body_open(); ?>   

<?php if ( is_page(89) ) { ?>



<div id="loader">
    <img class ="introImg" src="/wp-content/themes/lieuxfauves/src/assets/img/LF_INTRO_image02.jpg" alt="Loader Lieux Fauves" style="
    /* width: 100%;
    position: absolute;
    height: 99.5vh;
    z-index: 2000;
    object-fit: cover;}">
    <img src="/wp-content/themes/lieuxfauves/src/assets/img/.jpg" alt="" class="svg" style="position: absolute;
    z-index: 2000;
    width: 40%;
    top: 28%;
    left: 30%;">
    <div class="progressionBar"><div class="progressionBarInner"> </div></div>


</div>





<? } ?>

<?php get_template_part('template-parts/01-header/header-navigation-hero'); ?>






