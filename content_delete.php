<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM content_creater WHERE id=$id");
header('Location:content_permission.php');
?>