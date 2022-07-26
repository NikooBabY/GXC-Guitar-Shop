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
    <title>Document</title>
</head>
<body>
    <?php include('navbar2.php') ?> 
    <div class="container">
            <div class="row" style= "margin-top: 10px;">
                <div class="col-md-12" >
                    <div class="col-md-12" style= "position: relative;">
                        <a href="index.php"><img src="Images/nothing.jpg" width=100% height=600px /></a>
                        <a href="index.php"><button class="btn" style="position: absolute; top: 300px; left: 650px; transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%); background-color: #00a3a7; color: white; font-size: 16px; padding: 12px 24px; border: none; cursor: pointer; border-radius: 5px;">Nothing now. Go home page</button>
                        </a>
                    </div>
                </div>
            </div>
    </div>

    <?php include('footer.php') ?> 
</body>
</html>