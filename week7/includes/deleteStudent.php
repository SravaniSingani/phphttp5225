<?php

if(isset($_GET['delete'])){

   
   $id = $_GET['id'];
  
 
  include('../includes/connect.php');
  $query = "DELETE FROM students WHERE `id` = '$id'";
  $student = mysqli_query($connect, $query);
 
  if($student){
     header("Location: ../index.php");
 
  }
  else {
     echo "Failed" . mysqli_error($connect);
  }

}

else{
    echo "YOu should not be here!";
   }


?>