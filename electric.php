<?php
session_start();
include ('database.php');
error_reporting(0);
ini_set('display_errors', 0);
$userid = $_SESSION['userid'];
$query = "SELECT * FROM final2 WHERE id='$userid'";
$result = $conn->query($query);
$userdata = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--<link type="text/css" rel="stylesheet" href="card.css" --> 
    <title>Products</title>
    <link rel="stylesheet" href="responsive.css" type="text/css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Splash&display=swap" rel="stylesheet">

</head>
<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="row" style="background-color: white" >

        <?php 
            
        ?>
        <?php 
            $pro = "SELECT * FROM products2 P WHERE P.instruments = 'Electric Guitar'";
            $result = $conn->query($pro);
            while($data = $result->fetch_assoc()){ ?>
            
                <div class="col-md-3" style="font-family: 'Oswald', sans-serif; text-align: center;  margin-top: 20px;" >
                <div class="card">
                <a href="singleprodisp.php?id=<?php echo $data['id'] ?>"><p><img src="Product_images/<?php echo $data['newproimage']; ?>" class="img-thumbnail" style="max-height: 400px; border:0px;" /></p></a>
                <a href="singleprodisp.php?id=<?php echo $data['id'] ?>" style="text-decoration: none; color:black;"><h2><?php echo $data['model'] ?></h2></a>
                <p><?php echo $data['price'] ?></p>
                <p><?php echo $data['instruments']?></p>
                <a href="#"<button type="button" class="btn btn-outline-info">Add to Cart</button></a>
                

                <?php if($userdata['admin'] == 1) { ?>
                <a href="action.php?product_del_id=<?php echo $data['id'];?>" style="text-decoration: none;">Delete</a>
                <a href="update.php?id=<?php echo $data['id']; ?>" style="text-decoration: none;">Update</a>
                <?php } ?>
                
                
                
            </div>
            </div>
            <?php
            }
            ?>
            
        
        
        </div>
    </div>
    <?php include "footer.php" ?>
    
</body>
</html>
