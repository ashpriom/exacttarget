<?php

/*
Plugin Name: Syn Studio
Plugin URI: synstudio.ca
Description: Information System for Syn Studio Art School
Author: Syed Ashfaque Uddin Priom
Version: 1.0
Author URI: http://ashpriom.com/
Copyright 2015 Syed Ashfaque Uddin Priom, Syn Studio 
*/

// Dashboard Menu
add_action( 'admin_menu', 'main_menu' );

function main_menu(){
	global $inforoomPages;
	add_menu_page( 'InfoRoom@SynStudio', 'Syn Studio', 'manage_options', 'syn-studio/inforoom.php', '', plugins_url('syn-studio/images/icon.png'),3);

	add_submenu_page( 'syn-studio/inforoom.php', 'Syn-Studio', 'Home', 'manage_options', 'syn-studio/inforoom.php');	
	add_submenu_page( 'syn-studio/inforoom.php', 'Semesters', 'Semesters', 'manage_options', 'syn-studio/semesters.php','Semesters');
	add_submenu_page( 'syn-studio/inforoom.php', 'Classrooms', 'Classrooms', 'manage_options', 'syn-studio/classrooms.php','Classrooms');
	add_submenu_page( 'syn-studio/inforoom.php', 'Students', 'Students', 'manage_options', 'syn-studio/students.php','Students');
	add_submenu_page( 'syn-studio/inforoom.php','Settings', 'Settings', 'manage_options', 'syn-studio/synstudio-options.php', 'SynOptions');
	
	add_submenu_page( 'NULL', 'Update-Semester', 'Update Semesters', 'manage_options', 'syn-studio/update-semester.php');
	add_submenu_page( 'NULL', 'Update-Semester', '', 'manage_options', 'syn-studio/update-semester-db.php');
	add_submenu_page( 'NULL', 'Delete-Semester', '', 'manage_options', 'syn-studio/delete-semester.php');
	add_submenu_page( 'NULL', 'Add-Semester', '', 'manage_options', 'syn-studio/add-semester.php');
	add_submenu_page('NULL', 'Add-Semester', '', 'manage_options', 'syn-studio/add-semester-db.php');
	
	add_submenu_page('NULL', 'Update-Classroom', 'Update-Classroom', 'manage_options', 'syn-studio/update-classroom.php');
	add_submenu_page('NULL', 'Update-Classroom', '', 'manage_options', 'syn-studio/update-classroom-db.php');
	add_submenu_page('NULL', 'Delete-Classroom', '', 'manage_options', 'syn-studio/delete-classroom.php');
	add_submenu_page('NULL', 'Add-Classroom', '', 'manage_options', 'syn-studio/add-classroom.php');
	add_submenu_page('NULL', 'Add-Classroom', '', 'manage_options', 'syn-studio/add-classroom-db.php');

	add_submenu_page('syn-studio/inforoom.php', '', '', 'manage_options', 'syn-studio/classes.php','ClassInfo');
	add_submenu_page('NULL', 'Update-Semester-Class', 'Update-Semester-Class', 'manage_options', 'syn-studio/update-semester-class.php');
	add_submenu_page('NULL', 'Update-Semester-Class', '', 'manage_options', 'syn-studio/update-semester-class-db.php');
	add_submenu_page('NULL', 'Delete-Semester-Class', '', 'manage_options', 'syn-studio/delete-semester-class.php');
	add_submenu_page('NULL', 'Add-Semester-Class', '', 'manage_options', 'syn-studio/add-semester-class.php');
	add_submenu_page('NULL', 'Add-Semester-Class', '', 'manage_options', 'syn-studio/add-semester-class-db.php');
	
	add_submenu_page('syn-studio/inforoom.php', '', '', 'manage_options', 'syn-studio/class-instances.php','ClassInstance');
	add_submenu_page('syn-studio/inforoom.php', '', '', 'manage_options', 'syn-studio/class-instances-settings.php');
	add_submenu_page('syn-studio/inforoom.php', '', '', 'manage_options', 'syn-studio/class-instances-settings-db.php');
	add_submenu_page('syn-studio/inforoom.php', '', '', 'manage_options', 'syn-studio/update-class-instance.php');
	add_submenu_page('NULL', '', '', 'manage_options', 'syn-studio/update-class-instance-db.php');
	add_submenu_page('NULL', '', '', 'manage_options', 'syn-studio/delete-class-instance.php');
	add_submenu_page('syn-studio/inforoom.php', '', '', 'manage_options', 'syn-studio/add-class-instance.php');
	add_submenu_page('NULL', '', '', 'manage_options', 'syn-studio/add-class-instance-db.php');

	add_submenu_page('NULL', 'Update-Student', 'Update-Student', 'manage_options', 'syn-studio/update-student.php');
	add_submenu_page('NULL', 'Update-Student', '', 'manage_options', 'syn-studio/update-student-db.php');
	add_submenu_page('NULL', 'Delete-Student', '', 'manage_options', 'syn-studio/delete-student.php');
	add_submenu_page('NULL', 'Add-Student', '', 'manage_options', 'syn-studio/add-student.php');
	add_submenu_page('NULL', 'Add-Student', '', 'manage_options', 'syn-studio/add-student-db.php');

	add_submenu_page('NULL', 'Class-Students', '', 'manage_options', 'syn-studio/class-students.php','ClassStudents');
	add_submenu_page('NULL', 'Add-Class-Students', '', 'manage_options', 'syn-studio/add-class-student.php');
	add_submenu_page('NULL', 'Add-Class-Students', '', 'manage_options', 'syn-studio/add-class-student-db.php');
	add_submenu_page('NULL', 'Add-Class-Students', '', 'manage_options', 'syn-studio/delete-class-student.php');

	add_submenu_page('syn-studio/inforoom.php', 'Class-Attendance', '', 'manage_options', 'syn-studio/class-attendance.php');
	add_submenu_page('NULL', 'Class-Attendance', '', 'manage_options', 'syn-studio/class-attendance-db.php');
}

