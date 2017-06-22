
<!-- sidebar -->
<section data-spy="affix" data-offset-top="0" data-offset-bottom="140" class="hidden-xs hidden-sm" id="sidebar">
      <?php
            // define arguments for the items of the navigation
            $args = array( 'theme_location' => 'primary' );

            // get each menu item from the wordpress backend
            wp_nav_menu( $args );
      ?>

      <ul class="sidebar-menu">
            <li class="list-item"><a data-toggle="modal" data-target="#linksModal" href="">Links</a></li>
      </ul>
</section>