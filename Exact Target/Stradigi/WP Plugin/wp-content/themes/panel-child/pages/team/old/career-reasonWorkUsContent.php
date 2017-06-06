<?php 
$category_query_args = array(
    'category_name' => 'reasonToWork'
);
$category_query = new WP_Query( $category_query_args );
$i =0;
while ($category_query->have_posts()) : $category_query->the_post();
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imagesOurSuccess[$i] = wp_get_attachment_url( $thumbID );
    $post_titles[$i] = get_the_title($post->ID);
    $post_content[$i] = get_the_content($post->ID);
    $post_excerpt[$i] = get_the_excerpt($post->ID);
    $post_id[$i] = $post->ID;
    $i++; 
 endwhile;
?>
<div class="site-content-reason-wrapper">
	<div class="site-content-reason" style="background-image:url(<?=$imagesOurSuccess[1]?>)">

	   <div class="reason-work-us-wrapper content-padding">
		<?php 
		 $post_header = $post_id[1]; 

		 $content = $post_header->post_content;
		 $excerpt = $post_header->post_excerpt;
		?>
		
		  <div class="coffee">
			 <img src="wp-content/uploads/2016/10/coffee-bg.png" alt="">
		  </div>
		
		  <div class="reason-work-us-info">
			<div class="reason-work-us-excerpt"><?php echo $post_excerpt[1] ?></div>
			<div class="reason-work-us-title"><?php echo $post_titles[1]?></div>
			<div class="reason-work-us-content"><?php echo $post_content[1]?></div>
		 </div>	
	   </div>
	   
		<div class="reason-work-us-wrapper image-success" style="background-image:url(<?=$imagesOurSuccess[1]?>)"> 
		</div>
	 
	</div>

	<div class="site-content-reason site-content-reason1" style="background-image:url(<?=$imagesOurSuccess[0]?>)">

	   <div class="reason-work-us-wrapper content-padding left50pt">
		<?php 
		 $post_header = $post_id[0]; 

		 $content = $post_header->post_content;
		 $excerpt = $post_header->post_excerpt;
		?>
		  <div class="air-plane">
			 <img src="wp-content/uploads/2016/10/air-plane.png" alt="">
		  </div>
		  
		  <div class="reason-work-us-info">
			<div class="reason-work-us-excerpt"><?php echo $post_excerpt[0] ?></div>
			<div class="reason-work-us-title"><?php echo $post_titles[0]?></div>
			<div class="reason-work-us-content"><?php echo $post_content[0]?></div>
		 </div>	
	   </div>
	   
		<div class="reason-work-us-wrapper image-success" style="background-image:url(<?=$imagesOurSuccess[0]?>)">
		</div>
		
	</div>
</div>

