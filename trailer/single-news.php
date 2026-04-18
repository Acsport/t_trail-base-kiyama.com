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
            

            
<h3 class="headLine00 fadeInTrigger">
              <span class="en">News</span>
              <span class="jp"><?php the_title(); ?></span>
  </h3>

<!--main-->	

<section class="ContentMain"><!--ContentMain-->

<div class="wp-block-area common-post">
<!--投稿日とカテゴリー-->
<div class="news_date_area">
	<p class="date"><?php the_time('Y/n/j'); ?>　|　
	<span class="cat">
            <?php $terms = get_the_terms($post->ID, 'news_type'); 
              foreach( $terms as $term ) {
                echo $term->name;
              }
              ?>
	</span>
	</p>
	</div>
<!--/投稿日とカテゴリー-->
<?php the_content(); ?>

</div>
<!--/ContentMain-->

<!-- pagerここから -->
<div class="pager_container">
<div class="pager_wrap">
    <?php previous_post_link('%link', '&larr; 前の記事へ'); ?>
    <?php next_post_link('%link', '次の記事へ &rarr;'); ?>
    </div>
    <a class="post_archive" href="<?php echo esc_url(home_url()); ?>/news/">お知らせ一覧</a>
</div><!--/.pager_container-->
<!-- pagerここまで -->
	

</section>




  <!--最新のイベント情報を表示-->
<?php
 $args = array(
     'post_type' => 'event',
     'posts_per_page' => 1,
     'order' => 'DESC',
     'tax_query' => array(
         array(
           'taxonomy' => 'event_type', // カスタムタクソノミー
           'terms' => array('consult', 'tour'), // カスタムタクソノミーのカテゴリー（タクソノミーターム）
           'field' => 'slug'
         ),
     ),
 );
 $event_query = new WP_Query( $args );
$posts = get_posts($args);
 ?>
<?php if(!empty($posts)): ?>
<section class="EtcBlock fadeInTrigger"><!--EtcBlock-->

  <h3 class="headLine00">
    <span class="en">Events</span>
    <span class="jp">イベント情報</span>
  </h3>

     <?php if ( $event_query->have_posts() ) : ?>
    <?php while ( $event_query->have_posts() ) : $event_query->the_post();?>
  <div class="home_event_list">
      <article class="home_event_01">
        <div class="home_event__header_01">
        <figure class="home_event__thumbnail_01">
          <img src="<?php the_field('event_gallery01'); ?>" alt="<?php the_title_attribute(); ?>" class="home_event__image_01">
          </figure>
        </div>
        <div class="home_event__body_01">
            <?php
              $terms = get_the_terms($post -> ID, 'event_type');
              foreach($terms as $term){
              $term_slug = $term -> slug;
              }
            ?>
            <div class="event_btn_flex">
               <?php $terms = get_the_terms($post->ID, 'event_type'); 
              foreach( $terms as $term ) {
                echo '<p class="home_event__title_type btn_enge '. $term->slug.'">';
                echo $term->name;
                echo '</p>';
               }
            ?>
            </div>
            <?php if( get_field('event_title') ):?>
            <p class="home_event__title_01">
              <?php the_field('event_title'); ?>
            </p>
            <?php endif; ?>
            <?php if( get_field('event_hold') ):?>
            <p class="home_event__date">
              <span class="home_event_data">日程</span>
              <?php the_field('event_hold'); ?>
            </p>
            <?php endif; ?>
            <?php if( get_field('event_venue') ):?>
            <p class="home_event__place">
              <span class="home_event_data">会場</span>
              <?php the_field('event_venue'); ?>
            </p>
            <?php endif; ?>
            <div class="Reservet"><a href="<?php the_permalink(); ?>"><i class="fas fa-calendar-alt"></i> 詳細はこちら</a></div>
        </div>
      </article>
    </div>
   <!--/home_event_list-->       

   
   <form class="Reservet" action="<?php echo home_url(); ?>/contact-event/" method="post">
      <input type="hidden" name="text-eventName" value="<?php the_field('event_title'); ?>">
      <a><i class="fas fa-calendar-alt"></i><input style="color: #fff; padding-left: 5px; cursor: pointer;" type="submit" value="来場予約はこちら"></a>
  </form> 
   <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
 </section>  
     <?php else: ?>

      <?php endif; ?>
 <!--/EtcBlock-->

  </div><!--/.contnt-->
</div>

</div><!--/.sec2-->
        
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>