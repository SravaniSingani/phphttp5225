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
                <h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
            </div>
        </div>

        <?php
        $id = $_GET['id'];
         $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
         $query = "SELECT * FROM students WHERE `id` = '$id'";
         $student = mysqli_query($connect, $query);

        $result = $student -> fetch_assoc();

        ?>


        <div class="row">
            <div class="col">

        <form action="includes/updateStudent.php" method="POST">
        <input type="hidden" name="id" value ="<?php echo $result['id'];?>">
          <div class="mb-3">
            <label for="fname" class="form-label">First name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $result['fname']; ?>" aria-describedby="First Name">
          </div>

          <div class="mb-3">
            <label for="lname" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $result['lname']; ?>"  aria-describedby="Last Name">
          </div>

          <div class="mb-3">
            <label for="marks" class="form-label">Marks</label>
            <input type="text" class="form-control" id="marks" name="marks" value="<?php echo $result['marks']; ?>"  aria-describedby="Marks">
          </div>

          <div class="mb-3">
            <label for="imageURL" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="imageURL" name="imageURL" value="<?php echo $result['imageURL']; ?>"  aria-describedby="Image URL">
          </div>

          <button type="submit" name="updateStudent" class="btn btn-primary" >Submit</button>
        </form>
     </div> 
    </div>

    </div>
</body> 
</html>   