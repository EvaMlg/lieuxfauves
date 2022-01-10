<header class="header-navigation-hero">


</header>

<navigation>

<div class="bloc-menu">
<div class="list-menu">
<?php
wp_nav_menu( array( 
    'theme_location' => 'main-nav', 
    'container'      => 'false',
    'items_wrap' => '%3$s', ) ); 
?>

</div>
</div>
</navigation>

<main class="main">