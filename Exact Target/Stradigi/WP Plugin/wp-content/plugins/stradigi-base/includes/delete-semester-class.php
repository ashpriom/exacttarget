<?php 

global $wpdb;

if(isset($_POST['class_semester_id'])){
	
	$classSemesterID = $_POST['class_semester_id'];
	
	$class_semester_delete = $wpdb->delete( 
		'syn1_syn_class_semester',
		array( 'class_semester_id' => $classSemesterID )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

else{
	echo "Error. Please start over again from Semesters Page.";
}

?>