<?php
/*
Template Name: blog-front-page
*/
get_header('blog');
?>

<div id="primary" class="content-area" style="width:100%;">
	<?php get_template_part( 'pages/news/blog', 'list' ); ?> 
</div>
<?php get_footer(); ?>