<!-- banner section-->
<section class="container-fluid banner-container" id="section-container">
    <?php
        // setup overlay component after settings
        // if the admin bar is showing then check if the page is using any custom templates
    ?>
        <div class="overlay" style="<?php
            if(is_admin_bar_showing()) { if(is_page_template()){ ?>min-height:232px; <?php } } ?>
        min-height:232px;"></div>

        <?php // the top overlay over the overlay component ?>
        <div class="overlay-top">

            <?php // the menu container ?>
            <div class="hidden-md hidden-lg row banner-container__row">
                <div class="menu-icon">Menu</div>
            </div>

            <?php // the name of the site ?>
            <article class="row banner-container__row">
                <h3 class="text-center banner-conainer__heading"><?php bloginfo('name'); ?></h3>
            </article>

            <?php // the andelsforening name ?>
            <article class="row banner-container__row">
                <h2 class="text-center banner-container__heading andelsforeningen">Andelsforeningen a.m.b.a</h2>
            </article>

            <?php // the address following with the map over the camping place ?>
            <article class="row banner-container__row">
                <h4 class="text-center banner-container__heading">Damvejen 24 - 3400 Hillerød - <span class="see-map"><a target="_blank" href="https://www.google.dk/maps/place/Damvejen+24,+3400+Hiller%C3%B8d/@55.966663,12.2509312,17z/data=!3m1!4b1!4m5!3m4!1s0x46523f9324aacc41:0xa2a8ddb150d6aff4!8m2!3d55.96666!4d12.2531199?hl=da">Se kort</a></span></h4>
            </article>
        </div>


</section>

 <?php if(is_page_template('templates/single-column.php')) { ?>

        <nav class="container-fluid banner-container__menu" id="banner-nav">
            <?php
                // define arguments for the items of the navigation
                $args = array( 'theme_location' => 'primary' );

                // get each menu item from the wordpress backend
                wp_nav_menu( $args );
            ?>
        </nav>

<?php } ?>