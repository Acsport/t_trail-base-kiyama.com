<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>

<div id="Works">
     <div id="Stock">
	    <div class="sec01 fadeInTrigger">
	      <div class="content">
	        <div class="topBox clearfix fadeInTrigger">
	          <h2>Stocks</h2>
	          <div class="imgTxtBox">完成品在庫情報</div>
            </div>
          </div>
        </div>
        
	    <div class="sec02">
	      <div class="topBox fadeInTrigger">
	        <div class="content">
            
            <!--ここからcontent-->
            

            
<h3 class="headLine00 fadeInTrigger">
              <span class="en">Finished Product</span>
              <span class="jp">すでにトレーラーハウスとして完成している商品となります。<br class="wpBr">ご利用用途に合わせて改装も可能。<br class="wpBr">お気軽にお問合せください。</span>
              </h3>
              <h2 class="contTit Tc"><?php the_field('stock_name'); ?></h2>


<div class="works_slider">
  <ul class="gallery">
    <?php if( get_field('stock_img1') ):?>
    <li>
    <img src="<?php the_field('stock_img1'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img2') ):?>
    <li>
    <img src="<?php the_field('stock_img2'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img3') ):?>
    <li>
    <img src="<?php the_field('stock_img3'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img4') ):?>
    <li>
    <img src="<?php the_field('stock_img4'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img5') ):?>
    <li>
    <img src="<?php the_field('stock_img5'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img6') ):?>
    <li>
    <img src="<?php the_field('stock_img6'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img7') ):?>
    <li>
    <img src="<?php the_field('stock_img7'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img8') ):?>
    <li>
    <img src="<?php the_field('stock_img8'); ?>" alt="<?php the_field('stock_name'); ?>">
    <!--<p class="works_caption">ここにキャプションが入ります</p>-->
    </li>
    <?php endif; ?>


  </ul>
  <ul class="choice-btn">
    <?php if( get_field('stock_img1') ):?>
    <li>
      <img src="<?php the_field('stock_img1'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img2') ):?>
    <li>
      <img src="<?php the_field('stock_img2'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img3') ):?>
    <li>
      <img src="<?php the_field('stock_img3'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img4') ):?>
    <li>
      <img src="<?php the_field('stock_img4'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img5') ):?>
    <li>
      <img src="<?php the_field('stock_img5'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img6') ):?>
    <li>
      <img src="<?php the_field('stock_img6'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img7') ):?>
    <li>
      <img src="<?php the_field('stock_img7'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('stock_img8') ):?>
    <li>
      <img src="<?php the_field('stock_img8'); ?>" alt="<?php the_field('stock_name'); ?>">
    </li>
    <?php endif; ?>

     </ul>
</div>
<!---->
<div class="works_word_block">
 <div class="works_comment">
 <h3>商品レポート</h3>
 <p><?php the_field('stock_staff'); ?></p>
 </div>
 
 <div class="works_type">
 <table>
  <tr>
  <th>商品名</th>
    <td><?php the_field('stock_name'); ?></td>
  </tr>
  <tr>
  <th>用途</th>
    <td><?php the_field('stock_usage'); ?></td>
  </tr>
  <tr>
  <th>タイプ</th>
    <td><?php the_field('stock_type'); ?></td>
  </tr>
  <tr>
  <th>配送可能地域</th>
    <td><?php the_field('stock_delivery'); ?></td>
  </tr>
  <tr>
  <th>商談状況</th>
    <td><?php the_field('stock_business'); ?></td>
  </tr>
</table>
 </div>

	<form class="Reservet" action="<?php echo home_url(); ?>/contact-stock/" method="post">
      <input type="hidden" name="text-stockName" value="<?php the_field('stock_name'); ?>">
      <!--<a><i class="fas"></i><input style="color: #fff; cursor: pointer;" type="submit" value="商品問合せはこちら"></a> -->	
      <a><i class="fas"></i><input type="submit" value="商品問合せはこちら"></a>
  </form> 

</div>
<!-- pagerここから -->
<div class="pager_container">
<div class="pager_wrap">
    <?php previous_post_link('%link', '&larr; 前へ'); ?>
    <?php next_post_link('%link', '次へ &rarr;'); ?>
    </div>
    <a class="post_archive" href="<?php echo esc_url(home_url()); ?>/stock/">完成品在庫一覧</a>
</div><!--/.pager_container-->
<!-- pagerここまで -->
    
    <!--Block-->
    <section ID="Stock">
    <h3 class="headLine00">
                      <span class="en">Other Stocks</span>
                      <span class="jp">その他の完成品在庫</span>
    </h3>
        
    <div class="Block fadeInTrigger"><!--EtcBlock-->

        <!--↓以下には一覧を載せてください↓-->

         <div id="oll" class="area is-active"><!--area01-->
         <?php
$args = array(
    'post_type' => 'stock',
    'posts_per_page' => 3,
    'order' => 'ASC',
    'tax_query' => array(
      array(
        'taxonomy' => 'stock_situation', // カスタムタクソノミー
        'terms' => array('negotiation-now', 'possible', 'contract'), // カスタムタクソノミーのカテゴリー（タクソノミーターム）
        'field' => 'slug'
      ),
  ),
);
$stock_query = new WP_Query( $args );
?>
            <ul>
            <?php if ( $stock_query->have_posts() ) : ?>
    <?php while ( $stock_query->have_posts() ) : $stock_query->the_post();?>
        <li>
          <figure>
            <?php
            $terms = get_the_terms($post -> ID, 'stock_situation');
            foreach($terms as $term){
            $term_slug = $term -> slug;
            }
            ?>
              <div class="ribbon <?php echo esc_html($term_slug); ?>">
                <?php the_field('stock_business'); ?>
              </div>
            <img src="<?php the_field('stock_img'); ?>" alt="商品名">
          </figure>
          <?php if( get_field('stock_name') ):?>
           <h2><?php the_field('stock_name'); ?></h2>
           <?php endif; ?>
           <dl class="eventadata">
           <?php if( get_field('stock_usage') ):?>
          <dt>用　途：</dt>
          <dd><?php the_field('stock_usage'); ?></dd>
          <?php endif; ?>
          <?php if( get_field('stock_type') ):?>
          <dt>タイプ：</dt>
          <dd><?php the_field('stock_type'); ?></dd>
          <?php endif; ?>
          <?php if( get_field('stock_business') ):?>
          <dt>状　況：</dt>
          <dd><?php the_field('stock_business'); ?></dd>
          <?php endif; ?>
          </dl>
          <dl class="Bt">
          <dt><a href="<?php the_permalink(); ?>">詳細はこちら</a></dt>
          <dd><form action="<?php echo home_url(); ?>/contact-stock/" method="post">
      <input type="hidden" name="text-stockName" value="<?php the_field('stock_name'); ?>">
      <!--<a><input style="color: #fff; cursor: pointer;" type="submit" value="商品問合せ"></a>-->
      <a><input type="submit" value="商品問合せ"></a>
  </form> </dd>
          </dl>	
        </li>
        <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
                </ul>
             </div><!--/area01-->
            
        
        <!--ここまでストック一覧-->
        </div>
	</section><!--/Block-->

              <!---->
            </div>
          </div>
	      
        </div><!--/.sec2-->
  
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>