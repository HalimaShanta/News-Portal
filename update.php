<?php

include "db.php";
include "navbar.php";

    
    if(isset($_POST['submit']))
    {
      $id=$_GET['id'];
        $title=$_POST['title'];
        $category=$_POST['cat'];
        $description=$_POST['des'];
        $des2=$_POST['des2'];
        $filename = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];
        $folder = "images/".$filename;
        $sql="UPDATE `news` SET `Title`='$title',`Category`='$category',`Image`='$filename',`Description`= '$description',`des2`= '$des2' WHERE ID='$id' ";
        $res=mysqli_query($conn, $sql);
        if($res)
        {
          move_uploaded_file($tempname,$folder);

          header("location: index.php");

        }
        else{
            echo "NEWS UPDATE ERROR!" .$sql.$conn->error;
          
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
    width: 100%;
    color: #fff;
}
.form1:hover{
border: none;
box-shadow: 0 5px 12px 0 #15F4ee;
}
.choice{
  position: absolute;
  margin-top: 7px;
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
position: absolute;
margin-top: 7px;

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
  left: 42rem;
position: absolute;
margin-top: 7px;
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
    width: 100%;
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
width: 100%;


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
    position: absolute;
    overflow: hidden;
    color: white;
    width:100%;
    margin-top: 5rem;
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
        <label style="position:relative; left:40%;background-color:#009678;border-radius:25px;width: 130px;
text-align: center;">Update Title</label>
        <input type="text" name="title" class="form1" value="<?php echo $_GET['title'];?>">
      </div>
      <div class="form-group">
        <label style="position:relative; left:40%;background-color:#009678;border-radius:25px;width: 230px;
text-align: center;">Update Short Description</label>
        <textarea  name="des" class="formd"><?php echo $_GET['des'];?></textarea>
      </div>
      <div class="form-group">
        <label style="position:relative; left:40%;background-color:#009678;border-radius:25px;width: 200px;
text-align: center;">Update Description</label>
        <textarea name="des2" class="des"><?php echo $_GET['des2'];?></textarea>
      </div>
      <div class="form-group pic">
        <label style="position: relative; top: 2px;">Add Picture</label>
        <input type="file" name="img" class="img" value="<?php echo $_GET['img'];?>">
      </div>
      <div class="select-box choice">
        <span></span><label id="cats" style="font-family: emoji;">Category</label>
        <select name="cat" class="form" value="<?php echo $_GET['cat'];?>">
          <option name="emp ">Select Category</option>
          <option name="nat">National</option>
          <option name="int">International</option>
          <option name="ent">Entertainment</option>
          <option name="job">Job</option>
          <option name="spr">Sports</option>
        </select>

      </div>
      <div class="select-box new">
        <label style="font-family: emoji">Do you want to save it as breaking news?</label>
        <select name="sel" class="form">
          <option name="none">Select</option>
          <option value="yes">Yes</option>
          <option name="no">No</option>
        </select>
      </div>
      <button onclick="con()" type="submit" name="submit" class="btn1"><span></span>Upload</button>
    </form>
  </div>
  <h5 id="head">Update Page</h5>
  <a href="index.php" id="prev" style="margin-left:15px;">Index</a>
  <li class="nav-item">
              <a id="log" class="nav-link" href="home.php">Logout</a>
            </li>

<script>
  var head = document.getElementById("head");
  var home = document.getElementById("nav");
  var search = document.getElementById("search");
  var prev = document.getElementById("prev");
  var log = document.getElementById("log");
  document.getElementById("follow").remove();
  document.getElementById("admin").remove();
  home.insertBefore(head,home.firstchild);
  home.insertBefore(log,home.firstchild);
  document.getElementById("search").replaceWith(prev);
  </script>

<script>
//document.getElementById("nav").remove();
//document.getElementById("up").remove();
//document.getElementById("del").remove();
function con(){ 
      alert('News Update Successfull');
    }

</script>
  
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
    
</body>
</html>