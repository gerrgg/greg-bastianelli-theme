<?php 
/**
 * Template Name: Homepage
 */
global $post;
get_header();
$hero = get_field('hero', $post);
$background = $hero['background'] ?? false;
$content_left = $hero['content_left'] ?? false;
$headshot = $hero['headshot'] ?? false;
$headshot_blurb = $hero['headshot_blurb'] ?? false;

$introduction = get_field('introduction', $post);
$introduction_image = $introduction['image'] ?? false;
$introduction_content = $introduction['content'] ?? false;

$principles = get_field('principles', $post);
$principles_title = $principles['title'] ?? false;
$principles_subtitle = $principles['subtitle'] ?? false;
$principles_columns = $principles['columns'] ?? false;
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
        <div class="wrap wrap--md">
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
    <div class="principles">
        <div class="wrap">
            <div class="content content--left">
                <?php
                    if( $principles_title ){
                        printf('<h2>%s</h2>', $principles_title);
                    }
                    if( $principles_subtitle ){
                        printf('<h3>%s</h3>', $principles_subtitle);
                    }
                ?>
            </div>
            <div class="content content--repeater">
                <?php
                    if( $principles_columns ){
                        foreach( $principles_columns as $column ){
                            $content = $column['content'] ?? false;
                            if( $content ){
                                printf('<div class="content-wrapper">%s</div>', $content);
                            }
                        }
                    }
                ?>
            </div>
        </div>
       
        <div class="svg-container svg--dark">
            <?php include('assets/svgs/enter-dark.svg'); ?>
        </div>
        <div class="svg-container svg--light">
            <?php include('assets/svgs/enter-light.svg'); ?>
        </div>
    </div>
</div>

<?php 
get_footer();
