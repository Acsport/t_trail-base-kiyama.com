<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>

<div id="Works">
	    <div class="sec01 fadeInTrigger">
	      <div class="content">
	        <div class="topBox clearfix fadeInTrigger">
	          <h2>Works</h2>
	          <div class="imgTxtBox">施工実績</div>
            </div>
          </div>
        </div>
        
	    <div class="sec02">
	      <div class="topBox fadeInTrigger">
	        <div class="content">
            
            <!--ここからcontent-->
                        

<?php
          $tax_name = 'works_type'; 
          $post_type_slug = 'works';
          $tax_terms = get_terms($tax_name);
        ?> 
	          <h3 class="headLine00 fadeInTrigger">
              <span class="en">Works</span>
              <?php if( get_field('works_name') ):?>
              <span class="jp"><?php the_field('works_title'); ?></span>
              <?php endif; ?>
              </h3>
              <?php if( get_field('works_name') ):?>
              <h2 class="contTit Tc"><span><?php the_field('works_name'); ?></span></h2>
              <?php endif; ?>
             <div class="Block1"><!--SearchWorp-->	
              <ul class="tag">
              <?php $terms = get_the_terms($post->ID,'works_type'); ?>
              <?php foreach ( $terms as $value ) {
					        echo '<li><a id="'.$value->slug.'" href="'.get_term_link($value).'" data-toggle="tab">'.$value->name.'</a></li>';
                } ?>
              </ul>
              </div>


<div class="works_slider">
  <ul class="gallery">
    <?php if( get_field('works_img') ):?>
    <li>
    <img src="<?php the_field('works_img'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img2') ):?>
    <li>
    <img src="<?php the_field('works_img2'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img3') ):?>
    <li>
    <img src="<?php the_field('works_img3'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img4') ):?>
    <li>
    <img src="<?php the_field('works_img4'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img5') ):?>
    <li>
    <img src="<?php the_field('works_img5'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img6') ):?>
    <li>
    <img src="<?php the_field('works_img6'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img7') ):?>
    <li>
    <img src="<?php the_field('works_img7'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img8') ):?>
    <li>
    <img src="<?php the_field('works_img8'); ?>" alt="<?php the_field('works_title'); ?>">
    
    </li>
    <?php endif; ?>

  </ul>
  <ul class="choice-btn">
  <?php if( get_field('works_img') ):?>
    <li>
    <img src="<?php the_field('works_img'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img2') ):?>
    <li>
    <img src="<?php the_field('works_img2'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img3') ):?>
    <li>
    <img src="<?php the_field('works_img3'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img4') ):?>
    <li>
    <img src="<?php the_field('works_img4'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img5') ):?>
    <li>
    <img src="<?php the_field('works_img5'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img6') ):?>
    <li>
    <img src="<?php the_field('works_img6'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img7') ):?>
    <li>
    <img src="<?php the_field('works_img7'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
    <?php if( get_field('works_img8') ):?>
    <li>
    <img src="<?php the_field('works_img8'); ?>" alt="<?php the_field('works_title'); ?>">
    </li>
    <?php endif; ?>
     </ul>
</div>
<!---->
<div class="works_word_block">
 <div class="works_comment">
 <?php if( get_field('works_staff') ):?>
 <h3>スタッフからのコメント</h3>
 <p><?php the_field('works_staff'); ?></p>
 <?php endif; ?>
 </div>
 
 <div class="works_type">
 <table>
 <?php if( get_field('works_usage') ):?>
  <tr>
  <th>用途</th>
    <td><?php the_field('works_usage'); ?></td>
  </tr>
  <?php endif; ?>
  <?php if( get_field('works_type') ):?>
  <tr>
  <th>タイプ</th>
    <td><?php the_field('works_type'); ?></td>
  </tr>
  <?php endif; ?>
</table>
 </div>

</div>
<!-- pagerここから -->
<div class="pager_container">
<div class="pager_wrap">
    <?php previous_post_link('%link', '&larr; 前の施工事例へ'); ?>
    <?php next_post_link('%link', '次の施工事例へ &rarr;'); ?>
    </div>
    <a class="post_archive" href="<?php echo esc_url(home_url()); ?>/works/">施工実績一覧</a>
</div><!--/.pager_container-->
<!-- pagerここまで -->
 

              <!---->
            </div>
          </div>
	      
        </div><!--/.sec2-->
  
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>