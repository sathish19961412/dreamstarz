<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM admin_kids_insertion WHERE id=$id");
header('Location:kids_permission.php');
?>