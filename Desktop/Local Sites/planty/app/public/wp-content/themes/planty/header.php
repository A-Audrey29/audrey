<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planty</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700&display=swap" rel="stylesheet">

    <?php do_action('wp_head'); ?>
</head>

<body>
    <header class="nav_bar">
        <a href="http://localhost:10017/">
            <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="logo Planty" />
        </a>

        <nav class="nav_bar_menu">
            <ul class="nav">
                <li><a class="menu nav_li" href="http://localhost:10017/nous-rencontrer/">Nous rencontrer</a></li>
                <li><a class="menu hook nav_li" href="admin">Admin</a></li>
                <li><a class="menu commander nav_li" href="#commander">Commander</a></li>
            </ul>
        </nav>
    </header>