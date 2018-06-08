<?php 
include('ConnectDB.php');
include('useru.php');
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
h1{

  text-align: center;
  color: white;
  font-family: 'Caesar Dressing';
  font-size: 80px;
  margin-top: 50px;
}
h2{

  text-align: center;
  color: white;
  font-family: 'Condiment';
  font-size: 50px;
}

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



<div class="container">
<!-- Team Container -->
<div class="container-fluid bg-3 text-center">    
  <br>
  <div class="row">


  <?php 
      while ($row = mysqli_fetch_array($inf))
        { 
  ?> 
    <div class="col-sm-3">

      <?php
      echo "<img src='".$row['photo']."' class='img-circle' alt='Bird' width='200' height='200'>";
      ?>
      <p><a  href="<?php echo 'profile.php?id='.$row['id']; ?>"><?php echo $row['name']; ?></a></p>
    </div>

     <?php
   }
   ?>


  </div>
</div>


</div>
    







<div class="footer_container">

</div>




</html>
