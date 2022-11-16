<?php
/*
 * Template Name: Participant Template
*/
get_header();
?>

<div class="teams-outer">
    <section class="teams-title position-relative">
    <div class="common-bg position-absolute w-100 h-100"></div>
        <div class="container d-flex justify-content-center">
            <div class="inner-container d-flex justify-content-center flex-column align-items-center">
                <div class="title">
                    <p class="mb-0 text-uppercase title-font position-relative after-border">participants</p>
                </div>
                <div class="sub-title pt-4">
                    <p class="mb-0 text-uppercase">top dota 2 teams</p>
                </div>
            </div>
        </div>
    </section>
    <section class="participants position-relative">
    <div class="footer-bg position-absolute w-100 h-100"></div>
        <div class="container py-5">
            <div class="row py-5">
				<?php
					$my_query = get_posts(
						array(
							'posts_per_page' => -1,
							'post_type' => 'teams',
						)
					);
					foreach($my_query as $q){
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $q->ID ), 'single-post-thumbnail' );
				?>
					<div class="col-6 col-lg-3">
						<div class="image-inner position-relative d-flex">
							<img src="<?php echo $image[0]; ?>" alt="team-images" class="object-fit-contain">
							<a href="<?php echo get_permalink($q->ID) ?>" class="position-absolute top left right bottom"></a>
						</div>
                        <div class="team-details py-3 d-flex flex-column align-items-start justify-content-between">
                            <div class="left-details">
                                <p class="mb-0 theme color-white"><?php the_field("team_name", $q->ID); ?></p>
                            </div>
                            <div class="right-details">
                                <div class="team-from">
                                    <p class="text-uppercase mb-0 theme color-white font-12px">from</p>
                                </div>
                                <div class="team-location">
                                    <p class="text-uppercase theme color-white mb-0 font-12px"><?php the_field("team_location", $q->ID); ?></p>
                                </div>
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