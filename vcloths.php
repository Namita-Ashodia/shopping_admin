<?php

session_start();
header('location:dashboard.php');

$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'product');

$size = $_POST['size'];
$color = $_POST['color'];
$material = $_POST['material'];

$q="select * from cloths where size='$size' && color='$color' && material='$material' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num>=1){
    echo "Duplicate Data // Please Enter Unique Data";
}
else{
    $qy = "insert into cloths(size ,color ,material) values ('$size' , '$color' ,'$material')";
    mysqli_query($con,$qy);
}
?>