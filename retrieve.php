<!DOCTYPE html>
<html>
<body>
<form action = "retrieve.php" method = "post">
<p>View Conversation: <input list = "reciever" name = "reciever" /></p>
		<datalist id = "reciever">
<?php
	$dbHost = "localhost";        //Location Of Database usually its localhost 
    $dbUser = "root";            //Database User Name 
    $dbPass = "";            //Database Password 
    $dbDatabase = "userlogin";    //Database Name 
     
    $db = mysqli_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database."); 
    //Connect to the databasse 
    mysqli_select_db($db, $dbDatabase)or die("Couldn't select the database."); 
    //Selects the database 
     
    /* 
    The Above code can be in a different file, then you can place include'filename.php'; instead. 
    */ 
    session_start();
	$sql = mysqli_query($db, "SELECT username FROM users");
			while($temp = mysqli_fetch_assoc($sql)){
				echo "<option value = '".$temp['username']."'>".$temp['username']."</option>";
			}
			echo "</datalist>";
	
	echo "<input type = 'submit' name = 'submit' value = 'Select' class = 'Button' />";
	echo "</form>";
	if(isset($_POST['submit'])){
		$usr1 = mysqli_real_escape_string($db, $_SESSION['username']);
		$usr2 = mysqli_real_escape_string($db, $_POST['reciever']);
		$sql = mysqli_query($db, "select message, sender from messages where ((user1 = '$usr1' and user2 = '$usr2') or (user1 = '$usr2' and user2 = '$usr1'))");
		echo "<dl>";
		//add condition for no entry in database
		while($temp = mysqli_fetch_assoc($sql)){
			echo "<dl>".$temp['message']."</dl><dd>-".$temp['sender'].'</dd>';
		}
		echo "</dl>";
	} else {
		echo "<d>";
	}
?>
</body>
</html>