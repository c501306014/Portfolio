<?php get_header(); ?>


<!-- Top -->
<section id="top-wrapper">
    <?php if (get_header_image()) :   ?>
        <img id="hero-image" src="<?php header_image() ?>" alt="">
    <?php endif; ?>
    <div class="container">
        <div class="heading">
            <h1>
                <!-- Welcome to Portfolio Site -->
                <img id="title-image" src="<?php bloginfo('template_directory'); ?>/images/title.png">
            </h1>

            <!-- <?php bloginfo('title'); ?> -->
            <p><?php bloginfo('description'); ?></p>
        </div>
    </div>
</section>

<!-- About -->
<section id="about-wrapper">
    <div class="container">
        <div class="heading">
            <h1>About</h1>
        </div>
        <div class="about-main">
            <?php
            $page_data = get_page_by_path('me-image');
            $page = get_post($page_data);
            $content = $page->post_content;
            echo $content;
            ?>
            <div id="about-grid">
                <?php
                $page_data = get_page_by_path('about-description');
                $page = get_post($page_data);
                $content = $page->post_content;
                echo $content;
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Works -->
<section id="works-wrapper">
    <div class="container">
        <div class="heading">
            <h1>Works</h1>
        </div>
        <div id="app">
            <div class="slider">
                <carousel :navigation-enabled="true" :per-page-custom="[[720,2], [0, 1]]">
                    <?php
                    $page_data = get_page_by_path('works');
                    $page = get_post($page_data);
                    $content = $page->post_content;
                    echo $content;
                    ?>
                </carousel>
            </div>
        </div>
    </div>
</section>

<!-- contact -->
<section id="contact-wrapper">
    <div class="container">
        <div class="heading">
            <h1>Contact</h1>
        </div>
        <?php
        echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]');
        ?>
        <p class="copyright">© 2020
            <?php if (date("Y") !== '2020') {
                echo date("-Y");
            } ?> All rights reserved, Kuniyuki Funasaka
        </p>
    </div>
</section>

<?php get_footer(); ?>