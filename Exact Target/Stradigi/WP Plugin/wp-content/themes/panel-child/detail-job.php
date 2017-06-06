<?php
/*
Template Name: job-posting-detail
*/
get_header('base');

$post_header = get_post( get_queried_object_id() ); 
$page_title = $post_header->post_title;
$page_excerpt = $post_header->post_excerpt;
$jobHTMLstr = '';
$overView = get_field('overview');
$duties_responsabilities = get_field('Duties_responsabilities');
$qualifications = get_field('qualifications');
$main_tasks = get_field('main_tasks');
$required_skills = get_field('required_skills');
$assets = get_field('assets');

if(strlen($overView) > 0){
    $title = 'Overview';
   $jobHTMLstr.= '<div class="title">'.$title.'</div>'; 
    $jobHTMLstr.=$overView;
}
if(strlen($duties_responsabilities) > 0){
    $title = 'Duties and responsibilities';
   $jobHTMLstr.= '<div class="title">'.$title.'</div>'; 
    $jobHTMLstr.=$duties_responsabilities;
}
if(strlen($qualifications) > 0){
    $title = 'Qualifications';
   $jobHTMLstr.= '<div class="title">'.$title.'</div>'; 
    $jobHTMLstr.=$qualifications;
}
if(strlen($main_tasks) > 0){
    $title = 'Main tasks';
   $jobHTMLstr.= '<div class="title">'.$title.'</div>'; 
    $jobHTMLstr.=$main_tasks;
}

if(strlen($required_skills) > 0){
    $title = 'Required skills';
   $jobHTMLstr.= '<div class="title">'.$title.'</div>'; 
    $jobHTMLstr.=$required_skills;
}
if(strlen($assets) > 0){
    $title = 'Assets';
   $jobHTMLstr.= '<div class="title">'.$title.'</div>'; 
    $jobHTMLstr.=$assets;
}


?>

<div  class="mainPanel jobTitlePanel "  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="contentWidth">    
        <div class="display-table ">
            <div class="display-table-cell">
                <div class="text1 orangeText "><?php echo $page_excerpt ?></div> 
                    <div class="text2 "><?php echo $page_title ?></div> 
                    <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div> 
               
            </div> 
        </div>
      
    </div> 
</div>
 <div class="contentWidth">    
<div class="job-description-wrapper">
	<div class="inner">
		<div><?=$post_header->post_content;?></div><br>
		<?php echo $jobHTMLstr; ?>
	</div>	
</div>
     </div>

<!--REDO THE FOLLOWING-->
<div id="apply-now" class="application-form ">
    <div class="contentWidth">
<?php echo do_shortcode("[huge_it_forms id='6']"); ?>
        </div>
</div>

<div id="contact-modal" class='jquery-modal blocker current contentWidth' style="display:none">
	<div id="ex1" class="modal">
		<img width='57' src='wp-content/themes/panel-child/images/ic_message_sent@2x.png' alt='message sent'>
		<p class='thank-you'>thank you!</p>
		<p class='message-sent'>Your message has been successfully sent</p>
		<a class='contactus-close' href="<?=get_site_url()?>">Close</a>
	</div>
</div> 
      <?php get_template_part('overWriteStyleApplyForm'); ?>


	
<?php get_footer(); ?>