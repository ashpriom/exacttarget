<?php 

if(isset($_POST['student_id'])){
	$studentID = $_POST['student_id'];
	global $wpdb;
	$students_delete = $wpdb->delete( 
		'syn1_syn_student',
		array('student_id' => $studentID)
	);
	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/students.php";
	wp_safe_redirect($location, $status=302);
}

?>