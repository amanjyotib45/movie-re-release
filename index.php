<?php
$servername="localhost";
$username="root";
$dbms="tfn";
$pass="";
$conn=mysqli_connect($servername,$username,$pass,$dbms);
// if(!$conn)
// {
//     die("connection error<br>");
// }
// else{
//   echo "Database Connected Successfully";
// }

?>

<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>TFN</title>
</head>  
  <body>
    
 
  <h2><img src="image/logo.jpg" alt="TFN" style="width:8%" style="height:10%"></h2> 
<div class="edge">
 
  <ul class="nav" style="text-decoration:none">
    
    <h1><meta name="viewport" content="width=device-width, initial-scale=1"> <b></b></h1>
    <div class="heading">
    <h1>&nbsp  &nbsp THE FILM NOSTALGIA</h1>
      </div>
    <!-- <div class="wrap">
      <div class="search">
         <input type="text" class="searchTerm" placeholder="search">
         <button type="submit" class="searchButton">
           <i class="fa fa-search"></i>
        </button>
      </div>
   </div> -->
    <!-- <li><a style="text-decoration:none" href="pass-signup.php">Sign up</a></li> -->
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <li><a style="text-decoration:none" href="./login.php">Login</a></li>
    <li><a style="text-decoration:none" href="html/aboutus.html">About Us</a></li>
  </ul>

  <!--   <p> A perfect movie booking</p> -->

</div>
<!-- =============================================== -->

<div class="slideshow-container">

  <div class=" mySlides">
    <div class="numbertext"></div>
    <img src="image/pathan.jpg" alt="pathan" width="1350px"  height="500px">
    <div class="text"></div>
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="image/jhon wick.jpg" alt="john wick" width="1350px"  height="500px">
    <div class="text"></div>
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="image/tjmm (1).jpg" alt=" Mai jhuthi tu makkar" width="1350px"  height="500px">
    <div class="text"></div>
  </div>
  <div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
  
  
</div>

<section id='pricing'>

<?php 
  $sql = "SELECT * FROM movie ORDER BY votee DESC LIMIT 3";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    $num = 1;
    while($row = $result->fetch_assoc()) {

    echo
    "
    <div class='product' id='tenor'>
      <div class='level'>" .$row["movie"] . "</div>
      <img width='410px' height='350px' src='data:image/jpeg;base64,".base64_encode($row['image'])."'/>
        <ul>
  
        <li>Year &nbsp &nbsp :&nbsp" . $row["rel_year"]. "</li>
        <li>Actor  &nbsp &nbsp &nbsp :&nbsp" . $row["actor"]. "</li>
        <li>Director &nbsp :&nbsp" . $row["director"]. "</li>
        <h3>Total Votes : " . $row['votee'] . "</h3>
      </ul>

      <form action='index.php?id=".$row['movie_id']."' method='post'><button class ='bt' type='submit' name='vote" . $num++ . "'>Vote</button></form>
    </div> ";


    }
  } else {
    echo "0 results";
  }

  if(isset($_POST['vote1'])){

    $urlid = $_GET['id'];

    $voteQry = "SELECT * FROM movie WHERE movie_id = '$urlid'";
    $voteRes = $conn->query($voteQry);

    if($voteRes->num_rows > 0){
      while($row = $voteRes->fetch_assoc()) {
        $tempVote = $row['votee'] + 1;
        $qry1 = "UPDATE movie SET votee = '$tempVote' WHERE movie_id = '$urlid'";
      
        $res1 = $conn->query($qry1);

        if($res1 === TRUE){
          echo "updated vote of $urlid is ".$row['votee'];
          // header("location: more2.php/");
        }
        else{
          echo "Failed to increase vote";
        }
      }
    }
    else{
        echo "Failed to increase vote $urlid";
    }
    
   
  }

  if(isset($_POST['vote2'])){

    $urlid = $_GET['id'];

    $voteQry = "SELECT * FROM movie WHERE movie_id = '$urlid'";
    $voteRes = $conn->query($voteQry);

    if($voteRes->num_rows > 0){
      while($row = $voteRes->fetch_assoc()) {
        $tempVote = $row['votee'] + 1;
        $qry1 = "UPDATE movie SET votee = '$tempVote' WHERE movie_id = '$urlid'";
      
        $res1 = $conn->query($qry1);

        if($res1 === TRUE){
          echo "updated vote of $urlid is ".$row['votee'];
          // header("location: more2.php/");
        }
        else{
          echo "Failed to increase vote";
        }
      }
    }
    else{
        echo "Failed to increase vote $urlid";
    }
    
   
  }

  if(isset($_POST['vote3'])){

    $urlid = $_GET['id'];

    $voteQry = "SELECT * FROM movie WHERE movie_id = '$urlid'";
    $voteRes = $conn->query($voteQry);

    if($voteRes->num_rows > 0){
      while($row = $voteRes->fetch_assoc()) {
        $tempVote = $row['votee'] + 1;
        $qry1 = "UPDATE movie SET votee = '$tempVote' WHERE movie_id = '$urlid'";
      
        $res1 = $conn->query($qry1);

        if($res1 === TRUE){
          echo "updated vote of $urlid is ".$row['votee'];
          // header("location: more2.php/");
        }
        else{
          echo "Failed to increase vote";
        }
      }
    }
    else{
        echo "Failed to increase vote $urlid";
    }
    
   
  }


  $conn->close();
?>
</section>
<br>
<a href='php/more2.php' class="bt"> 
More 
</a> <br> <br>

<footer> &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp
   <a href="#"><span>Facebook</span></a>  &nbsp &nbsp
  <a href="#"><span>Twitter</span></a>   &nbsp &nbsp
  <a href="#"><span>Google+</span></a>   &nbsp &nbsp 
  <a href="#"><span>Github</span></a>    &nbsp &nbsp

   
  <span>Copyright 2023, THE FILM NOSTALGIA</span>
</footer>

<script src="js/indexjs.js">
</script>
</body>
</html>