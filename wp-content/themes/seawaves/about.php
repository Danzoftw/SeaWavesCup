<?php
/*
 * Template Name: About Template
*/
get_header();
?>
<div class="about-outer">
    <section class="about position-relative">
    <div class="footer-bg position-absolute w-100 h-100"></div>
        <div class="container">
            <div class="image position-relative">
                <img class="img-fluid w-100" src="<?php the_field('about_us_image'); ?>" alt="about-us-image">
                <div class="overlay dark-overlay position-absolute left right top bottom"></div>
            </div>
            <div class="about-swc p-2 p-sm-4">
                <article class="py-4 d-flex justify-content-between">
                    <div class="ts">
                        <h4 class="octopus-wide text-uppercase theme color-white">sea waves cup</h4>
                        <p class="font-14px mb-0 theme color-white">A competitive platform for South East Asia's top teams</p>
                    </div>
                    <div class="swc-social-media d-flex align-items-center">
                        <p class="py-3 px-4 font-12px text-uppercase mb-0 theme color-black">instagram</p>
                    </div>
                </article>
            </div>
            <div class="about-swc-info p-2 p-md-4">
                <div class="row">
                    <div class="col-5">
                        <div class="info">
                            <p class="position-relative font-14px theme color-white">Sea Waves Cup focuses on bringing the best teams around South East Asia together and showcase their skills as individuals and as a team and also give viewers of South East Asia an experience of best Dota 2 gameplays.</p>
                        </div>
                    </div>
                    <div class="col-7 d-flex align-items-center justify-content-center justify-content-sm-start">
                        <div class="minor-details position-relative d-flex flex-column flex-md-row">
                            <li class="position-relative d-flex align-items-center flex-column">
                                <h6 class="text-uppercase theme color-white mb-0 mb-md-2">founded</h6>
                                <p class="font-14px theme color-white">2021</p>
                            </li>
                            <li class="position-relative d-flex align-items-center flex-column">
                                <h6 class="text-uppercase theme color-white mb-0 mb-md-2">teams</h6>
                                <p class="font-14px theme color-white">8+</p>
                            </li>
                            <li class="position-relative d-flex align-items-center flex-column">
                                <h6 class="text-uppercase theme color-white mb-0 mb-md-2">tournaments</h6>
                                <p class="font-14px theme color-white">3</p>
                            </li>
                            <li class="position-relative d-flex align-items-center flex-column">
                                <h6 class="text-uppercase theme color-white mb-0 mb-md-2">game</h6>
                                <p class="font-14px theme color-white">Dota 2</p>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
	get_footer();
?>