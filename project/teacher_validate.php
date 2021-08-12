<?php


session_start();
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['usname']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass

$hash = password_hash($pass, PASSWORD_DEFAULT);

 $usname=$_POST['usname'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "educo");
 //sql query to fetch information of registerd user and finds user match.


 /*$query = mysqli_query($conn, "SELECT * FROM uname WHERE   usname='$usname' and pass='$pass' ");
 
 $rows = mysqli_num_rows($query);

 if($rows == 1){
 header("Location: index.php"); // Redirecting to other page
 }
 else
 {
 header("Location: index0.php"); 
 
 }
 mysqli_close($conn); // Closing connection
}
}*/



$query = mysqli_query($conn, "SELECT * FROM teacher WHERE user_name='$usname' and password='$pass' ");
 while ($row= mysqli_fetch_array($query)) {
 	# code...
 	$_SESSION['usname'] = $row['user_name'];
 	$_SESSION['pass'] = $row['password'];
 }

if($_SESSION['usname'] !== $usname && $_SESSION['pass'] !== $pass){
	header("Location: teachers_login.php");

}else if($_SESSION['usname'] == $usname && $_SESSION['pass'] == $pass){
	header("Location: teachers_profile.php");
}else{
	header("Location: teachers_login.php");
}
}

}

?>