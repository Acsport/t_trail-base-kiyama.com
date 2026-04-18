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
  <!-- pagerここから -->
<div class="pager_container">
<?php
if ( function_exists( 'pagination' ) ) :
  pagination( $wp_query->max_num_pages, get_query_var( 'paged' ), 2, true);
endif;
?>
</div>
<!-- pagerここまで -->
</div>
</div><!--/.blog-area-->
<!--/ブログ　リスト-->



<?php else : ?>
<p>記事が見つかりませんでした。</p>
<?php endif; ?>
<!--ここまで一覧-->
              
    </div><!--/.contnt-->
  </div>
  
</div><!--/.sec2-->
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>
