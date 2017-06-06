	<?php
					$category_query_args = array(
    'category_name' => 'ourSuccess',
	
	'orderby'=>'date'
);
$category_query = new WP_Query( $category_query_args );
/*echo '<pre>';
 print_r($category_query);
 echo '</pre>';
*/
  $posts = $category_query->posts;
 /* echo '<pre>';
     print_r($posts);
 echo '</pre>';
 */ 
  
  
  
$imagesBlog = array();
$i = 0;

while ($category_query->have_posts()) : $category_query->the_post();
    $thumbID = get_post_thumbnail_id( $post->ID );
	$title = get_the_title($post->ID);
    $imgDestacada = wp_get_attachment_url( $thumbID );
  	$imagesOurSuccess[$i] = $imgDestacada;
	$post_titles[$i] = get_the_title($post->ID);
	$post_content[$i] = get_the_content($post->ID);
	$post_excerpt[$i] = get_the_excerpt($post->ID);
	$post_id[$i] = $post->ID;
	$dates[$i] = get_the_date('',$post->ID);
	$i++;
	
  
 endwhile;

	 ?>


<div id="our-success" class="our-success-class" style="background-image:url('<?php echo $imagesOurSuccess[0]?>');">
<div class="backMark2">


<div id="id-success-left" class="success-left" style="">
			        <div class='success-left-title1' style=" ">
					<?php echo $post_excerpt[0]?></div>
					<div class='success-left-title2' ><?php echo $post_titles[0]?></div>
				    <div class='content-success '><?php echo $post_content[0]?></div>

<div id="tabs" class="ourSuccessTabs">
  <ul id="tab-o-s">
    <li><a href="#tabs-1"><?php echo $post_titles[3]?></a></li>
    <li><a href="#tabs-2"><?php echo $post_titles[2]?></a></li>
    <li><a href="#tabs-3"><?php echo $post_titles[1]?></a></li>
  </ul>
  
  <?php 
  $y=count($post_titles);  
  for ($i=0;$i<count($post_titles);$i++)
  { ?>
  
  
  
  <div id="tabs-<?php echo $i+1;?>" class="tab-overwrite">
  <?php if ($y<>1){?>
    <div id='id-title-our-success-content-<?php echo $i+1;?>' class='title-our-success-content'><?php echo $post_excerpt[$y-1]?></div>
  <?php }?>	
	<div id='id-our-success-content-<?php echo $i+1;?>' class="our-success-content"><?php echo $post_content[$y-1]?></div>
	
	
 </div>
  <?php $y--;}?>				
					
					
					
					
					
</div>
	<div id='id-content-our-success-button' class='content-our-success-button'><a href="<?php echo get_permalink('579');?>">ABOUT US</a></div>
</div>				
<!--<div id="id-success-right" class="success-right" style=" position:absolute; 
    background-image:url('<?php// echo $imagesOurSuccess[3];?>');">





</div>	-->
</div>	

</div>
<div id="id-success-right" class="success-right" style="position:absolute;background-image:url('<?php echo $imagesOurSuccess[3];?>');">





</div>
<script>	
  $( function() {
    $( "#tabs" ).tabs();
  });
</script>  