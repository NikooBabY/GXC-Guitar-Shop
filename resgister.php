<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form method="post" action="action.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" id="Username" placeholder="Username" name="username">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <input type="text" class="form-control" id="FirstName" placeholder="First Name" name="firstname">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input type="text" class="form-control" id="LastName" placeholder="Last Name" name="lastname">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                </div>
               
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="Email" name="email">
                </div>
                
                <br>
                <button type="submit" class="btn btn-primary" name="signin">Sign in</button>
                </form>
            </div>    
        </div>
    </div>
    
</body>
</html>