<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
	$(document).ready(
		function(){
	    	$( "#datepicker_start" ).datepicker({
	      	changeMonth: true,
	      	changeYear: true,
	      	dateFormat: "yy-mm-dd"
	    	});
	  	}
	);
</script>

<script>
	$(document).ready(
		function(){
	    	$( "#datepicker_end" ).datepicker({
	      	changeMonth: true,
	      	changeYear: true,
	      	dateFormat: "yy-mm-dd"
	    	});
	  	}
	);
</script>

<script>
	$(document).ready(
		function(){
	    	$( "#datepicker_early" ).datepicker({
	      	changeMonth: true,
	      	changeYear: true,
	      	dateFormat: "yy-mm-dd"
	    	});
	  	}
	);
</script>

<script>
	$(document).ready(
		function(){
	    	$( "#datepicker_late" ).datepicker({
	      	changeMonth: true,
	      	changeYear: true,
	      	dateFormat: "yy-mm-dd"
	    	});
	  	}
	);
</script>

<?php

if(isset($_POST['semester_id'])){
	
	$semesterID = $_POST['semester_id'];

	global $wpdb;
	$semesters = $wpdb->get_row( "SELECT semester_name_en, semester_name_fr, start_date, end_date, early_registration, late_registration FROM syn1_syn_semester WHERE semester_id = $semesterID ");

	echo "<div id=\"inforoom\">";
	echo "<h1><b>Edit Semester Form</b></h1>";
	echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td>Semester Name (English)</td>";
				echo "<td>Semester Name (Francais)</td>";
				echo "<td>Starts On</td>";
				echo "<td>Ends On</td>";
				echo "<td>Early Registration Deadline</td>";
				echo "<td>Late Registration Deadline</td>";
			echo "</tr>";
			
			echo "<tr>"; ?>
				<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-semester-db.php" method="POST">
				<?php 
				echo "<td><input name=\"semester_name_en\" type=\"text\" value=\"$semesters->semester_name_en\" /></td>";
				echo "<td><input name=\"semester_name_fr\" type=\"text\" value=\"$semesters->semester_name_fr\" /></td>";
				echo "<td><input name=\"start_date\" type=\"text\" value=\"$semesters->start_date\" id=\"datepicker_start\" /></td>";
				echo "<td><input name=\"end_date\" type=\"text\" value=\"$semesters->end_date\" id=\"datepicker_end\" /></td>";
				echo "<td><input name=\"early_registration\" type=\"text\" value=\"$semesters->early_registration\" id=\"datepicker_early\" /></td>";
				echo "<td><input name=\"late_registration\" type=\"text\" value=\"$semesters->late_registration\" id=\"datepicker_late\" /></td>";
				echo "<td>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
					?>
					<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
					<input type="submit" value="Save Semester" class="button-primary" style="float:left;"/>
				</form><?php
			echo "</td>";
			echo "</tr>";

}

echo "</table>";
echo "</div>";
$wpdb->print_error();

?>