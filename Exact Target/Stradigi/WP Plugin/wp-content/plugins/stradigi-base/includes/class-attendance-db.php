<?php 

	if(isset($_POST['student_id_array']) && isset($_POST['class_instance_id'])){
		
		$classInstanceID = $_POST['class_instance_id'];
		$studentIDArray = explode(',',$_POST['student_id_array']);
		$attendanceArray = $_POST['attendance_array'];
		$studentAttendances = array_combine($studentIDArray, $attendanceArray);

		global $wpdb;
		foreach($studentAttendances as $studentID => $studentAttendance){
			if($studentAttendance == "present"){$studentAttendance = 1;}
			if($studentAttendance == "absent"){$studentAttendance = 0;}
			$semester_class_insert = $wpdb->insert( 
				'syn1_syn_attendance', 
				array(
					'student_id' => $studentID,
					'classinstance_id' => $classInstanceID,
					'attendance' => sanitize_text_field($studentAttendance),
				),
				array(
					'%d',
					'%d',
					'%d',
				)
			);
		}

		$wpdb->print_error();
		$location = "admin.php?page=syn-studio%2Fsemesters.php";
		wp_safe_redirect($location, $status=302);
	
	}

	else{
		echo "The semester ID is not with your session anymore. 
		Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and
		click \"classes\" for a semester.";
	}

?>