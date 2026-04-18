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
                        

            
   <h3 class="headLine00 fadeInTrigger">
                      <span class="en">Staff</span>
                      <span class="jp"><?php the_field('staff_name'); ?></span>
        </h3> 

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}
?>                  
          <div class="staff-profile">
            <div class="staff-profile-inner">
                <div class="staff-profile-image">
                  <img src="<?php the_field('staff_img'); ?>" alt="<?php the_field('staff_name'); ?>">
                </div>
                <div class="staff-profile-content">
                  <?php if( get_field('staff_name') ):?>
                  <span class="staff-profile-name"><?php the_field('staff_name'); ?></span>
                  <?php endif; ?>
                  <?php if( get_field('staff_position') ):?>
                  <span class="staff-profile-position"><?php the_field('staff_position'); ?></span>
                  <?php endif; ?>
                  <?php if( get_field('staff_comment') ):?>
                  <span class="staff-profile-comment"><?php the_field('staff_comment'); ?></span>
                  <?php endif; ?>
                </div>
             </div>
             
<!-- pagerここから -->
<div class="pager_container">
<div class="pager_wrap">
    <?php previous_post_link('%link', '&larr; 前へ'); ?>
    <?php next_post_link('%link', '次へ &rarr;'); ?>
    </div>
    <a class="post_archive" href="<?php echo esc_url(home_url()); ?>/staff/">スタッフ一覧</a>
</div><!--/.pager_container-->
<!-- pagerここまで -->


          </div><!--/staff-profile-->
              
              
    </div><!--/.contnt-->
  </div>
  
</div><!--/.sec2-->
  
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>