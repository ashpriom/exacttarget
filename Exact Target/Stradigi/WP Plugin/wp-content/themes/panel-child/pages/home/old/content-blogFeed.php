<div id="blog-feed" class="site-content-blogFeed" >
<?php
	$post_header = get_post( 77 ); 
	$title = $post_header->post_title;
	$content = $post_header->post_content;
?>
	<div class='title-blogFeed'><?php echo $title?></div>
	<div class='content-blogFeed'><?php echo $content?></div>
</div>