add_action( 'admin_enqueue_scripts', 'load_syn_style');
function load_syn_style(){
    wp_register_style('syn_css', plugins_url().'/syn-studio/css/style.css', false, '1.0.0');
    wp_enqueue_style('syn_css');
}

add_action( 'admin_enqueue_scripts', 'load_syn_script');
function load_syn_script(){
    wp_register_script('syn_script', plugins_url().'/syn-studio/js/googlefonts.js', false, '1.0.0');
    wp_enqueue_script('syn_script');
}


function Semesters(){

	echo "<div id=\"inforoom\">";

		echo "<h1><b>Syn Studio Semesters</b></h1>";

		echo "<table class=\"info-table\">";
			echo "<tr>";
				//echo "<td class=\"row_id\">#</td>";
				//echo "<td>Semester ID</td>";
				echo "<td>Semester</td>";
				echo "<td>Starts On</td>";
				echo "<td>Ends On</td>";
				echo "<td>Early Registration Deadline</td>";
				echo "<td>Late Registration Deadline</td>";
				echo "<td>Actions</td>";
			echo "</tr>";
			
			$i=0;
			global $wpdb;
			$semesters = $wpdb->get_results( "SELECT semester_id, semester_name_en, semester_name_fr, start_date, end_date, early_registration, late_registration FROM syn1_syn_semester");
			foreach($semesters as $semester){
				$i++;
				echo "<tr>";
					$semesterID = sanitize_text_field($semester->semester_id);
					//echo "<td class=\"row_id\">".$i."</td>";
					//echo "<td>"; echo $semesterID = sanitize_text_field($semester->semester_id); echo "</td>";
					//echo "<td>"; echo $semester_name_en = sanitize_text_field($semester->semester_name_en); echo " ( "; echo $semester_name_fr = sanitize_text_field($semester->semester_name_fr); echo " )</td>";
					echo "<td>"; echo $semester_name_en = sanitize_text_field($semester->semester_name_en); echo "</td>";
					echo "<td>"; $start_date = sanitize_text_field($semester->start_date); $format = 'Y-m-d'; $date = DateTime::createFromFormat($format, $start_date); echo $date->format('F j, Y'); echo "</td>";
					echo "<td>"; $end_date = sanitize_text_field($semester->end_date); $format = 'Y-m-d'; $date = DateTime::createFromFormat($format, $end_date); echo $date->format('F j, Y'); echo "</td>";
					echo "<td>"; $early_registration = sanitize_text_field($semester->early_registration); $format = 'Y-m-d'; $date = DateTime::createFromFormat($format, $early_registration); echo $date->format('F j, Y'); echo "</td>";
					echo "<td>"; $late_registration = sanitize_text_field($semester->late_registration); $format = 'Y-m-d'; $date = DateTime::createFromFormat($format, $late_registration); echo $date->format('F j, Y'); echo "</td>";
					echo "<td>";?>
						<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/classes.php" method="POST">
							<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
							<input type="submit" value="See Classes" class="button-green"/>
						</form>
						<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-semester.php" method="POST">
							<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
							<input type="submit" value="Edit Info" class="button-green"/>
						</form>
						<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/delete-semester.php" method="POST">
							<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
							<input type="submit" value="Delete Semester" class="button-primary"/>
						</form>
					<?php
					echo "</td>";
				echo "</tr>";
			}

		echo "</table>";
		?>

		<form id="semester" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-semester.php" method="POST">
			<div>
				<p>
					<input type="submit" name="semester" class="button-purple" id="synstudio-button" value="Add New Semester"/>
					<img src="<?php echo admin_url('/images/wpspin_light.gif');?>" class="waiting" id="synstudio-loading" style="display:none"/>
				</p>
			</div>
		</form>

	</div> <!-- The last div in each of these functions closes the main div with ID "inforoom" -->

	<?php $wpdb->print_error();
}

