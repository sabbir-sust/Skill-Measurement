<?php 
include('ConnectDB.php');
include('ip.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Skill Measurement</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" href="styles/reset.css" rel="stylesheet" media="all" />
<link type="text/css" href="styles/text.css" rel="stylesheet" media="all" />
<link type="text/css" href="styles/960.css" rel="stylesheet" media="all" />
<link type="text/css" href="styles/style.css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="scripts/slideshow.js"></script>
</head>

<style>
body {
    background-color: #181818;
}
</style>

<body>






<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="TimeLine.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TimeLine</a>
    <a href="Users.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Users</a>
    <a href="Login.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right"><span class="glyphicon glyphicon-user">login</a>
    <a href="Signin.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right"><span class="glyphicon glyphicon-log-in">Signin</a>  
  </div> 
</div>


<div>
<h1> </h1>
</div>
<div>
<h1><br> </h1>
</div>


<div class="slider_container">
  <div class="container_12 slider_highlight">
    <div id="slideshow">
      <div id="slidesContainer">
        <div class="slide"> <img src="images/0.jpg" alt="" class="main_image" />
          <h2>Post </h2>
          <p>Donec in adipiscing odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Cras euismod gravida ornare. Phasellus ac ligula mi. Fusce sem purus, rhoncus et volu
           tpat quis, aliq uam vitae quam. Nulla vestibulum arcu in nisl bibendum ut posuere sap
           ien lacinia.Fusce sed odio at risus rhoncus consectetur sed ut magna. Lorem ipsum dol
           or sit amet, consectetur adipiscing elit. </p>
          
        </div>
        <div class="slide"> <img src="images/0.jpg" alt="" class="main_image" />
          <h2>Post Zero</h2>
          <p>Donec in adipiscing odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Cras euismod gravida ornare. Phasellus ac ligula mi. Fusce sem purus, rhoncus et vol
            utpat quis, aliq uam vitae quam. Nulla vestibulum arcu in nisl bibendum ut posuere s
            apien lacinia.Fusce sed odio at risus rhoncus consectetur sed ut magna. Lorem ipsum 
            dolor sit amet, consectetur adipiscing elit. </p>
          
        </div>
        <div class="slide"> <img src="images/0.jpg" alt="" class="main_image" />
          <h2>Post One</h2>
          <p>Donec in adipiscing odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Cras euismod gravida ornare. Phasellus ac ligula mi. Fusce sem purus, rhoncus et vol
           utpat quis, aliq uam vitae quam. Nulla vestibulum arcu in nisl bibendum ut posuere s
           apien lacinia.Fusce sed odio at risus rhoncus consectetur sed ut magna. Lorem ipsum d
           olor sit amet, consectetur adipiscing elit. </p>
          
        </div>
        <div class="slide"> <img src="images/0.jpg" alt="" class="main_image" />
          <h2>Post Two</h2>
          <p>Donec in adipiscing odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Cras euismod gravida ornare. Phasellus ac ligula mi. Fusce sem purus, rhoncus et vol
            utpat quis, aliq uam vitae quam. Nulla vestibulum arcu in nisl bibendum ut posuere sa
            pien lacinia.Fusce sed odio at risus rhoncus consectetur sed ut magna. Lorem ipsum do
            lor sit amet, consectetur adipiscing elit. </p>

        </div>


        <div class="slide"> <img src="images/0.jpg" alt="" class="main_image" />
          <h2>Post Three</h2>
          <p>Donec in adipiscing odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Cras euismod gravida ornare. Phasellus ac ligula mi. Fusce sem purus, rhoncus et vol
            utpat quis, aliq uam vitae quam. Nulla vestibulum arcu in nisl bibendum ut posuere sa
            pien lacinia.Fusce sed odio at risus rhoncus consectetur sed ut magna. Lorem ipsum dol
            or sit amet, consectetur adipiscing elit. </p>
          
        </div>


      </div>
    </div>
  </div>
</div>





<div class="content_container">
  <div class="container_12 content_highlight">
    <div class="grid_3">
      <h2>Post Types</h2>
      <a href="#" class="list-group-item list-group-item-dark">Graphics & Design</a>
      <a href="#" class="list-group-item list-group-item-dark">Digital Marketing</a>
      <a href="#" class="list-group-item list-group-item-dark">Writing & Translation</a>
      <a href="#" class="list-group-item list-group-item-dark">Video & Animation</a>
      <a href="#" class="list-group-item list-group-item-dark">Music & Audio</a>
      <a href="#" class="list-group-item list-group-item-dark">Programming & Tech</a>
      <a href="#" class="list-group-item list-group-item-dark">Business</a>
      <a href="#" class="list-group-item list-group-item-dark">Fun & Lifestyle</a>
    </div>



    <div class="grid_8">
      <h2>ALL Posts</h2>



<?php

  while ($rows = mysqli_fetch_array($posts))
    { 
?>
    <div class="post">
        <div class="thumbnail"><a href="#"><img src="images/0.jpg" alt="" /></a></div>
        <h3><?php echo $rows['name']; ?></h3>
        <p><?php echo $rows['post'];?></p>
        <div class="post_footer">
          <br>
          <button type="button" class="btn btn-primary">Interested</button>
        </div>
        <div class="clear"></div>
      </div>
      <div class="divider"></div>
    <div class="footer_container"> </div>
<?php 
   } 
?>


</html>
