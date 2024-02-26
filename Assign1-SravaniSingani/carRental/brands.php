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
                <img class="d-block w-100 h-60" src="slide3.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Drive Smart, Travel Happy.</h2>
                    <p>Choose from a curated selection of top-notch brands renowned for their quality and reliability.</p>
                    </div>
                </div>
            </div>
            </div>

        <?php
         $connect = mysqli_connect('sql300.infinityfree.com', 'if0_36051034', 'x5GBOGmlHh ', 'if0_36051034_cars');
         $query = 'SELECT * FROM brands';
         $brands = mysqli_query($connect, $query);

         if(mysqli_connect_error()){
            die("Connection error: " . mysqli_connect_error());
         }

        ?>


    <div class="container">
    <div class="row">


    <?php 

      foreach($brands as $brand){

    echo 
    '
        <div class="col-md-4 mt-2 mb-2">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">'. $brand['brandName'] .'</h5>

                <form method="GET" action="brandcars.php">
                <input type = "hidden" name = "brandID" value = "'. $brand['brandID'] .'">
                <button type="submit" name="brandcars" class="btn btn-sm btn-info">Explore</button>
              </form>
            </div>
            </div>
        </div>


    ';

    }
    
    ?>
    </div>
    </div>
    </div>
</body>
</html>