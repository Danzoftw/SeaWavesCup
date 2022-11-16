<?php
/*
 * Template Name: Rulebook Template
*/
get_header();
?>
  <?php
        while ( have_posts() ) : the_post();
    ?>
    <div class="container rulebook privacy-policy p-5">
        <?php the_content(); ?>
    </div>

    <?php
            endwhile;
        ?>

    <?php
	get_footer();
?>