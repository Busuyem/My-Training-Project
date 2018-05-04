<?php include'include/db.php';?>



<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<title>Guest Book</title>
</head>
	<form method="POST" action="action.php" class="form">
		<label for="full_name">Full Name<br></label><input type="text" name="full_name"><br>
		<label for="time_arrived">Arrival Time<br></label><input type="time" name="time_arrived"><br>
		<label for="time_closed"></label>Closing Time<br><input type="time" name="time_closed"><br><br>
		<button type="submit" name="submit">submit</button>
	</form>
<body>

</body>
</html>