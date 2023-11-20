<?php 


include_once('server.php');

$id=$_GET['id'];

$query=mysqli_query($conn,"DELETE FROM admin_vi_rj_insertion WHERE id=$id");
header('Location:vj_rj_permission.php');
?>