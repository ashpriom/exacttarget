<div id="expertise" class="site-content-identity" >
<?php // <div id="expertise" class="site-content-identity  animated rotateIn duration1 eds-on-scroll " > ?>
<?php
	 $post_header = get_post( 604 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
?>
	<div class='title-blogFeed'><?php echo $title?></div>
	<div class='content-blogFeed'><?php echo $content?></div>
</div>