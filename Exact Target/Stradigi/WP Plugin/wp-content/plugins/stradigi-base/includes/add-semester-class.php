<?php 
	if(isset($_POST['semester_id'])){ 
		$semesterID = $_POST['semester_id'];
?>

	<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-semester-class-db.php" method="POST">
		<?php
		echo "<div id=\"inforoom\">";
		echo "<table class=\"info-table\">";
		$semesterName = $wpdb->get_var( "SELECT semester_name_en FROM syn1_syn_semester WHERE semester_id = $semesterID ");
		echo "<h1><b>Add New Semester Class for ".$semesterName.".</b></h1>";
		echo "<tr>";
				echo "<td>Class</td>";
				echo "<td>Class Name with Section (English)</td>";
				echo "<td>Class Name with Section (Francais)</td>";
				echo "<td>Teacher</td>";
		echo "</tr>";

		echo "<tr>";
			
			// Select class from dropdown menu
			echo "<td>";
				$classes = $wpdb->get_results("SELECT class_id, class_title FROM syn1_view_classes ORDER BY class_title");
				if (!empty($classes)){
	    			echo "<select name=\"class_id\">";
	    			foreach ($classes as $key => $class){
	        			echo "<option value='".$class->class_id."'";
	        			if ($selected_venue_id == $class->class_id)
	            			echo "selected = 'selected'";
	        			echo ">".$class->class_title."</option>";
	    			}
	    			echo "</select>";
				}
			echo "</td>";

			echo "<td><input name=\"class_semester_name_en\" type=\"text\" placeholder=\"Leave blank if there is only one section\" style=\"width:250px;\" value=\"$semesters->class_semester_name_en\" /></td>";
			echo "<td><input name=\"class_semester_name_fr\" type=\"text\" placeholder=\"Leave blank if there is only one section\" style=\"width:250px;\" value=\"$semesters->class_semester_name_fr\" /></td>";

			// Select class teacher from dropdown menu
			echo "<td>";
				global $wpdb;
				$teachers = $wpdb->get_results("SELECT teacher_id, teacher_title FROM syn1_view_teachers ORDER BY teacher_title");
				if (!empty($teachers)){
	    			echo "<select name=\"teacher_id\">";
	    			foreach ($teachers as $key => $teacher){
	        			echo "<option value='".$teacher->teacher_id."'";
	        			if ($selected_venue_id == $teacher->teacher_id)
	            			echo "selected = 'selected'";
	        			echo ">".$teacher->teacher_title."</option>";
	    			}
	    			echo "</select>";
				}
			echo "</td>";

		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		?>
		<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
		<input type="submit" value="Add This Class" class="button-primary" style="float:left;"/>
	</form>
	<?php
		echo "</td>";
		echo "</tr>";

echo "</table>";
echo "</div>";
$wpdb->print_error();

}
?>