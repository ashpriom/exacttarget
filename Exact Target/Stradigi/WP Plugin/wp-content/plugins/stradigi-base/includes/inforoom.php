<!DOCTYPE html>
<html lang="en">
	<body>
		<link rel="stylesheet" href="<?php bloginfo('url'); _e(''); ?>/wp-content/plugins/syn-studio/css/bootstrap.min.css" type="text/css" media="screen" />
		<script src="<?php bloginfo('url'); _e(''); ?>/wp-content/plugins/syn-studio/js/bootstrap.min.js" /></script>
		<div id="inforoom" class="container-fluid">
			<div class="row">
				<div class="col-md-5"><h1><b>Syn Studio Information System</b></h1></div>
				<div class="inforoom-menu col-md-7">
					<ul>
						<?php
						echo "<li><h2><a href=\"admin.php?page=syn-studio/semesters.php\" target=\"_BLANK\">Semesters</a></h2></li>";
						echo "<li><h2><a href=\"admin.php?page=syn-studio/classrooms.php\" target=\"_BLANK\">Classrooms</a></h2></li>";
						echo "<li><h2><a href=\"admin.php?page=syn-studio/students.php\" target=\"_BLANK\">Students</a></h2></li>";
						echo "<li><h2><a href=\"admin.php?page=syn-studio/synstudio-options.php\" target=\"_BLANK\">Options</a></h2></li>";
						?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<link rel="stylesheet" href="<?php bloginfo('url'); _e(''); ?>/wp-content/plugins/syn-studio/calendar/lib/css/SimpleCalendar.css" />
					<?php
						error_reporting(E_ALL ^ E_WARNING);
						require_once('calendar/lib/donatj/SimpleCalendar.php');
						$calendar = new donatj\SimpleCalendar();
						$calendar->setStartOfWeek('Monday');
						$calendar->addDailyHtml( 'Sample Event', 'today', 'today' );
						$calendar->show(true);
					?>
				</div>
			</div>
		</div>
	</body>
</html>