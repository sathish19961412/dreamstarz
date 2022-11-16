<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM admin_womens_insertion WHERE id=$id");
header('Location:womens_permission.php');
?>