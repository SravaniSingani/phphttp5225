<?php

if(isset($_POST['updateStudent'])){

   print_r($_POST);
   $id = $_POST['id'];
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $marks = $_POST['marks'];
   $imageURL = $_POST['imageURL'];
 
  include('../includes/connect.php');
 // $query = "ALTER students INTO students (fname, lname, marks, imageURL) VALUES ('$fname', '$lname', '$marks', '$imageURL')";
$query = "UPDATE students SET fname = '$fname', lname = '$lname', marks = '$marks', imageURL = '$imageURL' WHERE id = '$id'";
  $student = mysqli_query($connect, $query);
 
  if($student){
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