<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clint messages</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

<div class="bg-primary fs-3 fw-bold text-end pt-3">
    <a href="logout.php" class="text-white btn btn-warning fs-3 fw-bold ">logout</a>
    <P class="text-white ">
    hii 
    <?php
    echo $_SESSION["username"];
    ?>
</P>
</div>


    <div class=" d-flex justify-content-center">
        <table border="1px" class="col-md-10">
            <tr class="bg-dark text-white">
                <th>sn.</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>message</th>
            </tr>
            <?php
$json_string = '../json/message.json';
$json_data = file_get_contents($json_string);
$arr = json_decode($json_data,true);
$sn = 1;
foreach($arr as list('name' => $name,'email' => $email, 'phone' =>$phone, 'message' =>$message)){
    
    
echo     "<tr>
    <td>{$sn}</td>
    <td>{$name}</td>
    <td>{$email}</td>
    <td>{$phone}</td>
    <td>{$message}</td>
</tr>";

$sn++;
}
?>

</table>          
    </div>
</body>

</html>

<!-- ALTER TABLE `clint` CHANGE `id` `id` INT(3) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`); -->