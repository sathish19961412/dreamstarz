<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM admin_mens_insertion WHERE id=$id");
header('Location:men_permission.php');
?>