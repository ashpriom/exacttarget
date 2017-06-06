<?php
get_header('base');
?>

<body <?php body_class();?> id="blog-detail">

<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header blog-header" role="banner">
	
		<div class="header-blog-wrapper">	
		<?php 
		$post_header = get_post( get_queried_object_id() );
		?>
			<div class="blog-wrapper">
				<img style="width:100%;" src='<?=get_post_custom_values( 'carrousel-img' )[0]?>' alt="" />
				<div class="overlay">
					<div class="article-author-wrapper">
						<div class="article-category"><?=get_post_custom_values( 'category' )[0]?></div>
						<div class="article-name"><?=$post_header->post_title;?></div>
						<div class="article-body"><?=$post_header->post_excerpt;?></div>
						<div class="author-wrapper">
							<div class="avatar" style="background-image:url(<?=get_post_custom_values( 'avatar' )[0]?>)"></div>
							<div class="author-info">
								By
								<span><?=get_post_custom_values( 'author' )[0]?></span>
								<div class="article-date">On <?=get_the_date('',$post->ID);?></div>
							</div>
						</div>					
					</div>
				</div>
			</div>
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