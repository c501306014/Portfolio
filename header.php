<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <script src="https://kit.fontawesome.com/3a7917df6a.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
    <!----- header ----->
    <nav>
        <div class="container">
            <a href="#" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
            </a>
            <div class="menu">
                <a href="#">Top</a>
                <a href="#">About</a>
                <a href="#">Works</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </nav>