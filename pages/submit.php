<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if($name = "" || $email = "" || $phone = "" || $message= ""){
    echo 0;
}
else{
    $json_string = '../json/message.json';
    $json_data = file_get_contents($json_string);
    $arr = json_decode($json_data,true);
    $new_data = array('name' => $name,'email'=>$email,'phone' =>$phone,'message' =>$message);
    $arr[] = $new_data;
    $json_data = json_encode($arr,JSON_PRETTY_PRINT);
    
    if(file_put_contents("../json/message.json",$json_data)){
        echo 1;
    }
}




?>