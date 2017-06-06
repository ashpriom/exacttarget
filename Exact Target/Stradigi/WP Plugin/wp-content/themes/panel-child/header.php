<?php
get_header('base');
?>
<body <?php body_class(); ?> id="home">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header home-header" role="banner">
	
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
			<div id='id-header' class='all-content-header   '>
			  <?php  $post_header = get_post( 66 ); 
			         $titleMobile = explode(" ", $post_header->post_title);
					 $title = $post_header->post_title;
					 $content = $post_header->post_content;
		     ?>	
				<div id='id-title-header-2' class='title-header-s  animated flipInX delay1 duration1 eds-on-scroll'><?php echo 'S'?></div>
				<div id='id-content-header-color' class='content-header-color animated zoomIn delay1 duration1 eds-on-scroll'>
				<?php 
				$limit = count($titleMobile);
				$titleN = '';
				if ($limit>3){
				for ($i=0;$i<$limit;$i++){
					if ($i==($limit-2)||$i==($limit-1)){
					$titleN .= '<span '.$style.'>'.$titleMobile[$i].'</span>'.' ';
					}else{
						$titleN .= $titleMobile[$i].' ';
					}
				}
				echo $titleN;
				}else{
					echo $title;
				}
				?>
				</div>
				
				<div id='id-title-header' class='title-header  <?php //animated fadeInUp delay1 duration1 eds-on-scroll?> animated fadeInUp duration1 eds-on-scroll '><?php echo $title?></div>
				<div id='id-content-header' class='content-header <?php //animated zoomIn delay1 duration1 eds-on-scroll?>  animated zoomIn duration1 eds-on-scroll '><?php echo $content?></div>
				
			
				<div id='arrow-hero' style="" class='arrow-hero'>
				
					<a href="#site-navigation-2" ><img src="wp-content/themes/panel-child/images/icn-arrrow-down.png" height="60" width="60" alt=""></a>
					
			    </div>
			
			
			</div>
		
			
	</header><!-- #masthead -->


	<?php $header_image = get_header_image(); ?>
	<?php if ( is_singular() && '' != get_the_post_thumbnail() && 'jetpack-comic' != get_post_type() ) : //Featured header images on posts and pages ?>
		<div class="featured-header-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
	<?php elseif ( ! empty( $header_image ) ) : ?>
		<div class="featured-header-image">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			</a>
		</div>
	<?php endif; ?>
	<div class="site-header-wrapper">
		
		<nav id="site-navigation-2" class="navigation-main-2" role="navigation">
				
		<!--<h1  class="menu-toggle-2"><span class="menu-toggle-icon-2"></span><?php //esc_html_e( 'Menu', 'panel' ); ?></h1>-->
				<div class="screen-reader-text skip-link">
				 <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'panel' ); ?>"><?php //esc_html_e( 'Skip to content', 'panel' ); ?></a>
				</div>
				<?php //wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
				
			</nav>
			<?php //<hr>?>
	</div>

	
	<div id="main" class="site-main">
<!-- #site-navigation -->
	
