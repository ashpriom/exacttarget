<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/update-student-db.php" id="update-student" method="POST">
<?php

if(isset($_POST['student_id'])){
	
	$studentID = $_POST['student_id'];
	global $wpdb;
	$students = $wpdb->get_row( "SELECT * FROM syn1_syn_student WHERE student_id = $studentID ");

	echo "<div>";
	echo "<h1><b>Edit Student (ID # ".$studentID. ")</b></h1>";
	echo "<table class=\"info-table\">";
			echo "<tr>";
				echo "<tr><td>First Name</td><td><input name=\"student_first\" type=\"text\" value=\"$students->student_first\"></td></tr>";
				echo "<tr><td>Last Name</td><td><input name=\"student_last\" type=\"text\" value=\"$students->student_last\"></td></tr>";
				echo "<tr><td>Email Address</td><td><input name=\"student_email\" type=\"text\" value=\"$students->student_email\" data-validation=\"email\"\></td></tr>";
				echo "<tr><td>Address 1</td><td><input name=\"student_address1\" type=\"text\" value=\"$students->student_address1\"/></td></tr>";
				echo "<tr><td>Address 2</td><td><input name=\"student_address2\" type=\"text\" value=\"$students->student_address2\"/></td></tr>";
				echo "<tr><td>City</td><td><input name=\"student_city\" type=\"text\" value=\"$students->student_city\"/></td></tr>";
				echo "<tr><td>Province</td><td><input name=\"student_prov\" type=\"text\" value=\"$students->student_prov\"/></td></tr>";
				echo "<tr><td>Postal Code</td><td><input name=\"student_postal\" type=\"text\" value=\"$students->student_postal\"/></td></tr>";
				echo "<tr><td>Phone</td><td><input name=\"student_phone\" type=\"text\" value=\"$students->student_phone\"/></td></tr>";
				echo "<tr><td>Language</td>";
					echo "<td><select name=\"student_language\">";
						echo "<option value=\"$students->student_language\" selected=\"selected\"/>$students->student_language</option>";
						echo "<option value=\"EN\"/>English</option>";
						echo "<option value=\"FR\"/>French</option>";
					echo "</select></td>";
				echo "</tr>";
				echo "<tr><td>Type</td>";
					echo "<td><select name=\"student_type\">";
						echo "<option value=\"$students->student_type\" selected=\"selected\"/>$students->student_type</option>";
						echo "<option value=\"Regular\"/>Regular</option>";
						echo "<option value=\"Full Time\"/>Full Time</option>";
					echo "</select></td>";
				echo "</tr>";
			echo "<tr>";
				echo "<td>";
					?>
					<input name="student_id" type="hidden" value="<?php echo $studentID; ?>"/>
					<input type="submit" value="Save" class="button-secondary" style="float:left;"/>
					<?php
			echo "</td>";
			echo "</tr>";
}

echo "</table>";
echo "</div>";
$wpdb->print_error();

?>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.43/jquery.form-validator.min.js"></script>
<script>
  $.validate({
  });
</script>