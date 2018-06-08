<?php 
include('ConnectDB.php');
?>

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
      $posts = mysqli_query($conn , "SELECT * FROM post");

      #header("Location : update.php"); 

    }
    catch(Exception $ex)
    {
         echo $ex->getMessage();
    }

 }



?>