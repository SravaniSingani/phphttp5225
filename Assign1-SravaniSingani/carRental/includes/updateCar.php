<?php

if(isset($_POST['updateCar'])){

   print_r($_POST);
   $id = $_POST['carID'];
   $brandID = $_POST['brandID'];
   $model = $_POST['model'];
   $year = $_POST['year'];
   $rentalRate = $_POST['rentalRate'];
   $imageURL = $_POST['imageURL'];
 
  include('../includes/connect.php');
 // $query = "ALTER students INTO students (fname, lname, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL')";
//$query = "UPDATE students SET fname = '$fname', lname = '$lname', marks = '$marks', imageURL = '$imageURL' WHERE id = '$id'";
$query = "UPDATE cars SET brandID = '$brandID', model = '$model', year = '$year', rentalRate= '$rentalRate' , imageURL = '$imageURL' WHERE carID = '$id'";
//UPDATE cars SET brandID = 4, model = 'testedit', year = 2024, rentalRate= 55.55 , imageURL = 'testUrl' WHERE carID = 4; 

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