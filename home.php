<?php
require_once 'db.php';

        ?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/
4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="home.css"></link>
</head>
<?php
include 'navbar.php';
?>
<body id="body">
<?php
if(isset($_SESSION['status'])){
  ?>
  <div class="alert"><?php $_SESSION['status']; ?></div>
  <?php
  unset($_SESSION['status']);
}
?>
<section id="home" class="home">
  <div>
<?php
$sql3 = "SELECT * FROM top ORDER BY ID Desc Limit 1";
$query1 = mysqli_query($conn, $sql3);
while($row2= $query1->fetch_assoc()){
 echo "<div class='break'>";
 echo "<h3 class='h1'>Breaking News:";
 echo $row2['title'];
 echo "<a href='breaking.php' class='btn' style='color: red;
 text-decoration: undeline;-webkit-text-stroke-width: medium;
 text-underline-position: under;' >click here to read the full news<a/>";
 echo "</h3>";
 echo "</div>";
}
echo "<p class='new-p' style=' margin-left: 45%;'>Also Check Out:</p>";
?>

<div style="display: flex;">
<div class="form-class">
  <h3 class="h3">Category</h3>
  <a class="nat" name="btn1" href="#national">National</a>
  <a class="int" name="btn2" href="#international">International</a>
  <a class="ent" name="btn3" href="#entertainment">Entertainment</a>
  <a class="spr" name="btn4" href="#sports">Sports</a>
  <a class="other" name="btn5" href="#others">Others</a>
 </div>  
tion>
 <?php
 /*if(isset($_POST["upload"])){
    
    
  $title= $_POST["title"];
  $cats= $_POST["cat"];
  $desc= $_POST["des"];
  $filename = $_FILES['img']['name'];
$tempname = $_FILES['img']['tmp_name'];

$folder = "images/".$filename;
$new= "INSERT INTO `news`(`Title`, `Category`, `Image`, `Description`) VALUES ('$title',' $cats','$filename','$desc')";
$run=mysqli_query($conn,$new);
if($run){
move_uploaded_file($tempname,$folder);
}
else{
echo "Error " .$new.$conn->error;
}
}*/


$sql2 = "SELECT * FROM news ORDER BY ID LIMIT 0,1";
$query = mysqli_query($conn, $sql2);

 while($row1= $query->fetch_assoc()){
   
   /*echo "<div>";
     echo "<h3>".$row1['Title']."</h3>"."<br>";
     echo "<h4>".$row1['Category']."</h4>"."<br>";
     echo  "<img src='images/".$row1['Image']."'  > "."<br>";
     echo "<p>".$row1['Description']."</p>"."<br>"; 
     echo "</div>";*/
    
    echo "<div class='card'>";
    echo "<h4 class='cat'>".$row1['Category'];
    echo "<p class='time' style='font-size: small;float:right;'>".$row1['date']."</p>";
    echo "</h4>";
    echo "<img class='card-img-top'' src='images/".$row1['Image']."'alt='Card image cap'>";
    echo "<div class='card-body'>";
    echo "<h4 class='card-title'>".$row1['Title']."</h4>";
    echo "<p class='card-text'>".$row1['Description']."</p>";
    echo "<form  class='' action='full.php' method='POST'>";
    echo "<input type='text' name='id' value='";
    echo $row1['ID'];
    echo "'hidden>";
    echo "<input style='border-radius: 25px;
    background: transparent;
    color: #fff;
    width: 100%;
}' id='btn' type='submit' name='full' value='Full News'>";
    echo "</form>";
   echo "</div>";
  echo "</div>";
     
 }
 
 
 $sql3 = "SELECT * FROM `news` ORDER BY ID DESC LIMIT 4";
$query3 = mysqli_query($conn, $sql3);

