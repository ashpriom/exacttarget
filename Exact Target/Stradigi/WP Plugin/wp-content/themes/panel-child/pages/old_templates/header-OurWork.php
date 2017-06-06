<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Panel
 */
global $post;
$style = 'style="color:#e13866;"';
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Stradigi - Cross Platform App Development Company</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--<script src="wp-content/themes/panel-child/js/jquery-1.7.2.min.js"></script>-->
<script src="wp-content/themes/panel-child/js/owl.carousel.min.js"></script>
<script src="wp-content/themes/panel-child/js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="wp-content/themes/panel-child/js/jquery-ui.min.js"></script>

<link rel="stylesheet" href="wp-content/themes/panel-child/js/owl.carousel.css">
<link rel="stylesheet" href="wp-content/themes/panel-child/js/owl.theme.default.css">
<link rel="stylesheet" href="wp-content/themes/panel-child/js/jquery-ui.css">
<link rel="stylesheet" href="wp-content/themes/panel-child/js/jquery-ui.theme.css">
<link rel="shortcut icon" href="wp-content/themes/panel-child/images/favicon-16.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="ourwork">

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header ourwork-header" role="banner"  style="background-image:url('<?=wp_get_attachment_url(get_post_thumbnail_id( 462 ))?>')">
	
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
			  <?php  $post_header = get_post( 462 ); 
			  //var_dump($post_header);

			         $titleMobile = explode(" ", $post_header->post_title);
					 $title = $post_header->post_excerpt;
					 $title1 = explode(" ", $title);
					 $content = $post_header->post_content;
		
		     ?>	
				<div id='id-title-header-2' class='title-header-s  animated flipInX delay1 duration1 eds-on-scroll'><?php //echo 'S'?></div>
				<div id='id-content-header-color' class='content-header-color animated zoomIn delay1 duration1 eds-on-scroll'>
				<?php 
				//$limit = count($titleMobile);
				//echo ' limite es : ' . $limit . ' '; 
				//echo ' titleMobile es : ' . $post_header->post_title . ' ] '; 
				$limit = count($title1);
				$titleN = '';
				if ($limit>2){
					for ($i=0;$i<$limit;$i++){
						if ($i==($limit-2)||$i==($limit-1)){
						$titleN .= '<span '.$style.'>'.$title1[$i].'</span>'.' ';
						}else{
							$titleN .= $title1[$i].' ';
						}
					}
					echo $titleN;
				}else{
					echo $title;
				}
				?>
				</div>
				
				<div id='id-title-header' class='title-header  animated fadeInUp delay1 duration1 eds-on-scroll'><?php echo $title?></div>
				<div id='id-content-header' class='content-header animated zoomIn delay1 duration1 eds-on-scroll'><?php echo $content?></div>
				
			
			</div>
	</header><!-- #masthead -->



	<div class="site-header-wrapper">
		
		<nav id="site-navigation-2" class="navigation-main-2" role="navigation">
				
		<!--<h1  class="menu-toggle-2"><span class="menu-toggle-icon-2"></span><?php //esc_html_e( 'Menu', 'panel' ); ?></h1>-->
				<div class="screen-reader-text skip-link">
				 <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'panel' ); ?>"><?php //esc_html_e( 'Skip to content', 'panel' ); ?></a>
				</div>
				<?php //wp_nav_menu( array( 'theme_location' => 'ourWork' ) ); ?>
				
			</nav>
	</div>

	
	<div id="main" class="site-main">
<!-- #site-navigation -->
	
