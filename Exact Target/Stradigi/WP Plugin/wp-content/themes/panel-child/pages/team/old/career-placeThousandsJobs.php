<div id="hiring" class="hiring site-content-blogFeed" >
				<?php
			    	  $post_header = get_post( 219 );
					 
			 		 $title = $post_header->post_title;
					 $content = $post_header->post_content;
					 $excerpt = $post_header->post_excerpt;
					 echo $excerpt; 
					 ?>
					 
					<div class='title-blogFeed'><?php echo $title?></div>
				    <div class='content-blogFeed'><?php echo $content?></div>
					
					
</div>