<?php

if(isset($_POST['class_instance_id'])){
	
	$classInstanceID = $_POST['class_instance_id'];
	$semesterID = $_POST['semester_id'];
	$classroomID = $_POST['classroom_id'];
	$classStatus = $_POST['classinstance_status'];

	$classDate = $_POST['class_date'];
	$classtimeStart = $_POST['classtime_start'];
	$classtimeEnd = $_POST['classtime_end'];

	$startTimestamp = $classDate. ' ' .$classtimeStart.":00";
	$endTimestamp = $classDate. ' ' .$classtimeEnd.":00";

	global $wpdb;
	$classInstanceUpdate = $wpdb->update( 
		'syn1_syn_classinstance', 
		array( 
			'classroom_id' => sanitize_text_field($classroomID),
			'start_timestamp' => sanitize_text_field($startTimestamp),
			'end_timestamp' => sanitize_text_field($endTimestamp),
			'classinstance_status' => sanitize_text_field($classStatus),
		), 
		array( 'classinstance_id' => $classInstanceID ),
		array( 
			'%d',
			'%s',
			'%s',
			'%d',
		),
		array( '%d' )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

?>