<?php 


include_once('server.php');

$did=$_GET['del'];

$query=mysqli_query($conn,"DELETE FROM registeration WHERE artistid=$did");
header('Location:artist.php');
?>