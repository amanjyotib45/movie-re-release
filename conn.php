<?php
  echo "hello";

$servername = "localhost";
$username = "root";
$password = "";
$db = "tfn";

$conn=mysqli_connect($servername,$username,$password,$db);

echo "\nConnection was successful";




$pass_id=$_POST['pass_id'];
$pass_fname=$_POST['pass_fname'];
#$mname=$_POST['mname'];
$pass_lname=$_POST['pass_lname'];
$pass_phone=$_POST['pass_phone'];
$pass_email=$_POST['pass_email'];
$pass_pwd=sha1(md5($_POST['pass_pwd']));

echo " $pass_id ";
mysqli_select_db($conn,'tfn');


$q="insert into user (pass_id, pass_fname, pass_lname, pass_phone, pass_email, pass_pwd) values('$pass_fname','$pass_lname','$pass_phone','$pass_email','$pass_pwd')";
$i=mysqli_query($conn,$q);
echo $i;

?>