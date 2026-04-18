<header id="gHeader" class="">
    <div class="hBox">
        <h1>
            <a href="<?php echo esc_url(home_url()); ?>" class="Header-Logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo03.webp" alt="佐賀トレーラーハウス専門店TRAIL BASE KIYAMAロゴ"></a>
            <!-- h1 タイトル -->
            <?php if (is_front_page()) : ?>
                <span class="seo-only">佐賀県基山町のトレーラーハウス専門店</span>
            <?php elseif (is_page('about')) : ?>
                <span class="seo-only">佐賀県のトレーラーハウスとは</span>
            <?php elseif (is_page('company')) : ?>
                <span class="seo-only">佐賀県トレーラーハウス専門店 会社概要</span>
            <?php elseif (is_page('contact')) : ?>
                <span class="seo-only">佐賀県トレーラーハウスのお問い合わせ</span>
            <?php elseif (is_page('contact-event')) : ?>
                <span class="seo-only">佐賀トレーラーハウスTRAIL BASE</span>
            <?php elseif (is_page('download')) : ?>
                <span class="seo-only">佐賀トレーラーハウスTRAIL BASE</span>
            <?php elseif (is_post_type_archive('event')) : ?>
                <span class="seo-only">佐賀県トレーラーハウス見学会開催中</span>
            <?php elseif (is_post_type_archive('works')) : ?>
                <span class="seo-only">佐賀県トレーラーハウス施工事例</span>
            <?php elseif (is_singular()) : ?>
                <span class="seo-only"><?php the_title(); ?></span>
            <?php elseif (is_archive()) : ?>
                <span class="seo-only"><?php the_archive_title(); ?></span>
            <?php elseif (is_search()) : ?>
                <span class="seo-only">検索結果: <?php the_search_query(); ?></span>
            <?php elseif (is_404()) : ?>
                <span class="seo-only">ページが見つかりません</span>
            <?php endif; ?>
            <!-- h1 タイトル -->
        </h1><!--★-->
        <nav id="gNavi">
            <ul class="naviList">
                <li class="navi01"><span class="parent">トレーラーハウスについて</span>
                    <div class="subNavi">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url()); ?>/about/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img01.jpg" alt="佐賀トレーラーハウスとは"><span class="txt">トレーラーハウスとは</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/features/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img_features.jpg" alt="佐賀TRAIL BASE KIYAMA自社のこだわり"><span class="txt">自社のこだわり</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/merit/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img02.jpg" alt="佐賀トレーラーハウスの魅力"><span class="txt">トレーラーハウスの魅力</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/flow/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img03.jpg" alt="佐賀トレーラーハウス納品までの流れ"><span class="txt">納品までの流れ</span></a></li>
                        </ul>
                    </div>
                </li>
                <!-- <li class="navi02"><a href="<?php echo esc_url(home_url()); ?>/plan/">ご利用目的</a></li> -->
                <li class="navi02"><span class="parent">ご利用目的</span>
                    <div class="subNavi">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url()); ?>/house_use/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img15.jpg" alt="佐賀県個人向けトレーラーハウス"><span class="txt">個人でご検討の方へ</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/office_use/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img16.jpg" alt="佐賀県法人向けトレーラーハウス"><span class="txt">法人でご検討の方へ</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/invest_use/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img17.jpg" alt="佐賀県投資利用向けトレーラーハウス"><span class="txt">投資利用でご検討の方へ</span></a></li>
                            <?php /*  ?>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/sale_use/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/navi_img18.jpg" alt="売却をご検討の方へトレーラー"><span class="txt">売却をご検討の方へ</span></a></li>
                            <?php */ ?>
                        </ul>
                    </div>
                </li>
                <li class="navi03"><a href="<?php echo esc_url(home_url()); ?>/event/">イベント情報</a></li>
                <li class="navi04"><a href="<?php echo esc_url(home_url()); ?>/works/">施工事例</a></li>
                <li class="navi05"><span class="parent">会社情報</span>
                    <div class="subNavi">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url()); ?>/company/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img09.jpg" alt="会社概要"><span class="txt">会社概要</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/news/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img12.jpg" alt="NEWS"><span class="txt">お知らせ</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/staff/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img08.jpg" alt="スタッフ紹介"><span class="txt">スタッフ紹介</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/blog/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img07.jpg" alt="ブログ"><span class="txt">ブログ</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="navi06"><span class="parent">お問合せ</span>
                    <div class="subNavi">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url()); ?>/contact-event/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img04.jpg" alt="見学会予約"><span class="txt">見学会予約</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/contact/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img05.jpg" alt="お問合せ"><span class="txt">お問合せ・無料お見積り</span></a></li>
                            <li><a href="<?php echo esc_url(home_url()); ?>/download/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/navi_img06.jpg" alt="資料ダウンロード"><span class="txt">資料ダウンロード</span></a></li>
                        </ul>
                    </div>
                </li>
                <!--<li class="navi07"><a href="<?php echo esc_url(home_url()); ?>/channel/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/menu_channel.png" alt="動画チャンネル"></a></li>-->
                <!-- <li class="navi07"><a href="" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/LINE_Brand_icon.png" alt="LINE"></a></li> -->
            </ul>
        </nav>
        <!-- <div class="sp-line">
            <ul><li class="navi07"><a href="" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/LINE_Brand_icon.png" alt="LINE"></a></li>
            </ul>
        </div> -->
        <div class="menu"><span></span><span></span><span></span></div>
    </div>
    <div class="menuBox">

        <ul class="menuList">
            <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
            <li><span class="parent">トレーラーハウスについて</span><span class="dropBtn"></span>
                <ul class="subList">
                    <li><a href="<?php echo esc_url(home_url()); ?>/about/">- トレーラーハウスとは</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/features/">- 自社のこだわり</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/merit/">- トレーラーハウスの魅力</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/flow/">- 納品までの流れ</a></li>
                </ul>
            </li>
            <!-- <li><a href="<?php echo esc_url(home_url()); ?>/plan/">ご利用目的</a></li> -->
            <li><span class="parent">ご利用目的</span><span class="dropBtn"></span>
                <ul class="subList">
                    <!-- <li><a href="<?php echo esc_url(home_url()); ?>/plan/">- ご利用目的</a></li> -->
                    <li><a href="<?php echo esc_url(home_url()); ?>/house_use/">- 個人でご検討の方へ</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/office_use/">- 法人でご検討の方へ</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/invest_use/">- 投資利用でご検討の方へ</a></li>
                    <!-- <li><a href="<?php echo esc_url(home_url()); ?>/sale_use/">- 売却をご検討の方へ</a></li> -->
                </ul>
            </li>
            <li><a href="<?php echo esc_url(home_url()); ?>/event/">イベント情報</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/works">施工事例</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/stock/">完成品在庫情報</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/news/">ニュース</a></li>
            <!--<li><a href="<?php echo esc_url(home_url()); ?>/channel/">動画チャンネル</a></li>-->
            <li><span class="parent">会社情報</span><span class="dropBtn"></span>
                <ul class="subList">
                    <li><a href="<?php echo esc_url(home_url()); ?>/company/">- 会社概要</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/staff/">- スタッフ紹介</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/blog/">- スタッフブログ</a></li>
                </ul>
            </li>
            <li><span class="parent">お問合せ</span><span class="dropBtn"></span>
                <ul class="subList">
                    <li><a href="<?php echo esc_url(home_url()); ?>/contact-event/">- 見学会予約</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/contact/">- お問合せ・無料お見積り</a></li>
                    <li><a href="<?php echo esc_url(home_url()); ?>/download/">- 資料ダウンロード</a></li>
                </ul>
            </li>
            <ul class="linkList">
                <li><a href="<?php echo esc_url(home_url()); ?>/contact-event/">見学会予約</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/download/">資料ダウンロード</a></li>
                <li><a href="<?php echo esc_url(home_url()); ?>/contact/">無料お見積り</a></li>
            </ul>
        </ul>
    </div>
</header>