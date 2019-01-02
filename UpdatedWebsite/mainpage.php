<!DOCTYPE html>
<html lang="en">
<style>
		h1{
	   		text-align: right;
				background: #0A2463;
				color: #FFF8F0;
				padding: 2%;
				margin:0px;
				width: 80%;
				 font-family: arial;
	   }

	   body{
	   		background: #E2E2E2;
				margin:0px;
				background-image: url('background.png');
				background-repeat: no-repeat;
				-webkit-background-size: cover;
				overflow: hidden;
			}


	   ul {
	   		padding: 20px;
	   }

	   a{
			  border:2px black solid;
				padding: 40px;
				padding-top:20%;
				padding-bottom:20%;
				background-color: #0A2463;
				color: #FCF7F8;
				font-size: 30px;
				text-decoration: none;
				margin: 20px;
				 font-family: arial;

	   }

	   a:hover{
	   		background-color: gray;
	   }

	   .topnav{
			  float: none;
				position: absolute;
				top: 50%;
				left: 20%;
	   }

		 .nav{
			 	float: none;
				position: absolute;
				top:50%;
				left: 25%
		 }

	   #logout{
			  padding: 10px 10px 10px 10px ;
				/* margin-left: 80%; */
				text-decoration: none;
				border: none;
				margin-right:-1%;

	   }

	   #logout:hover{
	   		background-color: gray;
	   }

		 img{
			 width:25%;
			 height: 25%;
			 display: block;
			 opacity: 1;
			 align: left;

		 }

		 .header {
			 background-color: #0a2463;
    	 display: flex;
    	 width: 100%;
    	 padding: 1% 1%;
		 }

		 .header img{
			 margin-left: -2%;
		 }

		 .octo{
		   /* position: relative; */
		   /* bottom: 0px; */
		   left: 0%;
		   height:7%;
			 width: 17%;

			 /* margin-top:37%; */

		 }
		 .logos img {
			 /* margin-top: 30%; */
			 position: fixed;
			 bottom: 0;

		 }

		 .uscis{
		   /* position: relative; */
			 /* bottom: 0px; */
		   left: 93%;
		   width:7%;
			 height: 12%;

		 }


</style>

<head>
	<title>Welcome</title>
</head>
<body>

	<div class="header">
		<img src="white.png">
		<h1><a id= "logout" href="login.php">Logout</a></h1>
	</div>


<?php session_start(); if ($_SESSION['username'] == 'admin'){ ?>
	<span>
		<section>
				<div class="topnav">
 					<a href="users.php">Users</a>
  					<a href="documents.php">Documents  Uploaded</a>
 					 <a href="results.php">Results</a>
				</div>
		</section>
	</span>
<?php }else{ ?>
	 <span>
		<section>
			<div class="nav">
  					<a href="documents.php">Documents Uploaded</a>
 					 	<a href="results.php">Results</a>
			</div>
		</section>
	</span>
<?php } ?>

<div class="logos">
	<div><img class = "octo" src="octo_logo.jpg"></div>
	<div><img class = "uscis" src="uscis_logo.png"></div>
</div>
</body>
</html>
