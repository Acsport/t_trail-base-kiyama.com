<?php get_header(); ?>
 <?php get_template_part('side-fix-banner'); ?>
<div id="Works">

<?php
  global $post;
  $post_id = $post->ID;
  $tax_name = 'works_type'; //タクソノミー
  $post_type_slug = 'works'; // 投稿タイプ
  $tax_terms = get_terms($tax_name); // ターム

  $queried_object = get_queried_object();
  $term_slug = $queried_object->slug;


  $my_terms = get_queried_object();
  $my_slug = $my_terms->slug;
  $my_name = $my_terms->name;
?>
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
              <span class="jp"><?php echo $my_name; ?></span>
          </h3>



    <div id="SearchWorp"><!--SearchWorp-->
      <div class="search">
      <div class="Title"><i class="fas fa-tag"></i> 人気のタグ</div><!--★以下に人気のタグを５つ出現させる-->
      <ul class="tag">
            <?php foreach ( $tax_terms as $value ) {
					        echo '<li><a id="'.$value->slug.'" href="'.get_term_link($value).'">'.$value->name.'</a></li>';
            } ?>
        </ul>
      </div>
      <input id="ac-1" name="accordion-1" type="checkbox">
      <label for="ac-1"> 全てのタグを見る </label><!--★以下にタグ一覧を出現させる-->
      <div class="ac-small">
      <ul class="tag">
      <?php foreach ( $tax_terms as $value ) {
					        echo '<li><a id="'.$value->slug.'" href="'.get_term_link($value).'" data-toggle="tab">'.$value->name.'</a></li>';
            } ?>
        </ul>
      </div>      
    </div> <!--/SearchWorp-->   

    <section class="Block"><!--Block-->


    <section class="works_termbox">
    <ul class="List">
    <?php

    $args = array(
		'paged' => $paged,
      'post_type' => $post_type_slug,
      $tax_name => $term_slug,
      'posts_per_page' => 12,
      'order' => 'DESC',
      'post_status' => 'publish',
    );
    $works_query = new WP_Query( $args );
?>
<?php if ( $works_query->have_posts() ) : ?>
    
    <?php while ( $works_query->have_posts() ) : $works_query->the_post();?>
  
        <li class="hover_img <?php $terms = wp_get_object_terms($post->ID, $tax_name); foreach($terms as $term){echo $term->slug . ' ';} ?>" id="<?php $terms = wp_get_object_terms($post->ID, $tax_name); foreach($terms as $term){echo $term->slug . ' ';} ?>">
          <a href="<?php the_permalink(); ?>"></a>
          <dl>
          <?php if( get_field('works_img') ):?>
          <dt><figure><img src="<?php the_field('works_img'); ?>" alt="<?php the_field('works_title'); ?>"></figure></dt>
          <?php endif; ?>
          <dd class="White">
          <?php if( get_field('works_title') ):?>
          <h2><?php the_field('works_title'); ?></h2>
          <?php endif; ?>
          <?php if( get_field('works_name') ):?>
          <h3><?php the_field('works_name'); ?></h3>
          <?php endif; ?>
              <ul class="tag">
              <?php $terms = get_the_terms($post->ID, 'works_type');
                foreach( $terms as $term ) {
                  echo '<li>' . $term->name . '</li>';
                }
                ?>
              </ul>
              <i class="fas fa-chevron-right"></i>
          </dd>
          </dl>
        </li>
        <?php endwhile; ?>
        
    <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        

        </ul>
</section>


 

  </section>

  </div>
<!-- pagerここから -->
<div class="pager_container">
    <?php
    // 現在のページ番号を取得
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // 現在表示されているターム情報を取得
    $term = get_queried_object();

    // クエリの引数
    $args = array(
        'post_type' => 'works', // カスタム投稿タイプ
        'posts_per_page' => 10, // 1ページあたりの投稿数
        'paged' => $paged, // 現在のページ番号
        'tax_query' => array(
            array(
                'taxonomy' => $term->taxonomy, // 現在のタクソノミー（例: work_category）
                'field' => 'slug',
                'terms' => $term->slug, // 現在のタームスラッグ
            ),
        ),
    );

    // カスタムクエリを作成
    $custom_query = new WP_Query($args);

    // 投稿ループ
    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            // 投稿の表示（例: タイトル）
            echo '<h2>' . get_the_title() . '</h2>';
        endwhile;

        // ページネーション
        echo '<ol class="pagination-2">';
        $big = 999999999; // 任意の大きな数値
        $links = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, $paged),
            'total'     => $custom_query->max_num_pages,
            'type'      => 'array', // 配列形式で取得
            'prev_text' => '&lt;', // 「前へ」ボタン
            'next_text' => '&gt;', // 「次へ」ボタン
        ));

        if ($links) {
            foreach ($links as $link) {
                $class = strpos($link, 'current') !== false ? 'class="current"' : '';
                echo '<li ' . $class . '>' . $link . '</li>';
            }
        }
        echo '</ol>';

    else :
        echo '<p>投稿が見つかりません。</p>';
    endif;

    // クエリをリセット
    wp_reset_postdata();
    ?>
</div>

<!-- /pager -->
<!-- pagerここまで -->
</div>

</div><!--/.sec2-->
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>