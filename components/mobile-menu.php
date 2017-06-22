 <section class="hidden hidden-md hidden-lg mobile-menu-container container-fluid">
    <div class="close-menu-button"><i class="fa fa-times"></i></div>
    <?php
            // define arguments for the items of the navigation
            $args = array( 'theme_location' => 'primary' );

            // get each menu item from the wordpress backend
            wp_nav_menu( $args );
      ?>
    <ul class="mobile-menu-container__menu">
        <li class="list-item"><a href="links.html">Links</a></li>
    </ul>
</section>