<?php
	global $wpdb; // Declaring $wpdb as global to execute SQL query statements that return PHP objects.	
?>

	<form action="<?php home_url(); ?>/wp-admin/admin.php?page=syn-studio/add-classroom-db.php" method="POST">
		<?php
		echo "<div id=\"inforoom\">";
		echo "<table class=\"info-table\">";
		echo "<h1><b>New Classroom Form</b></h1>";
		echo "<tr>";
				echo "<td>Classroom Name (English)</td>";
				echo "<td>Classroom Name (Francais)</td>";
				echo "<td>Capacity</td>";
		echo "</tr>";
		echo "<tr>"; 
			echo "<td><input name=\"classroom_name_en\" type=\"text\" value=\"$classrooms->classroom_name_en\" /></td>";
			echo "<td><input name=\"classroom_name_fr\" type=\"text\" value=\"$classrooms->classroom_name_fr\" /></td>";
			echo "<td><input name=\"classroom_capacity\" type=\"text\" value=\"$classrooms->classroom_capacity\" /></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>"; ?>
				<input type="submit" value="Add This Classroom" class="button-primary" style="float:left;"/>
	</form>
	<?php
		echo "</td>";
		echo "</tr>";

echo "</table>";
echo "</div>";
$wpdb->print_error();

?>