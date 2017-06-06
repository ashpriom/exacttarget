<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-student-db.php" method="POST">
<?php
	echo "<div>";
	echo "<h1><b>New Student at Syn Studio</b></h1>";
	echo "<table class=\"info-table\">";
			echo "<tr>"; ?>
				<?php
				echo "<tr><td>First Name</td><td><input name=\"student_first\" type=\"text\"></td></tr>";
				echo "<tr><td>Last Name</td><td><input name=\"student_last\" type=\"text\"></td></tr>";
				echo "<tr><td>Email Address</td><td><input name=\"student_email\" type=\"email\" data-validation=\"email\"></td></tr>";
				echo "<tr><td>Address 1</td><td><input name=\"student_address1\" type=\"text\"></td></tr>";
				echo "<tr><td>Address 2</td><td><input name=\"student_address2\" type=\"text\"></td></tr>";
				echo "<tr><td>City</td><td><input name=\"student_city\" type=\"text\"></td></tr>";
				echo "<tr><td>Province</td><td><input name=\"student_prov\" type=\"text\"></td></tr>";
				echo "<tr><td>Postal Code</td><td><input name=\"student_postal\" type=\"text\"></td></tr>";
				echo "<tr><td>Phone</td><td><input name=\"student_phone\" type=\"text\"></td></tr>";
				echo "<tr><td>Language</td>";
					echo "<td><select name=\"student_language\">";
						echo "<option value=\"EN\"/>English</option>";
						echo "<option value=\"FR\"/>French</option>";
					echo "</select></td>";
				echo "</tr>";
				echo "<tr><td>Type</td>";
					echo "<td><select name=\"student_type\">";
						echo "<option value=\"Regular\"/>Regular</option>";
						echo "<option value=\"Full Time\"/>Full Time</option>";
					echo "</select></td>";
				echo "</tr>";
			echo "<tr>";
				echo "<td></td>";
			echo "</tr>";	
			echo "<tr>";
				echo "<td>";?>
					<input type="submit" value="All set? Click to add new student." class="button-secondary" style="float:left;">
				<?php echo "</td>";
			echo "</tr>";

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