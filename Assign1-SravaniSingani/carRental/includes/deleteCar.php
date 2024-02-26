<?php

if(isset($_GET['delete'])){

   
   $id = $_GET['carID'];
  
 
  include('../includes/connect.php');
  $query = "DELETE FROM cars WHERE `carID` = '$id'";
  $car = mysqli_query($connect, $query);
 
  if($car){
     header("Location: ../index.php");
 
  }
  else {
     echo "Failed" . mysqli_error($connect);
  }

}

else{
    echo "You should not be here!";
   }


?>