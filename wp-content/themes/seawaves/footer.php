<footer>
    <div class="contact-us position-relative" id="to_footer">
        <div class="position-absolute top left bottom right common-bg z-index-1"></div>
        <div class="dark-overlay position-absolute top left bottom right z-index-2"></div>
        <div class="container">
            <div class="row py-md-5">
                <div class="col-12">
                    <div class="d-flex justify-content-around flex-column align-items-center p-4">
                        <p class="theme color-black-2 mb-0 font-26px text-center text-md-start">For Inquiries/Partnership 
                            <?php
                                if (has_nav_menu('footer_primary')) {
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer_primary',
                                        'container' => false,
                                        'menu_class' => 'menu-section mb-0 ps-0 font-14px ps-sm-2 pt-3',
                                        )
                                    );
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-wrapper position-relative">
        <div class="common-bg position-absolute w-100 h-100"></div>
        <div class="container py-3 py-sm-5">
            <div class="row justify-content-sm-between after-border position-relative">
                <div class="col-12 col-sm-3">
                    <div class="site-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/site-logo.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-4 d-flex align-items-center justify-content-start justify-content-sm-end pt-3">
                    <div class="follow-us d-flex ps-2">
                        <div class="title pe-2 pe-sm-3">
                            <p class="mb-0">Follow us on :</p>
                        </div>
                        <?php 
                            if( have_rows('social_media_repeater',227) ):
                            while( have_rows('social_media_repeater',227) ): the_row();
                        ?>
                        <a class="d-flex align-items-center ps-2" target="_blank" href="<?php the_sub_field('social_url',227); ?>">
                            <div class="logo">
                                <img src="<?php the_sub_field('social_image',227); ?>" alt="">
                            </div>
                        </a>
                        <?php
                            endwhile;
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="row pt-3 after-border position-relative">
                <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                    <div class="contact ps-2 ps-sm-0 d-flex pt-3">
                        <p class="theme color-gray pe-2">email us:</p>
                        <a href = "mailto: info@seawavescup.com">info@seawavescup.com</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                    <p class="explore mb-0 pt-3 ms-2 ms-sm-0">Explore</p>
                    <?php
                        if (has_nav_menu('primary_header')) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary_header',
                                'container' => false,
                                'menu_class' => 'menu-section flex-column navbar-nav ml-auto h-100 theme bg-transparent font-octopus-700 pt-3 ms-2 ms-sm-0',
                                )
                            );
                        }
                    ?>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 col-md-6 d-flex align-items-center">
                    <p class="mb-0 font-12px font-14px ps-2">Sea Waves Cup 2022 All Rights Reserved.</p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-start justify-content-sm-end">
                    <?php
                        if (has_nav_menu('privacy_primary')) {
                            wp_nav_menu(array(
                                'theme_location' => 'privacy_primary',
                                'container' => false,
                                'menu_class' => 'ps-2',
                                )
                            );
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
  </body>
</html>