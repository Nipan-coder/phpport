<?php

$con=mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}
else{
    echo "connection not successful";
}

mysqli_select_db($con, 'nipanphpsite');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query= "INSERT INTO userinfodata( user, email, mobile, comments) VALUES ('$user', '$email', '$mobile', '$comments')";

mysqli_query($con, $query);

header('location:index.php');

?>