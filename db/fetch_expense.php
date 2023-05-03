<?php
 session_start();
 error_reporting(0);
 $user=$_SESSION['name'];
 $email=$_SESSION['email'];
 $id=$_SESSION['id'];
 $conn=mysqli_connect("localhost","root","","expense");
 $query="SELECT * from register INNER JOIN expenses ON register.id=expenses.id where email='$email'";
 $run=mysqli_query($conn,$query);
 $fetch=mysqli_fetch_assoc($run);

 $rent=$fetch['rent'];
 $groceries=$fetch['groceries'];
 $education=$fetch['education'];
 $electricity=$fetch['electricity'];
 $clothes=$fetch['clothes'];
 $personal=$fetch['personal'];
 $gas=$fetch['gas'];
 $medical=$fetch['medical'];
 $insurance=$fetch['insurance'];
 $transport=$fetch['transport'];
 $income=$fetch['income'];
 $total=$rent+$groceries+$education+$electricity+$clothes+$clothes+$gas+$medical+$insurance+$transport;
 
 if($user==null){
    $user="Guest";
 }
 
?>