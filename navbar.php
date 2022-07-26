<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Navbar</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container" style="font-family: 'Pacifico', cursive;">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="index.php">
            <img
                    src="Images/logo.png"
                    height="50"
                    class="img-circle"
                    alt="MDB Logo"
                    loading="lazy"
                    style="margin-top: -6px;"
            />
        </a>
        <!-- Toggle button -->
        <button class="navbar-toggler collapsed mdi-arrow-down-drop-circle" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">↓</button>
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbar-content">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="text-color: black;">
                <li class="nav-item">
                    <a class="nav-link" href="electric.php">Electrics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acoustic.php">Acoustics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bass.php">Basses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pedals.php">Accessories</a>
                </li>


            </ul>

            <?php if(isset($_SESSION['ticket'])) { ?>
                <div class="d-flex align-items-center">
                    <a href="logout.php" >
                        <button type="button" class="btn btn-primary px-3 me-2" >Logout</button>
                    </a>
                    <?php
                    if($userdata['admin'] == 1) { ?>
                        <a href="add.php">
                            <button type="button" class="btn btn-primary px-3 m-2">Add Products</button>
                        </a>
                    <?php } ?>
                </div>
                <div class="d-flex align-items-center">
                    <a>
                        <img
                                src="Images/admin.svg"
                                height="50"
                                class="img-circle"
                                alt="MDB Logo"
                                loading="lazy"
                                style="margin-top: -6px;"
                        />
                    </a>
                </div>
            <?php }
            else{
                ?>
                <div class="d-flex align-items-center">
                    <a href="login.php" >
                        <button type="button" class="btn btn-primary px-3 me-2" >Login</button>
                    </a>
                    <a href="register2.php">
                        <button type="button" class="btn btn-primary me-3">Sign up for free</button>
                    </a>
                </div>
            <?php } ?>
        </div>

        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</body>
</html>