<?php

include "db.php";
include "navbar.php";

?>
<html>
 <head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script> -->
 

</head>

 <style>
 .index{
  padding-top: 20px;
 }
      h2{
            align-self: center;
        }
        #b{
            
            background-color: rgb(245, 104, 99);
           
            
        }
        .dropdown{
            align:center;

        }
        /*form,f{
            margin-top: 20%;
            /*margin-left: -10%;
            margin-right: -10%;
            padding-left: 50px;
            
            
        }*/
        /* input{
            margin-top: 15%;
            padding-left: 0%;
            padding-right: 0%;
            position: 40%;
        } */
        img{
         height: 450px;
         width: 750px; 
        } 
        .table{
          border: solid;
    border-color: #009678;
    /* margin-top: 3%; */
        }  
        .tr{
          color: #52f1bd;
    font-size: larger;
    font-family: auto;
    font-style: oblique;
    background-color: darkslategray;
    text-align: center;
        }
        .btn1{
    text-allign: center;
    font-weight: bold;
    background: transparent;
    color: #fff;
    cursor: pointer;
    overflow: hidden;
    left: 450%;
    top: 15%;
    font-size: x-large;
        }
        .btn{
          width: 100px;
  padding: 10px 0;
  text-allign: center;
  margin:10px 10px;
  border-radius: 25px;
  font-weight: bold;
  border: 2px solid #15F4ee;
  background: transparent;
  color: #009678;
  cursor: pointer;
  position: relative;
  overflow: hidden;
        }
        span{
          background: #15F4ee;
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
  box-shadow: 0 5px 50px 0 #15F4ee inset, 0 5px 50px 0 #15F4ee;
}
     
 </style>
 <body style="background-color: black;">
 
 <li class="nav-item">
              <a id="log" class="nav-link" href="home.php">Logout</a>
            </li>
            <ul class="nav-list">
            <li class="nav-item dropdown">
              <a id="add" class="btn1" style="color: brown;" href="add.php">Add News!</a> 
            </li>  
</ul>

  <div class="index">
  <table class="table table-bordered" id="myTable">
  <thead class="thead-light">
    <tr class="tr">
    <!--th scope="col">ID</th-->
     
      <th scope="col">#ID</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
  
$sql2 = "SELECT * FROM news ORDER BY ID ";
$query = mysqli_query($conn, $sql2);

 while($row1= $query->fetch_assoc()){
   echo "<form action='' method='post'>";
   echo "<tr style='font-family: auto;'>";
   echo "<td class='table-primary'>".$row1['ID']."</td>";
   echo "<td class='table-primary'>".$row1['Title']."</td>";
   echo "<td class='table-secondary'>" .$row1['Category']."</td>";
   echo "<td class='table-success'>"."<img src='images/".$row1['Image']."'
   style='width: 100px; height: 100px;'>"."</td>";
   echo "<td class='table-danger'>".$row1['Description']."</td>";
   echo "<td class='table-danger'>".$row1['date']."</td>";
   echo '<td class="table-warning"><a href="update.php?id='.$row1['ID'].'& title='.$row1['Title'].' & 
   cat='.$row1['Category'].' & img='.$row1['Image'].'& des='.$row1['Description'].'& des2='.
   $row1['des2'].'" class="btn btn-primary"
    name="update" style="color: green;"><span></span>Update</a></td>';
   echo '<td class="table-info"><button onclick="sure()" class="btn btn-danger"><a href="delete.php?id='.
   $row1['ID'].'">Delete</a></button></td>';
   echo "</tr>";
   echo "</form>";
 }
 
?> 
</tbody>
</table>
  </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script>
    function sure(){ 
      alert('Do you want to delete this news?');
      location.reload();
    }
   
    var add = document.getElementById("add");
    var home = document.getElementById("nav");
    document.getElementById("follow").replaceWith(log);
    home.insertBefore(add,home.lastchild);
    document.getElementById("admin").remove();

    </script>
</body>
</html>