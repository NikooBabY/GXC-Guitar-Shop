<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dashboard.css" type="text/css"/> 
</head>
<body>
    <!--Main Navigation-->
    <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a
            href="#"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
            >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple ">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Add Product</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-lock fa-fw me-3"></i><span>Registered Accounts</span></a
            >
            <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-chart-line fa-fw me-3"></i><span>Reviews</span>
            </a>
            
        </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img
            src="Images/logo.png"
            height="25"
            alt="MDB Logo"
            loading="lazy"
            />
        </a>
        

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
            
            
            <!-- Icon -->
            <li class="nav-item me-3 me-lg-0">
            <a><span>Admin</span>
                
            </a>
            </li>

            

            <!-- Avatar -->
            <li class="nav-item">
            <a href="dashboard.php">
                <img
                src="Images/admin.svg"
                class="rounded-circle"
                height="22"
                alt="Admin"
                loading="lazy"
                />
            </a>
            
            </li>
        </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    </header>
    <!--Main Navigation-->
    <!--Main layout-->
    <main style="margin-top: 58px;">
    <div class="container pt-4">

    </div>
    </main>
    <!--Main layout-->

    
</body>
</html>