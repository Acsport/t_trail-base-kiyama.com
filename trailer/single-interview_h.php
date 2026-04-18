<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>

<div id="Works">
	    <div class="sec01 fadeInTrigger">
	      <div class="content">
	        <div class="topBox clearfix fadeInTrigger">
	          <h2>Voice</h2>
	          <div class="imgTxtBox">お客様の声（個人向け）</div>
            </div>
          </div>
        </div>
        
	    <div class="sec02">
	      <div class="topBox fadeInTrigger">
	        <div class="content">
            
            <!--ここからcontent-->
            

<?php
          $post_type_slug = 'interview_h';
          $tax_terms = get_terms($tax_name);
        ?> 
	          <h3 class="headLine00 fadeInTrigger">
              <span class="en ttl_green">For House</span>
              <?php if( get_field('interview_title') ):?>
              <span class="jp"><?php the_field('interview_title'); ?></span>
              <?php endif; ?>
              </h3>
              <?php if( get_field('interview_name') ):?>
              <h2 class="contTit Tc"><span><?php the_field('interview_name'); ?></span></h2>
              <?php endif; ?>
    
<!---->
<div class="infoBox" id="a02">
                  
				<?php if( get_field('interview_img01') ):?>
                   <div class="intervew-A-img">
                      <img src="<?php the_field('interview_img01'); ?>" alt="<?php the_field('interview_title'); ?>">
                   </div>
				 <?php endif; ?>
                 <div class="interview_txt_area">
                      <!-- インタビュー① //-->
                      <?php if( get_field('interview_Q_1') ):?>
                      <div class="intervew-Q">
                      <p><?php the_field('interview_Q_1'); ?></p>
                      </div>
                      <?php endif; ?>
                      
                      <?php if( get_field('interview_A_1') ):?>
                      <div class="interview-A">
                        <p><?php the_field('interview_A_1'); ?></p>
                      </div>
                      <?php endif; ?>
                      
                      <!-- インタビュー② //-->
                      <?php if( get_field('interview_Q_2') ):?>
                      <div class="intervew-Q">
                      <p><?php the_field('interview_Q_2'); ?></p>
                      </div>
                      <?php endif; ?>
                      
                      <?php if( get_field('interview_A_2') ):?>
                      <div class="interview-A">
                        <p><?php the_field('interview_A_2'); ?></p>
                      </div>
                      <?php endif; ?>
                      
                      <!-- インタビュー③ //-->
                      <?php if( get_field('interview_Q_3') ):?>
                      <div class="intervew-Q">
                      <p><?php the_field('interview_Q_3'); ?></p>
                      </div>
                      <?php endif; ?>
                      
                      <?php if( get_field('interview_A_3') ):?>
                      <div class="interview-A">
                        <p><?php the_field('interview_A_3'); ?></p>
                      </div>
                      <?php endif; ?>
                      
                      <!-- インタビュー④ //-->
                      <?php if( get_field('interview_Q_4') ):?>
                      <div class="intervew-Q">
                      <p><?php the_field('interview_Q_4'); ?></p>
                      </div>
                      <?php endif; ?>
                      
                      <?php if( get_field('interview_A_4') ):?>
                      <div class="interview-A">
                        <p><?php the_field('interview_A_4'); ?></p>
                      </div>
                      <?php endif; ?>
                      <!-- /インタビュー-->
                  
                </div><!--/interview_txt_area-->
                <?php if( get_field('interview_img02') ):?>
                   <div class="intervew-A-img">
                      <img src="<?php the_field('interview_img02'); ?>" alt="<?php the_field('interview_title'); ?>">
                   </div>
				 <?php endif; ?>
                 
              
              </div><!--/infoBox-->
<!-- pagerここから -->
<div class="pager_container">
<div class="pager_wrap">
    <?php previous_post_link('%link', '&larr; 前のインタビュー'); ?>
    <?php next_post_link('%link', '次のインタビュー &rarr;'); ?>
    </div>
    <a class="post_archive" href="<?php echo esc_url(home_url()); ?>/house_use/#voice">お客様の声<br />（個人向け）</a>
</div><!--/.pager_container-->
<!-- pagerここまで -->
 

              <!---->
            </div>
          </div>
	      
        </div><!--/.sec2-->
  
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>