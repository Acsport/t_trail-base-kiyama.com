<?php
global $post; /* 変数を別のスコープでも利用するにはグローバル変数として宣言 $postはWordPress標準でついているグローバル変数 */
$slug = $post->post_name; /* スラッグを取得 */
?>

<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>

	<div id="Event">
    <section id="Staff">
        <div class="sec01 fadeInTrigger">
          <div class="content">
            <div class="topBox clearfix fadeInTrigger">
              <h2>Staff</h2>
              <div class="imgTxtBox">スタッフ紹介</div>
              </div>
            </div>
          </div>
        </section>
          
        <div class="sec02">
          <div class="topBox fadeInTrigger">
            <div class="content">
            
            <!--ここからcontent-->                     

            
              <div class="staff_inner"> 
              <?php
              $args = array(
                'paged' => $paged,
                  'post_type' => 'staff',
                  'posts_per_page' => -1,
                    'order' => 'DESC',
                    'post_status' => 'publish',
              );
              $staff_query = new WP_Query( $args );
              ?>
                <?php if ( $staff_query->have_posts() ) : ?>
                  <?php while ( $staff_query->have_posts() ) : $staff_query->the_post();?>
                    <a href="<?php the_permalink(); ?>" alt="<?php the_field('staff_name'); ?>">
                        <div class="profile-card">
                          <div class="profile-card__inner">
                          <div class="profile-thumb">
                            <img src="<?php the_field('staff_img'); ?>" alt="<?php the_field('staff_name'); ?>">
                          </div>
                          <div class="profile-content">
                            <?php if( get_field('staff_name') ):?>
                            <span class="profile-name"><?php the_field('staff_name'); ?></span>
                            <?php endif; ?>
                            <?php if( get_field('staff_position') ):?>
                            <span class="profile-position"><?php the_field('staff_position'); ?></span>
                            <?php endif; ?>
                            <?php if( get_field('staff_comment') ):?>
                            <span class="profile-intro"><?php the_field('staff_comment'); ?></span>
                            <?php endif; ?>
                          </div>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; ?>
                  <?php endif; wp_reset_postdata(); ?>
                </div>
              <!--/list1-->
                            
                            <!-- pagerここから -->
              <div class="pager_container">
              <?php
              if ( function_exists( 'pagination' ) ) :
                pagination( $staff_query->max_num_pages, $paged, 2, true);
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