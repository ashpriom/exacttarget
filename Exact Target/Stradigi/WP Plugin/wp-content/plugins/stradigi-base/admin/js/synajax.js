jQuery(document).ready(function($){
	$('#semester').submit(function(){
		$('#synstudio-loading').show();
		$('#synstudio-button').attr('disabled',true);
		data = {
			action: 'synstudio_get_results'
			//syn-nonce: synstudio-vars.syn-nonce
		};
		$.post(ajaxurl,data,function(response){
			$('#anytable').html(response);
			$('#synstudio-loading').hide();
			$('#synstudio-button').attr('disabled',false);
		});
		return false;
	});
});
