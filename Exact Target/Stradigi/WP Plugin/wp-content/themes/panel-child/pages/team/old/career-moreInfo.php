<div id='more-info-main' class='main-more-info'>
	<div id="more-info" class="site-content-moreInfo" >
	<?php
	     // <div id="more-info" class="site-content-moreInfo    animated flip duration1 eds-on-scroll " >
		 $post_header = get_post( 79 ); 
		 $title = $post_header->post_title;
		 $content = $post_header->post_content;
	?>
		<div id='id-title-moreInfo' class='title-moreInfo'><?php echo $title?></div>
		<div id='id-content-moreInfo' class='content-moreInfo '><?php echo $content?></div>
		<a class='text-decoration-none' href="<?=get_permalink(575)?>"><div class='content-moreInfo-button'>CONTACT US</div></a>
	</div>
</div>