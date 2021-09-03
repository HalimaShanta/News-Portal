<?php
include "db.php";
include "navbar.php";

?>
<html>
<body class="con">
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
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(user-cover2.jpg);
  background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: cover;
}

.title{
  top: 20%;
    /* background-color: #009688; */
    color: #009678;
    position: relative;
    left: 40%;
    font-family: auto;
    font-weight: bold;
    font-size: xxx-large;
    border-bottom-style: double;
    width: max-content;
}
.register{
  position: absolute;
   
    width: 50%;
    
    margin-top: 10%;
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
.form{
  position: relative;
    left: 25%;
    color: white;
    font-family: emoji;
}
.btn1{
  width: 100px;
    border-radius: 15px;
    font-weight: bold;
    border: 1px solid #009688;
    background: transparent;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    color: white;
}
.btn1:hover span{
  width: 100%;
}
.btn1:hover{
  border: none;
}
</style>
<h3 class="title">User Register</h3>
<div class="register" style="margin-left: 10%;">
<form method="POST" action="">
<div class="form-group">
<label>UserName</label>
<input type="text" name="Uname" class="form-control" placeholder="PLease Enter User Name"/>
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="PLease Enter Email"/>
</div>
<div class="form-group">
<label>Password</label>
<input type="password" name="Upass" class="form-control" placeholder="PLease Enter Password"/></div>
<button type="submit" class="btn" name="signUp"><span></span>Sign Up</button>
</form>
<div class="form">
<form  method="POST" action="user.php">
<label>Already Have an Account?</label>
<button type="submit" class="btn1"><span></span>Sign In</button>
</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
if(isset($_POST['signUp'])){
    $sql3 = "INSERT INTO `viewers`(Name, Email, Password) VALUES ('$_POST[Uname]','$_POST[email]','$_POST[Upass]')";
    if (mysqli_query($conn, $sql3)) {
        header("location: home.php");
    } else {
        echo "Error " . mysqli_error($conn);
        }
      
    
   }
?>
<script>
  document.getElementById("register").remove();
  document.getElementById("follow").remove();
  </script>

</body>
</html>