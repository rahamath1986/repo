<?php
session_start();
if(isset($_SESSION['name'])){
echo "Welcome,".$_SESSION['name'];
echo '<a href="logout.php">LOG OUT</a>';
}
else 
{
echo "unathorized acess";
}
?>
