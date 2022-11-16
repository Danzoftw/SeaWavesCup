<?php
/*
 * Template Name: Home Template
*/
get_header();
?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1244895896714821"
     crossorigin="anonymous"></script>
<div class="home-outer-wrapper position-relative z-index-3">
	<a href="#home_banner_section" id="load_click">
	<section class="home-banner-section z-index-10 position-relative overflow-hidden" id="home_banner_section">
		<!-- <div class="click-for-magic position-absolute">
			<p class="octopus-wide theme color-white mb-0 text-center">Click here for magic</p>
		</div> -->
		<div class="video-cover w-100">
			<video autoplay loop muted playsinline class="w-100">
				<source src="<?php echo get_template_directory_uri(); ?>/images/dota-2-video.mp4" type="video/mp4" />
			</video>
			<audio hidden controls class="theme-music" id="theme_music">
				<source src="https://static.wikia.nocookie.net/dota2_gamepedia/images/b/bc/Music_default_ui_startup_04.mp3" type="audio/mpeg" autoplay="true">
			</audio>
			<div class="dota-heroes position-relative">
				<div class="autoplay position-relative">
					<?php
						$id = 0;
						if( have_rows('hero_voice_repeater') ):
						while( have_rows('hero_voice_repeater') ): the_row();
					?>
						<div class="py-4 image hero-click position-relative" id="hero_click">
							<img src="<?php the_sub_field('image'); ?>" alt="voice-image" id="img_id">
							<audio controls hidden class="hero-voice" id="hero_voice_<?php echo $id;?>">
								<source src="<?php the_sub_field('voice'); ?>" type="audio/mpeg" autoplay="true">
							</audio>
						</div>
					<?php
						$id++;
						endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
	</section>
	</a>
	<section class="teams position-relative" id="teams_pause">
	<div class="footer-bg position-absolute w-100 h-100"></div>
		<div class="container py-5">
			<div class="row">
				<div class="teams-title">
					<p class="d-inline-block text-uppercase mb-0 octopus-wide theme color-white position-relative after-white-border font-weight-700">Participants</p>
				</div>
			</div>
			<div class="row">
				<div class="participants-slick">
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
					<div class="col-6 col-lg-3 my-3">
						<div class="image-inner position-relative d-flex justify-content-center">
							<img src="<?php echo $image[0]; ?>" alt="" class="w-100 object-fit-contain">
							<a href="<?php echo get_permalink($q->ID) ?>" class="position-absolute top left right bottom"></a>
						</div>
						<div class="team-name pt-3">
							<p class="text-center theme color-white mb-0"><?php the_field('team_name', $q->ID); ?></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="tournaments position-relative">
	<div class="common-bg position-absolute w-100 h-100"></div>
		<div class="container py-5">
			<div class="row">
				<div class="px-3 px-md-0 pb-2 tourney-wrapper d-flex flex-wrap justify-content-between">
					<div class="tournaments-title">
						<p class="d-inline-block text-uppercase mb-0 octopus-wide theme color-gray position-relative after-border font-weight-700">tournaments</p>
					</div>
					<div class="tourney-tabs d-flex pt-3">
						<p id="upcoming-tourney" class="text-uppercase mb-0 position-relative cursor-pointer active">upcoming</p>
						<p id="ongoing-tourney" class="ps-4 text-uppercase mb-0 position-relative before-circle cursor-pointer">ongoing</p>
						<p id="finished-tourney" class="ps-4 text-uppercase mb-0 position-relative before-circle cursor-pointer">finished</p>
					</div>
				</div>
			</div>
			<div class="tournaments-list">
				<div class="upcoming-tourney display-show">
					<?php
						$my_query = get_posts(
							array(
								'posts_per_page' => -1,
								'post_type' => 'tournaments',
								'tax_query' => array(
									array(
										'taxonomy' => 'tournaments_category',
										'field' => 'id',
										'terms' => 3,
									),
								),
							)
						);
						foreach($my_query as $q){
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $q->ID ), 'single-post-thumbnail' );
						$title = get_the_title($q->ID);
					?>
					<div class="col-6 col-lg-4 my-4">
						<div class="upcoming-tournament-image position-relative">
							<img src="<?php echo $image[0]; ?>" alt="" class="w-100 object-fit-contain">
							<a href="<?php echo get_permalink($q->ID) ?>" class="position-absolute top left right bottom"></a>
						</div>
						<div class="tournament-name pt-2">
							<p class="text-center text-uppercase mb-0"><?php echo $title; ?></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>
				<div class="ongoing-tourney display-hide">
					<?php 
						$my_query = get_posts(
							array(
								'posts_per_page' => -1,
								'post_type' => 'tournaments',
								'tax_query' => array(
									array(
										'taxonomy' => 'tournaments_category', 
										'field'    => 'id',
										'terms'    => 4,
									),
								),
							)
						);
						foreach($my_query as $q){
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $q->ID ), 'single-post-thumbnail' );
						$title = get_the_title($q->ID);
					?>
					<div class="col-6 col-lg-4 my-3">
						<div class="ongoing-tournament-image position-relative">
							<img src="<?php echo $image[0]; ?>" alt="" class="w-100 object-fit-contain">
							<a href="<?php echo get_permalink($q->ID) ?>" class="position-absolute top left right bottom"></a>
						</div>
						<div class="tournament-name pt-2">
							<p class="text-center text-uppercase mb-0"><?php echo $title; ?></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>
				<div class="finished-tourney display-hide">
					<div class="row">
						<?php 
							$my_query = get_posts(
								array(
									'posts_per_page' => -1,
									'post_type' => 'tournaments',
									'tax_query' => array(
										array(
											'taxonomy' => 'tournaments_category', 
											'field'    => 'id',
											'terms'    => 5,
										),
									),
								)
							);
							foreach($my_query as $q){
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $q->ID ), 'single-post-thumbnail' );
							$title = get_the_title($q->ID);
						?>
						<div class="col-6 col-lg-4 my-3">
							<div class="finished-tournament-image position-relative">
								<img src="<?php echo $image[0]; ?>" alt="" class="w-100 object-fit-contain">
								<a href="<?php echo get_permalink($q->ID) ?>" class="position-absolute top left right bottom"></a>
							</div>
							<div class="tournament-name pt-2">
								<p class="text-center text-uppercase mb-0"><?php echo $title; ?></p>
							</div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sponsors position-relative">
	<div class="footer-bg position-absolute w-100 h-100"></div>
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="sponsors-title pb-3">
					<p class="d-inline-block text-uppercase mb-0 theme color-white font-weight-700 octopus-wide position-relative after-white-border">sponsors</p>
				</div>
				<?php 
				if( have_rows('sponsors_repeater',11) ):
					while( have_rows('sponsors_repeater',11) ): the_row(); 
				?>
				<div class="col-4">
					<figure class="h-100 py-4 py-md-0 d-flex justify-content-center">
						<div class="image position-relative">
							<img class="w-100 h-100 object-fit-contain" src="<?php the_sub_field('image'); ?>" alt="sponsors-image">
							<a class="position-absolute left top right bottom" target="_blank" href="<?php the_sub_field('link'); ?>">
							</a>
						</div>
					</figure>
				</div>
				<?php
					endwhile;
				 	endif;
				?>
			</div>
		</div>
	</section>
</div>
<script>

jQuery(document).ready(function($){

	$('.hero-click').mouseenter(function() {
		var id;
		var audio = $("audio");
		id = $(this).find(audio)[0].play();
	});
	$('.hero-click').mouseleave(function() {
		var id;
		var audio = $("audio");
		id = $(this).find(audio)[0].pause();
		id = $(this).find(audio)[0].currentTime = 0;
	});

	$( "#home_banner_section" ).click(function() {
		$('.click-for-magic').addClass('opacity-0');
	});

});
</script>
<?php
	get_footer();
?>