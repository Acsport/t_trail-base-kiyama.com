<?php

// wpの各種機能の有効化
function wp_setup() {
	add_theme_support( 'title-tag' );//titleタグ出力
	add_theme_support( 'post-thumbnails' );//サムネイル
	add_theme_support( 'responsive-embeds' );//iframeのレスポンシブ化
}
add_action( 'after_setup_theme', 'wp_setup' );

// 画像劣化補正
add_filter( 'jpeg_quality', function( $arg ){ return 100; } );

function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
 
    if ( $query->is_archive() ) {
        $query->set( 'posts_per_page', '12' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

function custom_theme_setup(){
    //head内にフィードリンクを出力
    add_theme_support('automatic-feed-links');
    //表示ページに合わせたタイトルタグを出力
    add_theme_support('title-tag');
    //ブロックエディタ用の標準スタイルを有効化
    add_theme_support('wp-block-styles');
    //埋め込みコンテンツをレスポンシブ対応に
    add_theme_support('responsive-embeds');
    //サムネイル画像を設定
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800,600,false);
    //メニューの有効化　位置の指定
    register_nav_menus(
        array(
            'globalnav'=>'グローバルナビーション',
        )
        );    
}

// ★サイト全体ででPタグを自動挿入させない
add_action('init', function() {
  remove_filter('the_content', 'wpautop');
});

//★a～ｃのセットで固定＆投稿ページの画像パスをショートコード化
// a.親テーマのテーマフォルダのパスを取得するショートコード
function gettmplurl($atts, $content = null) {
return get_template_directory_uri();
}
add_shortcode('tmplurl', 'gettmplurl');

// b.子テーマのテーマフォルダのパスを取得するショートコード
function getchildtmplurl($atts, $content = null) {
return get_stylesheet_directory_uri();
}
add_shortcode('childtmplurl', 'getchildtmplurl');

// c.メディアフォルダのパスを取得するショートコード
function getmediaurl($atts, $content = null) {
$wp_upload_dir = wp_upload_dir();
return $wp_upload_dir['baseurl'];
}
add_shortcode('mediaurl', 'getmediaurl');



//★投稿・固定ページ内にPHPファイルをインクルード(挿入/実行)させる
//（記述例：[myphp file='include-banner']）
function Include_my_php($params = array()) {
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(get_theme_root() . '/' . get_template() . "/$file.php");
    return ob_get_clean();
}
 
add_shortcode('myphp', 'Include_my_php');

//★「投稿」からの記事ををblogにする
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; //URLとして使いたい文字列
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


function my_form_tag_filter($tag){
  if ( ! is_array( $tag ) )
  return $tag;
  if(isset($_POST['text-eventName'])){
    $name = $tag['name'];
    if($name == 'text-eventName')
      $tag['values'] = (array) $_POST['text-eventName'];
  }
	  if(isset($_POST['text-stockName'])){
    $name = $tag['name'];
    if($name == 'text-stockName')
      $tag['values'] = (array) $_POST['text-stockName'];
  }

  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter');

//★ウィジェット表示
function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'BlogSidebar',
    'id' => 'blog_sidebar',
    'description' => 'ブログのサイドバー',
'before_widget' => '<ul class="SideBlog">',
'after_widget' => '</ul>',
'before_title' => '<h6>',
'after_title' => '</h6>'
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );
add_filter( 'use_widgets_block_editor', '__return_false' );//ブロックエディタではなく従来のスタイルのウィジェット

// 固定ページ旧エディタ
add_filter( 'use_block_editor_for_post_type', 'hide_block_editor', 10, 10 );
function hide_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'page' ) return false;
  return $use_block_editor;
}

// 予約非公開の記述
add_action('acf/save_post', 'save_expire');
function save_expire($post_id)
{
    $post_type = get_post_type($post_id);
    //実施する投稿タイプを限定
    if ($post_type == 'event') {
        //event_close に値があれば
        if (get_field('event_close', $post_id)) {
            //ACFのevent_close の値をとってくる
            $event_close = get_field('event_close', $post_id);
            //20220814のような値を DateTimeオブジェクトに
            $date = new DateTime($event_close . ' 00:00:00 JST');
            //日付を翌日に変更
            $date->modify('+1 day');
            //タイムスタンプに変換
            $time_stamp = date_timestamp_get($date);
            //すでにスケジュールされているものがあれば削除
            wp_clear_scheduled_hook('my_save_expire',array($post_id));
            //タイムスタンプに応じて my_save_expire を実施するスケジュールを設定
            wp_schedule_single_event($time_stamp, 'my_save_expire', array($post_id));
        }
    }
}
//my_save_expire のアクション my_update_post を設定
add_action('my_save_expire', 'my_update_post');
function my_update_post($post_id)
{
    //投稿を下書きにする
    wp_update_post(array('ID' => $post_id, 'post_status' => 'draft'));
}

