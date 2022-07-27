<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--<link type="text/css" rel="stylesheet" href="card.css" --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
</head>
<body>
<?php include('navbar.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3" style="margin:auto;">
            <form method="post" action="action.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Model</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model" name="model">
            </div>
            <br>
            <div class="form-group">
                <label>Picture</label>
                <input type="file" name="proimage" />
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price" name="price">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Instruments</label>
                <select multiple class="form-control" id="exampleFormControlSelect2" name="instruments">
                <option>Electric Guitar</option>
                <option>Pedals</option>
                <option>Bass Guitar</option>
                <option>Acoustic Guitar</option>
                <option>New Arrivals</option>
                </select>
            </div>
            <br>
            </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Description" style="height: 275px; width: 360px;"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block mb-4" name="addproduct" onclick="myFunction()">Submit  </button>
            <script>
            function myFunction() {
                alert("Product has been added.");
                }
            </script>
        </div>


            </form>
        </div>
</div>
<?php include('footer.php') ?>
</body>
</html>
