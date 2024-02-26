<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php include ('reusables/nav.php') ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Car Rentals</h1>
            </div>
        </div>

        <?php
         $id = $_GET['carID'];
         $connect = mysqli_connect('sql300.infinityfree.com', 'if0_36051034', 'x5GBOGmlHh ', 'if0_36051034_cars');
         $query = "SELECT  c.carID,
         b.brandID,
         b.brandName,
         c.model,
         c.year,
         c.rentalRate,
         c.imageURL FROM cars c JOIN 
         brands b ON c.brandID = b.brandID WHERE `carID` = '$id'";

         $car = mysqli_query($connect, $query);
        // $result = $car -> fetch_assoc();

         $query_brands = "SELECT * FROM brands";
         $brands_result = mysqli_query($connect, $query_brands);

         if ($car && $brands_result) {
          $result = mysqli_fetch_assoc($car); 
          $brands = mysqli_fetch_all($brands_result, MYSQLI_ASSOC); 
      } else {
          echo "Failed to fetch: " . mysqli_error($connect);
      }

        ?>


        <div class="row">
            <div class="col">


        <form action="includes/updateCar.php" method="POST">
        <input type="hidden" name="carID" value = "<?php echo $result['carID'];?>">

          <div class="mb-3">
            <label for="brandID" class="form-label">Brand ID</label>
            <select class="form-select" id="brandID" name="brandID"  aria-describedby="Brand ID">
            <?php foreach ($brands as $brand): ?>
                            <option value="<?php echo $brand['brandID']; ?>"><?php echo $brand['brandName']; ?></option>
             <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="<?php echo $result['model']; ?>" aria-describedby="Model">
          </div>

          <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" value="<?php echo $result['year']; ?>" aria-describedby="Year">
          </div>

          <div class="mb-3">
            <label for="rentalRate" class="form-label">Rental Rate</label>
            <input type="text" class="form-control" id="rentalRate" name="rentalRate" value="<?php echo $result['rentalRate']; ?>" aria-describedby="Rental Rate">
          </div>

          <div class="mb-3">
            <label for="imageURL" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="imageURL" name="imageURL" value="<?php echo $result['imageURL']; ?>"  aria-describedby="Image URL">
          </div>

          <button type="submit" name="updateCar" class="btn btn-primary" >Submit</button>
        </form>

     </div> 
    </div>

    </div>
</body> 
</html>   