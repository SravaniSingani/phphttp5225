<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-3 mb-3">Company Catalogue</h1>
            </div>
       </div>
    </div>
</div>
<div class="container-fluid">
        <div class="row">

    <?php
      function getUsers(){
        $url = "https://jsonplaceholder.typicode.com/users";
        $data = file_get_contents($url);
        return json_decode($data, true);
      }
      $users = getUsers();
      

     for($i = 0; $i < 10; $i++){
        echo '
<div class="col-md-4">      
<div class="card">
  <div class="card-body">
    <h5 class="card-title">'. $users[$i]['name'] . '</h5>
    <h6 class="card-subtitle"> <strong>Username:</strong> '. $users[$i]['username'] . '</h5>
    <p class="card-text"><strong>Address:</strong> ' . $users[$i]['address']['street'].', '. $users[$i]['address']['suite'].', '. $users[$i]['address']['city']. '</p>
    <a href="#" class="btn btn-primary">'. $users[$i]['email'] .'</a>
  </div>
</div>
</div>';
     }
    
    ?>
<div>
<div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>