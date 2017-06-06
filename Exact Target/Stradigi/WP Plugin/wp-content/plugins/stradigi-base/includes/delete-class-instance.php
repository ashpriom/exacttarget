<?php
global $wpdb;

if(isset($_POST['class_instance_id'])){

	$classInstanceID = $_POST['class_instance_id'];
	$classInstanceDelete = $wpdb->delete( 
		'syn1_syn_classinstance',
		array( 'classinstance_id' => $classInstanceID )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

else{ echo "Error. Please start over again from Semesters Page."; }
?>