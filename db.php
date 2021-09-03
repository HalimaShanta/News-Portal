<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
function formatDate1($date){
    return date('Y-m-d',strtotime($date));
}
function formatDate2($date2){
    return date('g:i a',strtotime($date2));
}
function formatDate3($date3){
    return date('l',strtotime($date3));
}
?>