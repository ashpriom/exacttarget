<?php 

if(isset($_POST['classroom_name_en']) && isset($_POST['classroom_name_fr']) && isset($_POST['classroom_capacity'])){

	$classroom_name_en = $_POST['classroom_name_en'];
	$classroom_name_fr = $_POST['classroom_name_fr'];
	$classroom_capacity = $_POST['classroom_capacity'];

	global $wpdb;

	$classrooms_insert = $wpdb->insert( 
		'syn1_syn_classroom', 
		array( 
			'classroom_name_en' => sanitize_text_field($classroom_name_en),
			'classroom_name_fr' => sanitize_text_field($classroom_name_fr),
			'classroom_capacity' => sanitize_text_field($classroom_capacity),
		),
		array( 
			'%s',
			'%s',
			'%d',
		) 
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/classrooms.php";
	wp_safe_redirect($location, $status=302);

}

else{
	echo "some fields were left blank. Please go to Classrooms page and start over again.";
}

?>