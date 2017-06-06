<?php
/*
Template Name: career-front-page
*/
get_header('career');
?>

<div id="primary" class="content-area" style="width:100%;">
		
	<?php get_template_part( 'pages/team/career', 'ourCulture' ); ?>

	<?php get_template_part( 'pages/team/career', 'ourCultureContent' ); ?>

	<?php get_template_part( 'pages/team/career', 'reasonWorkUs' ); ?>

	<?php get_template_part( 'pages/team/career', 'reasonWorkUsContent' ); ?>			

	<?php get_template_part( 'pages/team/career', 'placeThousandsJobs' ); ?>		

	<?php get_template_part( 'pages/team/career', 'placeThousandsJobsContent' ); ?>				

	<?php get_template_part( 'pages/team/career', 'whatTeamUpTo' ); ?>			

	<?php get_template_part( 'pages/team/career', 'whatTeamUpToContent' ); ?>			

	<?php get_template_part( 'pages/team/career', 'moreInfo' ); ?>				
			
</div>
<?php get_footer(); ?>