function Classrooms(){

	echo "<div id=\"inforoom\">";
	echo "<h1><b>Syn Studio Classrooms</b></h1>";

		global $wpdb;
		$classrooms = $wpdb->get_results( "SELECT classroom_id, classroom_capacity, classroom_name_en, classroom_name_fr FROM syn1_syn_classroom ORDER BY classroom_name_en ");
		$i=0;

		echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td class=\"row_id\">#</td>";
				echo "<td>Classroom ID</td>";
				echo "<td>Name</td>";
				echo "<td>Capacity</td>";
				echo "<td>Actions</td>";
			echo "</tr>";
			
			foreach( $classrooms as $classroom){
				$i++;
				echo "<tr>";
					echo "<td class=\"row_id\">".$i."</td>";
					echo "<td >"; echo $classroomID = sanitize_text_field($classroom->classroom_id); echo "</td>";
					echo "<td>"; echo $classroom_name_en = sanitize_text_field($classroom->classroom_name_en); echo " ( "; echo $classroom_name_fr = sanitize_text_field($classroom->classroom_name_fr); echo " )</td>";
					echo "<td >"; echo $classroom_capacity = sanitize_text_field($classroom->classroom_capacity); echo "</td>";
					echo "<td>";
					?>
						<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-classroom.php" method="POST">
							<input name="classroom_id" type="hidden" value="<?php echo $classroomID; ?>"/>
							<input type="submit" value="Edit" class="button-secondary"/>
						</form>
						<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/delete-classroom.php" method="POST">
							<input name="classroom_id" type="hidden" value="<?php echo $classroomID; ?>"/>
							<input type="submit" value="Delete Classroom" class="button-primary"/>
						</form><?php
					echo "</td>";
				echo "</tr>";
			}

		echo "</table>";
		?>

		<form id="classroom" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-classroom.php" method="POST">
			<div><p>
					<input type="submit" name="classroom" class="button-purple" id="synstudio-button" value="Add New Classroom"/>
					<img src="<?php echo admin_url('/images/wpspin_light.gif');?>" class="waiting" id="synstudio-loading" style="display:none"/>
			</p></div>
		</form>

	</div>

	<?php $wpdb->print_error();
}