while($row1= $query3->fetch_assoc()){
  echo "<div class='small grid'>";
  echo "<img class='card-img-top'' src='images/".$row1['Image']."'alt='Card image cap'>";
  // echo "<h4 class='card-title'>".$row1['Title']."</h4>";
  echo "<p class='small-text'>".$row1['Description']."</p>";
  echo "<form  class='' action='full.php' method='POST'>";
  echo "<input type='text' name='id' value='";
  echo $row1['ID'];
  echo "'hidden>";
  echo "<input style='border-radius: 25px;
  background: transparent;
  color: #fff;
  width: 100%;
' id='btn' type='submit' name='full' value='Full News'>";
  echo "</form>";
echo "</div>";
// echo "</div>";
}



 ?> 
 </div>
</div>
</section>

 <hr>
 <hr>
 <section class="national" id="national">
   <h1 class="title"><span>Nati</span>onal</h1>
<?php
   $sql = "SELECT * FROM national";
   $query = mysqli_query($conn, $sql);

 while($row= $query->fetch_assoc()){

    echo "<div class='nat-card'>";
    echo "<h4 class='nat-cat'>".$row['title']."</h4>";
    echo "<img class='nat-img'' src='images/".$row['image']."'alt='Card image cap'>";
    echo "<div class='nat-body'>";
    echo "<p class='nat-text'>".$row['des']."</p>";
    echo "<h4 class='nat-time' style='font-size:small;'>".$row['date']."</h4>";
    echo "<form  class='' action='#full' method='POST'>";
    echo "<input type='text' name='id' value='";
    echo $row['id'];
    echo "'hidden>";
    echo "<input id='btn' type='submit' name='fullnews' value='Full News'
    style='border: radius 25px;width:100%;background:transparent;color:#009678;'>";
    echo "</form>";
    // echo "<a href='#full' class='btn btn-outline-info'>Full news";
    echo "</a>";
    echo "</div>";
    echo "</div>";   
 }
?>
</section>

<hr>
 <hr>
 <section class="international" id="international">
   <h1 class="title"><span>Inter</span>Nati<span>onal</span></h1>
<?php
   $sql4 = "SELECT * FROM international ORDER BY ID DESC";
   $query = mysqli_query($conn, $sql4);

 while($row3= $query->fetch_assoc()){

    echo "<div class='nat-card'>";
    echo "<h4 class='nat-cat'>".$row3['title']."</h4>";
    echo "<img class='nat-img'' src='images/".$row3['image']."'alt='Card image cap'>";
    echo "<div class='nat-body'>";
    echo "<p class='nat-text'>".$row3['des']."</p>";
    echo "<h4 class='nat-time' style='font-size:small;'>".$row3['date']."</h4>";
    echo "<form  class='' action='#inter' method='POST'>";
    echo "<input type='text' name='id' value='";
    echo $row3['id'];
    echo "'hidden>";
    echo "<input id='btn' type='submit' name='international' value='Full News'
    style='border: radius 25px;width:100%;background:transparent;color:#009678;'>";
    echo "</form>";
    // echo "<a href='#full' class='btn btn-outline-info'>Full news";
    echo "</a>";
    echo "</div>";
    echo "</div>"; 
     
 }
 ?>
</section>

<hr>
<hr>
<section class="entertainment" id="entertainment">
   <h1 class="title"><span>Enter</span>tain<span>Ment</span></h1>
<?php
   $sql4 = "SELECT * FROM entertainment ORDER BY ID DESC";
   $query = mysqli_query($conn, $sql4);

 while($row3= $query->fetch_assoc()){

    echo "<div class='nat-card'>";
    echo "<h5 class='nat-cat'>".$row3['title']."</h5>";
    echo "<img class='nat-img'' src='images/".$row3['image']."'alt='Card image cap'>";
    echo "<div class='nat-body'>";
    echo "<p class='nat-text'>".$row3['des']."</p>";
    echo "<h4 class='nat-time' style='font-size:small;'>".$row3['date']."</h4>";
    echo "<form  class='' action='#enter' method='POST'>";
    echo "<input type='text' name='id' value='";
    echo $row3['id'];
    echo "'hidden>";
    echo "<input id='btn' type='submit' name='entertainment' value='Full News'
    style='border: radius 25px;width:100%;background:transparent;color:#009678;'>";
    echo "</form>";
    // echo "<a href='#full' class='btn btn-outline-info'>Full news";
    echo "</a>";
    echo "</div>";
    echo "</div>"; 
     
 }
 ?>
