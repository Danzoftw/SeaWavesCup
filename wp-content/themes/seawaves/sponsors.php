<?php
/*
 * Template Name: Sponsors Template
*/
get_header();
?>

<div class="sponsors-outer">
    <section class="teams-title sponsors-title position-relative">
    <div class="common-bg position-absolute w-100 h-100"></div>
        <div class="container d-flex justify-content-center">
            <div class="inner-container d-flex justify-content-center flex-column align-items-center">
                <div class="title">
                    <p class="mb-0 text-uppercase title-font position-relative after-border">Sponsors & Partners</p>
                </div>
                <div class="sub-title pt-4">
                    <p class="mb-0 text-uppercase">Meet our sponsors that helps grow Sea Waves Dota 2 competitive scene</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsors position-relative">
    <div class="footer-bg position-absolute w-100 h-100"></div>
        <div class="container py-5">
            <div class="row py-5 justify-content-center">
                <?php
                    if( have_rows('sponsors_repeater') ):
                    while( have_rows('sponsors_repeater') ) : the_row();
                ?>
                <div class="col-12 col-sm-4">
                    <div class="sp-outer mx-auto h-100">
                        <figure class="text-center h-100 py-4 py-md-0 d-flex align-items-center">
                            <div class="image position-relative">
                                <img class="w-100 h-100 object-fit-contain" src="<?php the_sub_field('image'); ?>" alt="sponsors-image">
                                <a class="position-absolute left top right bottom" target="_blank" href="<?php the_sub_field('link'); ?>">
                                </a>
                            </div>
                        </figure>
                    </div>
                </div>
                <?php
                    endwhile;
                    else :
                    endif;
                ?>
            </div>
        </div>
    </section>
</div>
<?php
	get_footer();
?>