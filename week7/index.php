<?php
include('includes/functions.php');
include('includes/connect.php');

if(isset($_POST['login'])){

    $query = 'SELECT *
              FROM users
              WHERE email = "'. $_POST['email'] .'"
              AND password = "'. md5($_POST['password']) .'"
              LIMIT 1';
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result)){
$record = mysqli_fetch_asssoc($result);
$_SESSION['id'] = $record['id'];
header('Location: admin/index.php');
die();
}
else{
    set_message('Incorrect username/password');
    header('Location: index.php');
    die();
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo get_message(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-4 mb-4">Login</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="Password">
            </div>
            <div class="mb-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="addUser" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>

        <?php
         $connect = mysqli_connect('localhost', 'root', 'root', 'HTTP5225');
         $query = 'SELECT id, fname, lname, marks, grade, imageURL FROM students';
         $students = mysqli_query($connect, $query);

         if(mysqli_connect_error()){
            die("Connection error: " . mysqli_connect_error());
         }

        ?>


    <div class="container">
    <div class="row">

    <?php 

 
    
    ?>
    </div>
    </div>
    </div>
</body>
</html>