</section>

<hr>
<hr>
<section class="sports" id="sports">
   <h1 class="title"><span>Spo</span>Rts</h1>
<?php
   $sql4 = "SELECT * FROM sports ORDER BY ID DESC";
   $query = mysqli_query($conn, $sql4);

 while($row3= $query->fetch_assoc()){

    echo "<div class='nat-card'>";
    echo "<h5 class='nat-cat'>".$row3['title']."</h5>";
    echo "<img class='nat-img'' src='images/".$row3['image']."'alt='Card image cap'>";
    echo "<div class='nat-body'>";
    echo "<p class='nat-text'>".$row3['des']."</p>";
    echo "<h4 class='nat-time' style='font-size:small;'>".$row3['date']."</h4>";
    echo "<form  class='' action='#sport' method='POST'>";
    echo "<input type='text' name='id' value='";
    echo $row3['id'];
    echo "'hidden>";
    echo "<input id='btn' type='submit' name='sport' value='Full News'
    style='border: radius 25px;width:100%;background:transparent;color:#009678;'>";
    echo "</form>";
    // echo "<a href='#full' class='btn btn-outline-info'>Full news";
    echo "</a>";
    echo "</div>";
    echo "</div>"; 
     
 }
 ?>
</section>


<hr>
<hr>
<section class="others" id="others">
   <h1 class="title"><span>Oth</span>Ers</h1>
<?php
   $sql4 = "SELECT * FROM other ORDER BY ID DESC";
   $query = mysqli_query($conn, $sql4);

 while($row3= $query->fetch_assoc()){

    echo "<div class='nat-card'>";
    echo "<h5 class='nat-cat'>".$row3['title']."</h5>";
    echo "<img class='nat-img'' src='images/".$row3['image']."'alt='Card image cap'>";
    echo "<div class='nat-body'>";
    echo "<p class='nat-text'>".$row3['des']."</p>";
    echo "<h4 class='nat-time' style='font-size:small;'>".$row3['date']."</h4>";
    echo "<form  class='' action='#other' method='POST'>";
    echo "<input type='text' name='id' value='";
    echo $row3['id'];
    echo "'hidden>";
    echo "<input id='btn' type='submit' name='other' value='Full News'
    style='border: radius 25px;width:100%;background:transparent;color:#009678;'>";
    echo "</form>";
    // echo "<a href='#full' class='btn btn-outline-info'>Full news";
    echo "</a>";
    echo "</div>";
    echo "</div>"; 
     
 }
 ?>
</section>
<hr>
<hr>

<section class="full" id="full" style="margin-top: 20%;">
<h1 class="title"><span>Nati</span>onal</h1>
<?php

if(isset($_POST['fullnews'])){
  $id=$_POST["id"];
$sql2 = "SELECT * FROM national WHERE id='$id' ";
$query = mysqli_query($conn, $sql2);

while($row= $query->fetch_assoc()){

  echo "<div class='break-card'>";
  // echo "<h4 class='break-cat'>".$row1['Category']."</h4>";
  echo "<h4 class='break-cat'>".$row['title'];
  echo "<h4 class='break-time'>".date('F jS , y',strtotime($row['date']))."</h4>";
  echo "</h4>";
  echo "<p class='break-des'>".$row['des']."</p>";
  echo "<img class='break-img'' src='images/".$row['image']."'alt='Card image cap'>";
  echo "<div class='full-body'>";
  echo "<p class='break-des'>".$row['des2']."</p>";
 echo "</div>";
echo "</div>";
}
}
?>
</section>

<section class="inter" id="inter" style="margin-top: 20%;">
<h1 class="title"><span>Inter</span>nati<span>onal</span></h1>
<?php

