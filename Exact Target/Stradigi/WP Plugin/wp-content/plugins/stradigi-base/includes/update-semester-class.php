<?php

if(isset($_POST['class_semester_id']) && isset($_POST['class_name']) && isset($_POST['class_id']) && isset($_POST['teacher_name']) && isset($_POST['teacher_id'])){

	$classSemesterID = $_POST['class_semester_id'];
	$className = $_POST['class_name'];
	$teacherName = $_POST['teacher_name'];

	global $wpdb;
	$semesterClass = $wpdb->get_row( "SELECT class_id, teacher_id, class_semester_name_en, class_semester_name_fr FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");

	echo "<div id=\"inforoom\">";
		
		echo "<h1><b>Editing: ".$className." ". $semesterClass->class_semester_name_en."</b></h1>";
		echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td>Class</td>";
				echo "<td>Section Name (English)</td>";
				echo "<td>Section Name (Francais)</td>";
				echo "<td>Teacher</td>";
			echo "</tr>";
			
			echo "<tr>"; ?>
				<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-semester-class-db.php" method="POST">
				<?php 

				// Select class from dropdown menu
				echo "<td>";
					$classes = $wpdb->get_results("SELECT class_id, class_title FROM syn1_view_classes ORDER BY class_title");
					if (!empty($classes)){
		    			echo "<select name=\"class_id\">";
		    			echo "<option value='".$_POST['class_id']."' selected>".$className."</option>";
		    			foreach ($classes as $key => $class){
		        			echo "<option value='".$class->class_id."'";
		        			if ($selected_venue_id == $class->class_id)
		            			echo "selected = 'selected'";
		        			echo ">".$class->class_title."</option>";
		    			}
		    			echo "</select>";
					}
				echo "</td>";

				echo "<td><input name=\"class_semester_name_en\" type=\"text\" value=\"$semesterClass->class_semester_name_en\" /></td>";
				echo "<td><input name=\"class_semester_name_fr\" type=\"text\" value=\"$semesterClass->class_semester_name_fr\" /></td>";

				// Select class teacher from dropdown menu
				echo "<td>";
					global $wpdb;
					$teachers = $wpdb->get_results("SELECT teacher_id, teacher_title FROM syn1_view_teachers ORDER BY teacher_title");
					if (!empty($teachers)){
		    			echo "<select name=\"teacher_id\">";
		    			echo "<option value='".$_POST['teacher_id']."' selected>".$teacherName."</option>";
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
					<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
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