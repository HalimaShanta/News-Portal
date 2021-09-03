<?php
include "db.php";
include "navbar.php";
if(isset($_POST["submit"])){
  $brk = $_POST['sel'];
  $title= $_POST["title"];
  $cats= $_POST['cat'];
  $desc= $_POST['des'];
  $des = $_POST['des2'];
  $filename = $_FILES['img']['name'];
  $tempname = $_FILES['img']['tmp_name'];
  $folder = "images/".$filename;
  $new= "INSERT INTO news(Title,Category,Image,Description,des2) VALUES  ('$title','$cats','$filename','$desc','$des')";
  $run=mysqli_query($conn,$new);
  if($run){
  move_uploaded_file($tempname,$folder);
  echo'<h5 style="color:green;">News Added Successfully!</h5>';
  header('location:index.php');
  }
  else{
  echo "Error " .$new.$conn->error;
  }
  if($brk == "yes"){
  $new2="INSERT INTO `top`( `title`) VALUES ('$title')";
  $run2 = mysqli_query($conn,$new2);
  if($run2){
    echo "Title added";
  }
  }
  else{
    echo "Error " .$new.$conn->error;
  } 
}

?>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<style>
   input{
        margin-bottom:1.5%;
    } 
  
    .form-group{
  color: aqua;
    font-family: fangsong;
    font-size: larger;
}
.cont{
  position: absolute;
  height: 65%;
    width: 70%;
    top: 150px;
      left: 9%;
      overflow: hidden;
      
}
.cont:hover{
  border: none;
  box-shadow: 0 5px 50px 0 crimson;
}
label{
  color: bisque;
    position: relative;
    font-family: emoji;
    /* border-bottom-style: outset; */
    border-width: 100%;
    width: -webkit-fill-available;
}
.form1{
  background: transparent;
    border-block-start: none;
    border-left: none;
    border-right: none;
    border-bottom-color: aqua;
    position: relative;
    /* bottom: 1px; */
    width: -webkit-fill-available;
    color: #fff;
}
.form1:hover{
border: none;
box-shadow: 0 5px 12px 0 #15F4ee;
}
.choice{
  position: relative;
  float: right;
  bottom: 40px;
}
.choice select{
    position: relative;
    border-radius: 40px;
    /* appearance: none; */
    color: #931dff;
    border: 1px solid #616161;
    background: transparent;
}
.choice select::ms-expand{
  /* display: none; */
}
.choice select:hover{
  outline: none;
  box-shadow: 0 5px 50px 0 #931dff;
}
select-box label{
  position: absolute;
  z-index: 1;
  display: inline-block;
  font:600 22px Arial;
  color: #750dd4;
  top: 16px;
  left: 16px;
}
 option{
  background-color: black;
    /* border-bottom: aliceblue; */
    color: greenyellow;
    font-family: cursive;
}
.new{
  left: 250px;
position: relative;
top: 12rem;
}
.new select{
  background: transparent;
border-radius: 25px;
color: #931dff;
}
.new select:hover{
  outline: none;
  box-shadow: 0 5px 50px 0 #931dff;
}

.pic{
  float: right;
left: 210px;
position: relative;
top: 10rem;
}
.img{
  position: relative;
    color: crimson;
    border-radius: 40px;
    border: 2px solid #34314c;
    font-family: cursive;
    font-size: x-small;
}
.img:hover{
  outline: none;
  box-shadow: 0 5px 50px 0 crimson;
}

.formd{

    height: 10%;
    background: transparent;
    border-left: none;
    border-right: none;
    border-top: none;
    border-bottom-color: aqua;
    color: #fff;
    position: relative;
    top: 10rem;
}
.formd:hover{
  outline: none;
  box-shadow: 0 5px 12px 0  aqua;
}
.des{

height: 10%;
background: transparent;
border-left: none;
border-right: none;
border-top: none;
border-bottom-color: aqua;
color: #fff;
position: relative;

}
.des:hover{
outline: none;
box-shadow: 0 5px 12px 0  aqua;
}
.btn1{
  width: -webkit-fill-available;
    border-radius: 15px;
    font-weight: bold;
    border: 1px solid #009688;
    background: transparent;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    color: white;
    width:100%;
    top: 13rem;
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
.btn1:hover span{
  width: 100%;
}
.btn1:hover{
  border: none;
}
.log{
          width: 100px;
    padding: 10px 0;
    text-allign: center;
    margin: 10px 10px;
    font-weight: bold;
    background: transparent;
    color: #009678;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    left: 850%;
    top: 15%;
    font-size: x-large;
    font-family: cursive;
        }
        .log:hover span{
  width: 100%;
}
.log:hover{
  border: none;
  box-shadow: 0 5px 50px 0 #15F4ee;
}
#head{
  font-style: italic;
font-size: x-large;
font-weight: bold;
color: #e81111;

font-family:fantasy;
}
    
    </style>
<body style="background-color: black;">
  <div class="cont" style="margin-left: 10%;">
    <form method="POST" action="" enctype="multipart/form-data">
      <!-- <input type="hidden" name="id"> -->
      <div class="form-group">
        <input type="text" name="title" class="form1" placeholder="Add a Title...">
      </div>
      <div class="select-box choice">
        <span></span><label id="cats" style="font-family: emoji;">Category</label>
        <select name="cat" class="form">
          <option name="emp ">Select Category</option>
          <option name="nat">National</option>
          <option name="int">International</option>
          <option name="ent">Entertainment</option>
          <option name="job">Job</option>
          <option name="spr">Sports</option>
        </select>

      </div>
      <div class="form-group pic">
        <label style="position: relative; top: 2px;">Add Picture</label>
        <input type="file" name="img" class="img">
      </div>
      <div class="form-group">
        <input type="desc" name="des" class="formd" placeholder="Add short description.." >
      </div>
      <div class="form-group">
        <input type="desc" name="des2" class="des" placeholder="Add description.." >
      </div>
      <div class="select-box new">
        <label style="font-family: emoji">Do you want to save it as breaking news?</label>
        <select name="sel" class="form">
          <option name="none">Select</option>
          <option value="yes">Yes</option>
          <option name="no">No</option>
        </select>
      </div>
      <button type="submit" name="submit" class="btn1"><span></span>Upload</button>
    </form>
  </div>
  <li class="nav-item">
              <a id="log" class="nav-link" href="home.php">Logout</a>
            </li>
            <h5 id="head">Add Page</h5>
  <a href="index.php" id="prev" style="margin-left:15px;">Index</a>

<script>

      var head = document.getElementById("head");
  var home = document.getElementById("nav");
  var search = document.getElementById("search");
  var prev = document.getElementById("prev");
  var log = document.getElementById("log");
  document.getElementById("admin").remove();
  document.getElementById("follow").replaceWith(log);
  home.insertBefore(head,home.firstchild);
  home.insertBefore(log,home.firstchild);
  document.getElementById("search").replaceWith(prev);
  </script>

</body>
</html>