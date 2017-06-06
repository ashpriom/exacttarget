

<div id="care-to-join" class='career-front' >
<div  class='career-front-carrousel  '>
<div  class='career-front-carrousel-content   '>
<?php 
$category_query_args = array(
    'category_name' => 'careerFrontPage'
);
$category_query = new WP_Query( $category_query_args );
while ($category_query->have_posts()) : $category_query->the_post();
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );
    echo '<div class="carrousel-img-career-f "><img src='.$imgDestacada.' alt="" /></div> ';
  
 endwhile;
?>
<div class='content-career-button-mobile '><a href="<?php echo get_permalink('186').'#hiring';?>">SEE ALL OPENINGS</a></div>
</div>
 
</div>
<div class='career-front-content'>
	<?php 
		 $post_header = get_post( 152 ); 
		 $titleMobile = explode(" ", $post_header->post_title);
		 $title = $post_header->post_title;
		 $content = $post_header->post_content;
		 $excerpt = $post_header->post_excerpt;
	?>
	
	<div class='care-join'>care to join?</div>
	<div class='career-f-title'><?php echo $title;?></div>
	<div class='career-f-excerpt'><?php echo $excerpt;?></div>
	
	<div class='career-f-content'><?php echo $content?>
	<div id='id-content-button' class='content-career-button'><a href="<?php echo get_permalink('186').'#hiring';?>">SEE ALL OPENINGS</a></div>
	
	</div>
	
</div>
</div>