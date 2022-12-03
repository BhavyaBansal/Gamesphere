<!DOCTYPE html>
<html>
<head>
	<title>Footer2</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style type="text/css">
		#footer{
			width: 100%;
			height: auto;
			background-color: #000000;
			box-sizing:border-box;
			text-align: center;
		}
		.icons{
			display: inline-block;
			width: 45px;
			height: 45px;
			border-radius: 50%;
			color: #b7b7b7;
			background-color: #292930;
			margin-left: 15px;
			margin-top: 20px;
			margin-bottom: 20px;
			margin-right: 15px;
			cursor: pointer; 
		}
		.icons i{
			position: relative;
			top: 12px;
			cursor: pointer;
		}
		#icons-list{
			border-bottom: 1px solid #292930;
			padding: 0;
		}
		#facebook:hover{
			background-color: #1c60a1;
			transition: 0.5s;
		}
		#youtube:hover{
			background-color: #7a0c0f;
			transition: 0.5s;
		}
		#twitter:hover{
			background-color: rgba(29,161,242,1.00);
			transition: 0.5s;
		}
		#instagram:hover{
			background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,
			  	#d6249f 60%,#285AEB 90%);
			transition: 0.5s;	
		}
		#footer-bdr{
			margin-top: 10px;
			padding: 20px;
			font-size: 16px;
			color: #c4c5cb;
			padding-bottom: 10px;
		}
		#footer-bdr span a{
			color: blue;
			font-size: 15px;
		}
		#footer-bdr span a:hover{
			color: cyan;
			transition: 1s;
		}
	</style>
</head>
<body>
<div class="container-fluid" id="footer">
<ul id="icons-list">
<li class="icons" id="facebook"><i class='fab fa-facebook-f' style="font-size: 20px;"></i></li>
<li class="icons" id="twitter"><i class='fab fa-twitter' style="font-size: 20px;"></i></li>
<li class="icons" id="youtube"><i class='fab fa-youtube' style="font-size: 20px;"></i></li>
<li class="icons" id="instagram"><i class='fab fa-instagram' style="font-size: 20px;"></i></li>
</ul>
<p id="footer-bdr">© Copyright 2021, all rights reserved with <span><a href="index.php" style="text-decoration: none;">Gamesphere</a></span></p>  
</div>

</body>
</html>