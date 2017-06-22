<?php wp_footer(); ?>

      <!--
            footer component => components/footer.php
      -->
      <?php get_bendstrup_partial(null, 'components', 'footer'); ?>

      <!--
            modal components
            links modal => modals/links-modal.php
            contact modal => modals/contact-modal.php
      -->
      <?php get_bendstrup_partial(null, 'modals', 'links-modal'); ?>
      <?php get_bendstrup_partial(null, 'modals', 'contact-modal'); ?>

      <?php
            bc_load_scripts([
                  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
                  'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js',
                  'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
            ]);

            require_once('script.php');
      ?>

</body>
</html>