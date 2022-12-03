<html>
	<head>
		<title>Login</title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="logincss.css">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body style="background-color: #ff6f69">
	<div class="container" style="width: 80%;height: 75%; text-align: center;margin-top: 100px;background-color: #262626;padding: 10px;border-radius: 20px;"><br>
		<h2 style="color: white;font-size:4vw">Welcome to Gamesphere</h2>
		<form action="loginprocess.php" method="post" style="width: 80%;height: 55%;margin-left:auto;margin-right:auto;padding: 10px;border-radius: 10px;">
		<label>Email</label>
		    <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text"><i class="material-icons" style="font-size: 16px;">&#xe0be;</i></span>
               </div>
               <input type="text" class="form-control" placeholder="Email" id="usr" name="email" autocomplete="off">
            </div>
		<label>Password</label>
		    <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text"><i style='font-size:16px' class='fas'>&#xf023;</i></span>
               </div>
               <input type="password" class="form-control" placeholder="Password" id="usr" name="password" autocomplete="off">
            </div>
		<input type="submit" value="login" name="login" style="padding: 2px 7px;">
		</form>
		<p style="color: white;">New User? <a href="register.php">Sign Up</a></p>
    <a href="index.php"><button class="btn btn-primary">Return Home</button></a>
	</div>
	</body>
</html>