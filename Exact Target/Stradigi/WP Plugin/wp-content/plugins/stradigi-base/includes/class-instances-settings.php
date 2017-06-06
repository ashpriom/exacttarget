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
if(isset($_POST['class_semester_id']) && isset($_POST['semester_id']) && isset($_POST['class_instance_array'])){
	
	$classSemesterID = $_POST['class_semester_id'];
	$semesterID = $_POST['semester_id'];
	$classInstanceArray = explode(',',$_POST['class_instance_array']);
	$classInstanceArray = implode(',',$classInstanceArray);

	global $wpdb;
	$classID = $wpdb->get_var( "SELECT class_id FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");
	$className = $wpdb->get_var( "SELECT class_title FROM syn1_view_classes WHERE class_id = $classID ");
	$sectionName = $wpdb->get_var( "SELECT class_semester_name_en FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");

	echo "<div id=\"inforoom\">";
		
		echo "<h1><b>Editing: ".$className." ". $sectionName."</b></h1>";
		echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td>Classroom</td>";
				echo "<td>Day</td>";
				echo "<td>Start Time</td>";
				echo "<td>End Time</td>";
			echo "</tr>";
			
			echo "<tr>"; ?>
				<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/class-instances-settings-db.php" method="POST">
				<?php 

				// Select classroom from dropdown menu
				echo "<td>";
					$classrooms = $wpdb->get_results("SELECT classroom_id, classroom_name_en FROM syn1_syn_classroom ORDER BY classroom_name_en");
					if (!empty($classrooms)){
		    			echo "<select name=\"classroom_id\">";
		    			foreach ($classrooms as $key => $classroom){
		        			echo "<option value='".$classroom->classroom_id."'";
		        			if ($selected_venue_id == $classroom->classroom_id)
		            			echo "selected = 'selected'";
		        			echo ">".$classroom->classroom_name_en."</option>";
		    			}
		    			echo "</select>";
					}
				echo "</td>";

				// Select which day the class will be held
				echo "<td>";
					echo "<select name=\"class_days[ ]\" multiple=\"multiple\">";
        				echo "<option value=\"Monday\">Monday</option>";
        				echo "<option value=\"Tuesday\">Tuesday</option>";
        				echo "<option value=\"Wednesday\">Wednesday</option>";
        				echo "<option value=\"Thursday\">Thursday</option>";
        				echo "<option value=\"Friday\">Friday</option>";
        				echo "<option value=\"Saturday\">Saturday</option>";
        				echo "<option value=\"Sunday\">Sunday</option>";
      				echo "</select>";
     			echo "</td>";

				echo "<td><input name=\"start_timestamp\" id=\"start_time\" type=\"text\" value=\"\" /></td>";
				echo "<td><input name=\"end_timestamp\" id=\"end_time\" type=\"text\" value=\"\" /></td>";

			
			echo "</tr>";
			
			echo "<tr>";
				echo "<td>";
					?>
					<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
					<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
					<input name="class_instance_array" type="hidden" value="<?php echo $classInstanceArray; ?>"/>
					<input type="submit" value="Save" class="button-purple" style="float:left;"/>
				</form><?php
				echo "</td>";
			echo "</tr>";

		echo "</table>";
		$wpdb->print_error();
	echo "</div>";
}

else{ echo "All necessary data were not posted from previous page. Please go to semesters page and then classes to edit class info."; }

?>