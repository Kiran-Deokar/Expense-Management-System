<?php
$conn=mysqli_connect("localhost","root","","expense");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$query="INSERT INTO register VALUES('','$name','$email','$password')";
$query1="INSERT INTO expenses VALUES()";
$run=mysqli_query($conn,$query);
$run1=mysqli_query($conn,$query1);
if($run){
   header("location:../src/login.php");
}
?>