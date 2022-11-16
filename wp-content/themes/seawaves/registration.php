<?php
/*
 * Template Name: Registration Template
*/
get_header();
?>
<div class="contact-outer">
	<section class="contact-us position-relative">
	<div class="common-bg position-absolute w-100 h-100"></div>
		<div class="container py-5">
			<div class="row">
            <?php
                while ( have_posts() ) : the_post();
            ?>
			</div>
                <div class="container">
                    <?php the_content(); ?>
                </div>
            <?php
                endwhile;
            ?>
			
		</div>
	</section>
</div>


<?php
	get_footer();
?>