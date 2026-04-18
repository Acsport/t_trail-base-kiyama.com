<?php
/**
 * Template Part: Top - スタッフ一覧（未使用）
 * Usage: get_template_part('include-top-staff');
 */

$args = array(
  'posts_per_page' => -1,       // 全件
  'post_type'      => 'staff',  // カスタム投稿タイプ
  'orderby'        => 'date',   // 日付順
  'order'          => 'DESC',   // 新しい順
  'post_status'    => 'publish' // 公開済みのみ
);

$q = new WP_Query($args);
?>
<div class="home_staff fadeInTrigger">
  <div class="home_staff_inner">
    <h2 class="headLine01"><span class="en">Staff</span>
    <span class="jp">スタッフ紹介</span></h2>
      <div class="home_staff_slide">
        <ul class="home_staff_slider">
          <?php if ( $q->have_posts() ) : ?>
            <?php while ( $q->have_posts() ) : $q->the_post();
              // ACFフィールド
              $staff_img      = get_field('staff_img');
              $staff_name     = get_field('staff_name');
              $staff_position = get_field('staff_position');
              $staff_romaji   = get_field('staff_romaji');

              // 画像がなければアイキャッチをフォールバック
              if ( empty($staff_img) ) {
                $staff_img = get_the_post_thumbnail_url(get_the_ID(), 'medium');
              }
            ?>
              <li class="home_staff_item">
                <a href="<?php the_permalink(); ?>" class="home_staff_link">
                  <?php if ( $staff_img ) : ?>
                    <img 
                      src="<?php echo esc_url($staff_img); ?>" 
                      alt="<?php echo esc_attr($staff_name ?: get_the_title()); ?>" 
                      class="home_staff_img"
                      decoding="async"
                      loading="lazy"
                    >
                  <?php endif; ?>

                  <?php if ( $staff_position ) : ?>
                    <p class="home_staff_position"><?php echo esc_html($staff_position); ?></p>
                  <?php endif; ?>

                  <?php if ( $staff_name ) : ?>
                    <p class="home_staff_name"><?php echo esc_html($staff_name); ?></p>
                  <?php endif; ?>

                  <?php if ( $staff_romaji ) : ?>
                    <p class="home_staff_yomi"><?php echo esc_html($staff_romaji); ?></p>
                  <?php endif; ?>
                </a>
              </li>
            <?php endwhile; wp_reset_postdata(); ?>
          <?php else : ?>
            <li class="home_staff_noText">現在スタッフ情報はありません</li>
          <?php endif; ?>
          </ul>
        <!--/ul class="home_staff_list"-->  
      </div>
      <div class="btn">
          <a href="<?php echo esc_url( home_url() ); ?>/staff/">
          <div><span>スタッフ一覧</span></div></a>
      </div>
  </div>
</div>
<!--/.home_staff-->