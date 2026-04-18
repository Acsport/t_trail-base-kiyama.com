<?php get_header(); ?>
<div id="top-content">
    <!-- 固定ページから挿入 -->
    <div class="mainVisualBox">

        <!-- <div id="main_slider">
    <h2><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/main_title_01_pc.png" alt="国産トレーラーハウスならTRAIL BASE KIYAMA（トレイルベース基山）"></h2>
</div> -->

        <div id="main_slider">
            <!-- <h3>店舗・オフィス・住居用に<br>理想を実現する新しい選択肢</h3>
                <h2>トレーラーハウス</h2> -->
            <h2>
                <img class="pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/main_ttl.webp" alt="国産トレーラーハウスならTRAIL BASE KIYAMA（トレイルベース基山）">
                <img class="sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/main_ttl_sp.webp" alt="国産トレーラーハウスならTRAIL BASE KIYAMA（トレイルベース基山）">
            </h2>

            <div class="catch_line_text">
                <div class="marquee-anim">
                    <div class="marquee-inline">
                        TRAIL BASE KIYAMA
                    </div>
                    <div class="marquee-inline">
                        TRAILER HOUSE SPECIALTY STORE
                    </div>
                    <div class="marquee-inline">
                        TRAIL BASE KIYAMA
                    </div>
                    <div class="marquee-inline">
                        TRAILER HOUSE SPECIALTY STORE
                    </div>
                    <div class="marquee-inline">
                        TRAIL BASE KIYAMA
                    </div>
                </div>
            </div><!-- marquee-anim -->
            <div class="main_icon">
                <img decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slide_icon.png" class="pc" alt="自社施工で対応">
                <img decoding="async" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/slide_icon_sp.png" class="tab sp" alt="自社施工で対応">
            </div>
        </div>
        <!--/slider-->
    </div>
    <!--/slider-->

