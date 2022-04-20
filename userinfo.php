<?php 

 $con = mysqli_connect('localhost','root');

 if($con){
 	echo "Connection successful";
 }else{
 	echo "No  Connection";
 }

mysqli_select_db($con,'clients');

$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$comments =$_POST['comments'];

$query ="insert into userinfodata (user, email, password, mobile, comments) values('$user','$email','$password','$mobile','$comments')";

echo "$query";

mysqli_query($con, $query);

header('location:project.php');

 ?>