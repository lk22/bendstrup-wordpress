<?php wp_footer(); ?>

      <!--
            footer component => components/footer.php
      -->
      <?php require_once('components/footer.php'); ?>

      <!--
            modal components
            links modal => modals/links-modal.php
            contact modal => modals/contact-modal.php
      -->
      <?php require('modals/links-modal.php'); ?>
      <?php require('modals/contact-modal.php'); ?>

      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js'></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

      <?php
            require_once('script.php');
      ?>
</body>
</html>