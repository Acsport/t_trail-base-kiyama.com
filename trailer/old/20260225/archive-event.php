<?php
global $post; /* 変数を別のスコープでも利用するにはグローバル変数として宣言 $postはWordPress標準でついているグローバル変数 */
$slug = $post->post_name; /* スラッグを取得 */
?>

<?php get_header(); ?>

<?php get_template_part('side-fix-banner'); ?>

<div id="Event">
  <div class="sec01 fadeInTrigger">
    <div class="content">
      <div class="topBox clearfix fadeInTrigger">
        <h2>Event</h2>
        <p class="visually-hidden">佐賀県三養基郡基山町宮浦991-2の展示場にて、トレーラーハウス2台同時見学会を開催中です。実物を見て・触れて・体感いただける貴重な機会です。事前予約制で個別相談も承ります。</p>
          <p class="visually-hidden"><strong>会場:</strong> 佐賀県三養基郡基山町宮浦991-2<br>
            <strong>電話:</strong> 0942-50-8632
          </p>

          <div class="imgTxtBox">イベント・見学会</div>
        </div>
      </div>
    </div>

    <div class="sec02">
      <div class="topBox fadeInTrigger">
        <div class="content">

          <!--ここからcontent-->



          <h3 class="headLine00 fadeInTrigger">
            <span class="en">Don't miss your chance!</span>
            <span class="jp">イベント・相談会・見学会</span>
          </h3>

          <section class="Block"><!--Block-->
            <?php
            $args = array(
              'paged' => $paged,
              'post_type' => 'event',
              'posts_per_page' => 12,
              'order' => 'DESC',
              'post_status' => 'publish',
              'tax_query' => array(
                array(
                  'taxonomy' => 'event_type', // カスタムタクソノミー
                  'terms' => array('consult', 'tour', 'event_tarm'), // カスタムタクソノミーのカテゴリー（タクソノミーターム）
                  'field' => 'slug'
                ),
              ),
            );
            $event_query = new WP_Query($args);
            $posts = get_posts($args);
            ?>
            <?php if (!empty($posts)): ?>
              <?php if ($event_query->have_posts()) : ?>
                <?php while ($event_query->have_posts()) : $event_query->the_post(); ?>
                  <!--home_event_list-->
                  <div class="home_event_list">
                    <article class="home_event_01">
                      <div class="home_event__header_01">

                        <figure class="home_event__thumbnail_01">
                          <img src="<?php the_field('event_gallery01'); ?>" alt="<?php the_title_attribute(); ?>" class="home_event__image_01">
                        </figure>

                      </div>
                      <div class="home_event__body_01">
                        <?php
                        $terms = get_the_terms($post->ID, 'event_type');
                        foreach ($terms as $term) {
                          $term_slug = $term->slug;
                        }
                        ?>
                        <div class="event_btn_flex">
                          <?php $terms = get_the_terms($post->ID, 'event_type');
                          foreach ($terms as $term) {
                            echo '<p class="home_event__title_type btn_enge ' . $term->slug . '">';
                            echo $term->name;
                            echo '</p>';
                          }
                          ?>
                        </div>
                        <?php if (get_field('event_title')): ?>
                          <p class="home_event__title_01">
                            <?php the_field('event_title'); ?>
                          </p>
                        <?php endif; ?>
                        <?php if (get_field('event_hold')): ?>
                          <p class="home_event__date">
                            <span class="home_event_data">日程</span>
                            <?php the_field('event_hold'); ?>
                          </p>
                        <?php endif; ?>
                        <?php if (get_field('event_venue')): ?>
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
                <?php endwhile; ?>
              <?php endif;
              wp_reset_postdata(); ?>
            <?php else: ?>
                     <p class="comming-soon">現在予定のイベントはありません。<br>もうしばらくお待ちください！</p>
            <?php endif; ?>



          </section><!--/Block-->


          <!--ここまでイベント一覧-->
          <!-- pagerここから -->
          <div class="pager_container">
            <?php
            if (function_exists('pagination')) :
              pagination($event_query->max_num_pages, $paged, 2, true);
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