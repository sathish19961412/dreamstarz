
<?php
	require_once 'server.php';
	if(ISSET($_POST['edit'])){
		$id = $_POST['id'];
		// $image_name = $_FILES['file']['name'];
		// $image_temp = $_FILES['file']['tmp_name'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $members = $_POST['members'];
        $gender = $_POST['gender'];
        $email =$_POST['email'];
        $mobile = $_POST['mobile'];
        $country=$_POST['country'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $youtubelink=$_POST['youtubelink'];
        $facebooklink=$_POST['facebooklink'];
        $instagramlink=$_POST['instagramlink'];
	
		mysqli_query($conn, "UPDATE `youtubers` set `name`='$name',`age` = '$age', `members` = '$members', `gender` = '$gender' , `email`='$email' ,`mobile`='$mobile' , `country`='$country' , `state`='$state' ,`youtubelink`='$youtubelink' , `facebooklink`='$facebooklink' , `instagramlink`='$instagramlink' WHERE `id` = '$id'") or die();
		echo "<script>alert('User account updated!')</script>";
		header("Location:youtubers_permisssion.php");

	}
?>

