<div class='contactus-wrapper' style='background:url(wp-content/themes/panel-child/images/contact/bg_contact_pink.jpg)'>

	<div class='company-info-wrapper'>
		<div class="company-name"><img width='100' class="stradigi-f" src="wp-content/themes/panel-child/images/contact/stradigi_white@2x.png"  alt="location"></div>
		<div class="location">
			<div class='width10pc'><img class="location-f" src="wp-content/themes/panel-child/images/contact/ic_location_white@2x.png"  alt="location"></div>
			<div class='address'>
				1470 Peel Street<br>
				Suite 720, Tower B<br>
				Montreal, QC H3A 1T1<br>
			</div>
		</div>
		
		<div class="phone-wrapper">
			<div class='width10pc'><img class="phone-f" src="wp-content/themes/panel-child/images/contact/ic_phone_white@2x.png"  alt="phone"></div>
			<div class='phone-number'>514-395-9018</div>	
		</div>		
		
		<div class="email-wrapper">
			<div class='width10pc'><img class="email-f" src="wp-content/themes/panel-child/images/contact/ic_email_white@2x.png"  alt="phone"></div>
			<div class='email-address'>info@stradigi.ca</div>	
		</div>		
	</div>	
	
	<div id="apply-now" class="contact">
	   <div class='fields-missing'>Fields in red are missing or email is incorrect</div>
	<?php echo do_shortcode("[huge_it_forms id='5']"); ?>
	</div>
</div>
<script>
jQuery(document).ready(function () {		
	$(".hugeit-contact-column-block [type='number'").next('span').css('display','none'); <?php /* span error */?>
	
	var errorCount = 0;
    jQuery('#hugeit-contact-wrapper_5').find('.hugeit-field-block').not('.buttons-block').not('.captcha-block').each(function(){	
        	if(jQuery(this).find('div.input-text-block >input').hasClass('required')){
        		var text_emailField=jQuery(this).find('input');
        		text_emailField.on('blur',function(){
        			if(jQuery(this).val().trim()==''){
        				jQuery(this).parent().find('.hugeit-error-message').text('');
						jQuery(this).parent().parent().addClass('border-red');
						jQuery('.fields-missing').css('visibility','visible');
						errorCount++;
        			}else{
        				jQuery(this).parent().find('.hugeit-error-message').text('');
						jQuery(this).parent().parent().removeClass('border-red');
						errorCount--;
						if (errorCount == 0){
							jQuery('.fields-missing').css('visibility','hidden');
						}	
        			}
        		})
        	}
			
       	if(jQuery(this).find('div.textarea-block >textarea').hasClass('required')){
        		var textarea_field=jQuery(this).find('textarea');
        		textarea_field.on('blur',function(){
        			if(jQuery(this).val().trim()==''){
        				jQuery(this).parent().find('.hugeit-error-message').text('');
						jQuery(this).parent().parent().addClass('border-red');
						jQuery('.fields-missing').css('visibility','visible');
						errorCount++;						
        			}else{
        				jQuery(this).parent().find('.hugeit-error-message').text('');
						jQuery(this).parent().parent().removeClass('border-red');
						errorCount--;
						if (errorCount == 0){
							jQuery('.fields-missing').css('visibility','hidden');
						}						
        			}
        		})
        	}			
	});		
	
	jQuery( "#huge_it_contact_form_5" ).on( "submit", function(e){
		 var error = 0;
		 errorCount = 0;
		 jQuery('#hugeit-contact-wrapper_5').find('.hugeit-field-block').not('.buttons-block').each(function(){
        	if(jQuery(this).find('div.input-text-block >input').hasClass('required')){
        		var text_emailField=jQuery(this).find('input');
        		if(text_emailField.val().trim()==''){
					text_emailField.parent().find('.hugeit-error-message').text('');
					text_emailField.parent().parent().addClass('border-red');
					error = 1;
					errorCount++;
				}else{
					text_emailField.parent().find('.hugeit-error-message').text('');
					text_emailField.parent().parent().removeClass('border-red');
				}
        	}
		 })
		 
		if(jQuery(this).find('div.textarea-block >textarea').hasClass('required')){
			var textarea_field=jQuery(this).find('textarea');
				if(textarea_field.val().trim()==''){
					textarea_field.parent().find('.hugeit-error-message').text('');
					textarea_field.parent().parent().addClass('border-red');
					jQuery('.fields-missing').css('visibility','visible');
					error = 1;
					errorCount++;
				}else{
					textarea_field.parent().find('.hugeit-error-message').text('');
					textarea_field.parent().parent().removeClass('border-red');
				}
		}
        if (error){
			jQuery('.fields-missing').css('visibility','visible');
		}else{
			jQuery('.fields-missing').css('visibility','hidden');
		}			
	});
});
</script>