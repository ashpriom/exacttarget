<?php

if(isset($_POST['semester_id']) && isset($_POST['class_semester_id']) && isset($_POST['classroom_id']) && isset($_POST['class_days']) && isset($_POST['start_timestamp']) && isset($_POST['end_timestamp']) && isset($_POST['class_instance_array'])){
	
	$semesterID = $_POST['semester_id'];
	$classSemesterID = $_POST['class_semester_id'];
	$classroomID = $_POST['classroom_id'];
	$classDays = $_POST['class_days'];
	$startTime = $_POST['start_timestamp'];
	$endTime = $_POST['end_timestamp'];
	$classInstanceArray = explode(',',$_POST['class_instance_array']);
	$classInstanceStatus = "1";

	global $wpdb;
	$semesterStartDate = $wpdb->get_var( "SELECT start_date FROM syn1_syn_semester WHERE semester_id = $semesterID ");
	$semesterEndDate = $wpdb->get_var( "SELECT end_date FROM syn1_syn_semester WHERE semester_id = $semesterID ");

	$period = new DatePeriod(
    	new DateTime($semesterStartDate),
     	new DateInterval('P1D'),
     	new DateTime($semesterEndDate)
	);

	foreach($period as $date){
		foreach($classDays as $days){
			$thedate = $date->format('Y-m-d');
			$theweekday = date('l', strtotime( $thedate));
			
			if($theweekday == $days){
				echo $thedate;
				echo $theweekday;
				echo $startTimestamp = $thedate . ' ' . $startTime.":00";
				echo $endTimestamp = $thedate . ' ' . $endTime.":00";
				
				while($classInstanceArray){
					echo $classInstanceID = array_shift($classInstanceArray);
					echo "<br>"; 
					break;
				}
				
				$semester_class_replace = $wpdb->replace(
					'syn1_syn_classinstance',
					array(
						'classinstance_id' => $classInstanceID,
						'class_semester_id' => sanitize_text_field($classSemesterID),	
						'classroom_id' => sanitize_text_field($classroomID),
						'start_timestamp' => sanitize_text_field($startTimestamp),
						'end_timestamp' => sanitize_text_field($endTimestamp),
						'classinstance_status' => sanitize_text_field($classInstanceStatus),
					),
					array(
						'%d',
						'%d',
						'%d',
						'%s',
						'%s',
						'%d',
					)
				);
			}
		}
	}

	$wpdb->print_error();
	$location = "admin.php?page=syn-studio%2Fsemesters.php";
	wp_safe_redirect($location, $status=302);
}

else{ echo "The semester ID is not with your session anymore. Please go to <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click \"classes\" for a semester."; }

?>