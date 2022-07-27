<?php 
session_start();
include ('database.php');

error_reporting(0);
$_SESSION['singlepid'] = $_GET['id'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--<link type="text/css" rel="stylesheet" href="card.css" --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "navbar.php" ?>
        <?php 
            $id = $_GET['id'];
            $query = "select * from products2 where id='$id'";
            $result = $conn->query($query);
            $data = $result->fetch_assoc();
        ?>
        <div class="container" >
            <div class="row" style="margin-top: 50px; font-family: 'Arima', cursive;">
                <div class="col-md-1"></div>
                <div class="col-md-5" >
                    <p><img class="rounded mx-auto d-block " src="Product_images/<?php echo $data['newproimage']; ?>" class="img-thumbnail" style="max-height: 400px; max-width: 304px; border:none; margin:auto;" /></p>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-5" style="margin-top: 80px; ">
                    <h1 style="text-align:center;"><?php echo $data['model'] ?></h1>
                    <p style="text-align:center;"><?php echo $data['price'] ?></p>
                    <p style="text-align:center;"><?php echo $data['instruments']?></p>
                    <h3 style="font-family: 'Arima', cursive; "><?php echo $data['description']?></h3>
                    <p style="text-align: center;"><a href="#"<button type="button" class="btn btn-outline-info" style="border-radius: 12px; width: 150px; margin: auto;">Buy Now</button></a></p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row" style="font-family: 'Arima', cursive">
                <?php include "comment.php"; ?>
            </div>
        </div>
        <?php include "footer.php" ?>
</body>
</html>
<?php 
$_SESSION['singlepid'] = $_GET['id'];
?>