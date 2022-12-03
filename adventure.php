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
<body style="background-color:#e4d1d1;">

<?php
include('navbar1.php');
?>


<!-- Cards Games -->

<h2 class="springy-text" id="springy" style="font-family: 'Crimson Text', serif;font-weight: bold;margin-left: 20px;font-size: 4.5vw;">ADVENTURE</h2>
<br>
<div class="container-fluid" style="text-align: center;font-family: 'Crimson Text', serif;color: white;margin-bottom: 40px;">
<div class="card-columns">

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/kogama.jpg" alt="KOGAMA: Kowara image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">KOGAMA: Kowara</h4>
      <p class="card-text">Team up with one of four different teams. You can defeat your opponents with weapons or there’s another really awesome option.</p>
      <a href="https://www.agame.com/game/kogama-kowara" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/trollfacequest.jpeg" alt="Troll Face Quest image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Troll Face Quest</h4>
      <p class="card-text">Will you be able to figure out all of the puzzling pranks and silly scenarios that are waiting for you in this Troll Face Quest game?</p>
      <a href="https://www.agame.com/game/troll-face-quest-video-memes-and-tv-shows" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/spaceadventurepinball.jpg" alt="Space Adventure Pinball image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Space Adventure Pinball</h4>
      <p class="card-text">Go full tilt with Space Adventure Pinball online to become a true space cadet pinball wizard. Enjoy playing this virtual pinball machine!</p>
      <a href="https://www.arkadium.com/games/space-adventure-pinball/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/monstercity.jpg" alt="Monster City image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Monster City</h4>
      <p class="card-text">The city is under siege! Can you help protect it while you fight gangsters and other villains in this 3D action game?</p>
      <a href="https://www.agame.com/game/monster-city" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/fireboyandwatergirl.jpg" alt="Fireboy and Watergirl 5: Elements image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Fireboy and Watergirl 5: Elements</h4>
      <p class="card-text">Join the elements while they explore a temple full of diamonds and use their powers to solve puzzles and avoid various traps.</p>
      <a href="https://www.agame.com/game/fireboy-and-watergirl-5-elements" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/worldcraft2.jpg" alt="World Craft 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">World Craft 2</h4>
      <p class="card-text">World Craft 2 is an open world game where you’ll gather resources to construct and decorate buildings, and more. There’s entire worlds for you to explore. </p>
      <a href="https://www.agame.com/game/world-craft-2" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/shortlife2.jpg" alt="Short Life 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Short Life 2</h4>
      <p class="card-text">Collect stars while you join a daredevil on a mission to avoid getting killed by a ton of very dangerous objects and scenarios.</p>
      <a href="https://www.agame.com/game/short-life-2" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/spidermanpolice.png" alt="Amazing Spider Police image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Amazing Spider Police</h4>
      <p class="card-text">This high-flying cop is fighting enemies on both sides of the law in this weird and wild action game. Can you help him take down gangsters?</p>
      <a href="https://www.agame.com/game/amazing-spider-police" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/slendrina.jpg" alt="While We Sleep: Slendrina is HERE image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">While We Sleep: Slendrina is HERE</h4>
      <p class="card-text">It isn’t easy to get a good night’s sleep when the mysterious, and deadly, Slendrina haunts your dreams! Can you defeat the evil monster?</p>
      <a href="https://www.agame.com/game/while-we-sleep-slendrina-is-here" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/drawclimber.jpg" alt="Draw Climber image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Draw Climber</h4>
      <p class="card-text">A drawing game where you’ll get to help a cube get through a series of obstacle courses featuring sharp spikes and other dangers.</p>
      <a href="https://www.agame.com/game/draw-climber" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

<div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/adamandeve.jpg" alt="Adam and Eve image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Adam and Eve</h4>
      <p class="card-text">Adam's on a mission to get his girl, but there are some serious problems: cannibals, dinosaurs, and bats all stand in the way.</p>
      <a href="https://www.agame.com/game/adam--eve" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

 <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/save_the_girl.jpg" alt="Save the Girl image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Save the Girl</h4>
      <p class="card-text">Save the Girl is a funny puzzle game. You’ll need to help the girl find her way out of a series of hair-raising scenarios in each challenging level.</p>
      <a href="https://www.agame.com/game/save-the-girl" class="btn btn-primary">PLAY</a></center>
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