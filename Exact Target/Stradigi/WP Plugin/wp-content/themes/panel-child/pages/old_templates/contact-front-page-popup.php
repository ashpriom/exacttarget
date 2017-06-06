<?php
/*
Template Name: contact-front-page-popup
*/
get_header('contact');
session_start();

if (!isset($_SESSION['contact']))
{                     
    //session_unset();
    //session_destroy();
	wp_redirect( get_site_url(), 301 );
    exit();
}else{
	session_destroy();
}	
 ?>
<?php
include 'contactus.php'
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