// TOPページ「NEWS」出力
function shortcode_post_list() { // 変数の定義
  global $post; // グローバル宣言
  $args = array( // クエリの準備
  	'posts_per_page' => 4, // 表示件数の指定
  	'post_type'      => 'news', // 投稿タイプの指定
  	'post_status'    => 'publish' // 投稿ステータスの指定
  );
  $tax_name = 'news_type'; //タクソノミー
  $tax_terms = get_terms($tax_name); // ターム
  $posts_array = get_posts($args); // クエリを基にした投稿情報を取得
  $html = '<ul>';
  foreach($posts_array as $post): // ループの開始
    $cat = get_the_terms($post->ID,'news_type');//get_the_categoryをget_the_termsに変更
    $catname = $cat[0]->cat_name;
    $catslug = $cat[0]->slug;
    setup_postdata($post); // 投稿のセットアップ
    $html .= '<li class="fadeUpTrigger">';
    $html .='<dl>';
    $html .='<dt>';
    $html .='<span class="date">'.get_the_date().'</span>';

    $html .='<span class="cat openhouse">'.$cat[0]->name.'</span>';

    $days = 7;
    $now = date_i18n('U');
    $entry = get_the_time('U');
    $term = date('U',($now - $entry)) / 86400;
    if( $days > $term ) {
      $html .='<span class="new">NEW</span>';
    }
    $html .='</dt>';

    $html .='<dd>';
    $html .='<a href="'.get_permalink().'">'.get_the_title().'</a>';
    $html .='</dd>';
   
    $html .='</dl>';
    $html .= '</li>';
  endforeach; // ループの終了
  $html .='</ul>';
  wp_reset_postdata(); // 投稿のリセット
  return $html;
}
add_shortcode('news_list', 'shortcode_post_list');


// TOPページ「イベント・見学会」出力

function shortcode_post_list1() {
  global $post;
  $args = array(
      'posts_per_page' => 4,
      'post_type'      => 'event',
      'post_status'    => 'publish'
  );
  $tax_name = 'event_type';
  $tax_terms = get_terms($tax_name);
  $posts_array = get_posts($args);
  $html = '';

  if ($posts_array) {
      foreach ($posts_array as $post) {
          $cat = get_the_terms($post->ID, 'event_type');
          $catname = $cat[0]->cat_name;
          $catslug = $cat[0]->slug;
          setup_postdata($post);

          $html .= '<div class="home_event_list">';
          $html .= '<article class="home_event_01">';
          $html .= '<div class="home_event__header_01">';
          $html .= '<figure class="home_event__thumbnail_01">';
          $html .= '<img src="' . get_field('event_gallery01') . '" alt="' . get_field('event_title') . '" class="home_event__image_01">';
          $html .= '</figure></div>';
          $html .= '<div class="home_event__body_01">';
          $html .= '<div class="event_btn_flex">';
          
          $terms = get_the_terms($post->ID, 'event_type');
          foreach ($terms as $term) {
              $html .= '<p class="home_event__title_type btn_enge ' . $term->slug . '">' . $term->name . '</p>';
          }

          $html .= '</div>';
          $html .= '<p class="home_event__title_01">' . get_field('event_title') . '</p>';
          $html .= '<p class="home_event__date"><span class="home_event_data">日程</span>' . get_field('event_hold') . '</p>';
          $html .= '<p class="home_event__date"><span class="home_event_data">時間</span>'.get_field('event_time').'</p>';
          $html .= '<p class="home_event__place"><span class="home_event_data">会場</span>' . get_field('event_venue') . '</p>';
          // $html .= '<p class="home_event__place"><span class="home_event_data">詳細</span>' . get_field('event_dec') . '</p>';
          $html .= '<div class="home_event__footer_01">';
          $html .= '<p class="home_event__text_01"><a href="' . get_permalink() . '" class="button_01 -compact">イベント詳細</a></p>';
          $html .= '</div>';
          $html .= '</div>';
          $html .= '</article>';
          $html .= '</div>';
      }

      wp_reset_postdata();
  } else {
      $html .= '<p class="event_noText">現在予定のイベントはありません</p>';
  }

  return $html;
}
add_shortcode('event_list', 'shortcode_post_list1');
//CF7 チェックボックス用
remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_checkbox_enum_rules', 20, 2 );
//CF7 セレクトメニュー用
remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_select_enum_rules', 20, 2 );
// TOPページ「スタッフ」出力

