<?php

if(isset($_POST['classroom_id'])){
	
	$classroomID = $_POST['classroom_id'];

	global $wpdb;
	$classrooms = $wpdb->get_row( "SELECT classroom_capacity, classroom_name_en, classroom_name_fr FROM syn1_syn_classroom WHERE classroom_id = $classroomID ");

	echo "<div id=\"inforoom\">";
	echo "<h1><b>Edit Classroom: ". $classrooms->classroom_name_en." ( ".$classrooms->classroom_name_fr." ) </b></h1>";
	echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td>Classroom Name (English)</td>";
				echo "<td>Classroom Name (Francais)</td>";
				echo "<td>Capacity</td>";
			echo "</tr>";
			
			echo "<tr>"; ?>
				<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-classroom-db.php" method="POST">
				<?php 
				echo "<td><input name=\"classroom_name_en\" type=\"text\" value=\"$classrooms->classroom_name_en\" /></td>";
				echo "<td><input name=\"classroom_name_fr\" type=\"text\" value=\"$classrooms->classroom_name_fr\" /></td>";
				echo "<td><input name=\"classroom_capacity\" type=\"text\" value=\"$classrooms->classroom_capacity\" /></td>";
				echo "<td>";
				echo "</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>";
					?>
					<input name="classroom_id" type="hidden" value="<?php echo $classroomID; ?>"/>
					<input type="submit" value="Save Semester" class="button-primary" style="float:left;"/>
				</form><?php
			echo "</td>";
			echo "</tr>";
}

echo "</table>";
echo "</div>";
$wpdb->print_error();

?>