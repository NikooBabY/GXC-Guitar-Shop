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
    <title>Document</title>
</head>
<body>

    <section class="text-center" style="background-image: url('Images/login.jpg'); background-size: 100% 100%; background-repeat: no-repeat;">
    <div class="container">
            <div class="row">
               
        <div class="p-5 bg-image" >
        </div>
        <div class="col-md-7" style="padding-left: 100px; position:relative; left: 210px; top: -50px;">
        <div class="card mx-4 mx-md-5 shadow-5-strong" style="margin-bottom:80px; background: hsla(0, 0%, 100%, 0.4); backdrop-filter: blur(8px); ">
        <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form method="post" action="action.php">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">

                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="firstname" />
                    <label class="form-label" for="form3Example1">First name</label>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" name="lastname" />
                    <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="form3Example3" class="form-control" name="username" />
                    <label class="form-label" for="form3Example3">Username</label>
                </div>
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form3Example4" class="form-control" name="email" />
                    <label class="form-label" for="form3Example4">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form3Example5" class="form-control" name="password" />
                    <label class="form-label" for="form3Example5">Password</label>
                </div>  

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" name="signin">
                    Sign up
                </button>

            </form>
            </div>
        </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    </section>
</body>
</html>