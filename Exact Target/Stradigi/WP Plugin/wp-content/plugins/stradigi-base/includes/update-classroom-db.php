<?php

if(isset($_POST['classroom_id'])){
	
	$classroomID = $_POST['classroom_id'];
	$classroom_name_en = $_POST['classroom_name_en'];
	$classroom_name_fr = $_POST['classroom_name_fr'];
	$classroom_capacity = $_POST['classroom_capacity'];

	global $wpdb;
	$classrooms_update = $wpdb->update( 
		'syn1_syn_classroom', 
		array( 
			'classroom_name_en' => sanitize_text_field($classroom_name_en),
			'classroom_name_fr' => sanitize_text_field($classroom_name_fr),
			'classroom_capacity' => sanitize_text_field($classroom_capacity),
		), 
		array( 'classroom_id' => $classroomID ), 
		array( 
			'%s',
			'%s',
			'%s',
		), 
		array( '%d' )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/classrooms.php";
	wp_safe_redirect($location, $status=302);
}

?>