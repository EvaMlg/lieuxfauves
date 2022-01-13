<header class="header-navigation-hero">


    <div class="sidebar-menu">

    <div id="headerWrapper" class="headerWrapper">
	  		  
                <a href="#" id="menuButton" class="menuButton">
                    <span>Menu</span>
                    <div id="x" class="x" style="transform: translate(0px, 0px);"></div>
                    <div id="y" class="y" style="transform: translate(0px, 0px);"></div>
                    <div id="z" class="z" style="transform: translate(0px, 0px);"></div>

                </a>
                
                <a href="" id="searchButton" class="searchButton" style="opacity: 1; visibility: inherit;">Search</a>
        
              </div>


      <div id="sideNavWrapper" class="sideNavWrapper">

            <?php
            wp_nav_menu(array(
                'menu_class'=> 'sideNav',
                'theme_location' => 'main-nav',
                'container'      => 'false',

            ));
            ?>

    

        </div>
    </div>
</navigation>

<main class="main">