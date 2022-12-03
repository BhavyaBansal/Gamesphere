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
      background-image: url('images/back4.jpg');
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
      padding: 10px;
      background-color: rgba(0,0,0,0.2);
      border-radius: 5px;
      overflow: hidden;
    }
    .card:hover
    {
      background-color: rgba(0,0,0,0.9);
      transition: 0.5s;
    }
    .card img
    {
      height: 220px;

    }
 
    /*for responsiveness*/
    @media screen and (max-width: 480px){
      .card{
        width: 300px;
      }
      .card img
      {
        height: 150px;
      }
    }
    @media screen and (max-width: 360px){
      .card{
        width: 220px;
      }
      .card img
      {
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
<div class="container-fluid"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/7.jpg" alt="Gamesphere" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/8.jpg" alt="Gamesphere" style="width:100%;">
      </div>
      <div class="item">
        <img src="images/10.jpg" alt="Gamesphere" style="width:100%;">
      </div>
      <div class="item">
        <img src="images/11.png" alt="Gamesphere" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br><br>

<!-- Cards Games -->

<h2 class="springy-text" id="springy" style="font-family: 'Crimson Text', serif;font-weight: bold;margin-left: 20px;font-size: 5vw;">GAMES</h2>
<br>
<div class="container-fluid" style="text-align: center;font-family: 'Crimson Text', serif;color: white;margin-bottom: 40px;">
<div class="card-columns">

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/Ludo1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Ludo King</h4>
      <p class="card-text">Ludo is a game played by two to four players. Each player must choose one of the four available colors to play as. </p>
      <a href="https://www.crazygames.com/game/ludo-king" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/spider.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">spider-solitaire</h4>
      <p class="card-text">Spider Solitaire is a solitaire game where the objective is to order all the cards in descending runs from King down to Ace in the same suit</p>
      <a href="https://www.free-spider-solitaire.com/#main-ui" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/super-mario.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">super-mario</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="https://supermarioplay.com/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/age-of-war.jfif" alt="Card image" style="width:100%" >
    <div class="card-body">
      <center><h4 class="card-title">Age-Of-War</h4>
      <p class="card-text">Age-Of-War is a fast-paced dice game for two to six prayers.. and also a exciting game..</p>
      <a href="https://kizi.com/games/age-of-war#" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/asteroids.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Asteroids</h4>
      <p class="card-text">Asteroids is a space-themed multidirectional shooter arcade game,object of the game is to shoot and destroy the asteroids..</p>
      <a href="http://www.freeasteroids.org/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/car-rush.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Car-Rush</h4>
      <p class="card-text">Car Rush, the ultimate racing game. Collect the coins while racing on beautiful roads and natural environment.</p>
      <a href="https://www.agame.com/game/car-rush" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/daily-jigsaw.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Daily-Jigsaw Puzzle</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="https://m.dailyjigsawpuzzles.net/html5-games/3465.html" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/donkeykong.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">DonkeyKong</h4>
      <p class="card-text">Donkey Kong is one of the most important games from the golden age of arcade video games</p>
      <a href="https://www.free80sarcade.com/donkeykong.php" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/easter-memory.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Easter Memory</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="https://www.improvememory.org/wp-content/games/easter-memory/index.html" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/king-quest.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">King Quest</h4>
      <p class="card-text">King's Quest is an episodic video game series developed by The Odd Gentlemen</p>
      <a href="https://www.playdosgames.com/play/kings-quest-1-quest-crown/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/pool-8-ball-mania.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Pool-8 Ball Mania</h4>
      <p class="card-text">The classic 8 ball or pool game is popular almost everywhere in the world. It is played between two people..</p>
      <a href="https://www.agame.com/game/pool-8-ball-mania" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/water-dort-puzzles.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Water Sort Puzzle</h4>
      <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
      <a href="https://www.bestgames.com/Water-Sort-Puzzle" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
</div>
</div>
<?php
include('footer.php');
?>
</body>
</html>
