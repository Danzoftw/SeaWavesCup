<?php
/*
 * Template Name: Blog Template
*/
get_header();
?>
<div class="news">
    <section class="inner-news">
        <div class="container py-5">
            <div class="row py-5">
                <?php
                    $my_query = get_posts(
                        array(
                            'posts_per_page' => -1,
                            'post_type' => 'news',
                        )
                    );
                    foreach($my_query as $q){
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $q->ID ), 'single-post-thumbnail' );
                    $title = get_the_title($q->ID);
                    $permalink = get_the_permalink($q->ID);
                ?>
                    <div class="col-12 py-3">
                        <div class="d-inline-block position-relative">
                            <div class="inner-content d-flex align-items-center">
                                <div class="image">
                                    <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid w-100">
                                </div>
                                <div class="title ps-3 ps-sm-5">
                                    <p class="title-font octopus-wide mb-0"><?php echo $title?></p>
                                </div>
                                <a class="position-absolute top left right bottom" href="<?php echo $permalink ?>"></a>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
</div>

<?php
	get_footer();
?>