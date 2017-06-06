<div id="our-identity" class="site-content-identity" >
<?php
	 $post_header = get_post( 73 ); 
         
         //get_posts(array('tag' => ''));

	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
?>
	<div id='id-title-identity' class='title-identity'><?php echo $title?></div>
	<div id='id-content-identity' class='content-identity '><?php echo $content?></div>
</div>