</div>
<section id="main" style="position: relative;">
    <!--サイド固定バナー-->
    <?php get_template_part('side-fix-banner'); ?>
    <!-- event -->
    <?php get_template_part('include-top-event'); ?>
    <!-- top_lineup -->
    <div class="top_lineup">
        <div class="inner">
            <h2 class="headLine01"><span class="en">Line Up</span>
                <span class="jp">選べるプラン</span>
            </h2>
        </div>
        <div class="top_lineup_list flex">
            <!-- 1 -->
            <a href="<?php echo esc_url(home_url()); ?>/house_use/" class="top_lineup_list_item item01 fadeLeftTrigger">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/koubou/lineup_01.jpg" alt="佐賀県個人向けトレーラーハウス">
                </figure>
                <div class="lineup_ttl">個人<span>向け</span>
                </div>
                <p>心地良い空間と機能性が融合した、住宅や趣味の空間として活用できる快適なトレーラーハウスをご用意いたします。</p>
            </a>

            <!-- 2 -->
            <a href="<?php echo esc_url(home_url()); ?>/office_use/" class="top_lineup_list_item item02 fadeLeftTrigger">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/koubou/lineup_02.jpg" alt="佐賀県法人向けトレーラーハウス">
                </figure>
                <div class="lineup_ttl">法人<span>向け</span>
                </div>
                <p>トレーラーハウスを活用して、リーズナブルな価格で魅力的な店舗やオフィス・宿泊施設を実現させましょう。</p>
            </a>
            <!-- 3 -->
            <a href="<?php echo esc_url(home_url()); ?>/invest_use/" class="top_lineup_list_item item03 fadeRightTrigger">
                <figure>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/koubou/lineup_03.jpg" alt="佐賀県投資利用向けトレーラーハウス">
                </figure>
                <div class="lineup_ttl">投資<span>向け</span>
                </div>
                <p>初期投資を抑えて収益最大化。中古やレンタル市場での需要も増加しており、魅力的な収益機会が広がっています。</p>
            </a>
            <!-- 4 -->
            <?php /*  ?>
            <a href="<?php echo esc_url( home_url() ); ?>/sale_use/" class="top_lineup_list_item item04 fadeRightTrigger">
                <figure>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/koubou/lineup_04.jpg" alt="売却をご検討の方へ" >
                </figure>
                <div class="lineup_ttl">売却<span>向け</span>                
                </div>
                <p>不要になったトレーラーハウスの買取や価格の査定、売却に伴う手続きなど様々な面でお手伝いいたします。</p>
            </a>
            <?php */ ?>
        </div>


    </div>


    <!--About-->
    <div class="home_event_box home_concept">
        <div class="home_event_in fadeInTrigger">
            <h2 class="headLine05_white">About
            </h2>
            <p class="visually-hidden">
                トレーラーハウスは、牽引可能な可動式の建築物です。<br>
                佐賀県内でも店舗・事務所・住居としての導入が進んでおり、<br>
                建築確認申請が原則不要、固定資産税ゼロといったメリットがあります。
            </p>
            <div class="home_concept_txt">
                <h3>トレーラーハウスとは？</h3>
                <p>「随時かつ任意に移動できる状態」を維持継続する車両扱いの建物、<br class="pc">トレーラーハウス。<br>
                    アメリカでは約80年の歴史と文化があり、店舗・事務所や別荘、住居として広く利用されています。<br>
                    日本でも近年、設置の手軽さ、様々なシーンに利用できることから、店舗や事務所、セカンドハウスや別荘としての用途を中心に注目を浴び、利用者が広がっています。</p>
            </div>
            <div class="btn"><a href="<?php echo esc_url(home_url()); ?>/about/">
                    <div><span>詳しく見る</span></div>
                </a>
            </div>
        </div>
    </div>
    <!--/About-->
    <!--#news 非表示-->

    <!--/#news-->

    <!-- melit -->
    <div class="melit">
        <div class="inner">
            <h2 class="headLine01"><span class="en">Merit</span>

            <p class="visually-hidden">
      一般建築に比べ初期費用を大幅に削減。佐賀県内での店舗開業や事務所設置に最適です。
            </p>
                <span class="jp">トレーラーハウスの<br class="sp" />メリット</span>
                <span class="jp-catch">「移動可能」「車両扱い」という
                    自由度を活かせるメリットが豊富</span>
            </h2>
            <!--/////////////////-->

            <div class="home-melit">
                <ul class="home-melit__list">
                    　　<!--1-->
                    <li class="home-melit__list-item fadeInTrigger">
                        <div class="steptitle">
                            <div class="stepcircle"><span>MERIT<br>
                                    <span class="no">1</span></span></div>
                        </div>
                        <div class="melit_block">
                            <div class="melit_block_1">
                                <picture>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/merit_01.jpg" alt="佐賀県で安価に導入できるトレーラーハウス" class="">
                                </picture>
                            </div>
                            <div class="melit_block_2">
                                <h3 class="home-melit__list-item-head">安価</h3>
                                <p class="home-melit__list-item-txt">
                                    住居並みの性能・デザインでコスパも良い。</p>
                            </div>
                        </div>
                    </li>
                    <!--2-->
                    <li class="home-melit__list-item fadeInTrigger">
                        <div class="steptitle">
                            <div class="stepcircle"><span>MERIT<br>
                                    <span class="no">2</span></span></div>
                        </div>

                        <div class="melit_block">
                            <div class="melit_block_1">
                                <picture>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/merit_02.webp" alt="佐賀県内どこでも設置自由なトレーラーハウス" class="">
                                </picture>
                            </div>
                            <div class="melit_block_2">
                                <h3 class="home-melit__list-item-head">設置自由</h3>
                                <p class="home-melit__list-item-txt">
                                    市街化調整区域や自宅の庭先などへの設置も可能。</p>
                            </div>
                        </div>
                    </li>
                    <!--3-->
                    <li class="home-melit__list-item fadeInTrigger">
                        <div class="steptitle">
                            <div class="stepcircle"><span>MERIT<br>
                                    <span class="no">3</span></span></div>
                        </div>

                        <div class="melit_block">
                            <div class="melit_block_1">
                                <picture>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/merit_03.jpg" alt="佐賀で移動可能な機動性の高いトレーラーハウス" class="">
                                </picture>
                            </div>
                            <div class="melit_block_2">
                                <h3 class="home-melit__list-item-head">機動性</h3>
                                <p class="home-melit__list-item-txt">
                                    万が一、移転の際にも室内はそのままで次の場所に移動可能</p>
                            </div>
                        </div>
                    </li>
                    <!--4-->
                    <li class="home-melit__list-item fadeInTrigger">
                        <div class="steptitle">
                            <div class="stepcircle"><span>MERIT<br>
                                    <span class="no">4</span></span></div>
                        </div>

                        <div class="melit_block">
                            <div class="melit_block_1">
                                <picture>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/merit_04.jpg" alt="佐賀トレーラーハウスは売却対策に有効" class="">
                                </picture>
                            </div>
                            <div class="melit_block_2">
                                <h3 class="home-melit__list-item-head">売却対策</h3>
                                <p class="home-melit__list-item-txt">
                                    トレーラーハウスと土地を別々に売却できる。</p>
                            </div>
                        </div>
                    </li>
                    <!--5-->
                    <li class="home-melit__list-item fadeInTrigger">
                        <div class="steptitle">
                            <div class="stepcircle"><span>MERIT<br>
                                    <span class="no">5</span></span></div>
                        </div>

                        <div class="melit_block">
                            <div class="melit_block_1">
                                <picture>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/merit_05.webp" alt="佐賀トレーラーハウスは解体不要" class="">
                                </picture>
                            </div>
                            <div class="melit_block_2">
                                <h3 class="home-melit__list-item-head">解体不要</h3>

                                <p class="home-melit__list-item-txt">
                                    住宅と違い移動が可能なため、壊すという概念がない。</p>
                            </div>
                        </div>
                    </li>
                    <!--6-->
                    <li class="home-melit__list-item fadeInTrigger">
                        <div class="steptitle">
                            <div class="stepcircle"><span>MERIT<br>
                                    <span class="no">6</span></span></div>
                        </div>
                        <div class="melit_block">
                            <div class="melit_block_1">
                                <picture>
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/merit_06.jpg" alt="佐賀トレーラーハウスで節税対策" class="">
                                </picture>
                            </div>
                            <div class="melit_block_2">
                                <h3 class="home-melit__list-item-head">節税</h3>
                                <p class="home-melit__list-item-txt">
                                    車両扱いのため、不動産取得税・固定資産税がかからない。</p>
                            </div>
                        </div>
                    </li>
                    <!---->

                </ul>
            </div>

            <div class="btn_green_btn">
                <a href="<?php echo esc_url(home_url()); ?>/merit/">
                    <div><span>トレーラーハウスのメリットへ</span></div>
                </a>
            </div>

            <!--/////////////////-->

        </div>


    </div>
    <!--/.stance-->

    <!-- スライダー -->
    <div class="top_exterior_slider">
        <?php get_template_part('include-ex-slider'); ?>
    </div>
    <!-- /スライダー -->
    <!-- 施工事例 -->
    <?php get_template_part('include-product'); ?>
    <!-- バナー -->
    <?php get_template_part('include-dl-bnr'); ?>
    <!-- スタッフ -->
    <?php get_template_part('include-top-staff'); ?>
    <!-- ブログ -->
    <?php get_template_part('include-top-blog'); ?>
    <!-- 固定ページより -->
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>

    </div>
    <?php get_footer(); ?>