function ClassInfo(){

	echo "<div id=\"inforoom\">";

		global $wpdb;

		if(isset($_POST['semester_id'])){
			
			$semesterID = $_POST['semester_id'];
			
			$semesterName = $wpdb->get_var( "SELECT semester_name_en FROM syn1_syn_semester WHERE semester_id = $semesterID ");
			echo "<h1>Class List</h1>";
			echo "<h2>Semester: ".$semesterName."</h2>";
			
			$semesterClasses = $wpdb->get_results( "SELECT class_semester_id, class_id, teacher_id, class_semester_name_en, class_semester_name_fr FROM syn1_syn_class_semester WHERE semester_id = $semesterID ");
			$i=0;

			echo "<table class=\"info-table\">";
				echo "<tr>";
					echo "<td class=\"row_id\"><b>#</b></td>";
					echo "<td><b>ID</b></td>";
					echo "<td><b>Class</b></td>";
					echo "<td><b>Section</b></td>";
					echo "<td><b>Teacher</b></td>";
					echo "<td><b>Actions</b></td>";
				echo "</tr>";
				
				foreach( $semesterClasses as $semesterClass){
					
					$i++;
					$classID = sanitize_text_field($semesterClass->class_id);
					$className = $wpdb->get_var( "SELECT class_title FROM syn1_view_classes WHERE class_id = $classID ");

					$teacherID = sanitize_text_field($semesterClass->teacher_id);
					$teacherName = $wpdb->get_var( "SELECT teacher_title FROM syn1_view_teachers WHERE teacher_id = $teacherID ");

					echo "<tr>";
						echo "<td class=\"row_id\">".$i."</td>";
						echo "<td>"; echo $classSemesterID = sanitize_text_field($semesterClass->class_semester_id); echo "</td>";
						echo "<td>"; echo $className; echo "</td>";
						
						$semesterClassNameEn = sanitize_text_field($semesterClass->class_semester_name_en);
						$semesterClassNameFr = sanitize_text_field($semesterClass->class_semester_name_fr);

						if($semesterClassNameEn == NULL || $semesterClassNameFr == NULL){ echo "<td></td>";}
						else{ echo "<td>"; echo $semesterClassNameEn; echo " ( "; echo $semesterClassNameEn; echo " )</td>"; }

						echo "<td>".$teacherName."</td>";

						echo "<td>";
							?>
							<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/class-instances.php" method="POST">
								<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
								<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
								<input name="teacher_id" type="hidden" value="<?php echo $teacherID; ?>"/>
								<input name="class_id" type="hidden" value="<?php echo $classID; ?>"/>
								<input type="submit" value="All Classes" class="button-green"/>
							</form>
							<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/class-students.php" method="POST">
								<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
								<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
								<input name="class_id" type="hidden" value="<?php echo $classID; ?>"/>
								<input type="submit" value="Students" class="button-green"/>
							</form>
							<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-semester-class.php" method="POST">
								<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
								<input name="teacher_name" type="hidden" value="<?php echo $teacherName; ?>"/>
								<input name="class_name" type="hidden" value="<?php echo $className; ?>"/>
								<input name="teacher_id" type="hidden" value="<?php echo $teacherID; ?>"/>
								<input name="class_id" type="hidden" value="<?php echo $classID; ?>"/>
								<input type="submit" value="Edit" class="button-secondary"/>
							</form><form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/delete-semester-class.php" method="POST">
								<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
								<input type="submit" value="Delete" class="button-primary"/>
							</form>
							<?php
						echo "</td>";
					echo "</tr>";
				}

			echo "</table>";
			
			?>

			<form id="classroom" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-semester-class.php" method="POST">
				<div>
					<p>
						<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
						<input type="submit" name="classroom" class="button-purple" id="synstudio-button" value="Add New Class"/>
						<img src="<?php echo admin_url('/images/wpspin_light.gif');?>" class="waiting" id="synstudio-loading" style="display:none"/>
					</p>
				</div>
			</form>
		
			<?php $wpdb->print_error();
		}

		else{ echo "The semester ID is not with your session anymore. Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click \"classes\" for a semester."; } ?>

	</div>

	<?php
}


