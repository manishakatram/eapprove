<!DOCTYPE html>
<html>
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
			overflow:hidden;
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
			 margin-left:-2%;
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

		 h2{
			 font-family: arial;
		 }

		 a.back{
       float:right;
       padding:0;
			 background-color: inherit;
			 font-size: 20px;
			 text-decoration:underline;
			 border: none;

     }

     a.back:visited{
       color: black;
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
  <title>results page</title>
</head>
<body>
	<div class="header">
		<img src="white.png">
		<h1><a id= "logout" href="login.php">Logout</a></h1>
	</div>
	<h2>Results</h2>
  <?php
  $file = fopen("results.txt","r") or die("Unable to open file!");
  while(! feof($file))
  {
   	 echo "<p style='margin-left:2%; font-family: arial;'>" .fgets($file). "</p>";
     echo "<br />";
  }
  fclose($file);
  ?>

<a href="mainpage.php" class="back"> Back </a>
<div class="logos">
	<div><img class = "octo" src="octo_logo.jpg"></div>
	<div><img class = "uscis" src="uscis_logo.png"></div>
</div>
</body>
</html>
