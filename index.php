<?php

include "config.php";

echo "<h1>WEB APP DEVELOPMENT NOTICEBOARD</h1>";
echo "<img scr='noticeboard-sign.jpg' alt='Class Noticeboard'>";
echo"<br><br>"; 

// FORM FOR POSTING ANNOUNCEMENT
echo"Type your announcement here <br>";
echo '<form action="" method="POST">';
echo'<input type="text" id="iden" name="announcement" style="height:50px; width:700px;" required/>';
echo"<br><br>";
echo '<input type="submit" value="SEND" name="submit_btn">&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp';
echo"<button><a href='view.php'>See all notices</a></button>";
echo '</form>';

if(isset($_REQUEST['submit_btn'])){

$announcement = $_POST['announcement'];
$sql = "INSERT INTO board (announcement) VALUES('$announcement')";
$result = $connection->query($sql);

if ($result===TRUE){
	echo '<script>';
echo'Your announcement has been posted successfully';
    echo'</script>';
    }
}

