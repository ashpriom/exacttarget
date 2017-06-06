<div id="inforoom">
<h1><b>Syn Studio Semesters</b></h1>

<?php

// Declaring $wpdb as global and using it to execute an SQL query statement that returns a PHP object.

global $wpdb;
$results = $wpdb->get_results( 'SELECT * FROM wp_options WHERE option_id = 1', OBJECT );
$semesters = $wpdb->get_results( "SELECT semester_id, semester_name_en, semester_name_fr, start_date, end_date FROM syn1_syn_semester" );
$i=0;
echo "<table class=\"info-table\">";
	echo "<tr>";
		echo "<td>#</td>";
		echo "<td>Semester ID</td>";
		echo "<td>Name</td>";
		echo "<td>Starts On</td>";
		echo "<td>Ends On</td>";
	echo "</tr>";
	
	foreach ( $semesters as $semester ){
		$i++;
		echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$semester->semester_id."</td>";
			echo "<td>".$semester->semester_name_en." ( ".$semester->semester_name_fr." )"."</td>";
			echo "<td>".$semester->start_date."</td>";
			echo "<td>".$semester->end_date."</td>";
		echo "</tr>";
	}

	echo "<tr>";
		echo "<td><form onclick=\"add_semester()\"><input type=\"submit\" value=\"add\"/></form></td>";
	echo "</tr>";
echo "</table>";

function add_semester(){
	echo "function"; ?>
	<form id="semester" action="" method="POST">
		<div>
			<input type="submit" name="semester" class="button-primary" value="Fall"/>
		</div>
	</form>
<?php }

function synstudio_load_scripts($hook){
	wp_enqueue_script('synstudio-ajax',plugin_dir_url(__FILE__).'js/synajax.js', array('jquery'));
}
add_action('admin_enqueue_scripts','synstudio_load_scripts');


function synstudio_process_ajax(){
	echo "this is a response";
	die();
}
add_action('wp_ajax_synstudio_get_results','synstudio_process_ajax');


?>
</div>