<?php

	if(isset($_POST['class_instance_id']) && isset($_POST['class_semester_id'])){

		$classInstanceID = $_POST['class_instance_id'];
		$classSemesterID = $_POST['class_semester_id'];
		$classSemesterName = $_POST['class_semester_name'];
		$className = $_POST['class_name'];
		$semesterName = $_POST['semester_name'];
		$classroomName = $_POST['classroom_name'];
		$startTimestamp = $_POST['start_timestamp'];
		$endTimestamp = $_POST['end_timestamp'];
		$startTime = date("F j, Y g:i a", strtotime($startTimestamp));
		$endTime = date("g:i a", strtotime($endTimestamp));
			
		echo "<div id=\"inforoom\">";
			echo "<h1>Class Attendance (".$classInstanceID.")</h1>";
			echo "<h2>Semester: ".$semesterName."</h2>";
			echo "<h2>Class: ".$className." ".$classSemesterName."</h2>";
			echo "<h2>Date & Time: ".$startTime." to ".$endTime."</h2>";
			echo "<h2>Place: ".$classroomName."</h2>";
			
			echo "<form style=\"width:71%;\" action=\"admin.php?page=syn-studio/class-attendance-db.php\" method=\"POST\">";
				echo "<table class=\"info-table\">";
					echo "<tr>";
						echo "<td class=\"row_id\">#</td>";
						echo "<td>Student ID</td>";
						echo "<td>Name</td>";
						echo "<td>Attendance</td>";
					echo "</tr>";

					$i=0;
					global $wpdb;
					$classStudents = $wpdb->get_results( "SELECT student_id, enrollment_id FROM syn1_syn_enrollment WHERE class_semester_id = $classSemesterID ");
					
					$studentIDArray = array();
					$attendanceArray = array();
					foreach($classStudents as $classStudent){
						$i++;
						echo "<tr>";
							echo "<td class=\"row_id\">".$i."</td>";
							echo "<td>"; echo $studentID = sanitize_text_field($classStudent->student_id); echo "</td>";
							array_push($studentIDArray,$studentID);
							$studentNameFirst = $wpdb->get_var( "SELECT student_first FROM syn1_syn_student WHERE student_id = $studentID ");
							$studentNameLast = $wpdb->get_var( "SELECT student_last FROM syn1_syn_student WHERE student_id = $studentID ");
							echo "<td>".$studentNameLast.", ".$studentNameFirst."</td>";
							echo "<td>";
								echo "<input type=\"checkbox\" name=\"attendance_array[]\" unchecked value=\"absent\"> Absent ";
								echo "<input type=\"checkbox\" name=\"attendance_array[]\" unchecked value=\"present\"> Present ";
							echo "</td>";
						echo "</tr>";
					}

				echo "</table>"; ?>
					<div><p>
							<input name="student_id_array" type="hidden" value="<?php echo implode(',',$studentIDArray); ?>"/>
							<input name="class_instance_id" type="hidden" value="<?php echo $classInstanceID; ?>"/>
							<input type="submit" name="attendance" class="button-purple" id="synstudio-button" value="Submit Class Attendance"/>
					</p></div> <?php

			echo "</form>"; ?>

			<script>
				$('input[type="checkbox"]').on('change', function(){
	    			$('input[name="' + this.name + '"]').not(this).prop('checked', false);
				});
			</script>

		</div>

		<?php $wpdb->print_error();
	}

	else{ echo "There is a problem with form submission. Please contact system admin. Thank you."; }

?>