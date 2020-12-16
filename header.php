<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>KF's Portfolio</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <!-- css reset -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/3a7917df6a.js" crossorigin="anonymous"></script>
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- vue scroll -->
    <script src="https://cdn.jsdelivr.net/npm/vue-scrollto"></script>
    <!-- vue carousel -->
    <script src="https://cdn.jsdelivr.net/npm/vue-carousel@0.18.0/dist/vue-carousel.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <!----- header ----->
    <nav id="vue-scroll">
        <div class="container">
            <?php
            the_custom_logo();
            if (!has_custom_logo()) {
                bloginfo('name');
            }
            ?>

            <div class="menu">
                <a v-scroll-to="toTop"  href="#">Top</a>
                <a v-scroll-to="toAbout" href="#">About</a>
                <a v-scroll-to="toWorks" href="#">Works</a>
                <a v-scroll-to="toContact" href="#">Contact</a>
            </div>
        </div>
    </nav>
