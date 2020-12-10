<?php get_header(); ?>

    <!-- Top -->
    <section id="top-wrapper">
        <div class="container">
            <div class="heading">
                <h1>Welcome to Portfolio Site</h1>
                <p>～ Let's Create Your Imagenation ～</p>
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
                <p class="item-img">
                    <img class="me-image" src="<?php echo get_template_directory_uri(); ?>/images/me.png" alt="自分の写真">
                </p>
                <div id="about-grid">

                    <p>名前</p>
                    <p>
                        船坂 国之 ( Kuniyuki Funasaka )
                    </p>
                    <p>仕事</p>
                    <p>
                        フロントからサーバ構築まで、お客様の要望に幅広くお応えします。
                    </p>
                    <p>経歴</p>
                    <p>
                        2019年徳島大学大学院卒。情報工学を専攻し、音楽情報処理の研究を行う。
                        同年、新卒で某社SAPコンサルタントとしてシステム保守の業務に携わる。
                        2020年、更なる技術向上を目指しWEBエンジニアリングの学習を始める。
                    </p>
                    <p>趣味</p>
                    <p>
                        ジャズドラム、ゲーム、読書。インドア派だが自然に触れるのも好き。トップの写真は冬に撮った沖縄の海です。
                    </p>
                    <p>スキル</p>
                    <p>
                        HTML/CSS/JavaScript/Python/PHP/SQL/Git/Linux etc.
                    </p>
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
            <div class="works-contents">
                <div class="works-item">
                    <a href="https://techmeets.jp/student/547_funasaka/mosha_kadai/"
                    target="_blank" rel="noopener noreferrer"                >
                        <h2>模写コーディング</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/thumbnail.png" alt="" >
                    </a>
                    <p>デザインカンプをもとに、静的ページをコーディングしました。</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Portfolio -->
    <section id="contact-wrapper">
        <div class="container">
            <div class="heading">
                <h1>Contact</h1>
            </div>
            <form id="contact-form">
                <div class="item">
                    <label class="label">お名前</label>    
                    <input class="inputs" type="text" name="name"
                    placeholder="（氏名、組織名、活動名など）">
                </div>
                <div class="item">
                    <label class="label">メールアドレス</label>    
                    <input class="inputs" type="email" name="email"
                    placeholder="（メールアドレス、Twitter、Facebookのアカウントなど">
                </div>
                <div class="item">
                    <label class="label">件名</label>    
                    <input class="inputs" type="text" name="subject"
                    placeholder="（案件依頼など）">
                </div>
                <div class="item">
                    <label class="label">本文</label>    
                    <textarea class="inputs"
                    placeholder="（用件をご記入ください！）"></textarea>
                </div>
                <div class="btn-area">
                    <input class="submit" type="submit" value="送信">
                    <input class="reset" type="reset" value="リセット">
                </div>
            </form>
        </div>
    </section>

<?php get_footer(); ?>