function ClassInstance(){

	echo "<div id=\"inforoom\">";

		if(isset($_POST['class_semester_id']) && isset($_POST['semester_id'])){

			$semesterID = $_POST['semester_id'];
			$classSemesterID = $_POST['class_semester_id'];
			$classID = $_POST['class_id'];
			$teacherID = $_POST['teacher_id'];

			global $wpdb;
			$semesterName = $wpdb->get_var( "SELECT semester_name_en FROM syn1_syn_semester WHERE semester_id = $semesterID ");
			$className = $wpdb->get_var( "SELECT class_title FROM syn1_view_classes WHERE class_id = $classID ");
			$teacherName = $wpdb->get_var( "SELECT teacher_title FROM syn1_view_teachers WHERE teacher_id = $teacherID ");
			$classSemesterName = $wpdb->get_var( "SELECT class_semester_name_en FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");

			echo "<h1>Course Schedule</h1>";
			echo "<h2>Semester: ".$semesterName."</h2>";
			echo "<h2>Class: ".$className." ".$classSemesterName."</h2>";
			
			$classInstances = $wpdb->get_results( "SELECT classinstance_id, classroom_id, start_timestamp, end_timestamp, classinstance_status FROM syn1_syn_classinstance WHERE class_semester_id = $classSemesterID ");
			$i=0;

			echo "<table class=\"info-table\">";
				echo "<tr>";
					echo "<td class=\"row_id\">Class #</td>";
					echo "<td>Classroom</td>";
					echo "<td>Time</td>";
					echo "<td>Teacher</td>";
					echo "<td>Actions</td>";
				echo "</tr>";
				
				$classInstanceArray = array();
				foreach( $classInstances as $classInstance){					
					$i++;					
					$classInstanceID = sanitize_text_field($classInstance->classinstance_id);
					array_push($classInstanceArray,$classInstanceID);
					$classSemesterID = $_POST['class_semester_id'];
					$classSemesterName = $wpdb->get_var( "SELECT class_semester_name_en FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");
					$classroomID = sanitize_text_field($classInstance->classroom_id);
					$classroomName = $wpdb->get_var( "SELECT classroom_name_en FROM syn1_syn_classroom WHERE classroom_id = $classroomID ");
					
					$startTimestamp = sanitize_text_field($classInstance->start_timestamp);
					$startTime = date("F j, Y g:i a", strtotime($startTimestamp));

					$endTimestamp = sanitize_text_field($classInstance->end_timestamp);
					$endTime = date("g:i a", strtotime($endTimestamp));

					$classStatus = sanitize_text_field($classInstance->classinstance_status);

					if($classStatus == 0){echo "<tr style=\"opacity:0.7\">";}
					else{echo "<tr>";}	
						echo "<td class=\"row_id\">".$i."</td>";
						echo "<td>"; echo $classroomName; echo "</td>";
						echo "<td>"; echo $classTime = $startTime.' to '.$endTime; echo "</td>";
						echo "<td>".$teacherName."</td>";
						echo "<td id=".$classInstanceID.">";
							?>
							<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/class-attendance.php" method="POST">
								<input name="class_instance_id" type="hidden" value="<?php echo $classInstanceID; ?>"/>
								<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
								<input name="class_name" type="hidden" value="<?php echo $className; ?>"/>
								<input name="class_semester_name" type="hidden" value="<?php echo $classSemesterName; ?>"/>
								<input name="classroom_name" type="hidden" value="<?php echo $classroomName; ?>"/>
								<input name="semester_name" type="hidden" value="<?php echo $semesterName; ?>"/>
								<input name="start_timestamp" type="hidden" value="<?php echo $startTimestamp; ?>"/>
								<input name="end_timestamp" type="hidden" value="<?php echo $endTimestamp; ?>"/>
								<input type="submit" value="Attendance" class="button-green"/>
							</form>

							<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-class-instance.php" method="POST">
								<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
								<input name="class_instance_id" type="hidden" value="<?php echo $classInstanceID; ?>"/>
								<input name="classroom_id" type="hidden" value="<?php echo $classroomID; ?>"/>
								<input name="classroom_name" type="hidden" value="<?php echo $classroomName; ?>"/>
								<input name="start_timestamp" type="hidden" value="<?php echo $startTimestamp; ?>"/>
								<input name="end_timestamp" type="hidden" value="<?php echo $endTimestamp; ?>"/>
								<input name="teacher_id" type="hidden" value="<?php echo $teacherID; ?>"/>
								<input name="teacher_name" type="hidden" value="<?php echo $teacherName; ?>"/>
								<input type="submit" value="Edit" class="button-secondary"/>
							</form>

							<form onSubmit="if(!confirm('Is the form filled out correctly?')){return false;}" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/delete-class-instance.php" method="POST" id="delete-entry">
								<input name="class_instance_id" type="hidden" value="<?php echo $classInstanceID; ?>"/>
								<input type="submit" value="Delete" class="button-primary delete"/>
							</form>
							<?php
						echo "</td>";
					echo "</tr>";
				}

			echo "</table>";
			
			?>

			<form id="classroom" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-class-instance.php" method="POST">
				<div>
					<p>
						<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
						<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
						<input name="class_name" type="hidden" value="<?php echo $className; ?>"/>
						<input type="submit" name="classroom" class="button-purple" id="synstudio-button" value="Add New Class"/>
						<img src="<?php echo admin_url('/images/wpspin_light.gif');?>" class="waiting" id="synstudio-loading" style="display:none"/>
					</p>
				</div>
			</form>

			<form id="classroom" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/class-instances-settings.php" method="POST">
				<div>
					<p>
						<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
						<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
						<input name="class_instance_array" type="hidden" value="<?php echo implode(',',$classInstanceArray); ?>"/>
						<input type="submit" name="classroom" class="button-purple" id="synstudio-button" value="Change Settings"/>
						<img src="<?php echo admin_url('/images/wpspin_light.gif');?>" class="waiting" id="synstudio-loading" style="display:none"/>
					</p>
				</div>
			</form>
		
			<?php $wpdb->print_error();
		}

		else{
			echo "The semester ID is not with your session anymore. Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click \"classes\" for a semester.";
		} ?>

	</div>

	<?php
}

