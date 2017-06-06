<?php 

global $wpdb;

if(isset($_POST['semester_id']) && isset($_POST['class_semester_id']) && isset($_POST['class_date']) && isset($_POST['classtime_start']) && isset($_POST['classtime_end']) && isset($_POST['classroom_id'])){
	
	$semesterID = $_POST['semester_id'];
	$classSemesterID = $_POST['class_semester_id'];
	$classroomID = $_POST['classroom_id'];
	$classDate = $_POST['class_date'];
	$classtimeStart = $_POST['classtime_start'];
	$classtimeEnd = $_POST['classtime_end'];
	$startTimestamp = $classDate. ' ' .$classtimeStart.":00";
	$endTimestamp = $classDate. ' ' .$classtimeEnd.":00";

	$classInstanceInsert = $wpdb->insert( 
		'syn1_syn_classinstance',
		array(
			'class_semester_id' => sanitize_text_field($classSemesterID),
			'classroom_id' => sanitize_text_field($classroomID),
			'start_timestamp' => sanitize_text_field($startTimestamp),
			'end_timestamp' => sanitize_text_field($endTimestamp),
			'classinstance_status' => '1',
		),
		array(
			'%d',
			'%d',
			'%s',
			'%s',
			'%d',
		) 
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio%2Fsemesters.php";
	wp_safe_redirect($location, $status=302);
}

else{ echo "Some values may be missing. Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click \"classes\" for a semester.";}

?>