<?php 
/**
 * Template Name: Homepage
 */
global $post;
get_header();
$hero = get_field('hero', $post);
$introduction = get_field('introduction', $post);
$principles = get_field('principles', $post);
$journey = get_field('journey', $post);


function _render_hero($data){
    $background = $data['background'] ?? false;
    $content_left = $data['content_left'] ?? false;
    $headshot = $data['headshot'] ?? false;
    $headshot_blurb = $data['headshot_blurb'] ?? false;
    ?>
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
    <?php
}

function _render_introduction($data){
    $introduction_image = $data['image'] ?? false;
    $introduction_content = $data['content'] ?? false;
    ?>
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
    <?php
}

function _render_principles($data){
    $principles_title = $data['title'] ?? false;
    $principles_subtitle = $data['subtitle'] ?? false;
    $principles_columns = $data['columns'] ?? false;
    ?>
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

                <div class="svg-container svg--dark">
                    <?php include('assets/svgs/enter-dark.svg'); ?>
                </div>
                <div class="svg-container svg--light">
                    <?php include('assets/svgs/enter-light.svg'); ?>
                </div>
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
        
    </div>
    <?php
}

function _render_journey($data){
    $title = $data['title'] ?? false;
    $columns = $data['columns'] ?? false;
    ?>
    <div class="journey-wrapper">
        
        <div class="wrap wrap--bottom">
            <div class="content content--left">
                <div class="svg-container sun--svg svg--dark">
                    <?php include('assets/svgs/sun-light.svg'); ?>
                </div>
                <?php 
                    if( $title ){
                        printf('<h2>%s</h2>', $title);
                    }
                ?>
            </div>
            <div class="content content--repeater">
                <?php 
                    if( $columns ){
                        foreach( $columns as $column ){
                            $headline = $column['headline'] ?? false;
                            $short_description = $column['short_description'] ?? false;

                            echo '<div class="std-content">';
                                if($headline){
                                    printf('<h2>%s</h2>', $headline);
                                }
                                if($short_description){
                                    printf('<p>%s</p>', $short_description);
                                }
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>

            <div class="svg-container timeline--svg svg--dark">
                <?php include('assets/svgs/human-evolution-light.svg'); ?>
            </div>
            
    </div>
    <?php
}

?>

<div id="homepage" class="homepage">
    <?php 
        _render_hero($hero);
        _render_introduction($introduction);
        _render_principles($principles);
        _render_journey($journey);
    ?>
    
    
</div>

<?php 
get_footer();
