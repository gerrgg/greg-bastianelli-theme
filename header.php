<header>
    <div class="wrap">
        <div class="logo-wrapper">
            <div class="text-wrapper">
                <h1 class="name"><?php bloginfo( 'name' ); ?></h1>
                <p class="tagline">
                    <?php
                        echo Date('Y') . '&nbsp;'; 
                        bloginfo( 'description' ); 
                    ?>
                </p>
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
        </div>
    </div>
    <button id="darkModeToggle">Dark Mode</button>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">
</header>