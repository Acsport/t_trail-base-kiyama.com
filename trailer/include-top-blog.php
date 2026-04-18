<?php
/**
 * Template Part: Top - BLOG一覧
 * Usage:
 *   基本       : get_template_part('include-top-blog');
 *   件数指定   : get_template_part('include-top-blog', null, ['num' => 6]);
 *   カテゴリ指定: get_template_part('include-top-blog', null, ['cat' => 3]); // カテゴリID
 *   両方指定   : get_template_part('include-top-blog', null, ['num' => 6, 'cat' => 3]);
 */

// 受け取り引数（WP 5.5+）
$tpl_args = isset($args) && is_array($args) ? $args : [];
$num      = !empty($tpl_args['num']) ? (int) $tpl_args['num'] : 6; // デフォ6件
$cat_id   = !empty($tpl_args['cat']) ? (int) $tpl_args['cat'] : 0; // 指定なし

$query_args = [
  'post_type'      => 'post',
  'posts_per_page' => $num,
  'orderby'        => 'date',
  'order'          => 'DESC',
  'post_status'    => 'publish',
];

if ( $cat_id > 0 ) {
  $query_args['cat'] = $cat_id; // または 'category__in' => [$cat_id]
}

$q = new WP_Query($query_args);
$has_posts = $q->have_posts();
?>
<!-- .home_blog -->
<div class="home_blog">
  <figure class="home_blog_headimg">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/blog_bg_02.png' ); ?>" alt="トレーラーハウス">
  </figure>

  <div class="home_blog_inner">
    <h2 class="headLine01">
      <span class="en">Blog</span><span class="jp">スタッフブログ</span>
    </h2>

    <div class="home_blog_slide">
      <ul class="home_blog_slider">
        <?php if ( $has_posts ) : ?>
          <?php while ( $q->have_posts() ) : $q->the_post(); ?>
            <?php
              // サムネイル（'blog' サイズがなければ 'medium' などに変更）
              $thumb_html = get_the_post_thumbnail(get_the_ID(), 'blog', [
                'class'    => 'home_blog_thumb',
                'loading'  => 'lazy',
                'decoding' => 'async',
                'alt'      => esc_attr(get_the_title()),
              ]);

              // カテゴリ（先頭のみ表示）
              $cats = get_the_category();
              $primary_cat_name = '';
              $primary_cat_slug = '';
              if ( !empty($cats) && !is_wp_error($cats) ) {
                $primary_cat_name = $cats[0]->name ?? '';
                $primary_cat_slug = $cats[0]->slug ?? '';
              }
            ?>
            <li class="home_blog_item">
              <a href="<?php the_permalink(); ?>" class="home_blog_link">
                <figure class="home_blog_figure">
                  <?php if ( $thumb_html ) : ?>
                    <?php echo $thumb_html; ?>
                  <?php else : ?>
                    <span class="home_blog_thumb --noimage" aria-hidden="true"></span>
                  <?php endif; ?>
                </figure>

                <?php if ( $primary_cat_name ) : ?>
                  <p class="home_blog_cat <?php echo esc_attr($primary_cat_slug); ?>">
                    <?php echo esc_html($primary_cat_name); ?>
                  </p>
                <?php endif; ?>

                <p class="home_blog_date"><?php echo esc_html( get_the_time('Y年n月j日') ); ?></p>
                <p class="home_blog_title"><?php echo esc_html( get_the_title() ); ?></p>
              </a>
            </li>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php else : ?>
          <li class="home_blog_noText" style="text-align:center;font-size:20px;font-weight:bold;">
            Coming Soon!
          </li>
        <?php endif; ?>
      </ul>
      <!-- /slider -->
    </div>

    <?php if ( $has_posts ) : ?>
      <div class="btn">
        <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
          <div><span>ブログ一覧</span></div>
        </a>
      </div>
    <?php endif; ?>
  </div>
</div>
<!-- /.home_blog -->
