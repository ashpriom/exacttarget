<?php
/*
  Template Name: main-news-page
 */
get_header('base');
?>
<?php get_template_part('pages/news/content', 'topPanel'); ?>

<?php get_template_part( 'pages/news/content', 'blogCategories' ); ?> 
<?php get_template_part( 'pages/news/content', 'blogHot' ); ?> 
<?php get_footer(); ?>


