<!DOCTYPE html>
<html>
<style>
    a.back{
      float:right;
      padding-right: 10px;
      font-size: 20px;
    }

    a:visited{
      color: black;
    }

	  h1{
	   	text-align: right;
			background: #0A2463;
			color: #FFF8F0;
			padding: 2%;
			margin:0px;
      width:80%;
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

	   form{
       margin-top: 25px;
		   margin-left: 20px;
			 padding: 10px;
      font-family: arial;
	   }

	   a.name{
	   	 border:2px black solid;
		   padding: 10px;
		   background-color: #0A2463;
		   color: #FCF7F8;
		   font-size: 20px;
		   text-decoration: none;
		   margin-left:2%;
       font-family: arial;
	   }

     a.name:hover{
       background-color: gray;
     }

     #logout{
			  padding: 10px 10px 10px 10px ;
				/* margin-left: 80%; */
				text-decoration: none;
				border: none;
        margin-right:-1%;
        font-size: 30px;


	   }

	   #logout:hover{
	   		background-color: gray;
	   }

     #logout:visited{
       color: white;
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
	<title>files page</title>
</head>
<body>
  <div class="header">
		<img src="white.png">
		<h1><a id= "logout" href="login.php">Logout</a></h1>
	</div>
  <form action = "upload.php" method = "POST" enctype = "multipart/form-data">
	   <input type = "file" name = "file" >
	   <button type = "submit"  name = "submit">UPLOAD</button>
  </form>
  <br>
</body>
</html>


<?php
include('server.php');
$conn = new mysqli('localhost', 'root', 'password', 'eapprove');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM documents WHERE username='$username' OR ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<a class= "name"  href="uploads/'.$row["filename"].'"> '.$row["filename"]. '</a>';
		echo "<br>";
		echo "<br>";
		echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<html>
<body>
<a href="mainpage.php" class="back"> Back </a>
<div class="logos">
	<div><img class = "octo" src="octo_logo.jpg"></div>
	<div><img class = "uscis" src="uscis_logo.png"></div>
</div>
</body>
</html>
