<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM admin_artist_insertion WHERE id=$id");
header('Location:artist_permission.php');
?>