<?php
get_header('base');
?>

<body <?php body_class();?> id="error404">

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header error404-header" role="banner">
	
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
		  <?php  $post_header = get_post( 1188); // 1129 in local, 1188 in sample server?>
			<div id='id-location-header' class='location-header animated zoomIn delay1 duration1 eds-on-scroll'><?php echo $post_header->post_excerpt?></div>
			<div id='id-title-header' class='title-header  animated fadeInUp delay1 duration1 eds-on-scroll'><?php echo $post_header->post_title?></div>
			<div id='id-content-header' class='content-header'><?php echo $post_header->post_content?></div>
		</div>
		
	</header><!-- #masthead -->
	
	<div id="main" class="site-main">
<!-- #site-navigation -->
	
