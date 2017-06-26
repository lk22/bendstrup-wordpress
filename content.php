	<!-- content pages section -->
	<section class="container-fluid content-section" id="content">
        <!-- get the sidebar -->
        <?php get_sidebar('sidebar') ?>

        <!-- page content container -->
        <section id="page-content" class="col-xs-12 col-sm-12 col-md-9 col-md-offset-1 col-lg-9 col-lg-offset-2">

            <?php //debug($post); ?>

            <!-- page content sections that depends on the page you visit-->
            <section class="<?php echo page_title(); ?>-section">
                <?php
                    // show content
                   the_content();
                 ?>
            </section>

            <?php

                if(page_title() === 'home')
                {
                    ?>

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

       <?php require('components/mobile-menu.php'); ?>
    </section>