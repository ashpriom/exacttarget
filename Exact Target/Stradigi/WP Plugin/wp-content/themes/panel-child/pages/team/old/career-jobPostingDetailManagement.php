<?php
/*
Template Name: career-jobPostingDetailManagement
*/
get_header('jobPosting');

$post_header = get_post( get_queried_object_id() );
?>
<div class="job-description-wrapper">
	<div class="inner">
		<div><?=$post_header->post_content;?></div><br>
		<span>overview</span>
		<div><?=get_field( 'overview' )?></div><br>
		<span>client relationships</span>
		<div><?=get_field('client_relationships');?></div>
		<span>project preparation & other documentation</span>
		<div><?=get_field('project_preparation_&_other_documentation');?></div>
		<span>project management</span>
		<div><?=get_field('project_management');?></div>
		<span>general</span>
		<div><?=get_field('general');?></div>
		<span>qualifications</span>
		<div><?=get_field('qualifications');?></div>		
	</div>	
</div>

<?php
include 'career-job-posting-detail.php';

include 'stradigi-modal.php';
?>

<?php get_footer(); ?>