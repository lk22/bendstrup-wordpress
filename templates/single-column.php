<?php

/**
 * Template Name: Enkelt kolonne
 */

// get the header
get_header();

      /**
       * if we have any posts
       */
      if(have_posts()) {

            /**
             * loop through the posts
             */
            while (have_posts()) {

                  // grab the post/page
                  the_post();

                  ?>
                	<!-- content pages section -->
                    <section class="container-fluid content-section" id="content">
                        <!-- page content container -->
                        <section id="page-content" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- page content sections that depends on the page you visit-->
                            <section class="<?php echo page_title(); ?>-section">
                                <?php
                                    // show content
                                    the_content();
                                ?>
                            </section>

                            <?php

                                // if the page is the home page
                                if(page_title() === 'home')
                                {
                                    ?>
                                        <!-- show the contact info section only on the home page-->
                                        <section class="contact-info-section">
                                            <div class="row">
                                                <h4>Har du spørgsmål omkring Bendstrup Camping el. Andet</h4>
                                                <hr>
                                            </div>

                                            <div class="row">
                                                <p>kan du kontakte os på Tlf: 22 50 50 19</p>
                                                <p>eller på <a href="mailto:bendstrupcamping@gmail.com">bendstrupcamping@gmail.com</a></p>
                                            </div>

                                            <div class="row">
                                                <h4>se <a href="" data-toggle="modal" data-target="#contactModal">kontakt personer</a> her</h4>
                                            </div>
                                        </section>
                                    <?php
                                }
                            ?>
                        </section>

                        <?php get_bendstrup_partial(null, 'components', 'mobile-menu'); ?>
                    </section>

                  <?php
            }
      }

// get the footer
get_footer();