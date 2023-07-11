<?php
/**
 * Template Name: Video
 */

get_header();
?>

<div id="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/kCfVv3RsGw4" frameborder="0" allowfullscreen></iframe>
</div>

<div id="video-description">
    <?php
    while (have_posts()) : the_post();
        the_content();
    endwhile;
    ?>
</div>

<?php
get_footer();
?>
