<div id="social-feed" class="site-content-trustedBest" >
<?php
	 $post_header = get_post( 180 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
?>
	<div class='title-trustedBest'><?php echo $title?></div>
	<div class='content-trustedBest '><?php echo $content?></div>
</div>