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

<h2 class="springy-text" id="springy" style="font-family: 'Crimson Text', serif;font-weight: bold;margin-left: 20px;font-size: 4.5vw;">PUZZLES</h2>
<br>
<div class="container-fluid" style="text-align: center;font-family: 'Crimson Text', serif;color: white;margin-bottom: 40px;">
<div class="card-columns">

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/watersortpuzzle.jpeg" alt="Water Sort Puzzle image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Water Sort Puzzle</h4>
      <p class="card-text">Try to sort the colored water in the glasses until all colors in the same glass. A challenging yet relaxing game to exercise your brain! </p>
      <a href="https://www.bestgames.com/Water-Sort-Puzzle" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/woodblockpuzzle.png" alt="Wood Block Puzzle image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Wood Block Puzzle</h4>
      <p class="card-text">Drag and drop the wooden blocks to complete a vertical or horizontal line. Once a line is formed, it will disappear freeing up space for other blocks.</p>
      <a href="https://woodblockpuzzle.com/onlinegame/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/jigsawpuzzle.jpg" alt="Jigsaw Puzzle image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Jigsaw Puzzle</h4>
      <p class="card-text">Click and drag the jigsaw pieces to put them together. Correct placements will stay connected. Use the toolbar at the top of the game.</p>
      <a href="https://m.dailyjigsawpuzzles.net/html5-games/3465.html" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/dailywordsearch.jpg" alt="Daily Word Search image" style="width:100%" >
    <div class="card-body">
      <center><h4 class="card-title">Daily Word Search</h4>
      <p class="card-text">Word Search is a relatively new puzzle game. Keep your eye and your mind sharp with our free online daily word puzzle!</p>
      <a href="https://www.arkadium.com/games/daily-word-search/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/dailycommutercrossword.jpg" alt="Daily Commuter Crossword image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Daily Commuter Crossword</h4>
      <p class="card-text">The best free online crossword is brand new, every day, from one of the best puzzlemakers out there. No pencil or eraser required!</p>
      <a href="http://www.freeasteroids.org/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/piratesandtreasures.jpg" alt="Pirates and Treasures image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Pirates and Treasures</h4>
      <p class="card-text">You have 10 minutes to find everything in a given boat. Once you find all the objects, you'll then have to find every number 1 through 30.</p>
      <a href="https://www.arkadium.com/games/pirates-and-treasures/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/sudoku.jpeg" alt="Sudoku image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Sudoku</h4>
      <p class="card-text">Sudoku follows in the number puzzle's tradition. Each column, row and nonet needs to contain the numbers 1-9, and each can only be used once.</p>
      <a href="https://www.arkadium.com/games/sudoku/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/trizzle.jpg" alt="Trizzle image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Trizzle</h4>
      <p class="card-text">The goal of Trizzle is to slide rows or columns of Russian nesting dolls to line up three of the same color and size.</p>
      <a href="https://www.arkadium.com/games/trizzle/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

 <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/mathdoku.jpg" alt="MathDoku image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">MathDoku</h4>
      <p class="card-text">All the same rules as standard sudoku apply, but segments are now unique to each puzzle instead of always being nonets.</p>
      <a href="https://www.arkadium.com/games/math-doku/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/flowergarden2.jpg" alt="Flower Garden 2 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Flower Garden 2</h4>
      <p class="card-text">The goal is to find all 26 letters hidden in the garden before time runs out. Click on a letter to remove it from the scene!</p>
      <a href="https://www.arkadium.com/games/flower-garden-2/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>
  <!-- <br> -->
 <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/hiddenkitchen.jpg" alt="Hidden Kitchen image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">Hidden Kitchen</h4>
      <p class="card-text">Find all the objects hidden in the kitchen. Click on an object to select it. Click and hold to zoom in. Click and drag to move the image.</p>
      <a href="https://www.arkadium.com/games/hidden-kitchen/" class="btn btn-primary">PLAY</a></center>
    </div>
  </div>

  <div class="card" style="display: inline-block;margin: 18px;">
    <img class="card-img-top" src="images/2048.jpeg" alt="2048 image" style="width:100%">
    <div class="card-body">
      <center><h4 class="card-title">2048</h4>
      <p class="card-text">2048 is a cool math and puzzle game that was created in 2014 and quickly became popular around the globe.</p>
      <a href="https://www.arkadium.com/games/2048-game/" class="btn btn-primary">PLAY</a></center>
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