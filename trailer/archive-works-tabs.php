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
            
	          <h3 class="headLine01 fadeInTrigger">
              <span class="en">Works type</span>
              <span class="jp">＃住宅用トレーラーハウス（ここにタブ名を出力）</span>
              </h3>
                            
             
	          
	          
             <div id="SearchWorp"><!--SearchWorp-->
                <div class="search">
                <div class="Title"><i class="fas fa-tag"></i>現在のタグ</div><!--★現在のタグを出現させる-->
                  <ul class="tag">
                  <li><a href="">住宅用トレーラーハウス</a></li>
                  </ul>
                </div>
                <input id="ac-1" name="accordion-1" type="checkbox">
                <label for="ac-1"> 全てのタグを見る </label><!--★以下にタグ一覧を出現させる-->
                <div class="ac-small">
                  <ul class="tag">
                  <li><a href="#">住宅用トレーラーハウス</a></li>
                  <li><a href="#">店舗用トレーラーハウス</a></li>
                  <li><a href="#">国産トレーラーハウス</a></li>
                  <li><a href="#">バリアフリー</a></li>
                  <li><a href="#">セカンドハウス</a></li>
                  <li><a href="#">注文住宅</a></li>
                  <li><a href="#">省エネ</a></li>
                  </ul>
                </div>      
              </div> <!--/SearchWorp-->  
                                  
              <section class="Block"><!--Block-->
                 <ul class="List">
                        
                <li class="hover_img">
                <a href=""></a>
                <dl>
                <dt><figure><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/stock/stock_ex03.jpg" alt="完成品在庫"></figure></dt>
                <dd class="White">
                <h2>余った土地にちょうどいいサイズ</h2>
                <h3>福知山市　A様</h3>
                    <ul class="tag">
                        <li>住宅用トレーラーハウス</li><li>店舗用トレーラーハウス</li><li>国産トレーラーハウス</li><li>セカンドハウス</li>
                </ul>
                    <i class="fas fa-chevron-right"></i>
                </dd>
                </dl>
                
                
                </li>
                    
                <li class="hover_img">
                <a href=""></a>
                <dl>
                <dt><figure><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/stock/stock_ex02.jpg" alt="完成品在庫"></figure></dt>
                <dd class="White">
                <h2>コンパクトな「セカンドハウス」に</h2>
                <h3>福知山市　K様</h3>
                  <ul class="tag">
                    <li>住宅用トレーラーハウス</li><li>国産トレーラーハウス</li><li>セカンドハウス</li>
                  </ul>
                    <i class="fas fa-chevron-right"></i>
                </dd>
                </dl>
                
                
                </li>
                    
                
                </ul>
            </section>
              
              
              
              
            </div>
          </div>
	      
        </div><!--/.sec2-->
  
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>