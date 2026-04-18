// 1.TOP メインslick_sliderのためのJS

//画像の設定

var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
    if (windowwidth > 768){
      var responsiveImage = [//PC用の画像
        { src: 'https://trail-base-kiyama.com/wp-content/themes/trailer/images/slide/pc_01.jpg'},
        { src: 'https://trail-base-kiyama.com/wp-content/themes/trailer/images/slide/pc_02.jpg'},
        { src: 'https://trail-base-kiyama.com/wp-content/themes/trailer/images/slide/pc_03.jpg'},
        { src: 'https://trail-base-kiyama.com/wp-content/themes/trailer/images/slide/pc_04.jpg'}
      ];
    } else {
      var responsiveImage = [//タブレットサイズ（768px）以下用の画像
        { src: 'https://trail-base-kiyama.com/wp-content/themes/trailer/images/slide/sp_01.jpg' },
        { src: 'https://trail-base-kiyama.com/wp-content/themes/trailer/images/slide/sp_02.jpg' },
        { src: 'https://trail-base-kiyama.com/wp-content/themes/trailer/images/slide/sp_03.jpg' }
      ];
    }


//Vegas全体の設定

$('#main_slider').vegas({
    //overlay: true,//画像の上に網線やドットのオーバーレイパターン画像を指定。
    transition: 'fade2',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
    transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定2000
    delay: 5000,//スライド間の遅延をミリ秒単位で。5000
    animationDuration: 0,//スライドアニメーション時間をミリ秒単位で設定20000　ズームアウト設定したいなら
    animation: 'kenburns',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
    slides: responsiveImage,//画像設定を読む
  });


// 2.TOPスタッフページのスライド
  
$('.home_staff_slider').slick({
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 3,//スライドを画面に3枚見せる
		slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
		prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
		dots: true,//下部ドットナビゲーションの表示
		responsive: [
			{
			breakpoint: 769,//モニターの横幅が769px以下の見せ方
			settings: {
				slidesToShow: 2,//スライドを画面に2枚見せる
				slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
			}
		},
		{
			breakpoint: 426,//モニターの横幅が426px以下の見せ方
			settings: {
				slidesToShow: 1,//スライドを画面に1枚見せる
				slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
			}
		}
	]
	});

// 3.TOPブログページのスライド
  
$('.home_blog_slider').slick({
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 3,//スライドを画面に3枚見せる
		slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
		prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
		dots: true,//下部ドットナビゲーションの表示
		responsive: [
			{
			breakpoint: 769,//モニターの横幅が769px以下の見せ方
			settings: {
				slidesToShow: 2,//スライドを画面に2枚見せる
				slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
			}
		},
		{
			breakpoint: 426,//モニターの横幅が426px以下の見せ方
			settings: {
				slidesToShow: 1,//スライドを画面に1枚見せる
				slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
			}
		}
	]
	});
	
// 4.ふわっと出現
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){

//ふわっと動くきっかけのクラス名と動きのクラス名の設定
$('.fadeUpTrigger').each(function(){ //fadeInUpTriggerというクラス名が
　　var elemPos = $(this).offset().top-50; //要素より、50px上の
　　var scroll = $(window).scrollTop();
　　var windowHeight = $(window).height();
　　if (scroll >= elemPos - windowHeight){
　　$(this).addClass('fadeUp');
　　// 画面内に入ったらfadeInというクラス名を追記
　　}else{
　　　$(this).removeClass('fadeUp');
　　// 画面外に出たらfadeInというクラス名を外す
　　}
　　});

//関数でまとめることでこの後に違う動きを追加することが出来ます
$('.fadeDownTrigger').each(function(){ //fadeInDownTriggerというクラス名が
　　var elemPos = $(this).offset().top-50; //要素より、50px上の
　　var scroll = $(window).scrollTop();
　　var windowHeight = $(window).height();
　　if (scroll >= elemPos - windowHeight){
　　$(this).addClass('fadeDown');
　　// 画面内に入ったらfadeDownというクラス名を追記
　　}else{
　　　$(this).removeClass('fadeDown');
　　// 画面外に出たらfadeDownというクラス名を外す
　　}
　　});

//関数でまとめることでこの後に違う動きを追加することが出来ます
$('.fadeLeftTrigger').each(function(){ //fadeInDownTriggerというクラス名が
　　var elemPos = $(this).offset().top-50; //要素より、50px上の
　　var scroll = $(window).scrollTop();
　　var windowHeight = $(window).height();
　　if (scroll >= elemPos - windowHeight){
　　$(this).addClass('fadeLeft');
　　// 画面内に入ったらfadeDownというクラス名を追記
　　}else{
　　　$(this).removeClass('fadeLeft');
　　// 画面外に出たらfadeDownというクラス名を外す
　　}
　　});

//関数でまとめることでこの後に違う動きを追加することが出来ます
$('.fadeRightTrigger').each(function(){ //fadeInDownTriggerというクラス名が
　　var elemPos = $(this).offset().top-50; //要素より、50px上の
　　var scroll = $(window).scrollTop();
　　var windowHeight = $(window).height();
　　if (scroll >= elemPos - windowHeight){
　　$(this).addClass('fadeRight');
　　// 画面内に入ったらfadeDownというクラス名を追記
　　}else{
　　　$(this).removeClass('fadeRight');
　　// 画面外に出たらfadeDownというクラス名を外す
　　}
　　});

}//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定

