<?php
 session_start();
 if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $conn=mysqli_connect("localhost","root","","expense");
  $query="SELECT * FROM register where email='$email'";
  $run=mysqli_query($conn,$query);
  $row = mysqli_num_rows($run);
  if($row !=0){
      $fetch=mysqli_fetch_assoc($run);
      if($password==$fetch['password']){
          $_SESSION['name']=$fetch['name'];
          $_SESSION['email']=$fetch['email'];
          $_SESSION['id']=$fetch['id'];
          header('location:../src/index.php');
        }
      else{
          echo "Enter Correct Password";
      }
     }else{
             echo "User Not Found";
         }
 }
?>