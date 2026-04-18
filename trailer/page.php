<?php get_header(); ?>
<?php wp_head();?>

 <?php get_template_part('side-fix-banner'); ?>
<div id="service"> 
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}
?>
	
	
 <?php get_template_part('include-bottom01'); ?>
</div>
<?php get_footer(); ?>
<?php wp_footer();?>