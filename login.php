<?php
session_start()
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
       
    <div class="p-5 bg-image" style="background-image: url('Images/login.jpg');">
    <div class="container py-5 h-100">
        
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card text-white" style="border-radius: 2rem; background: hsla(0, 0%, 100%, 0.4); backdrop-filter: blur(8px);">
            <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="text-black fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-black mb-5">Please enter your login and password!</p>
                <form method="post" action="action.php">
                <div class="form-outline form-white mb-4">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                    <label class="text-black form-label" for="typeEmailX">Email</label>
                </div>

                <div class="form-outline form-white mb-2">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                    <label class="text-black form-label" for="typePasswordX">Password</label>
                </div>
                <?php if(isset($_SESSION['invalid_detail'])){ ?>
                    <div class="form-outline ">
                        <label style='color: red'> Invalid credentials </label>
                    </div>
                <?php } ?>
                <button class="btn btn-outline-light btn-lg px-5 text-black" type="submit" name="login">Login</button>

    
                </div>

                <div>
                <p class="mb-0 text-black">Don't have an account? <a href="register2.php" class="text-black fw-bold">Sign Up</a>
                </p>
                </div>
                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    
    </section>


</body>
</html>