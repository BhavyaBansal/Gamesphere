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

<h2 class="springy-text" id="springy" style="font-family: 'Crimson Text', serif;font-weight: bold;margin-left: 20px;font-size: 4.5vw;">CARDS</h2>
<br>
<div class="container-fluid" style="text-align: center;font-family: 'Crimson Text', serif;color: white;margin-bottom: 40px;">
<div class="card-columns">

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/mahjongsolitaire.jpg" alt="Mahjong Solitaire image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Mahjong Solitaire</h4>
      <p class="card-text">In this epic game, the goal is to clear tiles by matching two free tiles together. Free tiles are those whose sides are uncovered.</p>
      <a href="https://www.arkadium.com/games/mahjongg-solitaire/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/3cardmonte.png" alt="3 CARD MONTE image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">3 CARD MONTE</h4>
      <p class="card-text">Pick a card, any card! Will you be able to keep track of yours as it flies around the table? Get ready to press your luck in this card game.</p>
      <a href="https://www.agame.com/game/3-card-monte" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

 <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/lightningcards.jpg" alt="Lightning Cards image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Lightning Cards</h4>
      <p class="card-text">Will you be able to beat the computer? The action is intense so you’ll need to stay focused and match up the cards as quickly as you can.</p>
      <a href="https://www.agame.com/game/lightning-cards" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/ono.jpeg" alt="Ono Card Game image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Ono Card Game</h4>
      <p class="card-text">Take on your friends or challenge the computer in this fun and totally free online version of Ono, the classic card game.</p>
      <a href="https://www.agame.com/game/ono-card-game" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/spidersolitaire.jpg" alt="Spider Solitaire image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Spider Solitaire</h4>
      <p class="card-text">The goal of this free card game is to sort all the cards on the table into the eight foundation slots at the top of the screen.</p>
      <a href="https://www.free-spider-solitaire.com/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/crescentsolitaire.jpg" alt="Crescent Solitaire image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Crescent Solitaire</h4>
      <p class="card-text">The goal is to move all the cards from the crescent outer piles to their respective foundation piles in the middle based on suit. </p>
      <a href="https://www.arkadium.com/games/crescent-solitaire/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/golfofcard.png" alt="Golf of Cards image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Golf of Cards</h4>
      <p class="card-text">Try out this online version of the classic card game. Can you get the lowest score possible while you play through exciting rounds?</p>
      <a href="https://www.agame.com/game/golf-of-cards" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/4colorscard.jpg" alt="4 COLORS PGS image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">4 Colors: 2 Player Card Game</h4>
      <p class="card-text">The goal is to match up the numbers and colors in order to get rid of your cards. You’ll also need to keep an eye out for the Wild Card.</p>
      <a href="https://www.agame.com/game/4-colors" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/rummy.jpg" alt="Rummy image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Rummy</h4>
      <p class="card-text">Rummy is en international card games, whose scope is to combine your cards in sets of stairs of the same suit or in groups of 3 or more cards.</p>
      <a href="https://www.agame.com/game/rummy" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/freecellsolitaire.png" alt="FreeCell Solitaire image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">FreeCell Solitaire</h4>
      <p class="card-text">In FreeCell Solitaire, you can move cards to and from the free cells at any time as needed, but you can't stack cards there.</p>
      <a href="https://www.arkadium.com/games/free-freecell-solitaire/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/phase10.png" alt="Phase 10 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Phase 10</h4>
      <p class="card-text">It’s a Rummy-style game that’s becoming very popular all around the world. The goal is to complete 10 varied phases before your opponents</p>
      <a href="https://www.agame.com/game/phase-10" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/tripeakssolitaire.jpg" alt="Tripeaks Solitaire image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Tripeaks Solitaire</h4>
      <p class="card-text">The goal of Tri Peaks is to clear all the cards on the table. Simply tap face up cards that are either one above or one below the top card of the waste pile.</p>
      <a href="https://www.arkadium.com/games/tripeaks-solitaire-free/" class="btn btn-primary">PLAY</a></center>
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