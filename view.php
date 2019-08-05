<?php
require'config.php';

$sql = "SELECT * from `board` ORDER BY announcement DESC LIMIT 0, 5";
$result = mysqli_query($connection, $sql) or die("This is a bad query: $sql");

echo "<h2>Announcements for today</h2>";
echo"<table border='5' width='250' height='10'.";
while($row = mysqli_fetch_assoc($result)){#recipe for iterating through the results

echo "<tr><td>{$row['announcement']}</td></tr>";
}
echo"</table>";
echo"<br><br>";
// echo"<button><a href='delete.php'>Delete notice</a></button>";
echo '<input type="submit" color="red" value="Delete" name="submit_btn">';

if(isset($_REQUEST['submit_btn'])){

    $sql="DELETE TOP 3 FROM board";
    $result=$connection->query($sql);
     if ($result===TRUE)
     {
         echo '<script>';
     echo 'alert("deleted successfully")';
     echo '</script>';
    
    
    }
    }