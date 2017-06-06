<?php $category_query_args_prod = array(
    'category_name' => 'production',
	
	'orderby'=>'date'
);
$category_query_args_mark = array(
    'category_name' => 'market',
	
	'orderby'=>'date'
);
$category_query_prod = new WP_Query( $category_query_args_prod );
$category_query_mark = new WP_Query( $category_query_args_mark );

$posts_prod = $category_query_prod->posts;
$posts_mark = $category_query_mark->posts;
  
$imagesProd = array();
$i = 0;
while ($category_query_prod->have_posts()) : $category_query_prod->the_post();
    $thumbID_prod = get_post_thumbnail_id( $post->ID );
	$title = get_the_title($post->ID);
    $imgDestacadaProd = wp_get_attachment_url( $thumbID_prod );
  	$imagesProd[$i] = $imgDestacadaProd;
	
	$post_titles_prod[$i] = get_the_title($post->ID);
	$post_content_prod[$i] = get_the_content($post->ID);
	$post_id_prod[$i] = $post->ID;
	$dates_prod[$i] = get_the_date('',$post->ID);

	$i++;
	
  
 endwhile;
 
 $imagesMark = array();
$i = 0;
while ($category_query_mark->have_posts()) : $category_query_mark->the_post();
$thumbID_mark = get_post_thumbnail_id( $post->ID );
	$title = get_the_title($post->ID);
    $imgDestacadaMark = wp_get_attachment_url( $thumbID_mark );
  	$imagesMark[$i] = $imgDestacadaMark;
	$post_titles_mark[$i] = get_the_title($post->ID);
	$post_content_mark[$i] = get_the_content($post->ID);
	$post_id_mark[$i] = $post->ID;
	$dates_mark[$i] = get_the_date('',$post->ID);

$i++;
 
endwhile;
 ?>

<section   class="productionMarket">
 
<div id="prod" style="background-image:url('<?php echo $imagesProd[3]?>')" class="production">
	<div id="prod-back" class="production-back">
		<div class='titleProduction' >
			<?php echo $post_titles_prod[3];?>
		</div>


		<div class="productionText">
		<div class='imgProd' >
			<img width="63" src="<?php echo $imagesProd[2];?>" alt="">
		</div>
		<div class='productionRowTitle' >
			<?php echo $post_titles_prod[2];?>
		</div>
		<div class="contentProduction">
			<?php echo $post_content_prod[2];?>
		</div>
		<div class='separator-prod'></div>
		<div class='imgProd' >
			<img width="63" src="<?php echo $imagesProd[1];?>" alt="">
		</div>
		<div class='productionRowTitle' >
			<?php echo $post_titles_prod[1];?>
		</div>
	<div class="contentProduction">
		<?php echo $post_content_prod[1];?>
	</div>
	<div class='separator-prod'></div>
	<div class='imgProd' >
			<img width="63" src="<?php echo $imagesProd[0];?>" alt="">
		</div>
		<div class='productionRowTitle' >
			<?php echo $post_titles_prod[0];?>
		</div>
		<div class="contentProduction">
			<?php 	echo $post_content_prod[0];?>
		</div>
		</div>
	</div>
</div>
<div class="ipad-wrapper" style="">
<div class="ipad-container">
   <div class="ipad"><img src="wp-content/themes/panel-child/images/ipad.png" alt="">
   </div>
</div>
</div>
<div  id="market-div" class="market" style="background-image:url('<?php echo $imagesMark[3]?>')">
<div class="backMark">
    
	<div class='titleMarketing' >
		<?php echo $post_titles_mark[3];?>
	</div>
	<div class="marketingText">
	<div class='imgProd' >
			<img width="63" src="<?php echo $imagesMark[2];?>" alt="">
		</div>
		<div class='marketingRowTitle' >
			<?php echo $post_titles_mark[2];?>
		</div>
		<div class="contentMarketing">
			<?php echo $post_content_mark[2];?>
		</div>
<div class='separator-prod'></div>
<div class='imgProd' >
			<img width="63" src="<?php echo $imagesMark[1];?>" alt="">
		</div>
		<div class='marketingRowTitle' >
			<?php echo $post_titles_mark[1];?>
		</div>
		<div class="contentMarketing">
			<?php echo $post_content_mark[1];?>
		</div>
<div class='separator-prod'></div>
<div class='imgProd' >
			<img width="63" src="<?php echo $imagesMark[0];?>" alt="">
		</div>
		<div class='marketingRowTitle' >
			<?php echo $post_titles_mark[0];?>
		</div>
		<div class="contentMarketing">
			<?php echo $post_content_mark[0];?>
		</div>
	</div>

  


</div>
</div>

</section>