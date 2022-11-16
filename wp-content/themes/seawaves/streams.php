<?php
/*
 * Template Name: Streams Template
*/
get_header();
?>
<script src="https://embed.twitch.tv/embed/v1.js"></script>
<div class="streams-outer">
    <section class="streams">
        <div class="container-fluid py-5">
        <div id="twitch-embed"></div>
            <?php
                if( have_rows('stream_repeater') ):
                while( have_rows('stream_repeater') ) : the_row();
            ?>
                <script type="text/javascript">
                    new Twitch.Embed("twitch-embed", {
                        channel: "<?php the_sub_field('name'); ?>",
                        layout: "video",
                    });
                </script>
            <?php
                endwhile;
                else :
                endif;
            ?>
        </div>
    </section>
</div>

<?php
	get_footer();
?>