// 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
  
  
//_________5.施工事例（single)のスライドショー

//上部画像の設定
$('.gallery').slick({
	infinite: true, //スライドをループさせるかどうか。初期値はtrue。
	fade: true, //フェードの有効化
	arrows: true,//左右の矢印あり
	prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
	nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
});

//選択画像の設定
$('.choice-btn').slick({
	infinite: true, //スライドをループさせるかどうか。初期値はtrue。
	slidesToShow: 8, //表示させるスライドの数
	focusOnSelect: true, //フォーカスの有効化
	asNavFor: '.gallery', //連動させるスライドショーのクラス名
});
  
//下の選択画像をスライドさせずに連動して変更させる設定。
$('.gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
	var index = nextSlide; //次のスライド番号
	//サムネイルのslick-currentを削除し次のスライド要素にslick-currentを追加
	$(".choice-btn .slick-slide").removeClass("slick-current").eq(index).addClass("slick-current");
});


//___________6.Planのスライドショー
  $('.plan_slider').slick({
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
    speed:1000,//スライドの動きのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 1,//スライドを画面に3枚見せる
    slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
    arrows: true,//左右の矢印あり
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    dots: true,//下部ドットナビゲーションの表示
        pauseOnFocus: false,//フォーカスで一時停止を無効
        pauseOnHover: false,//マウスホバーで一時停止を無効
        pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
    });

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.plan_slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
    $('.plan_slider').slick('slickPlay');
});


//___________7.Planの外観　横に流れるスライドショー
$('.exterior_slider').slick({
		arrows: false,//左右の矢印はなし
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		autoplaySpeed: 0,//自動的に動き出す待ち時間。初期値は3000ですが今回の見せ方では0
		speed: 6900,//スライドのスピード。初期値は300。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
		pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
		cssEase: 'linear',//動き方。初期値はeaseですが、スムースな動きで見せたいのでlinear
		slidesToShow: 4,//スライドを画面に4枚見せる
		slidesToScroll: 1,//1回のスライドで動かす要素数
		responsive: [
			{
			breakpoint: 769,//モニターの横幅が769px以下の見せ方
			settings: {
				slidesToShow: 2,//スライドを画面に2枚見せる
			}
		},
		{
			breakpoint: 426,//モニターの横幅が426px以下の見せ方
			settings: {
				slidesToShow: 1.5,//スライドを画面に1.5枚見せる
			}
		}
	]
	});
	

//___________8.TOPメインスライドショー

  $('.slider-top').slick({
    accessibility: false,// 左右矢印ボタンでの切り替えなし
    arrows: false,//左右矢印ボタン表示なし
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
    slidesToShow: 1,//スライドを画面に1枚見せる
    slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
    swipe: false,//タッチスワイプに対応しない
	speed: 1000,//スライドのスピード。初期値は300。
  });
//スライド下の設定
  $('.slider-bottom').slick({
    accessibility: false,// 左右矢印ボタンでの切り替えなし
    arrows: false,//左右矢印ボタン表示なし
    autoplay: true,//自動的に動き出すか。初期値はfalse。
    pauseOnHover: false,//オンマウスでスライドを一時停止させるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスした際にスライドを一時停止させるかどうか。初期値はtrue。
    slidesToShow: 1,//スライドを画面に1枚見せる
    slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
    swipe: false,//タッチスワイプに対応しない
    rtl: true,//スライダの表示方向を左⇒右に変更する
	speed: 1000,//スライドのスピード。初期値は300。
  });


  //top 施工事例スライダー
$('.top_works_slider').slick({
	autoplay: true,//自動的に動き出すか。初期値はfalse。
	infinite: true,//スライドをループさせるかどうか。初期値はtrue。
	speed: 500,//スライドのスピード。初期値は300。
	slidesToShow: 1,//スライドを画面に3枚見せる
	slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
	prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
	nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
	centerMode: true,//要素を中央ぞろえにする
	variableWidth: true,//幅の違う画像の高さを揃えて表示
	dots: true,//下部ドットナビゲーションの表示
});