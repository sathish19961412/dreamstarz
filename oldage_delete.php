<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM admin_oldage_insertion WHERE id=$id");
header('Location:oldage_permission.php');
?>