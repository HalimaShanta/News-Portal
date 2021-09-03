<?php

/*session_start();
if(isset($_SESSION['username'])){
   echo "wel".$_SESSION['username'];
    header("location: index.php");
    
}*/
require_once "db.php";
include "navbar.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
   $username=$_POST['username'];
   $pass=$_POST['password'];
   $sql="SELECT * FROM admin WHERE UserName='$username' and Password='$pass'";
   $result=mysqli_query($conn,$sql);
   $count=mysqli_num_rows($result);
   
   if($count==1)
   {
    $ans=mysqli_fetch_array($result);
     $_SESSION['username']=$username;
     header('location: index.php');
   }
   else{
     $msg="Wrong Password or Username";
   }
}

?>


<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
.con{
  width: 100%;
  height: 100vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(admin-cover2.jpg);
  background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: cover;
}

.title{
  top: 25%;

color: #009678;
position: relative;
left: 40%;
font-family: auto;
font-weight: bold;
font-size: xxx-large;
border-bottom-style: double;
width: max-content;
}
.admin{
  position: absolute;
   
    width: 50%;
    
    margin-top: 14%;
    position: relative;
    left: 15%;
    border: double;
    
    
}
.form-group{
  color: aqua;
    font-family: fangsong;
    font-size: larger;
}
.form-control{
  background: transparent;
    border-block-start: none;
    border-left: none;
    border-right: none;
    border-bottom-color: aqua;
}
.btn{
  width: 200px;
  padding: 15px 0;
  text-allign: center;
  margin:20px 10px;
  border-radius: 25px;
  font-weight: bold;
  border: 2px solid #009688;
  background: transparent;
  color: #fff;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
span{
  background: #009678;
  height: 100%;
  width: 0;
  border-radius: 25px;
  position: absolute;
  left:0;
  bottom: 0;
  z-index: -1;
  transition: 0.5s;
}
.btn:hover span{
  width: 100%;
}
.btn:hover{
  border: none;
}
</style>
<body class="con">

<h3 class="title">Admin Log In</h3>
<div class="admin" style="margin-left: 10%; margin-top:">



<form action="" method="post">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <button type="submit" class="btn"><span></span>Log In</button>
</form>



</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    document.getElementById("admin").remove();
    </script>
  </body>
</html>