if(isset($_POST['international'])){
  $id=$_POST["id"];
$sql2 = "SELECT * FROM international WHERE id='$id' ";
$query = mysqli_query($conn, $sql2);

while($row= $query->fetch_assoc()){

  echo "<div class='break-card'>";
  // echo "<h4 class='break-cat'>".$row1['Category']."</h4>";
  echo "<h4 class='break-cat'>".$row['title'];
  echo "<h4 class='break-time'>".date('F jS , y',strtotime($row['date']))."</h4>";
  echo "</h4>";
  echo "<p class='break-des'>".$row['des']."</p>";
  echo "<img class='break-img'' src='images/".$row['image']."'alt='Card image cap'>";
  echo "<div class='full-body'>";
  echo "<p class='break-des'>".$row['des2']."</p>";
 echo "</div>";
echo "</div>";
}
}
?>
</section>


<hr>
<hr>
<section class="enter" id="enter" style="margin-top: 20%;">
<h1 class="title"><span>Enter</span>tain<span>Ment</span></h1>
<?php

if(isset($_POST['entertainment'])){
  $id=$_POST["id"];
$sql2 = "SELECT * FROM entertainment WHERE id='$id' ";
$query = mysqli_query($conn, $sql2);

while($row= $query->fetch_assoc()){

  echo "<div class='break-card'>";
  // echo "<h4 class='break-cat'>".$row1['Category']."</h4>";
  echo "<h4 class='break-cat'>".$row['title'];
  echo "<h4 class='break-time'>".date('F jS , y',strtotime($row['date']))."</h4>";
  echo "</h4>";
  echo "<p class='break-des'>".$row['des']."</p>";
  echo "<img class='break-img'' src='images/".$row['image']."'alt='Card image cap'>";
  echo "<div class='full-body'>";
  echo "<p class='break-des'>".$row['des2']."</p>";
 echo "</div>";
echo "</div>";
}
}
?>
</section>


<hr>
<hr>
<section class="sport" id="sport" style="margin-top: 20%;">
<h1 class="title"><span>Spo</span>Rts</h1>
<?php

if(isset($_POST['sport'])){
  $id=$_POST["id"];
$sql2 = "SELECT * FROM sports WHERE id='$id' ";
$query = mysqli_query($conn, $sql2);

while($row= $query->fetch_assoc()){

  echo "<div class='break-card'>";
  // echo "<h4 class='break-cat'>".$row1['Category']."</h4>";
  echo "<h4 class='break-cat'>".$row['title'];
  echo "<h4 class='break-time'>".date('F jS , y',strtotime($row['date']))."</h4>";
  echo "</h4>";
  echo "<p class='break-des'>".$row['des']."</p>";
  echo "<img class='break-img'' src='images/".$row['image']."'alt='Card image cap'>";
  echo "<div class='full-body'>";
  echo "<p class='break-des'>".$row['des2']."</p>";
 echo "</div>";
echo "</div>";
}
}
?>
</section>

<hr>
<hr>
<section class="other" id="other" style="margin-top: 20%;">
<h1 class="title"><span>OTH</span>ER</h1>
<?php

if(isset($_POST['other'])){
  $id=$_POST["id"];
$sql2 = "SELECT * FROM other WHERE id='$id' ";
$query = mysqli_query($conn, $sql2);

while($row= $query->fetch_assoc()){

  echo "<div class='break-card'>";
  // echo "<h4 class='break-cat'>".$row1['Category']."</h4>";
  echo "<h4 class='break-cat'>".$row['title'];
  echo "<h4 class='break-time'>".date('F jS , y',strtotime($row['date']))."</h4>";
  echo "</h4>";
  echo "<p class='break-des'>".$row['des']."</p>";
  echo "<img class='break-img'' src='images/".$row['image']."'alt='Card image cap'>";
  echo "<div class='full-body'>";
  echo "<p class='break-des'>".$row['des2']."</p>";
 echo "</div>";
echo "</div>";
}
}
?>
</section>
<br>
<br>
<?php
include 'footer.php';
?>

<script>
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("nav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>