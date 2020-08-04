<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		$dbHost = "localhost";        //Location Of Database usually its localhost 
		$dbUser = "root";            //Database User Name 
		$dbPass = "";            //Database Password 
		$dbDatabase = "userlogin";    //Database Name 
		 
		$db = mysqli_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
		//Connect to the databasse 
		mysqli_select_db($db, $dbDatabase)or die("Couldn't select the database."); 
		$query = mysqli_query($db, "select content from announcements");
		echo "<ul>";
		while($temp = mysqli_fetch_assoc($query)){
					echo "<li>".$temp['content']."</li>";
				}
		echo "</ul>";
	?>
</body>
</html>