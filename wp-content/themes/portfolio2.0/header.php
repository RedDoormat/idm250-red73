<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<link rel="stylesheet" href="https://use.typekit.net/nmh6qge.css">
<header class="header">
    <div class="header-content">
        <div id="logo-container">
            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo for Reid Dumont's website." />
        </div>
        
        <?php
            wp_nav_menu([
                'theme_location' => 'primary_menu'
            ]);
        ?>
        <!-- <nav class="main-nav">
            <ul class="nav-group">
                <li class="nav-item"><a href="#">Portfolio</a></li>
                <li class="nav-item"><a href="#">Resume</a></li>
                <li class="nav-item"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div> -->
</header>
</body>
</html>