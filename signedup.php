<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address1=$_POST['address1'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'metro_mirchi');

$q = "insert into users (fname,lname,address1,mobile,email,city,state,pincode,password) values('$fname','$lname','$address1','$mobile','$email','$city','$state',$pincode,'$password');";

$status = mysqli_query($con,$q);

mysqli_close($con);

if ($status==1)
    header('location:http://localhost/Metro%20Mirchi/login.html');
    
else
    echo "error occured ! couldn't signed up... try again later";
?>