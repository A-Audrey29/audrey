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
        <a class="logo" href="www.planty.com">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="logo Planty" />
        </a>

        <nav class="nav_bar_menu">
            <ul class="nav">
                <li class="nav_li"><a class="menu" href="#contact">Nous rencontrer</a></li>
                <li class="nav_li"><a class="menu hook" href="admin">Admin</a></li>
                <li class="nav_li"><a class="menu commander" href="#commander">Commander</a></li>
            </ul>
        </nav>

    </header>