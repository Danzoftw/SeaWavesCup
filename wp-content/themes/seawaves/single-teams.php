<?php
 
get_header(); ?>
  
    <div id="primary" class="content-area single-teams">
        <main id="main" class="site-main" role="main">
            <div class="container py-5">
                <div class="row py-5">
                    <?php
                        while ( have_posts() ) : the_post();
                    ?>
                        <div class="team-details d-flex flex-column align-items-center">
                            <div class="col-12 col-sm-8">
                                <div class="team-name text-center octopus-wide font-80px">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <div class="team-logo d-flex justify-content-center py-4">
                                    <?php the_post_thumbnail();?>
                                </div>
                            </div>
                            <?php 
                                if( have_rows('tournament_details') ):
                                while( have_rows('tournament_details') ): the_row(); 
                            ?>
                                <div class="col-12 col-sm-6">
                                    <div class="inner-details d-flex justify-content-between py-4">
                                        <div class="col-6 d-flex align-items-center">
                                            <div class="loc-reg font-26px">
                                                <?php the_sub_field('name'); ?>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="inner-sub-details d-flex justify-content-between">
                                                <div class="logo ps-sm-5">
                                                    <img src="<?php the_sub_field('country_logo'); ?>" alt="">
                                                </div>
                                                <div class="country-name">
                                                    <?php the_sub_field('country_name'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                endwhile;
                                endif; 
                            ?>
                            <div class="col-12 col-sm-6 pt-4">
                                <div class="team-social-media">
                                    <div class="title">
                                        <p class="octopus-wide title-font text-center">Social Media</p>
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <?php
                                            if( have_rows('team_social_media') ):
                                            while( have_rows('team_social_media') ): the_row(); 
                                        ?>
                                        <div class="image">
                                            <a target="_blank" href="<?php the_sub_field('link'); ?>">
                                                <img src="<?php the_sub_field('image'); ?>" alt="">
                                            </a>
                                        </div>
                                        <?php
                                            endwhile;
                                            endif; 
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 the-team-contents pt-5">
                                <?php the_content(); ?>
                            </div>
                            <div class="col-12 pt-5">
                                <div class="team-players d-flex flex-wrap justify-content-center">
                                <?php
                                    if( have_rows('team_player_details') ):
                                    while( have_rows('team_player_details') ): the_row();
                                ?>
                                <div class="col-6 d-flex align-items-center justify-content-evenly py-3">
                                <div class="image">
                                    <img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="">
                                </div>
                                <div class="player-name title-font">
                                    <?php the_sub_field('player_name'); ?>
                                </div>
                                </div>
                              
                                <?php
                                    endwhile;
                                    endif;
                                ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>