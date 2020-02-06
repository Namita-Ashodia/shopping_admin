<?php

session_start();
/*header('location:register.php');*/

$con=mysqli_connect('localhost','root');


mysqli_select_db($con,'product');
if(isset($_POST['register']))
{
	echo "<script>alert('DOne');</script>";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$conf_pwd = $_POST['conf_pwd'];

/*$q="select * from user where fname='$fname' && lname='$lname' && email='$email' && pwd='$pwd' && conf_pwd='conf_pwd' ";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num>=1){
    echo "Duplicate Data // Please Enter Unique Data";
}
else{*/
    echo $qy = "insert into `user` (`fname`, `lname`, `email`, `pwd`, `conf_pwd`) values ('$fname' , '$lname' ,'$email' , '$pwd' , '$conf_pwd')"; exit();
    mysqli_query($con,$qy);
 }
/*}*/
?>