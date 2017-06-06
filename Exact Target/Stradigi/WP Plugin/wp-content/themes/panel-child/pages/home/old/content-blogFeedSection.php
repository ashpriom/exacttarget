<?php 
$category_query_args = array(
    'category_name' => 'blog',
	'orderby'=>'date'
);

$category_query = new WP_Query( $category_query_args );
$posts = $category_query->posts;
$imagesBlog = array();
$i = 0;

while ($category_query->have_posts()) : $category_query->the_post();
	$post_id[$i] = $post->ID;
	$post_titles[$i] = $post->post_title;
	$post_excerpts[$i] = $post->post_excerpt;
	$dates[$i] = get_the_date('',$post->ID);
	$links[$i] = $post->guid;
	$imagesBlog[$i] = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	$i++;
 endwhile;
 
function short_word($length, $string,$separator=null){
 
 if(strlen($string) > $length)
    $string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)).$separator;
 return $string;
 }
?>
<section class="site-blog-content">
<div id="blog-feed-content" class="site-content-blogFeed-articles animated" >
			<div style='background-image:url(<?php echo $imagesBlog[0]?>)' class="blog-primary">
			<div class="blog-primary-1" >
			<div class='date-post-blog'><?php  echo $dates[0];?></div>
			<div class='title-post-blog-1'><a class='ablog' href="<?php echo $links[0];?>"><?php  echo short_word(25,$post_titles[0]);?></a></div>
			<div class='excerpt-post-blog-1'><?php echo short_word(180,$post_excerpts[0],'...');?></div>
			<div id='space' class='div-space'></div>
			<div id='id-blog-readMore-button'><a href="<?php echo $links[0];?>" target="_blank"><div class="read-more-buttom read-more-buttom-3">READ MORE</div></a></div>
			
			</div>
			<div id='space' class='div-space'></div>
			</div>
			<div class="blog-secondary">
			
			 <div class="blog-secondary-first">
			    <div style=""  class="blog-secondary-first-left">
				   
				<div class='date-post-blog date-post-blog-1'>  <?php  echo $dates[1];?></div>
			       <div class='title-post-blog-1 article-blog-title'><a class='bblog' href="<?php echo $links[1];?>"><?php  echo short_word(25,$post_titles[1]);?></a></div>
				   <div class='excerpt-post-blog-1 article-blog-excerpt'><?php echo short_word(100,$post_excerpts[1],'...');?></div>
			    </div>
			    <div style="" class="blog-secondary-first-center">
			      
			    </div>
			    <div style=" background-image:url(<?php echo $imagesBlog[1]?>)" class="blog-secondary-first-right">
			      <div class="black-transparent-fill">
				  <a href="<?php echo $links[1];?>" target="_blank"><div class='read-more-buttom read-more-buttom-1'>READ MORE</div></a>
				  </div>
			    </div>
				
			 </div>
			 
			 
			 
			 
			 <div class="blog-secondary-second">
			     <div style="background-image:url(<?php echo $imagesBlog[2]?>)"  class="blog-secondary-second-left">
			      <div class="black-transparent-fill">
				  <a href="<?php echo $links[2];?>" target="_blank"><div class='read-more-buttom read-more-buttom-2'>READ MORE</div></a>
				  </div>
			    </div>
			    <div style="" class="blog-secondary-second-center">
			      
			    </div>
			    <div style="" class="blog-secondary-second-right">
				 <div class='date-post-blog date-post-blog-1'><?php  echo $dates[2];?></div>
			      <div class='title-post-blog-1 article-blog-title'><a class='bblog' href="<?php echo $links[2];?>"><?php  echo short_word(25,$post_titles[2]);?></a></div>
				 <div class='excerpt-post-blog-1 article-blog-excerpt'> <?php echo short_word(100,$post_excerpts[2],'...');?></div>
			    </div>
			 </div>
			
			</div>
					
					
</div>
</section>