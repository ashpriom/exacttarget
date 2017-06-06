<?php
	$temp = $temp1 = $strHTMLDesktop1 = $strHTMLDesktop2 = $strHTMLDesktop3 = $strHTMLPhone = $i = ''; 
	
	$category_query_args = array(
		'category_name' => 'blog'
	);
	
	$category_query = new WP_Query( $category_query_args );
	
	$i = 0;
	while ( ($category_query->have_posts())){
		$category_query->the_post();

		$temp = '<a class="text-decoration-none" href="' . get_permalink() .'"><div><img src="' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '" alt=""></div></a><div class="article-info"><div class="mobile-development">' .get_post_custom_values( 'category' )[0]. '</div><a class="text-decoration-none" href="' . get_permalink() .'"><div class="article-title">' . $post->post_title . '</div></a><div class="article-time">' . get_the_date('',$post->ID) . '</div><div class="article-excerpt">' . $post->post_excerpt . '</div><div><a class="article-readmore" href="' . get_permalink() .'">Read More</a></div></div>';
		
		$temp1 = '<div class="article ' . (($i > 5)?'hide':'') . '">' . $temp . '</div>';
		
		
		if (($i % 3)== 0){
			$strHTMLDesktop1 .= $temp1;
		}
		
		if (($i % 3)== 1){
			$strHTMLDesktop2 .= $temp1;
		}

		if (($i % 3)== 2){
			$strHTMLDesktop3 .= $temp1;
		}
		
		$temp2 = '<div class="article ' . (($i > 5)?'hide':'') . '">' . $temp . '</div>';
		
		if (($i % 2)== 0){
			$strHTMLTablet1 .= $temp2;
		}
		
		if (($i % 2)== 1){
			$strHTMLTablet2 .= $temp2;
		}
		
		$strHTMLPhone .= $temp2;
		
		$i++;
	}	
?>		
<div class="articles desktop">
	<div class="article-wrapper article-wrapper1">
		<?=$strHTMLDesktop1?>
	</div>
	<div class="article-wrapper article-wrapper2"> 
		<?=$strHTMLDesktop2?>
	</div>
	<div class="article-wrapper article-wrapper3"> 
		<?=$strHTMLDesktop3?>	
	</div> 
</div>

	
<div class="articles tablet">
	<div class="article-wrapper article-wrapper1">
		<?=$strHTMLTablet1?>
	</div>
	<div class="article-wrapper article-wrapper2"> 
		<?=$strHTMLTablet2?>
	</div>
</div>
	
<div class="articles phone">
	<div class="article-wrapper article-wrapper1">
		<?=$strHTMLPhone?>
	</div>
</div>

<div class="load-more">Load more</div>

<script>
jQuery(document).ready(function(){
	jQuery(".load-more").click(function(){
		$(".article-wrapper1:visible .article:hidden").eq(0).show();
		$(".article-wrapper2:visible .article:hidden").eq(0).show();
		$(".article-wrapper3:visible .article:hidden").eq(0).show();
		if (($(".articles.desktop").is(':hidden')) && ($(".articles.tablet").is(':hidden'))){
			$(".article-wrapper1:visible .article:hidden").eq(0).show();
		}
	})
});
</script>