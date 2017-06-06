<?php

global $wpdb;
if(isset($_POST['enrolment_id'])){

	$enrolmentID = $_POST['enrolment_id'];
	$classStudentDelete = $wpdb->delete( 
		'syn1_syn_enrollment',
		array('enrollment_id' => $enrolmentID)
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

else{ echo "Error. Please start over again from Semesters Page."; }
?>