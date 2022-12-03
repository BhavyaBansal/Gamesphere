<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>
			<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="logincss.css">
      <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body style="background-color: #ff6f69">
	<div class="container" style="width: 80%;height:95%;text-align: center;margin-top: 50px;background-color: #262626;padding: 10px;border-radius: 20px;text-align: center;">
		<br>
		<h2 style="color: white;font-size: 4vw;">Welcome to Gamesphere</h2>
		<form action="registerprocess.php" method="post" style="width: 80%;height: 75%;margin-left:auto;margin-right:auto;padding: 10px;border-radius: 10px;">
		<label>Name</label>
		    <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text"><i style="font-size:20px" class="fa">&#xf007;</i></span>
               </div>
               <input type="text" class="form-control" placeholder="Your name" id="usr" name="name" autocomplete="off">
            </div>
		<label>Contact no</label>
		    <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text"><i style="font-size:20px" class="fa">&#xf095;</i></span>
               </div>
               <input type="text" class="form-control" placeholder="Contact no" id="usr" name="contact" autocomplete="off">
            </div>
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
		<input type="submit" name="register" value="Register" style="padding: 2px 7px;">
		</form>
		<p style="color: white;">Already Registered? <a href="login.php">Sign In</a></p>
    <a href="index.php"><button class="btn btn-primary">Return Home</button></a>
	</div>
	</body>
</html>