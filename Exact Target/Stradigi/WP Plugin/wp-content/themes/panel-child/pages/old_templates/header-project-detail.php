<?php
get_header('base');
?>
<body <?php body_class();?> id="project">

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header project-header" role="banner" style="background-image:url('<?=get_post_custom_values( 'background-image' )[0]?>')">
	
		<div class="site-header-wrapper">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
				rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<!--<h2 class="site-description"><?php //bloginfo( 'description' ); ?></h2>-->
			</div>
			<nav id="site-navigation" class="navigation-main" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
		<div id='id-header' class='all-content-header'>
		  <?php  $post_header = get_post( get_queried_object_id() );?>
			<div class="case-study">case study</div>
			<div id='id-title-header' class='title-header case-study-title animated fadeInUp delay1 duration1 eds-on-scroll'><?php echo $post_header->post_title?></div>
			<div id='id-location-header' class='location-header animated zoomIn delay1 duration1 eds-on-scroll'><?php echo $post_header->post_excerpt?></div>
			<div class="resume"><?=get_post_custom_values( 'intro-text' )[0]?></div>
		</div>
		<div class="product-img-wrapper" style="">
			<img src="<?=get_post_custom_values( 'product-image' )[0]?>" alt="">
		</div>
	</header><!-- #masthead -->
	
	<div id="main">
<!-- #site-navigation -->
	
