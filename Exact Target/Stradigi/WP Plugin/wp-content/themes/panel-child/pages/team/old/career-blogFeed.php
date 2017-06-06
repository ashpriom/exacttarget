<div class="site-content-blogFeed  animated rotateIn duration1 eds-on-scroll " >
				<?php
					/*while ( have_posts() ) : the_post();
						//get_template_part( 'content', 'page' );
					endwhile;

					rewind_posts(); */
			    	  $post_header = get_post( 77 ); 
			 		 $title = $post_header->post_title;
					 $content = $post_header->post_content;
					 ?>
					<div class='title-blogFeed'><?php echo $title?></div>
				    <div class='content-blogFeed'><?php echo $content?></div>
					
					
</div>