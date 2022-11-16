<?php
get_header(); 
?>
    <div id="primary" class="content-area single-news">
        <main id="main" class="site-main" role="main">
            <div class="container py-5">
                <div class="py-5">
                    <?php
                        while ( have_posts() ) : the_post();
                    ?>
                        <div class="title pb-4">
                            <p class="octopus-wide title-font"><?php the_title(); ?></p>
                        </div>
                        <div class="row teams justify-content-evenly">
                            <div class="post-contents">
                                <?php the_content(); ?>
                                <div class="comment-box pt-5">
                                    <?php comments_template(); ?>
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
    <script>
        jQuery(document).ready(function($){
            $( ".form-submit input" ).click(function(e) {
                if( !$('.comment-form-comment textarea').val().length ) {
                    e.preventDefault();
                }
            });
        });
    </script>

<?php get_footer(); ?>