<?php
include('server.php');

$db = mysqli_connect('localhost', 'root', 'password', 'eapprove');
if($db -> connect_error){
	die("Connection Failed:" . $db->connect_error);
}

$statusMsg = '';
$targetDir = "uploads/";
$fileName = $_FILES['file']['name'];
$targetFilePath = $targetDir .$fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
$username = $_SESSION['username'];


if(isset($_POST['submit']) && !empty($_FILES['file']['name'])){
	$allowed = array('pdf');
	if(in_array($fileType, $allowed)){
		if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
			$insert = $db->query("INSERT into documents (filename,username) VALUES ('".$fileName."' , '".$username."')");
			if($insert){
				$statusMsg = "The file " .$fileName. "Has been uploaded succesfully.";
			} else{
				$statusMsg = "File upload Failed, Please try again!";
			}
		}else{
			$statusMsg = "Sorry, there was a problem uplaoding your file";
		}
	}else {
		$statusMsg = "only pdfs are allowed";
	}
}else{
	$statusMsg = "select a file";
}

echo $statusMsg;
header('location: documents.php');

?>
