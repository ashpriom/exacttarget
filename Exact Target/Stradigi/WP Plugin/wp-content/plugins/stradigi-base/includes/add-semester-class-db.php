<?php 

if(isset($_POST['semester_id']) && isset($_POST['class_semester_name_en']) && isset($_POST['class_semester_name_fr']) && isset($_POST['teacher_id']) && isset($_POST['class_id'])){
	
	$classSemesterNameEn = $_POST['class_semester_name_en'];
	$classSemesterNameFr = $_POST['class_semester_name_fr'];
	$classID = $_POST['class_id'];
	$teacherID = $_POST['teacher_id'];
	$semesterID = $_POST['semester_id'];

	global $wpdb;
	$semester_class_insert = $wpdb->insert( 
		'syn1_syn_class_semester', 
		array(
			'class_id' => sanitize_text_field($classID),
			'semester_id' => sanitize_text_field($semesterID),
			'teacher_id' => sanitize_text_field($teacherID),
			'class_semester_name_en' => sanitize_text_field($classSemesterNameEn),
			'class_semester_name_fr' => sanitize_text_field($classSemesterNameFr),
		),
		array(
			'%d',
			'%d',
			'%d',
			'%s',
			'%s',
		) 
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio%2Fsemesters.php";
	wp_safe_redirect($location, $status=302);
}

else{ echo "There was a problem processing the data. Please try again, go to <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click on \"classes\"."; }

?>