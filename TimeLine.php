<?php 
include('ConnectDB.php');

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
<link type="text/css" href="styles/Signin.css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="scripts/slideshow.js"></script>
<link href='https://fonts.googleapis.com/css?family=Caesar Dressing' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Condiment' rel='stylesheet'>
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



  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-lg-3" for="email">Post:</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  placeholder="Your Post" name="postt">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-3" for="email">Name:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="name" placeholder="Your name">
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Type:</label>
      <div class="col-sm-7">          
        <input type="text" class="form-control" placeholder="Post Type" name="type">
      </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-8">
        <input type="submit" class="btn btn-default"  name="submit"/>
      </div>
    </div>
  </form>

<br>
<br>



<?php

 if(isset($_POST['submit']))
 {

   $postt = $_POST['postt'];
   $name = $_POST['name'];
   $type=$_POST['type'];
   
    
    $query="insert into post(post,name,type) values('$postt','$name','$type') ;";


    try{

    $conn = $GLOBALS['con'];

     $result= $conn->query($query);

      #header("Location : update.php"); 

    }
    catch(Exception $ex)
    {
         echo $ex->getMessage();
    }

 }

 $posts = mysqli_query($con , "SELECT * FROM post");

?>

  <?php 
      while ($post = mysqli_fetch_array($posts))
        { 
  ?>

<div class="content_container">
  <div class="container_12 content_highlight">

    <div class="grid_12">    
      <div class="post">
        <div class="thumbnail"><a href="#">
 
          <img src="images/0.jpg" alt="" /></a>

          </div>
        <h3><?php echo $post['name']; ?>.</h3>
        
        <p><?php echo $post['post'];?></p>
        

        <div class="post_footer">  
           <br>
          <button type="button" class="btn btn-primary">Interested</button>
          <div class="more"><a href="#">Read more</a></div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="divider"></div>

  <?php 
      }
  ?>


  </div>
</div>



<div class="footer_container">

</div>

</html>
