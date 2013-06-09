<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if($username&&$password)
{
  
	$db=mysql_connect("localhost","root","admin") or die("connection failed");
    mysql_selectdb('users') or die(" Db is not found");
    $query=mysql_query("select * from login where username='$username'");
    $num_rows=mysql_numrows($query);
    if($num_rows!=0)
    {
    	while($row=mysql_fetch_assoc($query))
    	{
    		$dbusername=$row['username'];
    		$dbpassword=$row["password"];
    	}
    	if($password==$dbpassword&&$dbusername=$username)
    	{
    
    	}
    	else{
    		die("incorrect password");
    	}
    }
    else {
    	die("no such user found");
    }
$username=$_POST["username"];
$password=$_POST["password"];
	
	$_SESSION['name']=$username;
		echo "success";
echo "your user Name is $username<br>";
echo "your password is $password<br>";
if(isset($_SESSION['count'])&&$_SESSION['count'] >0 ){
$_SESSION['count']=$_SESSION['count']+1;
}
else if($_SESSION['count']<0)
$_SESSION['count']=1;
echo "<br> ".$_SESSION['count'] ."users online ";
echo 'click <a href="member.php">here</a> to go member page';
echo '<a href="logout.php">LOG OUT</a>';
}
else 
echo "please enter username and password";
?>
