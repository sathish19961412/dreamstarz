<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM youtubers WHERE id=$id");
header('Location:youtubers_permisssion.php');
?>