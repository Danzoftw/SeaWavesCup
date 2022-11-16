<?php
 
get_header(); ?>
    <div id="primary" class="content-area single-tournaments">
        <main id="main" class="site-main" role="main">
            <div class="container py-5">
                <div class="py-5">
                    <?php
                        while ( have_posts() ) : the_post();
                    ?>
                        <div class="title pb-4">
                            <p class="octopus-wide title-font"><?php the_title(); ?></p>
                        </div>
						<div class="contents">
                            <?php the_content(); ?>
                        </div>
                        <div class="row teams justify-content-evenly">
                            <?php
                                if( have_rows('tournament_participants') ):
                                while( have_rows('tournament_participants') ): the_row();
                            ?>
                                <div class="col-6 col-sm-4 d-flex flex-column align-items-center justify-content-center p-2 p-sm-3">
                                    <p><?php the_sub_field('team_name'); ?></p>
                                    <img class="w-100 max-width-250" src="<?php the_sub_field('team_logo'); ?>" alt="">
                                </div>
                            <?php
                                endwhile;
                                endif;
                            ?>
                        </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>