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

$introduction = get_field('introduction', $post);
$introduction_image = $introduction['image'] ?? false;
$introduction_content = $introduction['content'] ?? false;
?>

<div id="homepage" class="homepage">
    <div class="hero">
        <?php 
            _get_image_html($background, ['background']);
        ?>
        <div class="wrap">
            <div class="content content--left">
                <?php echo $content_left ?>
            </div>
            <div class="content content--head">
                <div class="head-wrapper">
                    <?php 
                        _get_image_html($headshot);
                        if( $headshot_blurb ){
                            printf('<div class="chat-bubble"><div class="inner"><p>%s</p></div></div>', $headshot_blurb);
                        }
                    ?>
                </div>
            
            </div>
        </div>
    </div>
    <div class="introduction">
        <div class="wrap wrap--xl">
            <div class="content content--image">
                <?php 
                    _render_terminal_art();
                ?>
                
            </div>
            <div class="content content--left">
                <?php 
                    if($introduction_content){
                        echo $introduction_content;
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
get_footer();
