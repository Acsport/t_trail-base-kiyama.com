<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>
<div id="service"> 
<section id="News">
	    <div class="sec01 fadeInTrigger">
	      <div class="content">
	        <div class="topBox clearfix fadeInTrigger">
	          <h2>Error</h2>
	          <div class="imgTxtBox">404エラー</div>
            </div>
          </div>
        </div>
      </section>
        
	    <div class="sec02">
	      <div class="topBox fadeInTrigger">
	        <div class="content">
            
            <!--content-->
          
            
            <h3 class="headLine00 fadeInTrigger">
              <span class="en">404 Not found</span>
              <span class="jp">申し訳ございません。<br>
            お探しのページは現在ございません。</span>
              </h3>
            
          <div class="btn"><a href="<?php echo esc_url(home_url('/'));?>"><div><span>トップへ戻る</span></div></a></div>
            
           </div><!--/.contnt-->
          </div>
	      
        </div><!--/.sec2-->
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>