<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rentals</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>


    <?php include ('reusables/nav.php') ?>



<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slide1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h2>Unlock Your Next Adventure with Us</h2>
        <p>Join thousands of satisfied customers who trust us for their car rental needs.</p>
        </div>
    </div>
  </div>
</div>


    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">DriveEasy</h1>
            </div>
        </div>

        <?php
         $connect = mysqli_connect('sql300.infinityfree.com', 'if0_36051034', 'x5GBOGmlHh ', 'if0_36051034_cars');
         $query = 'SELECT c.carID, b.brandName, c.model, c.year, c.rentalRate, c.imageURL FROM cars c JOIN brands b ON c.brandID = b.brandID;';
         $cars = mysqli_query($connect, $query);

         if(mysqli_connect_error()){
            die("Connection error: " . mysqli_connect_error());
         }

        ?>


    <div class="container">
    <div class="row">

    <?php 

      foreach($cars as $car){

    echo 
    '<div class="col-md-4 mt-2 mb-2">
      <div class="card ">

     
       <img class="card-img-top" height="300" src="'. $car['imageURL'] . '" alt="Card image cap">
       <div class="card-body">
         <h5 class="card-title">'. $car['model'] . '</h5>
         <h6 class="card-title">'. $car['brandName'] .'</h6>
         <p> Year: '. $car['year'] .'</p>
         <h5> Price: $'. $car['rentalRate'] .'</h5>
       </div>


       <div class="card-footer">

        <form method="GET" action="update.php">
          <input type = "hidden" name = "carID" value = "'. $car['carID'] .'">
          <button type="submit" name="edit" class="btn btn-sm btn-info">Edit</button>
        </form>

        <form method="GET" action="includes/deleteCar.php" class="text-right">
          <input type = "hidden" name = "carID" value = "'. $car['carID'] .'">
          <button type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
        </form>
       </div>

      </div>
    </div>';

    }
    
    ?>
    </div>
    </div>
    </div>
</body>
</html>