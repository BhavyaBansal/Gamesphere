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
      .card img{
        height: 150px;
      }
      
    }
    @media screen and (max-width: 360px){
      .card{
        width: 220px;
        height: 110px;
      }
      .card img{
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
<body style="background-color:#e4d1d1;">

<?php
include('navbar1.php');
?>


<!-- Cards Games -->

<h2 class="springy-text" id="springy" style="font-family: 'Crimson Text', serif;font-weight: bold;margin-left: 20px;font-size: 4.5vw;">ACTION</h2>
<br>
<div class="container-fluid" style="text-align: center;font-family: 'Crimson Text', serif;color: white;margin-bottom: 40px;">
<div class="card-columns">

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/stickman-archer-2.jpg" alt="Stickman Archer 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Stickman Archer 2</h4>
      <p class="card-text">It’s time for another duel to the death. Several, in fact! How long can you prevent your stickman from meeting his maker? </p>
      <a href="https://www.agame.com/game/stickman-archer-2" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/dragon-climb.png" alt="Dragon Climb image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Dragon Climb</h4>
      <p class="card-text">Move toward to the top with an eccentric flying dragon! There used to live a mythical monster with small wings and claws and a short tail.</p>
      <a href="http://www.agame.com/game/dragon-climb?wpud=ODE1MjEwNTgwMjQ5MTk3JTdDMTkzMzg1NTQyMTg4MyU3QzE2MTg0OTU0MjE4ODMlN0MwJTdDMTYyMDc5MDk2Mzc0OCU3QzE2MjA3OTA5NjM3NDglN0MxNjIwNzkwOTYzNzQ3JTdDMTYyMDc5MDk2Mzc0OA==" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/gunblood.jpg" alt="Gun Blood image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Gun Blood</h4>
      <p class="card-text">There's a group of deadly outlaws. Show them who's boss by plugging them full of holes before they can even draw their six shooters!</p>
      <a href="https://www.agame.com/game/gun-blood" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/RomeLegionnaireSimulator.jpg" alt="Rome Legionnaire Simulator image" style="width:100%" >
    <div class="card-body">
      <center><h4 class="card-title">Rome Legionnaire Simulator</h4>
      <p class="card-text">Have you got what it takes to survive as an outlaw on the streets of Ancient Rome? Swing your sword and search for even better weapons.</p>
      <a href="https://www.agame.com/game/rome-legionnaire-simulator" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/dinosurvival.jfif" alt="Dino Survival image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Dino Survival</h4>
      <p class="card-text">A horde of very hungry dinosaurs is heading your way. Grab every weapon and prepare yourself for an epic battle for survival.</p>
      <a href="https://www.agame.com/game/dino-survival" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/combat-strike.jpg" alt="Combat Strike 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Combat Strike 2</h4>
      <p class="card-text">Team up with your friends or other players from around the world while you wipe out your enemies one by one with tons of powerful weapons.</p>
      <a href="https://www.agame.com/game/combat-strike-2" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/oilwrestling.png" alt="Oil Wrestling image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Oil Wrestling</h4>
      <p class="card-text">You can go up against another player in this wild sports and fighting game. They’re all covered in olive oil, and they’re ready to rumble!</p>
      <a href="https://www.agame.com/game/oil-wrestling-2-player" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/gun-builder-2.jpg" alt="Gun Builder 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Gun Builder 2</h4>
      <p class="card-text">You can learn how to safely assemble different types of firearms. It'll also teach you the names for several of the components and parts in them.</p>
      <a href="https://www.agame.com/game/gun-builder-2" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/Heroes-of-Myths.jpg" alt="Heroes of Myths image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Heroes of Myths</h4>
      <p class="card-text">A legion of monsters is determined to destroy your temple. Protect the temple at all costs with lightning bolts and other magnificent weapons.</p>
      <a href="https://www.agame.com/game/heroes-of-myths" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/johnny-revenge.jpg" alt="Johnny Revenge image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Johnny Revenge</h4>
      <p class="card-text">'Johnny Revenge' -  Team up with Johnny while he uses his limited supply of bullets to wipe out terrorists and tries to rescue hostages.</p>
      <a href="https://www.agame.com/game/johnny-revenge" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/Mr-Bullet.jpg" alt="Mr.Bullet image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Mr. Bullet</h4>
      <p class="card-text">All you need to do is kill the bad guys without running out of ammo! Tag along with the fearless Mr. Bullet to eliminate all of his enemies</p>
      <a href="https://www.agame.com/game/mr-bullet" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/bomb-it-6.jpg" alt="Bomb It 6 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Bomb It 6</h4>
      <p class="card-text">Bomb It 6 is the sixth installment of the Bomb It series and provides a whole new range of game modes and challenges.</p>
      <a href="http://www.agame.com/game/bomb-it-6?wpud=ODE1MjEwNTgwMjQ5MTk3JTdDMTkzMzg1NTQyMTg4MyU3QzE2MTg0OTU0MjE4ODMlN0MwJTdDMTYyMDc5MTA4NDc4OCU3QzE2MjA3OTEwODQ3ODglN0MxNjIwNzkxMDg0Nzg4JTdDMTYyMDc5MTA4NDc4OA==" class="btn btn-primary">PLAY</a></center>
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