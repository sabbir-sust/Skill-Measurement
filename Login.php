<?php include 'ConnectDB.php';?>

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
<link type="text/css" href="styles/login.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="scripts/slideshow.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Caesar Dressing' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Condiment' rel='stylesheet'>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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





<div class="bod">

<div class="container">
  <h1>WELCOME  TO </h1>
    <h2>SKILL MEASUERMENT</h2>
  <div class="gap">
    
  </div>
  
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">User Name:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter User Name" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
    



</div>



<div class="footer_container">

</div>




</html>
