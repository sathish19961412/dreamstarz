<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM admin_models_insertion WHERE id=$id");
header('Location:model_permission.php');
?>