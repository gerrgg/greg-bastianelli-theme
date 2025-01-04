<?php 
/**
 * Template Name: Homepage
 */
global $post;
get_header();
$hero = get_field('hero', $post);
$background = $hero['background'];
$content_left = $hero['content_left'];
$headshot = $hero['headshot'];
$headshot_blurb = $hero['headshot_blurb'];

?>

<div id="homepage" class="homepage">
    <div class="hero">
        <?php 
            _get_image_html($background);
        ?>
        <div class="wrap">
            <div class="content content--left"></div>
            <div class="content content--head"></div>
        </div>
    </div>
</div>

<?php 
get_footer();
