<!--home_plan_box 
　　　TOP と商品プランページに入る-->

<div class="home_plan_box">
   <div class="home_plan_in">
      <h2 class="headLine05">
      <span class="en">Works</span>
      <span class="jp">施工事例</span></h2>
   </div>

   

   <!--施工事例-->	
<?php
global $post;
$post_id = $post->ID;
$post_type_slug = 'works'; // 投稿タイプ
$queried_object = get_queried_object();
$term_slug = $queried_object->slug;


$my_terms = get_queried_object();
$my_slug = $my_terms->slug;
$my_name = $my_terms->name;
?>      

<div class="works_slider_area zoomOutTrigger">
      <ul class="top_works_slider">
      
      <!--★繰り返しコード-->
         <?php 
            $post_type_slug = 'works'; 
            $queried_object = get_queried_object();
            $term_slug = $queried_object->slug;
            ?>
            
         <?php
            $args = array(
               'post_type' => $post_type_slug,
               'posts_per_page' => 20,
               'post_status' => 'publish',
            );
               $works_query = new WP_Query( $args );
            ?>
            <?php if ( $works_query->have_posts() ) : ?>
               
               <?php while ( $works_query->have_posts() ) : $works_query->the_post();?>
               
         <!--★繰り返しはじめ-->
         <li class="works_area">
         <a href="<?php the_permalink(); ?>">            
            <div class="right">
               <img src="<?php the_field('works_img'); ?>" alt="<?php the_title(); ?>">  
            </div>
            <div class="left">
               <p class="works_ttl_jp">
               <?php if( get_field('works_title') ):?>
                  <?php the_field('works_title'); ?><!--タイトル-->
                     <?php endif ?>
               </p>
               <dl>
                  <dt class="home_event_data">用途</dt>
                  <dd>
                     <?php if( get_field('works_usage') ):?>
                        <?php the_field('works_usage'); ?>
                     <?php endif ?></dd>
               </dl>
               
               <dl>
                  <dt class="home_event_data">タイプ</dt>
                  <dd>
                     <?php if( get_field('works_type') ):?>
                        <?php the_field('works_type'); ?>
                     <?php endif ?></dd>
               </dl>        
            </div>
         </a>
         </li>
         <!--★繰り返し終わり-->
         
      <?php endwhile; ?>
      
   <?php endif; ?>
      <?php wp_reset_postdata(); ?> 
         <!--/★繰り返しコード-->  
         
         
      <!--/slider-->
      </ul>

      </div>
   <!-- /施工事例 -->

      <div class="catch_line_text_works">
      <div class="marquee-anim">
            <div class="marquee-inline">
            WORKS
            </div>
            <div class="marquee-inline">
            WORKS
            </div>
            <div class="marquee-inline">
            WORKS
            </div>
            <div class="marquee-inline">
            WORKS
            </div>
            <div class="marquee-inline">
            WORKS
            </div>
      </div>
   </div><!-- marquee-anim -->

	

   <div class="btn_green_btn">
      <a href="<?php echo esc_url( home_url() ); ?>/works/">
            <div><span>施工事例一覧へ</span></div>
      </a>
   </div>

</div>
<!--/.home_plan_box-->  

