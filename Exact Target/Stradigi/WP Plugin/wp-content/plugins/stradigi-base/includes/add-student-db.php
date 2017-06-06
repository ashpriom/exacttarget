<?php 

if(isset($_POST['student_first']) && isset($_POST['student_last']) && isset($_POST['student_email']) && isset($_POST['student_address1']) && isset($_POST['student_city']) && isset($_POST['student_prov']) && isset($_POST['student_postal']) && isset($_POST['student_phone']) && isset($_POST['student_language']) && isset($_POST['student_type'])){
	
	echo $studentFirst = $_POST['student_first'];
	echo $studentLast = $_POST['student_last'];
	echo $studentEmail = $_POST['student_email'];
	echo $studentAddress1 = $_POST['student_address1'];
	echo $studentAddress2 = $_POST['student_address2'];
	echo $studentCity = $_POST['student_city'];
	echo $studentProv = $_POST['student_prov'];
	echo $studentPostal = $_POST['student_postal'];
	echo $studentPhone = $_POST['student_phone'];
	echo $studentLang = $_POST['student_language'];
	echo $studentType = $_POST['student_type'];

	global $wpdb;
	$students_insert = $wpdb->insert( 
		'syn1_syn_student', 
		array( 
			'student_first' => sanitize_text_field($studentFirst),
			'student_last' => sanitize_text_field($studentLast),
			'student_email' => sanitize_text_field($studentEmail),
			'student_address1' => sanitize_text_field($studentAddress1),
			'student_address2' => sanitize_text_field($studentAddress2),
			'student_city' => sanitize_text_field($studentCity),
			'student_prov' => sanitize_text_field($studentProv),
			'student_postal' => sanitize_text_field($studentPostal),
			'student_phone' => sanitize_text_field($studentPhone),
			'student_language' => sanitize_text_field($studentLang),
			'student_type' => sanitize_text_field($studentType),
		),
		array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
		) 
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/students.php";
	wp_safe_redirect($location, $status=302);
}

else{
	echo "There was one or more empty boxes...please try again from Students Page.";
}

?>