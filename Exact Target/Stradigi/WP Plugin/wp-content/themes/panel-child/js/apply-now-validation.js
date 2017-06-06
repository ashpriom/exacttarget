//jQuery(document).ready(function () {		
//	$(".hugeit-contact-column-block [type='number'").next('span').css('display','none');
//	
//	var errorCount = 0;
//    jQuery('#hugeit-contact-wrapper_6').find('.hugeit-field-block').not('.buttons-block').not('.captcha-block').each(function(){	
//        	if(jQuery(this).find('div.input-text-block >input').hasClass('required')){
//        		var text_emailField=jQuery(this).find('input');
//        		text_emailField.on('blur',function(){
//        			if(jQuery(this).val().trim()==''){
//        				jQuery(this).parent().find('.hugeit-error-message').text('');
//						jQuery(this).parent().parent().addClass('border-red');
//						jQuery('.fields-missing').css('visibility','visible');
//						errorCount++;
//        			}else{
//        				jQuery(this).parent().find('.hugeit-error-message').text('');
//						jQuery(this).parent().parent().removeClass('border-red');
//						errorCount--;
//						if (errorCount == 0){
//							jQuery('.fields-missing').css('visibility','hidden');
//						}	
//        			}
//        		})
//        	}
//			
//       	if(jQuery(this).find('div.textarea-block >textarea').hasClass('required')){
//        		var textarea_field=jQuery(this).find('textarea');
//        		textarea_field.on('blur',function(){
//        			if(jQuery(this).val().trim()==''){
//        				jQuery(this).parent().find('.hugeit-error-message').text('');
//						jQuery(this).parent().parent().addClass('border-red');
//						jQuery('.fields-missing').css('visibility','visible');
//						errorCount++;						
//        			}else{
//        				jQuery(this).parent().find('.hugeit-error-message').text('');
//						jQuery(this).parent().parent().removeClass('border-red');
//						errorCount--;
//						if (errorCount == 0){
//							jQuery('.fields-missing').css('visibility','hidden');
//						}						
//        			}
//        		})
//        	}			
//	});		
//	
//	jQuery( "#huge_it_contact_form_6" ).on( "submit", function(e){
//		 var error = 0;
//		 errorCount = 0;
//		 jQuery('#hugeit-contact-wrapper_6').find('.hugeit-field-block').not('.buttons-block').each(function(){
//        	if(jQuery(this).find('div.input-text-block >input').hasClass('required')){
//        		var text_emailField=jQuery(this).find('input');
//        		if(text_emailField.val().trim()==''){
//					text_emailField.parent().find('.hugeit-error-message').text('');
//					text_emailField.parent().parent().addClass('border-red');
//					error = 1;
//					errorCount++;
//				}else{
//					text_emailField.parent().find('.hugeit-error-message').text('');
//					text_emailField.parent().parent().removeClass('border-red');
//				}
//        	}
//		 })
//		 
//		if(jQuery(this).find('div.textarea-block >textarea').hasClass('required')){
//			var textarea_field=jQuery(this).find('textarea');
//				if(textarea_field.val().trim()==''){
//					textarea_field.parent().find('.hugeit-error-message').text('');
//					textarea_field.parent().parent().addClass('border-red');
//					jQuery('.fields-missing').css('visibility','visible');
//					error = 1;
//					errorCount++;
//				}else{
//					textarea_field.parent().find('.hugeit-error-message').text('');
//					textarea_field.parent().parent().removeClass('border-red');
//				}
//		}
//        if (error){
//			jQuery('.fields-missing').css('visibility','visible');
//		}else{
//			jQuery('.fields-missing').css('visibility','hidden');
//		}			
//	});
//});