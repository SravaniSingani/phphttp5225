<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<?php include ('reusables/nav.php') ?>

        <?php
         $connect = mysqli_connect('sql300.infinityfree.com', 'if0_36051034', 'x5GBOGmlHh ', 'if0_36051034_cars');
         $query = "SELECT * FROM brands";
         $brands = mysqli_query($connect, $query);

      //  $result = $brands -> fetch_assoc();

        ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Add Car</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">

        <form action="includes/addCars.php" method="POST">

          <div class="mb-3">
            <label for="brandID" class="form-label">Brand ID</label>
            <select class="form-select" id="brandID" name="brandID" aria-describedby="Brand ID">
            <?php foreach ($brands as $brand): ?>
                            <option value="<?php echo $brand['brandID']; ?>"><?php echo $brand['brandName']; ?></option>
             <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" aria-describedby="Model">
          </div>

          <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="text" class="form-control" id="year" name="year" aria-describedby="Year">
          </div>

          <div class="mb-3">
            <label for="rentalRate" class="form-label">Rental Rate</label>
            <input type="text" class="form-control" id="rentalRate" name="rentalRate" aria-describedby="Rental Rate">
          </div>

          <div class="mb-3">
            <label for="imageURL" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Image URL">
          </div>

          <button type="submit" name="addCars" class="btn btn-primary" >Submit</button>
        </form>
     </div> 
    </div>

    </div>
</body> 
</html>   