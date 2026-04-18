<?php
// フロントページかつホームページでない場合にパンくずリストを表示
if (!is_front_page() && !is_home() && function_exists('bcn_display')) {
    echo '<div class="pan-Navi">';
    echo '<div class="pan-Navi-inner">';
    bcn_display();
    echo '</div></div>';
}
?>

<!--右固定バナー1-->
<div class="bnr_sp"><a href="<?php echo esc_url( home_url() ); ?>/download/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bnr_shiryo_footer.webp"
               alt="佐賀トレーラーハウス資料ダウンロード"></a></div>

<div class="bnr_pc"><a href="<?php echo esc_url( home_url() ); ?>/download/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bnr_shiryo.png" alt="佐賀トレーラーハウス資料ダウンロード"></a>
</div>

<!--右固定バナー2-->
<div class="bnr2_sp"><a href="<?php echo esc_url( home_url() ); ?>/contact-event/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bnr_kengaku_footer.webp"
               alt="佐賀県基山町トレーラーハウス見学会予約"></a></div>

<div class="bnr2_pc"><a href="<?php echo esc_url( home_url() ); ?>/contact-event/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bnr_kengaku.png" alt="佐賀県基山町トレーラーハウス見学会予約"></a>
</div>

<!--右固定バナー3-->
<div class="bnr3_sp"><a href="<?php echo esc_url( home_url() ); ?>/contact/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bnr_contact_footer.webp"
               alt="施工事例"></a></div>

<div class="bnr3_pc"><a href="<?php echo esc_url( home_url() ); ?>/contact/">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bnr_contact.png" alt="佐賀トレーラーハウス無料お見積り"></a>
</div>