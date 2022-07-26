<?php
session_start();

include('database.php');
$query = "select * from final where id='$userid' ";
$result = $conn->query($query);
$dataUser = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--<link type="text/css" rel="stylesheet" href="card.css" --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php include('navbar.php'); ?>

    <div class= "container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <img src="Images/kurt.jpg" class="img-thumbnail" />
                <h3><?php echo $dataUser['first_name']; echo " "; echo $dataUser['last_name'] ?></h3>
                <p><?php echo $dataUser['email'] ?></p>
                <p><?php echo $dataUser['username'] ?></p>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    
</body>
</html>