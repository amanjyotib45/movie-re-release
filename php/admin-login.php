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

?>
<html>
  <head> <script src="more2js.js"> </script>
   </head>
<body style="background-color:#0B0B0B;">
<style>

.card {

  position: relative;
  display: flex;
  align-items: flex-end;

  background-color: #FFFFFF;
  border-radius: 15px;

  max-width: 1050px;
  max-height: 250px;
  margin: 15 auto;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  


}



.card img {
  width: 450px;
  height: 250px;
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

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\rrr _hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>RRR (2022)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspRam Charan, N. T. Rama Rao Jr. <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  S.S. Rajamouli   <hr>
    <h3><i>"Apni jung dhundte hue hathiyar khudbakhud aaenge"</i></h3></p>
    <button id="clickme" onclick="counter1()">Vote : 0</button>

      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 7.9</button>
  </div>
</div>


<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\kgf1_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>KGF 1 (2018)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspSuperstar Yash <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Prashanth Neel   <hr>
    <h3><i>"Gang lekar aane wale hote hai gangster ... woh akela aata tha ... monster"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.2</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\kgf2_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>KGF 2 (2022)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspSuperstar Yash <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Prashanth Neel   <hr>
    <h3><i>"Violence, Violence, Violence, I don't like it, I Avoid.… but Violence likes me, I can't Avoid."</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.3</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\sholay_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>SHOLAY (1975)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&Dharmendra , Amitabh Bachchan <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Ramesh Sippy   <hr>
    <h3><i>"Ye haath mujhe dede Thakur!"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.1</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\ddlj_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>DDLJ (1095)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspShah Rukh Khan <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Aditya Chopra   <hr>
    <h3><i>"Jaa, Simran, jaa. Jee le apni zindagi"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.0</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\bahubali-1_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>BAHUBALI 1 (2015)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspPrabhas <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  S.S. Rajamouli   <hr>
    <h3><i>"Jab Tak Tum Mere Sath Ho, Mujhe Marane Vala Paida Nahin Hua......Maama"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.0</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\bahubali2_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>BAHUBALI 2 (2017)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspPrabhas <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  S.S. Rajamouli   <hr>
    <h3><i>"Rajkumari…nadve Manibandham Bahir Mukham….. Teja"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.2</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\pushpa-hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>PUSHPA (2022)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspAllu Arjun. <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Sukumar   <hr>
    <h3><i>"Mai jhukega nhi..Sala…"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 7.6</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\Dangal_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>DANGAL (2016)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspAamir Khan <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Nitesh Tiwari   <hr>
    <h3><i>"Mhari Choriya Choro se kam h ke"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.3</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\kabir_hori.jpg" alt="Card Image">
  <div class="card-content">
    <h2>KABIR SHINGH (2019)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspShahid Kapoor <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Sandeep Reddy Vanga   <hr>
    <h3><i>"kisne touch kiya usko ......."</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 7.0</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\3idiots_hori.jpg" alt="Card Image">
  <div class="card-content">
   <h2>3 IDIOTS (2009)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspAamir Khan, R. Madhavan, Sharman Joshi <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Rajkumar Hirani   <hr>
    <h3><i>"How does an Induction Motor Start?...Brrrrrrrrrrrrrrrrrrrr….."</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.4</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\chichore_hori.jpg" alt="Card Image">
  <div class="card-content">
 <h2>CHICHORE (2019)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspSushant Singh Rajput <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Nitesh Tiwari   <hr>
    <h3><i>"Dost jinke sath hum haste hai, rote hai Par zindgi jeena sikhte hai"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.3</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\kantara_hori.jpg" alt="Card Image">
  <div class="card-content">
<h2>KANTARA (2022)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspRishab Shetty <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Rishab Shetty<hr>
    <h3><i>"WoooowwwwWWWW!"</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.3</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\herapheri_hori.jpg" alt="Card Image">
  <div class="card-content">
 <h2>HERA PHERI (2000)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspAkshay Kumar, Sunil Shetty, Paresh Rawal <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Neeraj Vora   <hr>
    <h3><i>"Ye Babu Rao ka Style Hai..."</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.1</button>
  </div>
</div>

<div class="card">
  <img src="C:\Users\91626\Desktop\TFN\movies_for_vote\Phir-Hera-Pheri-hori.jpg" alt="Card Image">
  <div class="card-content">
   <h2>PHIR HERA PHERI (2006)</h2>
       Lead Actor	&nbsp	&nbsp	&nbsp:	&nbspAkshay Kumar, Sunil Shetty, Paresh Rawal <br>
       Director	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp:	&nbsp  Neeraj Vora   <hr>
    <h3><i>"Dedh Sau Rupiya Dega."</i></h3></p>
    <button>Vote</button>
      &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp &nbsp	&nbsp	&nbsp	&nbsp
    <button>IMDb 8.1</button>
  </div>
</div>






</body>
</html> 