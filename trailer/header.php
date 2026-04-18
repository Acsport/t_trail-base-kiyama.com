<!DOCTYPE html>
<html <?php language_attributes(); ?> style="--vh:6.64px; --vw:15.19px;">
<head>
<!-- Google tag (gtag.js) -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KZQ9QRB7');</script>
<!-- Microsoft Clarity -->
<script type="text/javascript">
(function(c,l,a,r,i,t,y){
c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
})(window, document, "clarity", "script", "ux1qv1mvh1");
</script>
<!-- End Microsoft Clarity -->
<!-- Meta Pixel Code -->
<!-- End Meta Pixel Code -->

<!-- Event snippet for 資料請求 conversion page -->
<?php if(is_page(103)) : ?>

<?php endif; ?>	
<!-- Event snippet for お問い合わせ conversion page -->
<?php if(is_page(96)) : ?>

<?php endif; ?>	
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
<!--==============独自CSS===============-->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/index.css">
<link rel="stylesheet" type="text/css" id="wp-block-library-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/editor-style.css">
	<?php if (is_single()) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/blog-style.css">
	<?php } ?>
<!--==============JS===============-->
<script type="text/javascript" src="js/jquery__.js"></script>
<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
<!--==============読み込み・スライダーCSS===============-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick_slider.css">

<!--=============Google Font ===============-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Lobster&display=swap" rel="stylesheet">
	
<!--=============イベントのフォーム選択 ===============-->
    <?php wp_head(); ?>
    <?php if( is_page('83')): ?>
<script type='text/javascript'>
    jQuery(function(){

        <?php $my_query = new WP_Query('&post_type=event'); ?>
        <?php if ($my_query->have_posts()) : ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                jQuery('#select-title').append(jQuery('<option>').attr({ value: '<?php the_field('event_title'); ?>' }).text('<?php the_field('event_title');  ?>'));

            <?php endwhile; ?>
        <?php endif; ?>

    });
</script>
<?php endif; ?>
</head>


<body class="on">
<?php wp_body_open(); ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZQ9QRB7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="container">
　<?php get_template_part('nav'); ?>

    <?php if ( ! is_front_page() ) : ?>
    <?php endif; ?>
	