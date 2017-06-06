<?php 

global $wpdb;

if(isset($_POST['classroom_id'])){
	
	$classroomID = $_POST['classroom_id'];
	
	$classroom_delete = $wpdb->delete( 
		'syn1_syn_classroom',
		array( 'classroom_id' => $classroomID )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/classrooms.php";
	wp_safe_redirect($location, $status=302);
}

else{
	echo "Error. Please start over again from Classrooms Page.";
}

?>