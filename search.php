<?php
include 'db.php';
include "navbar.php";
?>
<head>
<meta charset="UTF-8">
<meta name="viewport">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/
4.7.0/css/font-awesome.min.css">
</head>
<style>
body{
  height:100vh;
  background-color: #000;
}
.table{
  margin-top:100px;
}
th{
  text-align: center;
  color: deeppink;
  text-transform: full-width;
}
td{
  color:#fff;
  text-align: center;
}
.btn{
  background: transparent;
color: #FFF;
border-radius: 25px;
border-color: deeppink;
cursor: pointer;
position: relative;
overflow: hidden;
width: max-content;
}
span{
    background: deeppink;
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
<body>
<?php
if(isset($_POST['submit'])){
$id=$_POST['search'];
$query = "SELECT * FROM news WHERE ID='$id' OR Title REGEXP '$id' OR Description REGEXP '$id'  OR Category REGEXP '$id'
 OR des2 REGEXP '$id' OR date='$id'";
$query_run = mysqli_query($conn, $query);
?>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead></thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col"></th>
        </tr>
</thead>
<tbody>
    <?php
   if(mysqli_num_rows($query_run)>0){
    while($row= mysqli_fetch_array($query_run)){
    ?>
    <tr>
        <th scope="row"><?php echo $row['ID'];?></th>
        <td><?php echo $row['Title'];?></td>
        <td><?php echo $row['Category'];?></td>
        <td><?php echo "<img src='images/".$row['Image']."'
        style='width: 100px; height: 100px;'>";?></td>
        <td><?php echo $row['Description'];?></td>
        <td><?php echo $row['date'];?></td>
        <td><form  class='' action='full.php' method='POST'>
        <input type='text' name='id' value='<?php echo $row['ID']?>' hidden>
        <button class='btn' id='btn' type='submit' name='full'><span></span>Full News</button>
       </form></td>
    </tr>
    <?php
     }
    }
    else{
        echo "No data available";
    }
    ?>
</tbody>
</table>
</div>
<?php
}
?>
<?php
 if(isset($_POST["submit"])){
  $str = $_POST["search"];
$sql = "SELECT * FROM news where Title='$str'";
$query1 = mysqli_query($conn, $sql);
while($row2= $query1->fetch_assoc()){
  echo "<table>";
  echo "<tr>";
  echo "<th style='color:#fff;'>"."Name"."</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>".$row2['Title']."</td>";
  echo "</tr>";
  echo "</table>";

}
}
?>
<hr>
<hr>
<?php
include 'footer.php';
?>