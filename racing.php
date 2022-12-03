<?php
session_start();
?>
<?php 
  if (isset($_SESSION['email']))
  {
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamesphere</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Potta+One&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Fraunces&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
  <style type="text/css">

    body{
      background-image: url('images/racing4.jpg');
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }
    /*for navbar*/
     li:hover{
      border-bottom:1px solid white;
      background-color: #080808;
      transition: 1s;
    }
    li{
      margin-right: 3px;
    }
    .dropdown-menu li a:hover{
      color: white;
      background-color: #080808;
      transition: 0.5s;
    }
    .navbar-brand img:hover{
      padding: 3px;
      background-color: #080808;
      border-radius:50%;
      transition: 0.5s;
    }
    /*for card*/
    .card
    {
      width: 400px;
      height: 225px;
    }
    .card img{
      height: 220px;

    }
    
    /*for responsiveness*/
    @media screen and (max-width: 480px){
      .card{
        width: 300px;
        height: 150px;
      }
      .card .img{
        height: 150px;
      }
      
    }
    @media screen and (max-width: 360px){
      .card{
        width: 220px;
        height: 110px;
      }
      .card .img{
        height: 110px;
      }
     
    }

    /*for footer*/
    /*Games heading*/
    .springy-text {
      text-align:center;
      top:20px;
      /*color: darkslateblue;*/
      color: #0f0c29;
      animation-name: springy-text;

      animation-duration: 1s;
      animation-timing-function: ease-in;
      animation-delay: 0s;
      animation-iteration-count: infinite;
      animation-direction: alternate-reverse;
      animation-play-state: running;
      animation-fill-mode: backwards;
      }
      .springy-text:hover
      {
      animation-play-state: paused;
      }

      @keyframes springy-text {
      0% {
      letter-spacing: 1.2em;
      text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073,
       0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
      color: #24243e;
      }
      100% {
      letter-spacing: 0.1em;
      text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6,
       0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
      color: #0f0c29;
      }
      }
  </style>
</head>
<body>

<?php
include('navbar1.php');
?>


<!-- Cards Games -->

<h2 class="springy-text" id="springy" style="font-family: 'Crimson Text', serif;font-weight: bold;margin-left: 20px;font-size: 4.5vw;">RACING</h2>
<br>
<div class="container-fluid" style="text-align: center;font-family: 'Crimson Text', serif;color: white;margin-bottom: 40px;">
<div class="card-columns">

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/highwayracer3d.jpg" alt="Highway Racer 3D image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Highway Racer 3D</h4>
      <p class="card-text">Customize your cars and race against the best in the biz with this thrilling 3D game.</p>
      <a href="https://www.agame.com/game/highway-racer-3d" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/madalinstuntcars2.jpg" alt="Madalin Stunt Cars 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Madalin Stunt Cars 2</h4>
      <p class="card-text">Madalin Stunt Cars 2 lets you try out over 30 sports cars. You can take them for a test drive in the single player mode.</p>
      <a href="https://www.agame.com/game/madalin-cars-multiplayer" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/hillclimbracing2.jpg" alt="Hill Climb Racing 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Hill Climb Racing 2</h4>
      <p class="card-text">Try to reach the finish lines in every level and collect coins to purchase upgrades between competitions. Keep an eye on your fuel gauge.</p>
      <a href="https://www.agame.com/game/hill-racing-challenge" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/furiousdrift.jpg" alt="Furious Drift image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Furious Drift</h4>
      <p class="card-text">Furious Drift is a drifting game with customizable cars. You’ll earn credits every time you successfully drift during each race.</p>
      <a href="https://www.agame.com/game/furious-drift" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/moto-road-rash-3d.jpg" alt="Moto Road Rash image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Moto Road Rash</h4>
      <p class="card-text">It's time to burn some rubber! Jump on a bike and get ready to race in Moto Road Rash 3D.</p>
      <a href="https://www.agame.com/game/moto-road-rash" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/xcrossmadness.jpg" alt="Xcross Madness image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Xcross Madness</h4>
      <p class="card-text">Prepare yourself for a career or just a quick spin down the track in this 3D motorcycle racing game.</p>
      <a href="https://www.agame.com/game/xcross-madness" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/offroaderv6.jpg" alt="Off-Roader V6 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Off-Roader V6</h4>
      <p class="card-text">You can blast through three different areas in tons of different vehicles in this 3D driving game. Each one has a powerful V6 engine, even the bus!</p>
      <a href="https://www.agame.com/game/off-roader-v6" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
 <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/offroadmonstertrucks.jpg" alt="Off Road Monster Trucks image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Off Road Monster Trucks</h4>
      <p class="card-text">Get ready to go off road in one of these rigs! Jump behind the wheel of a monster truck before you explore one or all three of the maps.</p>
      <a href="https://www.agame.com/game/off-road-monster-trucks" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/city-car-stunt-4.jpg" alt="City Car Stunt 4 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">City Car Stunt 4</h4>
      <p class="card-text">Customize your vehicle between events or earn coins to purchase new ones. Hit top speeds as you blast past your opponents.</p>
      <a href="https://www.agame.com/game/city-car-stunt-4" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/deathchase.jpg" alt="Death Chase Racing image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Death Chase Racing</h4>
      <p class="card-text">Will you make it to the finish lines of each one of these totally insane tracks? These death matches aren’t for the faint of heart!</p>
      <a href="https://www.agame.com/game/death-chase-racing" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/dragracingrivals.jpg" alt="Drag Racing Rivals image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Drag Racing Rivals</h4>
      <p class="card-text">It requires you to accelerate, rev your engine, etc. at the right moments. Will you be the first driver to cross each finish line?</p>
      <a href="https://www.agame.com/game/drag-racing-rivals" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/bussimulator.jpg" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">City Bus Simulator</h4>
      <p class="card-text">Driving a bus is a lot tougher than it looks! You can handle it though, right? Give it a try in this driving simulation game.</p>
      <a href="https://www.agame.com/game/city-bus-simulator" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
</div>
</div>
<?php
include('footer.php');
?>
</body>
</html>
<?php
  }
  else
  {
    // echo "<h3 style='color:red;'>Please Login First!!!</h3>";
    include("messages/loginfirstmsg.html");
  }
?>