<?php get_header(); ?>
 
 <?php get_template_part('side-fix-banner'); ?>

<div id="Event">
	    <div class="sec01 fadeInTrigger">
	      <div class="content">
	        <div class="topBox clearfix fadeInTrigger">
	          <h2>Event</h2>
	          <div class="imgTxtBox">イベント・見学会</div>
            </div>
          </div>
        </div>
        
	    <div class="sec02">
	      <div class="topBox fadeInTrigger">
	        <div class="content">
            
            <!--ここからcontent-->
                        
           
 <h3 class="headLine00 fadeInTrigger">
              <span class="en">Event</span>
              <span class="jp"><?php the_field('event_title'); ?></span>
  </h3>

<!--main-->	


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
          <?php if( get_field('event_time') ):?>
          <p class="home_event__date">
            <span class="home_event_data">時間</span>
            <?php the_field('event_time'); ?>
          </p>
          <?php endif; ?>
          <?php if( get_field('event_venue') ):?>
          <p class="home_event__place">
            <span class="home_event_data">会場</span>
            <?php the_field('event_venue'); ?>
          </p>
          <?php endif; ?>
		  
		  
    <!--<p class="home_event__text_01"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/event/quo_bnr1.png" width="200" alt="QUOカードプレゼント"></p>-->
            <form class="Reservet" action="<?php echo home_url(); ?>/contact-event/" method="post">
      <input type="hidden" name="text-eventName" value="<?php the_field('event_title'); ?>">
      <a><i class="fas fa-calendar-alt"></i><input style="color: #fff; padding-left: 5px; cursor: pointer;" type="submit" value="来場予約はこちら"></a>
  </form> 

          
      </div>
      
      
    </article>

  </div>
 <!--/home_event_list-->




<section class="ContentMain"><!--ContentMain-->
<?php the_content(); ?>
</section>


<section id="Map"><!--Map-->
	<div class="ggmap gg-p1">
  <?php if(get_field('event_googlemap')): ?>
    <iframe width="1000" height="350" frameborder="0" style="border:0" allowfullscreen src="https://maps.google.co.jp/maps?q=<?php the_field('event_googlemap'); ?>+<?php the_field('event_map'); ?>&amp;z=14&amp;output=embed" style="line-height: 0;"></iframe>
    <?php else: ?>
      <?php the_field('event_map'); ?>
    <?php endif; ?>
	</div>

  <div class="area-word">
  佐賀県　基山・鳥栖・みやき・小郡・筑紫野エリアでトレーラーハウス事業を展開！TRAIL BASE KIYAMA（トレイルベース基山）！
  </div>

	</section><!--/Map-->
    
    
<section class="Privilege"><!--Privilege-->
  <h2>来場予約のメリット</h2>
  
  <ul>
    <li class="W50">
      <div class="img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/event/event_img08.png" width="300" height="306" alt="時間が限られている方も安心です。">
      </div>
      <div class="Text">時間が限られている方も安心です。</div>
    </li>
    <li class="W50">
      <div class="img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/event/event_img05.png" width="300" height="306" alt="事前の情報入力でスムーズな打合せができます。">
      </div>
      <div class="Text">事前の情報入力でスムーズな打合せができます。</div>
    </li>
    <!--<li class="W33">
      <div class="img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/event/event_img09.png" width="300" height="306" alt="来場予約の特典があります。">
      </div>
      <div class="Text">来場予約の特典があります。</div>
    </li>-->
  </ul>
  
  
  <h2>来場予約の方法は2通り</h2>
  <ul>
    <li class="W50">
      <div class="img">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/event/event_img07.png" width="300" height="306" alt="WEBの場合">
      </div>
      
      <div class="Text">
        <h3>WEBの場合</h3>
        <p>来場予約フォームに必要事項をご記入の上、送信してください。</p>
        
        <div class="EventBt mt20">
        <a href="<?php echo esc_url( home_url() ); ?>/contact-event/">来場予約</a>
        </div>
      </div>
    </li>
    
  <li class="W50">
    <div class="img">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/event/event_img06.png" width="300" height="306" alt="お電話の場合">
    </div>
    <div class="Text">
      <h3>お電話の場合</h3>
      <p>下記の電話番号よりご連絡の上来場日時をご予約下さい。</p>
      <p class="Tel"><i class="fas fa-phone-volume"></i> <a href="tel:<?php echo TELmain; ?>"><?php echo TELmain; ?></a></p>
      <!--<p>※毎週水曜は定休日の為、WEB予約のみとなります。</p>-->
    </div>
  </li>
  </ul>


</section><!--/Privilege-->


<div class="Reservet">
  <a href="<?php echo esc_url( home_url() ); ?>/contact-event/">
    <i class="fas fa-calendar-alt"></i>来場予約はこちら
  </a>
</div>

<!-- pagerここから -->
<div class="pager_container">
<div class="pager_wrap">
    <?php previous_post_link('%link', '&larr; 前へ'); ?>
    <?php next_post_link('%link', '次へ &rarr;'); ?>
    </div>
    <a class="post_archive" href="<?php echo esc_url(home_url()); ?>/event/">イベント一覧</a>
</div>
<!--/.pager_container-->
<!-- pagerここまで -->
<!--///-->	

  </div><!--/.contnt-->
</div>

</div><!--/.sec2-->
  
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>