function Students(){

	echo "<div id=\"inforoom\">";
		
		echo "<h1><b>Syn Studio Students</b></h1>";

		echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<td class=\"row_id\">#</td>";
				echo "<td>Student ID</td>";
				echo "<td>Name</td>";
				echo "<td>Email Address</td>";
				echo "<td>Postal Address</td>";
				echo "<td>Phone</td>";
				echo "<td>Language</td>";
				echo "<td>Type</td>";
				echo "<td>Actions</td>";
			echo "</tr>";
			
			$i=0; // row counter
			global $wpdb;
			$students = $wpdb->get_results( "SELECT student_id, student_first, student_last, student_email, student_address1, student_address2, student_city, student_prov, student_phone, student_postal, student_language, student_type FROM syn1_syn_student");
			foreach($students as $student){
				$i++;
				echo "<tr>";
					echo "<td class=\"row_id\">".$i."</td>";
					echo "<td>"; echo $studentID = sanitize_text_field($student->student_id); echo "</td>";
					echo "<td>"; echo $studentFirst = sanitize_text_field($student->student_first); echo " ".$studentLast = sanitize_text_field($student->student_last); echo "</td>";
					echo "<td>"; echo $studentEmail = sanitize_text_field($student->student_email); echo "</td>";
					echo "<td>"; echo $studentAddress = sanitize_text_field($student->student_address1) ." ". sanitize_text_field($student->student_address2) .", ". sanitize_text_field($student->student_city) .", ". sanitize_text_field($student->student_prov) .", ". sanitize_text_field($student->student_postal); echo "</td>";
					echo "<td>"; echo $studentPhone = sanitize_text_field($student->student_phone); echo "</td>";
					echo "<td>"; echo $studentLang = sanitize_text_field($student->student_language); echo "</td>";
					echo "<td>"; echo $studentType = sanitize_text_field($student->student_type); echo "</td>";
					echo "<td>";?>
						<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-student.php" method="POST">
							<input name="student_id" type="hidden" value="<?php echo $studentID; ?>"/>
							<input type="submit" value="Edit" class="button-secondary"/>
						</form>
						<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/delete-student.php" method="POST">
							<input name="student_id" type="hidden" value="<?php echo $studentID; ?>" onclick="return confirm_delete()"/>
							<input type="submit" value="Delete" class="button-primary"/>
						</form><?php
					echo "</td>";
				echo "</tr>";
			}

		echo "</table>";
		?>

		<form id="semester" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-student.php" method="POST">
			<div>
				<p>
					<input type="submit" name="student" class="button-purple" id="synstudio-button" value="New Student"/>
					<img src="<?php echo admin_url('/images/wpspin_light.gif');?>" class="waiting" id="synstudio-loading" style="display:none"/>
				</p>
			</div>
		</form>
	</div>

	<?php $wpdb->print_error();
}

