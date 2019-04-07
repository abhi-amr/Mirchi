<?php

session_start();

$mobile = $_POST['mobile'];
$password = $_POST['password'];

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'metro_mirchi');

$q = "select * from users where mobile='$mobile' && password='$password'";
$result = mysqli_query($con,$q);
$rows = mysqli_num_rows($result);

$userdata = mysqli_fetch_array($result);

if($rows==1){
    
    $_SESSION['username'] = $userdata['fname'];
    $_SESSION['userid'] = $userdata['mobile'];
    $_SESSION['usercode'] = $userdata['cid'];

    header('location:http://localhost/Metro%20Mirchi/index.html');
}

else {
    header('location:http://localhost/Metro%20Mirchi/login.html');
}

?>