function sample_post_list() { // 変数の定義
  $html='';
  global $post; // グローバル宣言
  $args = array( // クエリの準備
  	'posts_per_page' => -1, // 表示件数の指定
  	'post_type'      => 'staff', // 投稿タイプの指定
    'orderby'        => 'date', // 表示順の基準（日付）
    'order'          => 'DESC', // 新しい順
  	'post_status'    => 'publish' // 投稿ステータスの指定
  );

  $posts_array = get_posts($args); // クエリを基にした投稿情報を取得
  foreach($posts_array as $post): // ループの開始
    setup_postdata($post); // 投稿のセットアップ
    $html .='<a href="'.get_permalink().'"><li><img decoding="async" src="'.get_field('staff_img').'" alt="'.get_field('staff_name').'">';
    $html .='<p class="home_staff_position">'.get_field('staff_position').'</p>';
    $html .='<p class="home_staff_name">'.get_field('staff_name').'</p>';
    $html .='<p class="home_staff_yomi">'.get_field('staff_romaji').'</p></li></a>';
  endforeach; // ループの終了
  wp_reset_postdata(); // 投稿のリセット
  return $html;
}
add_shortcode('staff_list', 'sample_post_list');

function getNewItems($atts) {
	extract(shortcode_atts(array(
	  "num" => '',
	  "cat" => ''
	), $atts));
	
	// 処理中のpost変数をoldpost変数に退避
	global $post;
	$oldpost = $post;
	
	// カテゴリーの記事データ取得
	$myposts = get_posts('numberposts='.$num.'&order=DESC&orderby=post_date&category='.$cat);

		// 記事がある場合↓
		// 取得した記事の個数分繰り返す
		foreach($myposts as $post) :
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
      $catslug = $cat[0]->slug;
			setup_postdata($post);
			$html .= '<a href="'.get_permalink().'">';
				$html .= '<li>';
        $html .= get_the_post_thumbnail($page->ID, 'blog');
			
			$html .= '<p class="home_blog_cat">'.$catname.'</p>';

    $html .= '<p class="home_blog_date">'.get_the_time('Y年n月j日').'</p>';
    $html .= '<p class="home_blog_title">'.get_the_title().'</p>';

			
    $html.= '</li>';
    $html.= '</a>';
			
		endforeach;
	
	// oldpost変数をpost変数に戻す
  $post = $oldpost;

  return $html;
}
// 呼び出しの指定
add_shortcode("getCategoryArticle", "getNewItems");



// ページャーにクラス付与呼び出しの指定
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="prev-link" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="next-link" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );
// 一覧ページページネーションの変更
function custom_pagination($query = null) {
  if (!$query) {
      global $wp_query;
      $query = $wp_query; // デフォルトはメインクエリ
  }

  $big = 999999999; // 任意の大きな数値を設定
  $paged = max(1, get_query_var('paged')); // 現在のページ番号を取得

  $links = paginate_links(array(
      'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format'    => '?paged=%#%',
      'current'   => $paged,
      'total'     => $query->max_num_pages, // 総ページ数
      'type'      => 'array', // 配列形式でリンクを取得
      'prev_text' => '<',
      'next_text' => '>',
      'end_size'  => 1, // 最初と最後に表示するページ数
      'mid_size'  => 2, // 現在のページの前後に表示するページ数
  ));

  if ($links) {
      echo '<div class="pager_container">';
      echo '<ol class="pagination-2">';
      foreach ($links as $link) {
          if (strpos($link, 'dots') !== false) {
              echo '<li class="dots">...</li>';
          } else {
              $class = strpos($link, 'current') !== false ? 'class="current"' : '';
              echo '<li ' . $class . '>' . $link . '</li>';
          }
      }
      echo '</ol>';
      echo '</div>';
  }
}
/********************************

    出力関係

********************************/

//PHP電話番号変数設定
const TELmain = '0942-50-8632';

//PHP会社名
const Company_name = 'TRAIL BASE KIYAMA（トレイルベース基山）';






function add_localbusiness_schema_footer() {
    if ( ! is_front_page() ) return;
    ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "TRAIL BASE KIYAMA",
      "description": "佐賀県基山町のトレーラーハウス専門店。建築確認不要、固定資産税ゼロで店舗・事務所・住居用トレーラーハウスを製造販売。",
      "image": "https://trail-base-kiyama.com/wp-content/themes/trailer/images/main_ttl.webp",
      "address": {
        "@type": "PostalAddress",
        "addressRegion": "佐賀県",
        "addressLocality": "三養基郡基山町",
        "streetAddress": "宮浦991-2",
        "postalCode": "841-0204"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "33.4297",
        "longitude": "130.5219"
      },
      "telephone": "+81-942-50-8632",
      "url": "https://trail-base-kiyama.com/",
      "areaServed": ["佐賀県", "福岡県", "基山町", "鳥栖市", "久留米市", "大分県"],
      "priceRange": "300万円〜",
      "openingHours": "Mo-Fr 09:00-17:30"
    }
    </script>
    <?php
}
add_action('wp_footer', 'add_localbusiness_schema_footer');
