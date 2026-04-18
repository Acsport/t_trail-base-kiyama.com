 <?php
    $url = $_SERVER['REQUEST_URI'];
    ?>
    <?php
  if(strstr($url,'blog')==true):
?>
<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>

	<div id="Event">
    <section id="Blog">
	    <div class="sec01 fadeInTrigger">
	      <div class="content">
	        <div class="topBox clearfix fadeInTrigger">
	          <h2>Blog</h2>
	          <div class="imgTxtBox">スタッフブログ</div>
            </div>
          </div>
        </div>
      </section>
        
	    <div class="sec02">
	      <div class="topBox fadeInTrigger">
	        <div class="content">
            
            <!--ここからcontent-->
                        
 
            
   <h3 class="headLine00 fadeInTrigger">
    <span class="en">Staff Blog</span>
    <span class="jp">スタッフブログ</span>
    </h3>

 <!--ブログ　リスト ★1ページにこのリストを最大12件表示させる-->
<div class="blog-area">
<div class="changeCard">
  <ul>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <li class="changeItem defaultList">
      <a href="<?php the_permalink(); ?>">
      <?php
              $categories = get_the_category();
            if ( $categories ) {

              foreach ( $categories as $category ) {
                echo '<p class="itemCat dfont ' .$category->slug. '">';
                echo $category->name;
                echo '</p>';
              }

            }
            ?>
        <?php the_post_thumbnail('blog'); ?>
        <!--★↑記事の最初の画像もしくはアイキャッチにした画像を出力させる-->
        <div class="changeItemTxt"> 
        <time class="pubdate sng-link-time dfont" itemprop="datePublished" datetime="2022年12月12日"><?php the_time('Y年n月j日'); ?></time>
          <p class="itemTitle"><?php the_title(); ?></p>
          <p class="itemTxt"><?php the_excerpt(); ?></p>
          <?php
            $categories = get_the_category();
            if ( $categories ) {
              echo '<ul class="itemTag">';
              foreach ( $categories as $category ) {
                echo '<li>'.$category->name.'</li>';
              }
              echo '</ul>';
            }
            ?>
        </div>
      </a>
    </li>
    <?php endwhile; ?>

  </ul>

<!-- pager -->
<div class="pager_container">
  <ol class="pagination-2">
    <?php
    global $wp_query;

    $big = 999999999; // 任意の大きな数値を設定
    $paged = max( 1, get_query_var( 'paged' ) ); // 現在のページ番号を取得

    // ページリンクを生成
    $links = paginate_links( array(
        'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'    => '?paged=%#%',
        'current'   => $paged,
        'total'     => $wp_query->max_num_pages,
        'type'      => 'array', // 配列形式でリンクを取得
        'prev_text' => '<', // 前のページ
        'next_text' => '>', // 次のページ
        'end_size'  => 1, // 最初と最後に表示するページ数
        'mid_size'  => 2, // 現在のページの前後に表示するページ数
    ) );

    // ページリンクが存在する場合、HTMLを生成
    if ( $links ) {
        foreach ( $links as $link ) {
            // "..." をリンクなしの<li>タグとして処理
            if ( strpos( $link, 'dots' ) !== false ) {
                echo '<li class="dots">...</li>';
            } else {
                // 現在のページに "current" クラスを追加
                $class = strpos( $link, 'current' ) !== false ? 'class="current"' : '';
                echo '<li ' . $class . '>' . $link . '</li>';
            }
        }
    }
    ?>
  </ol>
</div>

<!-- /pager -->
</div>
</div><!--/.blog-area-->
<!--/ブログ　リスト-->



<?php else : ?>
<p style="text-align:center;font-size:20px;font-weight:bold;">
  Coming Soon!
</p>
<?php endif; ?>
<!--ここまで一覧-->
              
    </div><!--/.contnt-->
  </div>
  
</div><!--/.sec2-->
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>
<?php elseif(strstr($url,'works_type')==true): ?>
  <?php include("archive-works-term.php"); ?>
  <?php elseif(strstr($url,'news_type')==true): ?>
  <?php include("archive-news.php"); ?>
  <?php elseif(strstr($url,'evwnt_type')==true): ?>
  <?php include("archive-event.php"); ?>
  <?php elseif(strstr($url,'staff_type')==true): ?>
  <?php include("archive-staff.php"); ?>
  <?php elseif(strstr($url,'stock_type')==true): ?>
  <?php include("archive-stock.php"); ?>
<?php endif; ?>