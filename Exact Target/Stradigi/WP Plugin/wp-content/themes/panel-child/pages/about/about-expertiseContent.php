<div class="site-content-expertise">
<?php
	 $post_header = get_post( 592 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $img = wp_get_attachment_url( get_post_thumbnail_id( 592 ) );
?>
	<div class="expertise-wrapper">
		<div class="expertise-img-wrapper" ><img width='93' class="expertise-img" src='<?php echo $img ?>' alt="" /></div>						
		<div class='expertise-title'><?php echo $title?></div>
		<div class='expertise-content'><?php echo $content?></div>
	</div>
	
<?php
	 $post_header = get_post( 595 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $img = wp_get_attachment_url( get_post_thumbnail_id( 595 ) );					 
?>
	<div class="expertise-wrapper">
		<div class="expertise-img-wrapper"><img width='93' class="expertise-img" src='<?php echo $img ?>' alt="" /></div>											
		<div class='expertise-title'><?php echo $title?></div>					 		
		<div class='expertise-content'><?php echo $content?></div>		
	</div>
	
<?php
	 $post_header = get_post( 598 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $img = wp_get_attachment_url( get_post_thumbnail_id( 598 ) );					 
?>
	<div class="expertise-wrapper">
		<div class="expertise-img-wrapper"><img width='93' class="expertise-img" src='<?php echo $img ?>' alt="" /></div>
		<div class='expertise-title'><?php echo $title?></div>
		<div class='expertise-content'><?php echo $content?></div>						
	</div>
	
<?php
	 $post_header = get_post( 601 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $img = wp_get_attachment_url( get_post_thumbnail_id( 601 ) );					 
?>
	<div class="expertise-wrapper">
		<div class="expertise-img-wrapper"><img width='93' class="expertise-img" src='<?php echo $img ?>' alt="" /></div>
		<div class='expertise-title'><?php echo $title?></div>
		<div class='expertise-content'><?php echo $content?></div>						
	</div>

<?php
	 $post_header = get_post( 1088 ); 
	 $title = $post_header->post_title;
	 $content = $post_header->post_content;
	 $img = wp_get_attachment_url( get_post_thumbnail_id( 1088 ) );					 
?>
	<div class="expertise-wrapper marginright0">
		<div class="expertise-img-wrapper"><img width='93' class="expertise-img" src='<?php echo $img ?>' alt="" /></div>
		<div class='expertise-title'><?php echo $title?></div>
		<div class='expertise-content'><?php echo $content?></div>						
	</div>	
	
</div>