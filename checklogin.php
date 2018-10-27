<?php
$host="localhost";
$user="root";
$password= "";
$db="login";

// MySQL Connection
$con = mysqli_connect($host,$user,$password,$db) or die('Connection error: '.mysqli_connect_error());
mysqli_select_db($con,"login") or die('Connection error: '.mysqli_connect_error());

// POST variables
$user=$_POST['user'];
$pass=$_POST['pass'];

// MD5 hash
//$pass=md5($pass);

// Query "login" table
$result = mysqli_query($con,"SELECT * FROM login WHERE user = '$user' AND pass = '$pass'") or die('Connection error: '.mysqli_connect_error());

// Login validation
if(mysqli_num_rows($result) != 0) {
//$row = mysqli_fetch_array($result);
//echo "<font color='blue'>Welcome, ".$row['user']."!</font>";
echo "Welcome,You are on board";
echo "<table border = '1'>";
echo "<tr><td>UserName</td><td>Password</td><td>FirstName</td>";
while($row = mysqli_fetch_array($result)){
	echo "<tr><td>{$row['user']}</td><td>{$row['pass']}</td><td>{$row['firstname']}</td><tr>";
}
echo "</table>";
}
else {
echo "Wrong username or password!";
}

// Query highlight
echo "<br><br>";
echo "SELECT * FROM login WHERE user = '";
echo "<font color='red'>".$user."</font>' AND pass = '<font color='red'>".$pass."</font>';";

?>
