<?php
get_header('base');
?>
<body <?php body_class();?> id="blog">

<script>
$(document).ready(function(){

	$('.owl-carouselBlog').owlCarousel({
		margin:10,
		autoplay:true,
		autoplayTimeout:5000,
		navigation : false,
		responsiveClass:true,
		autoplayHoverPause:true,
		loop:true,
		items: 4,
		responsive:{
			0:{
				items:1,
				nav:true
			}
		}
	})
	
});
</script>

<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header blog-header" role="banner">
	
		<div  class='owl-carouselBlog'>	
		<?php 
		$category_query_args = array(
			'category_name' => 'blog'
		);
		$category_query = new WP_Query( $category_query_args );
		$i = 1;
		while (($i < 5) && ($category_query->have_posts())){
			$category_query->the_post();
		?>
			<div class="blog-wrapper">
				<img style="" src='<?=get_post_custom_values( 'carrousel-img' )[0]?>' alt="" />
				    <div class="overlay">
						<div class="article-author-wrapper">
							<div class="article-number">0<?=$i?></div> 
							<div class="article-category"><?=get_post_custom_values( 'category' )[0]?></div>
							<div class="article-name"><?=$post->post_title;?></div>
							<div class="article-body"><?=$post->post_excerpt;?></div>
							<div class="article-read"><a href="<?=get_permalink();?>">READ MORE</a></div>
						</div>
					</div>
				
			</div>
		<?php
		    $i++;
		}
		?>
		</div>
		
		<div class="site-header-wrapper">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
				rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!--<h2 class="site-description"><?php //bloginfo( 'description' ); ?></h2>-->
			</div>
			<nav id="site-navigation" class="navigation-main" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
		</div>
		
	</header>
	
	<div id="main" class="site-main">