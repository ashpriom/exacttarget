<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="../wp-content/plugins/syn-studio/js/jquery.timepicker.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="../wp-content/plugins/syn-studio/css/jquery.timepicker.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

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

<script>
	$(document).ready(
		function(){
	    	$( "#datepicker" ).datepicker({
	      	changeMonth: true,
	      	changeYear: true,
	      	dateFormat: "yy-mm-dd"
	    	});
	  	}
	);
</script>

<?php

if(isset($_POST['class_semester_id']) && isset($_POST['semester_id']) && isset($_POST['class_name'])){

	$classSemesterID = $_POST['class_semester_id'];
	$semesterID = $_POST['semester_id'];
	$className = $_POST['class_name'];

	echo "<div id=\"inforoom\">";
		
		global $wpdb;
		$classSemesterName = $wpdb->get_var( "SELECT class_semester_name_en FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");
		echo "<h1><b>Add New Class: ".$className." ".$classSemesterName." </b></h1>";
		echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td>Classroom</td>";
				echo "<td>Date</td>";
				echo "<td>Start Time</td>";
				echo "<td>End Time</td>";
			echo "</tr>";
			
			echo "<tr>"; ?>
				<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-class-instance-db.php" method="POST">
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

				echo "<td><input name=\"class_date\" id=\"datepicker\" type=\"text\" value=\"\" /></td>";	
				echo "<td><input name=\"classtime_start\" id=\"start_time\" type=\"text\" value=\"\" /></td>";
				echo "<td><input name=\"classtime_end\" id=\"end_time\" type=\"text\" value=\"\" /></td>";
	
			echo "</tr>";
			
			echo "<tr>";
				echo "<td>";
					?>
					<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
					<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
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