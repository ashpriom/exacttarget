<div id="apply-now" class="application-form">
<?php echo do_shortcode("[huge_it_forms id='6']"); ?>
</div>

<script>
jQuery(document).ready(function () {				
    $("[rel=huge-contact-field-62]").after('<span class="fields-missing job-posting-detail">Fields in red are missing or email is incorrect</span>');
    var uploadFiles = jQuery(".hugeit-contact-column-block .file-block input:first-child");
	uploadFiles.eq(0).attr('placeholder','Attach your CV');
	uploadFiles.eq(1).attr('placeholder','Attach your cover letter');
});
</script>

<script src="wp-content/themes/panel-child/js/apply-now-validation.js"></script>