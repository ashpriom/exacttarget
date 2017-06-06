<?php 

if(isset($_POST['semester_id']) && isset($_POST['semester_name_en']) && isset($_POST['semester_name_fr']) && isset($_POST['start_date']) && isset($_POST['end_date'])){
	
	$semester_name_en = $_POST['semester_name_en'];
	$semester_name_fr = $_POST['semester_name_fr'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];

	global $wpdb;

	$semesters_insert = $wpdb->insert( 
		'syn1_syn_semester', 
		array( 
			'semester_name_en' => sanitize_text_field($semester_name_en),
			'semester_name_fr' => sanitize_text_field($semester_name_fr),
			'start_date' => sanitize_text_field($start_date),
			'end_date' => sanitize_text_field($end_date), 
		),
		array(
			'%s',
			'%s',
			'%s',
			'%s',
		) 
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

else{
	echo "Oops..there are some missing value...please try again from Semester Page.";
}

?>