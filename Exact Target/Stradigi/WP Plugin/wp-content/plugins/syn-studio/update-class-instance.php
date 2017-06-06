<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../wp-content/plugins/syn-studio/js/jquery.timepicker.min.js"></script>
<link rel="stylesheet" href="../wp-content/plugins/syn-studio/css/jquery.timepicker.css">

<script>
$(document).ready(
		function(){
			$(" #start_time ").timepicker({'timeFormat': 'H:i', 'disableTextInput':'true', 'minTime':'10:00','maxTime':'21:00'});
	  	}
	);
</script>

<script>
$(document).ready(
		function(){
			$(" #end_time ").timepicker({'timeFormat': 'H:i', 'disableTextInput':'true', 'minTime':'10:00','maxTime':'21:00'});
	  	}
	);
</script>

<?php

if(isset($_POST['class_instance_id'])){

	$classInstanceID = $_POST['class_instance_id'];
	$semesterID = $_POST['semester_id'];
	$teacherID = $_POST['teacher_id'];
	$teacherName = $_POST['teacher_name'];
	$classroomID = $_POST['classroom_id'];
	$classroomName = $_POST['classroom_name'];

	$startTimestamp = $_POST['start_timestamp'];
	$endTimestamp = $_POST['end_timestamp'];

	$classDate = substr($_POST['start_timestamp'], 0, -9);
	$classtimeStart = substr($_POST['start_timestamp'], 10, -3);
	$classtimeEnd = substr($_POST['end_timestamp'], 10, -3);

	global $wpdb;
	$classInstance = $wpdb->get_row( "SELECT classinstance_id, class_semester_id, classroom_id, start_timestamp, end_timestamp, classinstance_status FROM syn1_syn_classinstance WHERE classinstance_id = $classInstanceID ");

	echo "<div id=\"inforoom\">";
		
		echo "<h1><b>Edit Class (#".$classInstanceID."):</b></h1>";
		echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td>Classroom</td>";
				echo "<td>Start Time</td>";
				echo "<td>End Time</td>";
				echo "<td>Status</td>";
			echo "</tr>";
			
			echo "<tr>"; ?>
				<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-class-instance-db.php" method="POST">
				<?php 

				// Select classroom from dropdown menu
				echo "<td>";
					$classrooms = $wpdb->get_results("SELECT classroom_id, classroom_name_en FROM syn1_syn_classroom ORDER BY classroom_name_en");
					if (!empty($classrooms)){
		    			echo "<select name=\"classroom_id\">";
		    			echo "<option value='".$classroomID."'>".$classroomName."</option>";
		    			foreach ($classrooms as $key => $classroom){
		        			echo "<option value='".$classroom->classroom_id."'";
		        			if ($selected_venue_id == $classroom->classroom_id)
		            			echo "selected = 'selected'";
		        			echo ">".$classroom->classroom_name_en."</option>";
		    			}
		    			echo "</select>";
					}
				echo "</td>";

				echo "<td><input name=\"classtime_start\" id=\"start_time\" type=\"text\" value=\"$classtimeStart\" /></td>";
				echo "<td><input name=\"classtime_end\" id=\"end_time\" type=\"text\" value=\"$classtimeEnd\" /></td>";

				// Option to cancel the class
				echo "<td>";
					echo "<select name=\"classinstance_status\">";
        				echo "<option value=\"1\" selected=\"selected\">Scheduled</option>";
        				echo "<option value=\"0\">Cancel Class</option>";
      				echo "</select>";
     			echo "</td>";
			
			echo "</tr>";
			
			echo "<tr>";
				echo "<td>";
					?>
					<input name="class_instance_id" type="hidden" value="<?php echo $classInstanceID; ?>"/>
					<input name="class_date" type="hidden" value="<?php echo $classDate; ?>"/>	
					<input type="submit" value="Save" class="button-purple" style="float:left;"/>
				</form><?php
				echo "</td>";
			echo "</tr>";

		echo "</table>";
		$wpdb->print_error();
	echo "</div>";
}

else{
	echo "All the data were not posted from previous page. Please go to semesters page and then classes to edit class info.";
}

?>