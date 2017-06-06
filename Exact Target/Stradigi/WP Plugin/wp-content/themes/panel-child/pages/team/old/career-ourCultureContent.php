<div id="culture" class="site-content-culture">
<?php
	 $post_header = get_post( 226 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $thumbID = get_post_thumbnail_id( 226 );
	 $imgDestacada = wp_get_attachment_url( $thumbID );
	 
	 ?>
	<div class="culture-wrapper">
		<div class='culture-title'><?php echo $title?></div>
		<div class="culture-img-wrapper" ><img width='80' class="culture-img" src='<?php echo $imgDestacada ?>' alt="" /></div>					
		<div class='culture-content'><?php echo $content?></div>
	</div>
<?php
	 $post_header = get_post( 229 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $thumbID = get_post_thumbnail_id( 229 );
	 $imgDestacada = wp_get_attachment_url( $thumbID );					 
	 ?>
	<div class="culture-wrapper">
		<div class='culture-title'><?php echo $title?></div>					 
		<div class="culture-img-wrapper"><img width='80' class="culture-img" src='<?php echo $imgDestacada ?>' alt="" /></div>											
		<div class='culture-content'><?php echo $content?></div>		
	</div>
<?php
	 $post_header = get_post( 232 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $thumbID = get_post_thumbnail_id( 232 );
	 $imgDestacada = wp_get_attachment_url( $thumbID );					 
	 ?>
	<div class="culture-wrapper">
		<div class='culture-title'><?php echo $title?></div>
		<div class="culture-img-wrapper"><img width='80' class="culture-img" src='<?php echo $imgDestacada ?>' alt="" /></div>						
		<div class='culture-content'><?php echo $content?></div>						
	</div>
</div>