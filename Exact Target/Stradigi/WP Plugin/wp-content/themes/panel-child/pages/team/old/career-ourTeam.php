<div id="our-team" class="site-content-identity" >
<?php
	$post_header = get_post( 217 ); 
	$title = $post_header->post_title;
	$content = $post_header->post_content;
?>
	<div class='title-blogFeed'><?php echo $title?></div>
	<div class='content-blogFeed'><?php echo $content?></div>
</div>