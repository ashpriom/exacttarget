<?php

	if(isset($_POST['class_semester_id']) && isset($_POST['semester_id'])){

		$classSemesterID = $_POST['class_semester_id'];
		$semesterID = $_POST['semester_id'];

		echo "<div>";
			
			global $wpdb;
			$classSemesterNameEn = $wpdb->get_var( "SELECT class_semester_name_en FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");
			$classID = $wpdb->get_var( "SELECT class_id FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");
			$className = $wpdb->get_var( "SELECT class_title FROM syn1_view_classes WHERE class_id = $classID ");
			$semesterName = $wpdb->get_var( "SELECT semester_name_en FROM syn1_syn_semester WHERE semester_id = $semesterID ");
			echo "<h1><b>Enroll New Student</b></h1><br>";
			echo "<h2> Semester: ".$semesterName."</h2><br>";
			echo "<h2>Class: ".$className."   ".$classSemesterNameEn."</h2><br>";

			echo "<table class=\"info-table\">";
				echo "<tr>";
					echo "<td></td>";
				echo "</tr>";
				
				echo "<tr>"; ?>
					<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-class-student-db.php" method="POST">
					<?php

					// Select student from dropdown menu
					echo "<td>";
						$students = $wpdb->get_results("SELECT student_first, student_last, student_id, student_status FROM syn1_syn_student WHERE student_status = 1 ORDER BY student_last");
						if (!empty($students)){
			    			echo "<select name=\"student_id\">";
			    			foreach ($students as $key => $student){
			        			echo "<option value='".$student->student_id."'";
			        			if ($selected_venue_id == $student->student_id)
			            			echo "selected = 'selected'";
			        			echo ">".$student->student_last.",".$student->student_first."</option>";
			    			}
			    			echo "</select>";
						}
					echo "</td>";

				echo "</tr>";
				
				echo "<tr>";
					echo "<td>";
						?>
						<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
						<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
						<input type="Submit" value="Enrol" class="button-secondary" style="float:left;"/>
					</form><?php
					echo "</td>";
				echo "</tr>";

			echo "</table>";
			
			$wpdb->print_error();
		
		echo "</div>";
	}

	else{ echo "Something is wrong, please inform system admin. Thank you."; }

?>