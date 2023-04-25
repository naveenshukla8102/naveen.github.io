
<?php
include 'conn.php';
$clint_id = $_GET['id'];
echo $clint_id;
$delete_clint = "DELETE FROM `clint` WHERE id = $clint_id";
$data = mysqli_query($conn,$delete_clint) or die("query fail");

if($data){
    echo "<script>alert('data deleted succss');</script>";
    header("location:data.php");
}
 ?>