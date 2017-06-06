<?php

	if(isset($_POST['semester_id']) && isset($_POST['class_semester_id'])){

		$semesterID = $_POST['semester_id'];
		$classSemesterID = $_POST['class_semester_id'];
		$studentID = $_POST['student_id'];

		global $wpdb;
		$studentExists = $wpdb->get_results("SELECT enrollment_date FROM syn1_syn_enrollment WHERE student_id = $studentID AND class_semester_id = $classSemesterID ");
		
		if(empty($studentExists)){
			$classStudentInsert = $wpdb->insert( 
				'syn1_syn_enrollment',
				array(
					'class_semester_id' => sanitize_text_field($classSemesterID),
					'student_id' => sanitize_text_field($studentID),
				),
				array(
					'%d',
					'%d',
				)
			);

			$wpdb->print_error();
			$location = "admin.php?page=syn-studio%2Fsemesters.php";
			wp_safe_redirect($location, $status=302);
		}
			
		else{
			$getEnrollmentDate = $wpdb->get_var("SELECT enrollment_date FROM syn1_syn_enrollment WHERE student_id = $studentID AND class_semester_id = $classSemesterID ");
			echo "<p class=\"lead bg-danger\">Student already enrolled in this course on". $getEnrollmentDate.". Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\"> Students tab from class list for a semester</a>.<p>"; 
		}
		
	}

	else{
		echo "Something is wrong. Please contact system admin. Thank you.";
	}

?>