function ClassStudents(){

	echo "<div id=\"inforoom\">";

		global $wpdb;
		if(isset($_POST['class_semester_id']) && isset($_POST['semester_id'])){

			$semesterID = $_POST['semester_id'];
			$classSemesterID = $_POST['class_semester_id'];
			$classSemesterNameEn = $wpdb->get_var( "SELECT class_semester_name_en FROM syn1_syn_class_semester WHERE class_semester_id = $classSemesterID ");
			$classID = $_POST['class_id'];
			$className = $wpdb->get_var( "SELECT class_title FROM syn1_view_classes WHERE class_id = $classID ");
			$semesterName = $wpdb->get_var( "SELECT semester_name_en FROM syn1_syn_semester WHERE semester_id = $semesterID ");

			echo "<h1><b>List of Enrolled Students</b></h1><br>";
			echo "<h2>Semester: ".$semesterName."</h2>";
			echo "<h2>Class: ".$className."   ".$classSemesterNameEn."</h2><br>";
			
			$classStudents = $wpdb->get_results( "SELECT enrollment_id, student_id, enrollment_date FROM syn1_syn_enrollment WHERE class_semester_id = $classSemesterID ");
			$i=0;

			echo "<table class=\"info-table\">";
				echo "<tr>";
					echo "<td class=\"row_id\">#</td>";
					echo "<td>Student ID</td>";
					echo "<td>Name</td>";
					echo "<td>Enrollment Date & Time</td>";
					echo "<td>Actions</td>";
				echo "</tr>";
				
				foreach($classStudents as $classStudent){
					$i++;
					$enrolmentID = sanitize_text_field($classStudent->enrollment_id);
					$studentID = sanitize_text_field($classStudent->student_id);
					$studentNameFirst = $wpdb->get_var( "SELECT student_first FROM syn1_syn_student WHERE student_id = $studentID ");
					$studentNameLast = $wpdb->get_var( "SELECT student_last FROM syn1_syn_student WHERE student_id = $studentID ");
					$classSemesterID = sanitize_text_field($_POST['class_semester_id']);

					// Get UTC timestamp from database and convert it to Montréal time.
					$enrolmentTimestamp = $classStudent->enrollment_date;
					$enrolmentDate = date("F j, Y g:i a", strtotime($enrolmentTimestamp));
					$original_timezone = new DateTimeZone('UTC');
					$datetime = new DateTime($enrolmentDate, $original_timezone);
					$target_timezone = new DateTimeZone('America/Montreal');
					$datetime->setTimeZone($target_timezone);
					$enrolmentDateMtl = $datetime->format('F j, Y g:i a');
					
					echo "<tr>";	
						echo "<td class=\"row_id\">".$i."</td>";
						echo "<td>".$studentID."</td>";
						echo "<td>".$studentNameLast.", ".$studentNameFirst."</td>";
						echo "<td>".$enrolmentDateMtl."</td>";
						echo "<td>";
							?>
							<form onSubmit="if(!confirm('Are you sure to withdraw the student?')){return false;}" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/delete-class-student.php" method="POST" id="delete-entry">
								<input name="enrolment_id" type="hidden" value="<?php echo $enrolmentID; ?>"/>
								<input type="submit" value="Withdraw" class="button-primary delete"/>
							</form>
							<?php
						echo "</td>";
					echo "</tr>";
				}
			echo "</table>";
			
			?>

			<form id="classroom" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-class-student.php" method="POST">
				<div><p>
					<input name="semester_id" type="hidden" value="<?php echo $semesterID; ?>"/>
					<input name="class_semester_id" type="hidden" value="<?php echo $classSemesterID; ?>"/>
					<input type="submit" class="button-purple" value="Enroll Existing Student"/>
				</p></div>
			</form>

			<form id="semester" action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-student.php" method="POST">
				<div><p>
					<input type="submit" name="student" class="button-purple" id="synstudio-button" value="New Student"/>
					<img src="<?php echo admin_url('/images/wpspin_light.gif');?>" class="waiting" id="synstudio-loading" style="display:none"/>
				</p></div>
			</form>

			<?php $wpdb->print_error();
		}

		else{ echo "The semester ID is not with your session anymore. Please go to the <a href=\"/wp-admin/admin.php?page=syn-studio/semesters.php\">Semesters Page</a> and click \"classes\" for a semester.";} 
		?>

	</div>

	<?php
}



