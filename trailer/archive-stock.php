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
              <span class="en">Trailer House Stocks</span>
              <span class="jp">完成品在庫をご覧いただきたい方はお気軽にお問合せください</span>
              </h3>
              
<?php
$args = array(
	'paged' => $paged,
    'post_type' => 'stock',
    'posts_per_page' => -1,
      'order' => 'DESC',
      'post_status' => 'publish',
    'tax_query' => array(
      array(
        'taxonomy' => 'stock_situation', // カスタムタクソノミー
        'terms' => array('negotiation-now', 'possible', 'contract'), // カスタムタクソノミーのカテゴリー（タクソノミーターム）
        'field' => 'slug'
      ),
  ),
);
$stock_query = new WP_Query( $args );
$posts = get_posts($args);
?>
 <section class="Block"><!--Block-->
	       
 <div id="oll" class="area is-active"><!--area01-->
	 <?php if(!empty($posts)): ?>
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
          <dd>
			            <form action="<?php echo home_url(); ?>/contact-stock/" method="post">
      <input type="hidden" name="text-stockName" value="<?php the_field('stock_name'); ?>">
      <a><input style="color: #fff; cursor: pointer;" type="submit" value="商品問合せ"></a>
  </form> 
			  </dd>
          </dl>	
        </li>
        <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
	      
      </ul>
	        <?php else: ?>
        <p>現在在庫はございません</p>
      <?php endif; ?>
	 </div><!--/area01-->

 
</section><!--/EvemtList-->
	

<!--ここまでストック一覧-->
              <!-- pagerここから -->
<div class="pager_container">
<?php
if ( function_exists( 'pagination' ) ) :
  pagination( $stock_query->max_num_pages, $paged, 2, true);
endif;
?>
</div><!--/.pager_container-->
<!-- pagerここまで -->
      </div><!--/.contnt-->
    </div>
    
  </div><!--/.sec2-->
  
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>