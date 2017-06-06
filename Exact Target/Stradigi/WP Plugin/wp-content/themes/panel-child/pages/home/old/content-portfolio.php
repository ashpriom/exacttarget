

<section id='portfolio-id' class='portfolio-front  ' >
<div class='portfolio-front-content ' >
	<?php 
                     $post_header = get_post( 141 ); 
			         $titleMobile = explode(" ", $post_header->post_title);
					 $title = $post_header->post_title;
					 $content = $post_header->post_content;
?>
	
	<div class='inspiring'>inspiring</div>
	<div class='portfolio-f-title'><?php echo $title?></div>
	<div class='portfolio-f-content'><?php echo $content?></div>
	<div class='content-portfolio-button'><a href="<?php echo get_permalink('462');?>">VIEW PORTFOLIO</a></div>
	
	
	
</div>

<div class='portfolio-front-carrousel carrousel-desktop'>
<div  class='portfolio-front-carrousel-content owl-carousel '>
<?php 
$category_query_args = array(
    'category_name' => 'portfolio'
);
$category_query = new WP_Query( $category_query_args );
while ($category_query->have_posts()) : $category_query->the_post();
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );
	$hideInMobile = '';
  echo '<div  class="carrousel-img '. $hideInMobile .'" style="background-image:url('.$imgDestacada.')">
	      </div>';
 endwhile;
 
 
 /*echo '<div class="carrousel-img" style="height:750px;background-repeat: no-repeat;
    background-position: 20% bottom;
    background-size: 100%;
    width: 100%;
    background-image:url('.$imgDestacada.')">
	      </div>';*/
 
 
 
 
?>
</div>
 <div class='content-portfolio-button-mobile '><a href="<?php echo get_permalink('462');?>">VIEW PORTFOLIO</a></div>
</div>

<div class='portfolio-front-carrousel carrousel-mobile'>
<div  class='portfolio-front-carrousel-content owl-carousel-mobile '>
<?php 
$category_query_args = array(
    'category_name' => 'portfolio'
);
$category_query = new WP_Query( $category_query_args );
while ($category_query->have_posts()) : $category_query->the_post();
    $thumbID = get_post_thumbnail_id( $post->ID );
    $imgDestacada = wp_get_attachment_url( $thumbID );
	$hideInMobile = '';
	if ($post->ID == 137){
  echo '<div  class="carrousel-img '. $hideInMobile .'" style="background-image:url('.$imgDestacada.')">
	      </div>';
	}	  
 endwhile;
?>
</div>
<div class='content-portfolio-button-mobile '><a href="<?php echo get_permalink('462');?>">VIEW PORTFOLIO</a></div>
 </div>
</section>

<script>
$(document).ready(function(){
	$('.owl-carousel').owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:5000,
		margin:10,
		navigation : false,
		responsiveClass:true,
		autoplayHoverPause:true,
		items: 3,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				nav:true,
				/*loop:false*/
			}
		}
	})
	
	$('.owl-carousel-mobile').owlCarousel({
		loop:false,
		autoplay:false,
		autoplayTimeout:5000,
		margin:10,
		navigation : false,
		responsiveClass:true,
		autoplayHoverPause:true,
		items: 1,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				nav:true,
				/*loop:false*/
			}
		}
	})	
});
</script>