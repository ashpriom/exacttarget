<?php 
$category_query_args = array(
    'category_name' => 'whatWeDo'
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
<div class="what-we-do" style="background-image:url('<?=$imagesOurSuccess[0]?>')">
   <div class="what-we-do-wrapper">
	<?php 
	 $post_header = $post_id[1]; 
	 $content = $post_header->post_content;
	 $excerpt = $post_header->post_excerpt;
	?>

	  <div class="what-we-do-info">
		<div class="what-we-do-excerpt"><?php echo $post_excerpt[1] ?></div>
		<div class="what-we-do-title "><?php echo $post_titles[1]?></div>
		<div class="what-we-do-content"><?php echo $post_content[1]?></div>		
	 </div>	
	 
   </div>
   
   <div class="what-we-do-wrapper second" style="background-image:url('<?=$imagesOurSuccess[0]?>');">
	<?php 
	 $post_header = $post_id[0]; 
	 $content = $post_header->post_content;
	 $excerpt = $post_header->post_excerpt;
	?>
 
	  <div class="what-we-do-info">
		<div class="what-we-do-excerpt"><?php echo $post_excerpt[0] ?></div>
		<div class="what-we-do-title color-white"><?php echo $post_titles[0]?></div>
		<div class="what-we-do-content color-white"><?php echo $post_content[0]?></div>		
	 </div>	 
	 
   </div>
 
</div>
<?php
/*
<div class="about-image what-we-do-img">
</div>
*/
?>