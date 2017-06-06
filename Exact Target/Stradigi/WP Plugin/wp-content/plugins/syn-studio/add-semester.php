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

<?php

	global $wpdb; // Declaring $wpdb as global to execute SQL query statements that return PHP objects.
	$semesters = $wpdb->get_results( "SELECT semester_id FROM syn1_syn_semester");
	
	foreach ( $semesters as $semester ){
		$semester->semester_id;
		$newsemesterID = $semester->semester_id;
		$newsemesterID++;	
	}		
	
?>
	<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-semester-db.php" method="POST">
		<?php
		echo "<div id=\"inforoom\">";
		echo "<table class=\"info-table\">";
		echo "<h1><b>New Semester Form</b></h1>";
		echo "<tr>";
				echo "<td>Semester Name (English)</td>";
				echo "<td>Semester Name (Francais)</td>";
				echo "<td>Starts On</td>";
				echo "<td>Ends On</td>";
		echo "</tr>";
		echo "<tr>"; 
			echo "<td><input name=\"semester_name_en\" type=\"text\" value=\"$semesters->semester_name_en\" /></td>";
			echo "<td><input name=\"semester_name_fr\" type=\"text\" value=\"$semesters->semester_name_fr\" /></td>";
			echo "<td><input name=\"start_date\" type=\"text\" value=\"$semesters->start_date\" id=\"datepicker_start\" /></td>";
			echo "<td><input name=\"end_date\" type=\"text\" value=\"$semesters->end_date\" id=\"datepicker_end\" /></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		?>
		<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
		<input type="submit" value="Add This Semester" class="button-primary" style="float:left;"/>
	</form>
	<?php
		echo "</td>";
		echo "</tr>";

echo "</table>";
echo "</div>";
$wpdb->print_error();

?>