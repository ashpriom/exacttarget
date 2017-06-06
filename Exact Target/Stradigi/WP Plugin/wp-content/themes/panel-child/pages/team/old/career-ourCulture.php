<div id="our-culture" class="site-content-identity" >
<?php
	 $post_header = get_post( 215 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
?>
	<div class='title-blogFeed'><?php echo $title?></div>
	<div class='content-blogFeed'><?php echo $content?></div>
</div>