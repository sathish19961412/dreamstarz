<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM memes_creater WHERE id=$id");
header('Location:memes_permission.php');
?>