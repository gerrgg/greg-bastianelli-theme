<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Borel&family=Fira+Code:wght@300..700&family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<header>
    <div class="wrap wrap--no-padding">
        <div class="logo-wrapper">
            <div class="text-wrapper">
                <a href="/">
                    <h1 class="name"><?php bloginfo( 'name' ); ?></h1>
                    <p class="tagline">
                        <?php
                            echo Date('Y') . '&nbsp;'; 
                            bloginfo( 'description' ); 
                        ?>
                    </p>
                </a>
            </div>
            <svg width="64px" height="64px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" version="1.1" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                <rect height="4.5" width="3" y="1.75" x="3.25"/>
                <path d="m9.75 6.25h3m-3-4.5h1.5v4"/>
                <rect height="4.5" width="3" y="9.75" x="9.75"/>
                <path d="m3.25 14.25h3m-3-4.5h1.5v4"/>
            </svg>
        </div>
        <div class="right-menu-wrapper">
            <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu', // Matches the location registered in functions.php
                    'container' => 'nav',              // Wrap the menu in a <nav> element
                    'container_class' => 'main-nav',   // Add a class to the <nav> element
                    'menu_class' => 'menu',            // Add a class to the <ul> element
                    'fallback_cb' => false,            // Disable the default fallback menu
                ]);
            ?>
            <button id="menu-expand">
                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m11 11h-7.25c-.414 0-.75.336-.75.75s.336.75.75.75h7.25v7.25c0 .414.336.75.75.75s.75-.336.75-.75v-7.25h7.25c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-7.25v-7.25c0-.414-.336-.75-.75-.75s-.75.336-.75.75z" fill="currentcolor" fill-rule="nonzero"/></svg>
            </button>
        </div>
    </div>
                
    <button id="darkModeToggle">Dark Mode</button>
    
</header>