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


<!-- ‘charset‘ – Displays the “Encoding for pages and feeds” set in Settings -->
    <meta charset="<?php bloginfo( "charset" ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(  )?>
</head>
<body <?php body_class(''); ?>>



<?php wp_body_open(); ?>   


<?php get_template_part('template-parts/01-header/header-navigation-hero'); ?>







