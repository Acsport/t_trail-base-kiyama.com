<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>

<div id="Event">
    <section id="News">
	    <div class="sec01 fadeInTrigger">
	      <div class="content">
	        <div class="topBox clearfix fadeInTrigger">
	          <h2>News</h2>
	          <div class="imgTxtBox">ニュース</div>
            </div>
          </div>
        </div>
      </section>
        
	    <div class="sec02">
	      <div class="topBox fadeInTrigger">
	        <div class="content">
            
            <!--ここからcontent-->
            

<?php
$args = array(
	'paged' => $paged,
    'post_type' => 'news',
    'posts_per_page' => 12,
    'order' => 'DESC',
);
$news_query = new WP_Query( $args );
?>
<div class="news-area">


<ul class="news-list">
<?php if ( $news_query->have_posts() ) : ?>
    <?php while ( $news_query->have_posts() ) : $news_query->the_post();?>
    <li class="item fadeInTrigger">
      <a href="<?php the_permalink(); ?>">
          <p class="date">
            <?php the_time('Y/n/j'); ?>
          </p>
          <p class="category">
            <span class="cat">
            <?php 
              $terms = get_the_terms($post->ID, 'news_type'); 
              if ( $terms ) {
                foreach( $terms as $term ) {
                  echo $term->name;
                }
              }
            ?>
            </span>
              <?php
                  $days = 7;
                  $now = date_i18n('U');
                  $entry = get_the_time('U');
                  $term = date('U',($now - $entry)) / 86400;
                  if( $days > $term ) {
                      echo '<span class="new">New</span>';
                  }
              ?>
          </p>
          <p class="title">
            <?php the_title(); ?>
          </p>
      </a>
    </li>
    <?php endwhile; ?>
<?php else : ?>
    <li class="no-posts" style="text-align: center; padding: 20px; font-size: 16px;">
        現在お知らせはありません
    </li>
<?php endif; wp_reset_postdata(); ?>
</ul>

</div>	 

<!--/list1-->    

<!-- pagerここから -->
<div class="pager_container">
    <?php
    // 現在のページ番号を取得
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // カスタム投稿タイプのクエリ
    $args = array(
        'post_type' => 'news', // カスタム投稿タイプのスラッグ名
        'posts_per_page' => 10, // 1ページに表示する投稿数
        'paged' => $paged, // ページ番号
    );

    $custom_query = new WP_Query($args);

    // ページネーションを表示
    if ($custom_query->have_posts()) : ?>
        <ol class="pagination-2">
            <?php
            $big = 999999999; // 大きな数値
            $links = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, $paged),
                'total'     => $custom_query->max_num_pages,
                'type'      => 'array', // 配列として取得
                'prev_text' => '&lt;', // 「前へ」ボタンのテキスト
                'next_text' => '&gt;', // 「次へ」ボタンのテキスト
            ));

            if ($links) {
                foreach ($links as $link) {
                    $class = strpos($link, 'current') !== false ? 'class="current"' : '';
                    echo '<li ' . $class . '>' . $link . '</li>';
                }
            }
            ?>
        </ol>
    <?php endif; ?>

    <?php wp_reset_postdata(); // クエリをリセット ?>
</div>

<!-- pagerここまで -->
              
              
            </div><!--/.contnt-->
			  
			  
          </div>
	      
        </div><!--/.sec2-->
        
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>