// This area defines the plugin options page by using WordPress Settings API. 
// Please visit http://ottopress.com/2009/wordpress-settings-api-tutorial/ for detailed explanation

function SynOptions(){ ?>
	<div>
		<h2></h2>
		<form action="options.php" method="post">
			<?php settings_fields('synstudio-options'); ?>
			<?php do_settings_sections('synstudio'); ?>
			<input name="Submit" type="submit" class="button-purple" id="synstudio-button" value="<?php esc_attr_e('Save Changes'); ?>" />
		</form>
	</div> <?php 
} 
	
add_action('admin_init', 'plugin_admin_init');
function plugin_admin_init(){
	register_setting('synstudio-options', 'synstudio-options', 'SynValidate'); // Register all settings
	add_settings_section('synstudio_main', 'Syn Studio Settings', 'NoticeCallback', 'synstudio'); // Add a section for Syn Studio settings
	add_settings_field('synoption1', 'Early Deadline Notice (EN)', 'EarlyDeadlineEn', 'synstudio', 'synstudio_main'); // Add new field under the section
	add_settings_field('synoption2', 'Early Deadline Notice (FR)', 'EarlyDeadlineFr', 'synstudio', 'synstudio_main'); // Add a second field under the section
	add_settings_field('synoption3', 'Late Deadline Notice (EN)', 'LateDeadlineEn', 'synstudio', 'synstudio_main'); // more...
	add_settings_field('synoption4', 'Late Deadline Notice (FR)', 'LateDeadlineFr', 'synstudio', 'synstudio_main');
}

function NoticeCallback(){
	echo '<p>Notice texts can be updated here.</p>';
} 

function EarlyDeadlineEn(){
	$options = get_option('synstudio-options');
	echo "<input id='synoption1' name='synstudio-options[early_deadline_en]' size='40' type='textarea' value='{$options['early_deadline_en']}' />";
}

function EarlyDeadlineFr(){
	$options = get_option('synstudio-options');
	echo "<input id='synoption2' name='synstudio-options[early_deadline_fr]' size='40' type='textarea' value='{$options['early_deadline_fr']}' />";
}

function LateDeadlineEn(){
	$options = get_option('synstudio-options');
	echo "<input id='synoption3' name='synstudio-options[late_deadline_en]' size='40' type='textarea' value='{$options['late_deadline_en']}' />";
}

function LateDeadlineFr(){
	$options = get_option('synstudio-options');
	echo "<input id='synoption4' name='synstudio-options[late_deadline_fr]' size='40' type='textarea' value='{$options['late_deadline_fr']}' />";
}

function SynValidate($input){
	$options = get_option('synstudio-options');
	$options['early_deadline_en'] = trim($input['early_deadline_en']);
	$options['early_deadline_fr'] = trim($input['early_deadline_fr']);
	$options['late_deadline_en'] = trim($input['late_deadline_en']);
	$options['late_deadline_fr'] = trim($input['late_deadline_fr']);
	//if(!preg_match('/^*$/i', $options['text_string'])) {
	//	$options['text_string'] = '';
	//}
	return $options;
}

function GetPreSemester(){
    global $wpdb;
    $today=date('Y-m-d');
	$semesters = $wpdb->get_results( "SELECT semester_id, semester_name_en, semester_name_fr, start_date, end_date, early_registration, late_registration FROM syn1_syn_semester");
	foreach($semesters as $semester){
		$early_registration = sanitize_text_field($semester->early_registration);
		$late_registration = sanitize_text_field($semester->late_registration);
		if (($today > $early_registration) && ($today < $late_registration)){
			return $semester->semester_id; // pre semester means the period starting from early reg to late reg deadlines.
    	}
	}
}

?>