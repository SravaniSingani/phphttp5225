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

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-5 mt-4 mb-4">DriveEasy</h1>
        </div>
    </div>

    <div class="container">
    <div class="row">

    <?php
    if (isset($_GET['brandID'])) {
        $id = $_GET['brandID'];
        $connect = mysqli_connect('sql300.infinityfree.com', 'if0_36051034', 'x5GBOGmlHh ', 'if0_36051034_cars');
        $query = "SELECT c.carID, b.brandName, c.model, c.year, c.rentalRate, c.imageURL FROM cars c JOIN brands b ON c.brandID = b.brandID WHERE b.brandID = '$id'";
        $cars = mysqli_query($connect, $query);

        if ($cars) {
            foreach ($cars as $car) {
                echo '
                <div class="col-md-4 mt-2 mb-2">
                 <div class="card ">
                        <img class="card-img-top" height="300" src="' . $car['imageURL'] . '" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">' . $car['model'] . '</h5>
                          <h6 class="card-title">' . $car['brandName'] . '</h6>
                            <p> Year: ' . $car['year'] . '</p>
                            <h5> Price: $' . $car['rentalRate'] . '</h5>
                        </div>
                        <div class="card-footer">
                         <form method="GET" action="update.php">
                                <input type="hidden" name="carID" value="' . $car['carID'] . '">
                                <button type="submit" name="edit" class="btn btn-sm btn-info">Edit</button>
                            </form>
                       <form method="GET" action="includes/deleteCar.php" class="text-right">
                                <input type="hidden" name="carID" value="' . $car['carID'] . '">
                                <button type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                     </div>
                    </div>
                </div>';
            }
        } else {
            echo '<div class="col"><p>No cars available for this brand.</p></div>';
        }
    }
    ?>

</div>

</body>
</html>