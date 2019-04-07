<?php

session_start();

if(!isset($_SESSION['userid'])){
    header('location:http://localhost/Metro%20Mirchi/login.html');
}

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'metro_mirchi');

$q = "select * from users where mobile=".$_SESSION['userid'].";";

$result = mysqli_query($con,$q);
//$rows = mysqli_num_rows($result);

$userdata = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!--    favicon-->
    <link rel="icon" href="images/pidilite_logo.png" type="image/png" >
    
<!--    font awesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
<!--    bootstrap css-->
   <link rel="stylesheet" href="css/bootstrap.css">
    
    
<!--    main.css-->
   <link rel="stylesheet" href="css/main.css">

   <style>
     .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 500px;
    margin-top: 5px;
    margin-bottom: 5px;
    background-color: #f0f0f0;
    padding: 90px 20px;
}
   </style>
    
    <title>Metro Mirchi | Khazanchi</title>
</head>
<body>
   
   <header class="container-fluid">
        <div class="row">
        <div class="col-11"><h2><a href="index.html">Metro Mirchi <i class="fas fa-utensils"></i></a></h2></div>
        <div class="col-1"><a href="userprofile.php"><i class="fas fa-user-alt float-right"></i></a></div>
        </div>
       <nav class="row">
          <div class="col-12">
           <ul>
               <li><a href="index.html" class="active">Home</a></li>
               <li><a href="menu.php">Menu</a></li>
               <li><a href="about.html">About</a></li>
           </ul>
           </div>
       </nav>
        
    </header>
   
  
 	 <div class="container card text-center">
      <div class="row"><div class="col-12"><img src="images/placeholder_square_blank_profile.jpg" height="100px" width="100px" alt="" class="user-avatar"></div></div>
      
      <div class="row user-name"><div class="col-12"><h3><?php echo $userdata['fname'] ?></h3></div></div>
      
      <div class="row user-email"><div class="col-12"><?php echo $userdata['email'] ?></div></div>
      
      <div class="row user-mobile"><div class="col-12"><?php echo $userdata['mobile'] ?></div></div>
      
      <div class="row user-address"><div class="col-12"><?php echo $userdata['address1'] ?></div></div>
      
      <div class="row user-city"><div class="col-12"><?php echo $userdata['city'] ?></div></div>
      
      <div class="row user-pincode"><div class="col-12"><?php echo $userdata['pincode'] ?></div></div>
      
      <div class="row user-state"><div class="col-12"><?php echo $userdata['state'] ?></div></div>
      
      <div class="row">
            <div class="col"><a href="logout.php" class="btn btn-secondary logout-btn float-right" >Log out</a></div>
      </div>
  </div>





    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-6"><p><strong>Come Visit Us</strong><br>Khazanchi Road <br>Ashok Rajpath <br>Patna</p></div>
            <div class="col-6"><p><b>Opening Hours</b><br>Opens at <br>12.00PM <br>Closes at <br>10.00PM</p></div>
        </div>
    </footer>
    
    
</body>
</html>


