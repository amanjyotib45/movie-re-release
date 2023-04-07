
<?php
$servername="localhost";
$username="root";
$dbms="tfn";
$pass="";
$conn=mysqli_connect($servername,$username,$pass,$dbms);
if(!$conn)
{
    die("connection error<br>");
}
else{
  // echo "Database Connected Successfully";
}

?>
<html>
  <head> <script src="more2js.js"> </script>
 
   </head>
<body style="background-color:#0B0B0B;">

<!-- testing code starts here -->

<a style="text-decoration:none" href="../index.php"><h2>&nbsp &nbsp &nbsp &nbspHOME</h2></a>


<?php 

  $sql = "SELECT * FROM movie ORDER BY votee DESC";
  $result = $conn->query($sql);
  
  
  
  

  if ($result->num_rows > 0) {
    // output data of each row
    $num = 1;
    while($row = $result->fetch_assoc()) {
      // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      // echo "Movie Name = " . $row["movie"] . " Vote = " . $row["vote"] . "<br>";
      
      //script for vote counter starts here
      // $tempVote = $row['votee'];
      // $mid = $row['movie_id'];
      
      
      //script for vote counter ends here
      echo "<div class='card'>
      <img src='data:image/jpeg;base64,".base64_encode($row['image'])."'/>
      <div class='card-content'>
        <h2>" . $row["movie"] . "</h2>
           Lead Actor	&nbsp	&nbsp	&nbsp:	&nbsp" . $row["actor"] . "<br>
           Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  " . $row["director"] . "   <hr>
        <h3><i>" . $row["famous_dialogue"] . "</i></h3></p>
        <h3>Total Votes : " . $row['votee'] . "</h3>
        
        <form action='more2.php?id=".$row['movie_id']."' method='post'><button type='submit' name='vote" . $num++ . "'>Vote</button>
    
          &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	
          &nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
        <button>" . $row["IMDb_rating"] . "</button></form>
      </div>
    </div>";



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

  if(isset($_POST['vote4'])){

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

  if(isset($_POST['vote5'])){

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


  if(isset($_POST['vote6'])){

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


  if(isset($_POST['vote7'])){

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


  if(isset($_POST['vote8'])){

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

  if(isset($_POST['vote9'])){

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

  if(isset($_POST['vote10'])){

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


  if(isset($_POST['vote11'])){

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

  if(isset($_POST['vote12'])){

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

  if(isset($_POST['vote13'])){

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


  if(isset($_POST['vote14'])){

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

  if(isset($_POST['vote15'])){

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




<style>

.card {

  position: relative;
  display: flex;
  align-items: flex-end;

  background-color: #FFFFFF;
  border-radius: 15px;

  max-width: 1050px;
  max-height: 300px;
  margin: 15 auto;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  


}



.card img {
  width: 500px;
  height: 300px;
}

.card-content {
  padding: 20px;
}

.card-content h3 {
  font-size: 24px;
  font-weight: bold;
  margin-top: 0;
  margin-bottom: 1px;
}

.card-content p {
  font-size: 18px;
  line-height: 1.25;
  margin-bottom: 1 px;
}

button {
  background-color: #4b030f;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 18px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.15s ease-in-out;
}

button:hover {
  background-color: #257C28;
}




</style>





</body>
</html>