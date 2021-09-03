<?php
include 'db.php';
$id = $_GET['id'];

$sql = "DELETE FROM news WHERE ID='$id' ";
mysqli_query($conn,$sql);


header('location:index.php');
?>