<?php

if(isset($_POST['addCars'])){

   print_r($_POST);
   $brandID = $_POST['brandID'];
   $model = $_POST['model'];
   $year = $_POST['year'];
   $rentalRate = $_POST['rentalRate'];
   $imageURL = $_POST['imageURL'];
 
  include('../includes/connect.php');
  $query = "INSERT INTO cars (brandID, model, year, rentalRate, imageURL) VALUES ('$brandID', '$model', '$year', '$rentalRate', '$imageURL')";

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