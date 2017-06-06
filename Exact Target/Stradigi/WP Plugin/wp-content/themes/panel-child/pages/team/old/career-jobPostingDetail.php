<?php
/*
Template Name: career-jobPostingDetail
*/
get_header('jobPosting');

$post_header = get_post( get_queried_object_id() );              
?>
<div class="job-description-wrapper">
	<div class="inner">
		<div><?=$post_header->post_content;?></div><br>
		<span>role</span>
		<div><?=get_post_custom_values( 'role' )[0]?></div><br>
		<span>main tasks</span>
		<div><?=get_field('main_tasks');?></div>
		<span>required skills</span>
		<div><?=get_field('required_skills');?></div>
		<span>assets</span>
		<div><?=get_field('assets');?></div>
	</div>	
</div>

<?php
include 'career-job-posting-detail.php';

include 'stradigi-modal.php';
?>
	
<?php get_footer(); ?>