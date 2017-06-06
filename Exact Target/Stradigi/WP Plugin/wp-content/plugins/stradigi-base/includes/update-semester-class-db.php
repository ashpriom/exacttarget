<?php

if(isset($_POST['class_semester_id'])){
	
	$classSemesterID = $_POST['class_semester_id'];
	$classSemesterNameEn = $_POST['class_semester_name_en'];
	$classSemesterNameFr = $_POST['class_semester_name_fr'];
	$teacherID = $_POST['teacher_id'];
	$classID = $_POST['class_id'];

	global $wpdb;
	$classSemesters_update = $wpdb->update( 
		'syn1_syn_class_semester', 
		array( 
			'class_semester_name_en' => sanitize_text_field($classSemesterNameEn),
			'class_semester_name_fr' => sanitize_text_field($classSemesterNameFr),
			'teacher_id' => sanitize_text_field($teacherID),
			'class_id' => sanitize_text_field($classID),
		), 
		array( 'class_semester_id' => $classSemesterID ),
		array( 
			'%s',
			'%s',
			'%d',
			'%d',
		),
		array( '%d' )
	);

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio/semesters.php";
	wp_safe_redirect($location, $status=302);
}

?>