<?php 

if(isset($_POST['semester_id'])){
	$semesterID = $_POST['semester_id'];

	global $wpdb;
	
	$semesters_delete = $wpdb->delete( 
		'syn1_syn_semester',
		array( 'semester_id' => $semesterID )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

?>