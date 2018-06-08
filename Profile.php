<?php include 'ConnectDB.php';?>

<!DOCTYPE html>
<html>
<title>Skill Measurement</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">



<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>


<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">


<?php 

  

   if(isset($_GET['id'])){

     $id=$_GET['id'];
     $query ="SELECT * FROM info where id=".$id;
try{


    $result = mysqli_query($GLOBALS['con'],$query);
     $row=mysqli_fetch_assoc($result);

?>



    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm </span><?php  echo $row['name'] ; ?></h1>
    <p><?php  echo $row['skill'] ; ?></p>
      
      <?php
      echo "<img src='".$row['photo']."' class='w3-image' alt='Bird' width='350' height='250'>";
      ?>



  </header>

   <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">My Details</h2>
    <hr style="width:200px" class="w3-opacity">
    <p><?php  echo $row['det'] ; ?></p>


      <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Demo Pkoto</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
      <?php
      echo "<img src='".$row['pica']."' class='w3-image' alt='Bird' width='300' height='200'>";
      ?>
            <?php
      echo "<img src='".$row['picb']."' class='w3-image' alt='Bird' width='300' height='200'>";
      ?>
            <?php
      echo "<img src='".$row['picc']."' class='w3-image' alt='Bird' width='300' height='200'>";
      ?>
      </div>


    <!-- End photo grid -->
    </div>


  <!-- End Portfolio Section -->
  </div>
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Address :<?php  echo $row['area'] ; ?></p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: <?php  echo $row['phone'] ; ?></p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: <?php  echo $row['email'] ; ?></p>
    </div><br>



<?php

     

}catch(Exception $ex)
{
  echo $ex-getMessage();
}

   }


 




?>







  



  
  
    <!-- Footer -->
 
     
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
