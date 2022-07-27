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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--<link type="text/css" rel="stylesheet" href="card.css" --> 
    <link type="text/css" rel="stylesheet" href="start.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GXC Guitars</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Splash&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

</head>
<body>
    <?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                </div>
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Images/slide1.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/slide2.jpg" class="d-block w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="Images/slide3.jpg" class="d-block w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style= "margin-top: 10px;">
                <div class="col-md-4" >
                    <div class="col-md-12" style= "position: relative;">
                        <a href="acoustic.php"><img class="responsive-image" src="Images/left.jpg"/></a>
                        <a href="acoustic.php"><button class="btn" style="position: absolute; top: 320px; left: 102px; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #a83232; color: white; font-size: 16px; padding: 12px 24px; border: none; cursor: pointer; border-radius: 5px;">Our Flagship Products</button>         
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12" style="position:relative;">
                    <a href="electric.php"><img class="responsive-image" src="Images/middle.jpg"/></a>
                    <a href="electric.php"><button class="btn"  style="position: absolute; top: 320px; left: 94px; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #a83232; color: white; font-size: 16px; padding: 12px 24px; border: none; cursor: pointer; border-radius: 5px;">Electrics And Basses</button>
                    </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12" style="position:relative;">
                        <a href="nothing.php"><img class="responsive-image" src="Images/right.jpg"/></a>
                        <a href="nothing.php"><button class="btn" style="position: absolute; top: 320px; left: 72px; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #a83232; color: white; font-size: 16px; padding: 12px 24px; border: none; cursor: pointer; border-radius: 5px;" >Special Offers</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="background-color: white; margin-top: 20px;">
                <p style="margin-left:10px; font-size:30px; font-family: 'Roboto Condensed', serif; color: red;">NEW ARRIVALS</p>
            </div>
        <div>
        <div class="container">
        <div class="row" style="background-color: white" >
        <?php 
            $pro = "SELECT * FROM products2 P WHERE P.instruments = 'New Arrivals'";
            $result = $conn->query($pro);
            while($data = $result->fetch_assoc()){ ?>
                <div class="col-md-3" style="font-family: 'Oswald', sans-serif; text-align: center;  " >
                <div class="card">
                    <div class="card bg-danger text-white mx-auto" style="width: 55px; height: 35px;"><p>New</p></div>
                <a href="singleprodisp.php?id=<?php echo $data['id'] ?>"><p><img src="Product_images/<?php echo $data['newproimage']; ?>" class="img-thumbnail" style="height: 400px; border:0;" /></p></a>
                <a href="singleprodisp.php?id=<?php echo $data['id'] ?> " style="text-decoration: none; color: black;"><p><?php echo $data['model'] ?><p></a>
                <?php
                    if($userdata['admin'] == 1) { ?>
                    <a href="action.php?product_del_id=<?php echo $data['id'];?>" style="text-decoration: none;" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </br>
                    <a href="update.php?id=<?php echo $data['id']; ?>" style="text-decoration: none;">Update</a>
                <?php } ?>
                </div>
                </div>
            <?php
            }
            ?>
        </div>
        </div>
        </div>
        </div>
        <div class="container">
            <div class="row" style= "margin-top: 20px;">
                <div class="col-md-6">
                    <div class="col-md-12" style= "position: relative;">
                        <a href="#"><img class="responsive-image-footer" src="Images/left.png"/></a>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="col-md-12" style= "position: relative;">
                        <a href="#"><img class="responsive-image-footer" src="Images/right.png"/></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row" style="background-color: white; margin-top: 20px;">
                <p style="margin-left:10px; font-size:30px; font-family: 'Roboto Condensed', sans-serif; color: Black; text-align: center;">Video Reviews</p>
            </div>
        <div>
        <div class="container">
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-4">
                    <div class="col-md-12">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/eCt827MiHUg" title="MANTRA GUITAR | PRAKRITI | NEPALI REVIEW | GUITAR SHOP"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/90D361qzMAA" title="IBANEZ  RG350 DXZ  6-string Electric Guitar Review | Guitar Shop Nepal"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/z9kZsfZNMfI" title="Unboxing The Squier Stratocaster Pack | Fender"></iframe>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    <?php include "footer.php" ?>
</body>
</html>