<?php

if(isset($_POST['student_id'])){
	$studentID = $_POST['student_id'];
	$studentFirst = $_POST['student_first'];
	$studentLast = $_POST['student_last'];
	$studentEmail = $_POST['student_email'];
	$studentAddress1 = $_POST['student_address1'];
	$studentAddress2 = $_POST['student_address2'];
	$studentCity = $_POST['student_city'];
	$studentProv = $_POST['student_prov'];
	$studentPostal = $_POST['student_postal'];
	$studentPhone = $_POST['student_phone'];
	$studentLang = $_POST['student_language'];
	$studentType = $_POST['student_type'];

	global $wpdb;
	$students_update = $wpdb->update(
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
		array( 'student_id' => $studentID ),
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
		),
		array( '%d' )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/students.php";
	wp_safe_redirect($location, $status=302);
}

?>