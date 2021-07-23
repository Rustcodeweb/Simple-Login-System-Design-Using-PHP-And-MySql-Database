<?php
$email=$_POST['email'];
$password=$_POST['password'];


$con=mysqli_connect('localhost','root','','logindemo');
$q="Select * from user where email='$email' && password='$password'";
$result=mysqli_query($con,$q);
$n=mysqli_num_rows($result);
if($n==1){
	header('location:home.html');
}
else{
	header('location:error.html');
}
?>