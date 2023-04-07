<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "tfn";

$conn=mysqli_connect($servername,$username,$password,$db);
include "./utilityfunction.php";
if (!isset($_SESSION['username'])) {
  redirect("./");
}

?>