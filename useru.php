<?php 
include('ConnectDB.php');
?>

<?php


  if(isset($_POST['submit']))
  {

   $userName = $_POST['userName'];

   $skill = $_POST['skill'];
   $profilpic= $_POST['profilpic'];
   $detail = $_POST['detail'];
   $dp1 = $_POST['dp1'];
   $dp2 = $_POST['dp2'];
   $dp3 = $_POST['dp3'];
   $place=$_POST['place'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   try{

         $query="insert into info(name,skill,photo,det,pica,picb,picc,area,phone,email) values('$userName','$skill','$profilpic','$detail','$dp1','$dp2','$dp3','$place','$phone','$email') ;";


        $conn=$GLOBALS['con'];
        $conn->query($query);

     

   }catch(Exception $ex)
   {
    echo $ex->getMessage();
   }



  }


 $inf = mysqli_query($con , "SELECT * FROM info");

?>