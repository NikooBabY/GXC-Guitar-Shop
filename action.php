<?php
session_start();
include("database.php");

//registercode
if(isset($_POST['signin']))
{

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    

    $query = "insert into final2(id,first_name,last_name,username,password,email,admin) values(NULL, '$first_name', '$last_name', '$username', '$password', '$email', '0')";

    $conn->query($query);
    header("location:login.php");

}

//logincode
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $qwerty = "select * from final2 where email='$email' and password='$password'";

    $result = $conn->query($qwerty);

    //fetches data from the database
    $userdata = $result->fetch_assoc();

    $count = $result->num_rows; //counts the number of selected rows
    if($count==0){
        $_SESSION['invalid_detail'] = "ok";
        header('location:login.php');

    }
    else{
        $_SESSION['ticket'] = 'ok';
        $_SESSION['userid'] = $userdata['id'];
        $_SESSION['first_name'] = $userdata['first_name'];
        $_SESSION['last_name'] = $userdata['last_name'];
        $_SESSION['admin'] = $userdata['admin'];

        header('location:index.php');
    }


}


//addproducts
if(isset($_POST['addproduct']))
{
    $model = $_POST['model'];
    $price = $_POST['price'];
    $instruments = $_POST['instruments'];
    $description = $_POST['description'];
    $proimage = $_FILES['proimage']['name']; //actual image name
    $ext = pathinfo($_FILES['proimage']['name'], PATHINFO_EXTENSION);
    $random = rand(1,1000000);
    $newproimage = $random. "_CP_.".$ext;

    if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=='gif'){

        move_uploaded_file($_FILES['proimage']['tmp_name'], "Product_images/$newproimage");

        $query = "insert into products2 (id,instruments,price,description,model,newproimage) values(NULL, '$instruments', '$price', '$description', '$model', '$newproimage' )";
        $conn->query($query);
        header("location:index.php");

    }

    else{
        echo "Invalid file format !!";
    }

}

//comments
if(isset($_GET['comments'])){
    $comments = $_GET['cmt'];
    $productid = $_SESSION['singlepid'];
    $uid = $_SESSION['userid'];
    if ($uid){
        $query = "INSERT INTO comment(id, productid, comments, userid)
                VALUES (NULL, '$productid', '$comments', '$uid')";
        $conn->query($query);
        header('location:index.php?id='.$productid);
    }else{
        header('location:login.php');
    }
    
}

//updateproducts
if(isset($_POST['updateproducts']))
{
    $model = $_POST['model'];
    $price = $_POST['price'];
    $instruments = $_POST['instruments'];
    $description = $_POST['description'];
    $id = $_POST['id'];

    $query = "update products2 set model='$model', price='$price', instruments='$instruments', description='$description' where id='$id' ";
    $conn->query($query);
    header("location:electric.php");



}

if(isset($_GET['product_del_id'])){
    
    $product_del_id = $_GET['product_del_id'];
    $query = "delete from products2 where id=$product_del_id";
    $select  = "select * from products2 where id='$product_del_id'";
    $res = $conn->query($select);
    $data = $res->fetch_assoc();

    $conn->query($query);
    $img = $data['newproimage'];
    unlink("Product_images/".$img);
    header("location:index.php");

}








?>