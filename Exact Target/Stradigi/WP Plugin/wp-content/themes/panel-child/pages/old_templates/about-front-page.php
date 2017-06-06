<?php
/*
Template Name: about-front-page
*/
get_header('about');
?>

<div id="primary" class="content-area" style="width:100%;">
	
		<?php get_template_part( 'about', 'whatWeDoContent' ); ?>			
					
		<?php get_template_part( 'career', 'ourTeam' ); ?>
		
		<?php get_template_part( 'career', 'ourTeamContent' ); ?>	

		<?php get_template_part( 'about', 'expertise' ); ?>	
		
		<?php get_template_part( 'about', 'expertiseContent' ); ?>	
		
		<?php get_template_part( 'about', 'technologies' ); ?>
					
		<?php get_template_part( 'career', 'moreInfo' ); ?>				
		
</div>
<?php get_footer(); ?>