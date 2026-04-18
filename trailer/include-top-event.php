<?php
/**
 * Template Part: Top - イベント・見学会一覧
 * Usage: get_template_part('include-top-event');
 */

$args = array(
  'posts_per_page' => 4,
  'post_type'      => 'event',
  'post_status'    => 'publish',
);

$q = new WP_Query($args);
?>
<!--/.home_event_box-->
<div class="home_event_box">
  <div class="home_event_in">
    <h2 class="headLine05">Events
    <span class="jp">イベント・見学会</span></h2>
  </div>
  <div class="home_event">

    <!--イベントリスト-->
    <div class="home_event_list_wrapper">
    <?php if ( $q->have_posts() ) : ?>
      <?php while ( $q->have_posts() ) : $q->the_post();
        // ACFフィールド（存在しない場合は代替）
        $event_title = get_field('event_title');
        $event_hold  = get_field('event_hold');  // 日程
        $event_time  = get_field('event_time');  // 時間
        $event_venue = get_field('event_venue'); // 会場

        // 画像（ACFの返り値が「URL」想定）
        $img = get_field('event_gallery01');
        // ACFの返り値が配列設定の場合は下記に置換してください：
        // $img = ($tmp = get_field('event_gallery01')) ? ($tmp['url'] ?? '') : '';

        if ( empty($img) ) {
          $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
        }

        $permalink = get_permalink();
      ?>
      <div class="home_event_list">
        <article class="home_event_01">
          <div class="home_event__header_01">
            <figure class="home_event__thumbnail_01">
              <?php if ( $img ) : ?>
                <img
                  src="<?php echo esc_url($img); ?>"
                  alt="<?php echo esc_attr( $event_title ?: get_the_title() ); ?>"
                  class="home_event__image_01"
                  loading="lazy"
                  decoding="async"
                >
              <?php else : ?>
                <span class="home_event__image_01 --noimage" aria-hidden="true"></span>
              <?php endif; ?>
            </figure>
          </div>

          <div class="home_event__body_01">
            <div class="event_btn_flex">
              <?php
              $terms = get_the_terms( get_the_ID(), 'event_type' );
              if ( ! is_wp_error($terms) && ! empty($terms) ) :
                foreach ( $terms as $term ) : ?>
                  <p class="home_event__title_type btn_enge <?php echo esc_attr($term->slug); ?>">
                    <?php echo esc_html($term->name); ?>
                  </p>
                <?php endforeach;
              endif; ?>
            </div>

            <p class="home_event__title_01">
              <?php echo esc_html( $event_title ?: get_the_title() ); ?>
            </p>

            <?php if ( $event_hold ) : ?>
              <p class="home_event__date">
                <span class="home_event_data">日程</span><?php echo esc_html($event_hold); ?>
              </p>
            <?php endif; ?>

            <?php if ( $event_time ) : ?>
              <p class="home_event__date">
                <span class="home_event_data">時間</span><?php echo esc_html($event_time); ?>
              </p>
            <?php endif; ?>

            <?php if ( $event_venue ) : ?>
              <p class="home_event__place">
                <span class="home_event_data">会場</span><?php echo esc_html($event_venue); ?>
              </p>
            <?php endif; ?>

            <div class="home_event__footer_01">
              <p class="home_event__text_01">
                <a href="<?php echo esc_url($permalink); ?>" class="button_01 -compact">イベント詳細</a>
              </p>
            </div>
          </div>
        </article>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
      <p class="event_noText">現在予定のイベントはありません</p>
    <?php endif; ?>
    </div>    
    <!--/イベントリスト-->
  </div>

  <div class="btn"><a href="<?php echo esc_url( home_url() ); ?>/event/">
      <div><span>イベント・見学会一覧</span></div></a>
  </div>
</div>
<!--/.home_event_box-->