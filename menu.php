<?php

session_start();

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'metro_mirchi');

$query = "select * from menu;";
 

//menu table
$result = mysqli_query($con,$query);
$rows = mysqli_num_rows($result);  


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
    margin-top: 10px;
    margin-bottom: 12px;
/*    text-align: center;*/
    background-color: #f0f0f0;
    padding: 20px;
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
               <li><a href="index.html" >Home</a></li>
               <li><a href="menu.php" class="active">Menu</a></li>
               <li><a href="about.html">About</a></li>
           </ul>
           </div>
       </nav>
        
  </header>
   
  
  <!--    loop starts here-->
  <?php
   for($i=1;$i<=$rows;$i++){
       $menu = mysqli_fetch_array($result);
    ?>

    <div class="container card">
        <div class="row list">
            <div class="col-4">
               
                <img src="<?php echo $menu['image_location'] ?>" alt="Dish image" class="img-fluid" onerror=" this.src = 'images/no-featured-175.jpg';">
            
            </div>
            <div class="col-8">
               
               
                <div class="row">
                  <div class="col-12 product-title"><a href="item.php?id=<?php echo $menu['mid']; ?>" style="color:black; text-decoration: none;"><h3><?php echo ucwords($menu['items']); ?></h3></a>
                  </div>
                </div>
                <div class="row"><div class="col-12 description"><p><?php echo $menu['description']; ?></p></div></div>
                <div class="row">
                  <div class="col-6 float-right">Price</div>
                  <div class="col-6" style="color: green;"><?php echo $menu['price'] ?></div>
                </div>
                <div class="row"><div class="col-12">
                  <img src="" alt="">
                </div></div>
            </div>
        </div>
    </div>
    
    <?php }; ?>
    <!--    loop ends here-->

 





  <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-6"><p><strong>Come Visit Us</strong><br>Khazanchi Road <br>Ashok Rajpath <br>Patna</p></div>
            <div class="col-6"><p><b>Opening Hours</b><br>Opens at <br>12.00PM <br>Closes at <br>10.00PM</p></div>
        </div>
  </footer>
    
    
</body>
</html>


