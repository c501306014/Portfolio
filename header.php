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
    <link rel="stylesheet" href="https://cdn.rawgit.com/filipelinhares/ress/master/dist/ress.min.css">

    <script>
        (function(d) {
            var config = {
                    kitId: 'cpd7fgc',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/3a7917df6a.js" crossorigin="anonymous"></script>
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- vue scroll -->
    <script src="https://cdn.jsdelivr.net/npm/vue-scrollto"></script>
    <!-- vue carousel -->
    <script src="https://cdn.jsdelivr.net/npm/vue-carousel@0.18.0/dist/vue-carousel.min.js"></script>
    <!-- stop reading jquery from wordpress -->
    <?php wp_deregister_script('jquery'); ?>
    <!-- reading jquery from google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
                <a v-scroll-to="toTop" href="#">Top</a>
                <a v-scroll-to="toAbout" href="#">About</a>
                <a v-scroll-to="toWorks" href="#">Works</a>
                <a v-scroll-to="toContact" href="#">Contact</a>
            </div>
            <div class="sp">
                <!-- ハンバーガーメニュー -->
                <div class="hamburger_btn" v-on:click='ActiveBtn=!ActiveBtn'>
                    <span class="line line_01" v-bind:class="{'btn_line01':ActiveBtn}"></span>
                    <span class="line line_02" v-bind:class="{'btn_line02':ActiveBtn}"></span>
                    <span class="line line_03" v-bind:class="{'btn_line03':ActiveBtn}"></span>
                </div>
                <!-- サイドバー -->
                <transition name="manu-sp">
                    <div class="menu-sp" v-show="ActiveBtn" v-bind:class="{'fade-in': ActiveBtn, 'fade-out': !ActiveBtn}">
                        <ul>
                            <li><a href="#" v-on:click='ActiveBtn=!ActiveBtn' v-scroll-to="toTop_sp">Top</a></li>
                            <li><a href="#" v-on:click='ActiveBtn=!ActiveBtn' v-scroll-to="toAbout_sp">About</a></li>
                            <li><a href="#" v-on:click='ActiveBtn=!ActiveBtn' v-scroll-to="toWorks_sp">Works</a></li>
                            <li><a href="#" v-on:click='ActiveBtn=!ActiveBtn' v-scroll-to="toContact_sp">CONTACT</a></li>
                        </ul>
                    </div>
                </transition>
            </div>
        </div>
    </nav>