<?php
/*
Template Name: job-posting-popup
*/
session_start();

if (!isset($_SESSION['jobposting']))
{                     
	wp_redirect( get_site_url(), 301 );
    exit();
}else{
	get_header('jobPosting');
	$jobId = $_SESSION['current-job-id'];
	$post_header = get_post( $jobId );
	session_destroy();
}
$catId = get_the_category($jobId)[0]->cat_ID;
 ?>
 
<div class="job-description-wrapper">
	<div class="inner">
	   <?php 
	     if ($catId == 19){ // project management
	   ?>	 
		<div><?=$post_header->post_content;?></div><br>
		<span>overview</span>
		<div><?=get_field( 'overview', $jobId  )?></div><br>
		<span>client relationships</span>
		<div><?=get_field('client_relationships', $jobId );?></div>
		<span>project preparation & other documentation</span>
		<div><?=get_field('project_preparation_&_other_documentation', $jobId );?></div>
		<span>project management</span>
		<div><?=get_field('project_management', $jobId );?></div>
		<span>general</span>
		<div><?=get_field('general', $jobId );?></div>
		<span>qualifications</span>
		<div><?=get_field('qualifications', $jobId );?></div>
       <?php 		
         }else{			 
	    ?>	 
			<div><?=$post_header->post_content;?></div><br>
			<span>role</span>
			<div><?=get_post_custom_values( 'role', $jobId )[0]?></div><br>
			<span>main tasks</span>
			<div><?=get_field('main_tasks', $jobId );?></div>
			<span>required skills</span>
			<div><?=get_field('required_skills', $jobId );?></div>
			<span>assets</span>
			<div><?=get_field('assets', $jobId );?></div>
		<?php	
		 }
		 ?>
	</div>	
</div>
 
<?php
include 'carrer-job-posting-detail.php'
?>
<script src="jquery.modal.js" type="text/javascript" charset="utf-8"></script>

<div class='jquery-modal blocker current'>
	<div id="ex1" class="modal">
		<img width='57' src='wp-content/themes/panel-child/images/ic_message_sent@2x.png' alt='message sent'>
		<p class='thank-you'>thank you!</p>
		<p class='message-sent'>Your message has been successfully sent</p>
		<a class='contactus-close' href="<?=get_site_url()?>">Close</a>
	</div>
</div> 
  

<?php get_footer(); ?>