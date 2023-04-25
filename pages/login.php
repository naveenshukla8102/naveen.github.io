<?php
session_start();
if (isset($_SESSION["username"])) {
    header("location:data.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="vh-100 vw-100 bg-danger d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-sm-8 col-12 bg-white" >
            <div class="col-12 bg-primary-subtle text-center  py-3 border border-primary" >
                <h3>login form</h3>
            </div>
            <form action="" method="post" class="p-5">
                <label for="" class="col-12">user name</label>
                <input type="text" placeholder="user name" name="user" class="col-12 mb-3">
                
                <label class="col-12">password</label>
                <input type="password" placeholder="password" name="password" class="col-12 mb-3">
                
                <input type="submit" name="submit" class="col-12 btn btn-success">
            </form>
        </div>
    </div>
    
    <?php
        include 'conn.php';

   $submit = $_POST['submit'];

   if ($submit){
    $user = $_POST['user'];
    $user_password = $_POST['password'];
  
    $login_user = "naveen8102";
    $login_password = "20022002";

    if($login_user = $user && $login_password = $user_password){

            session_start();
            $_SESSION["username"] = $user;
            header("location: data.php");

        echo $row['user'] ;
        echo $row['password']  ;
            
        }

    else {
        echo "<div>
        username password missmatch
        </div>";
    }
    }
     ?>

</body>
</html>