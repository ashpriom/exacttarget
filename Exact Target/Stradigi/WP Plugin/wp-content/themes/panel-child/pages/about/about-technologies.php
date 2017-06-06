<?php 
	$post_header = get_post( 606 ); 
	$title = $post_header->post_title;
	$content = $post_header->post_content;
	$img = wp_get_attachment_url( get_post_thumbnail_id( 606 ) );

	$category_query_args = array(
		'category_name' => 'technologies',
		'posts_per_page'=>'-1' 
	);
	$category_query = new WP_Query( $category_query_args );
	$i =0;
	while ($category_query->have_posts()) : $category_query->the_post();
		$thumbID = get_post_thumbnail_id( $post->ID );
		$imagesOurSuccess[$i] = wp_get_attachment_url( $thumbID );
		$i++; 
	endwhile;
	/*echo count($imagesOurSuccess);
	echo '<pre>';
	print_r($imagesOurSuccess);
	echo '</pre>';
	*/
?>

<div id="technology" class="technology" style="background-image:url('<?=$img?>')">

	<div class="technology-header">
	   <div class="technology-title"><?php echo $title?></div>
	   <div class="technology-content"><?php echo $content?></div>
	</div>
	
	<div class="technology-images">
	
		<div><img src="<?=$imagesOurSuccess[0]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[1]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[9]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[8]?>" alt=""></div>
		<div class="width20pt"><img src="<?=$imagesOurSuccess[7]?>" alt=""></div>
		<div class="width20pt"><img src="<?=$imagesOurSuccess[6]?>" alt=""></div>
		<div class="width20pt"><img src="<?=$imagesOurSuccess[5]?>" alt=""></div>
		<div class="width20pt"><img src="<?=$imagesOurSuccess[4]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[3]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[2]?>" alt=""></div>	
        <div><img src="<?=$imagesOurSuccess[10]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[11]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[12]?>" alt=""></div>
		<div><img src="<?=$imagesOurSuccess[13]?>" alt=""></div> 
		<div><img src="<?=$imagesOurSuccess[14]?>" alt=""></div>		
        		
	</div>
	
</div>