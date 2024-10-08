<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:loginf.php');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PetSave</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Petsave</header>
      <ul>
         <li><a href="index.php"><i class="fas fa-qrcode"></i>Home</a></li>
         <li><a href="findpets.php"><i class="fas fa-stream"></i>Find Pets</a></li>
         <li><a href="new_pets.php"><i class="fas fa-calendar-week"></i>New Pets</a></li>
         <li><a href="services.php"><i class="fas fa-sliders-h"></i>Services</a></li>
         <li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
    </ul>
   </div>

   <section>
   <div class="container">

<div class="content">
   <h3>hi, <span>user</span></h3>
   <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
   <a href="logout.php" class="btn">logout</a>
</div>

</div>

   </section>
   <div>
  </body>
</html>