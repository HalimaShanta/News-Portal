<?php
require_once 'db.php';
include 'navbar.php';
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
<body>
    <?php
    if(isset($_POST['full'])){
      $id = $_POST['id'];
$sql2 = "SELECT * FROM news Where ID='$id'";
$query = mysqli_query($conn, $sql2);

 while($row1= $query->fetch_assoc()){

    echo "<div class='break-card'>";
    echo "<h4 class='break-cat'>".$row1['Category']."</h4>";
    echo "<h4 class='break-time'>".$row1['date']."</h4>";
    echo "<h4 class='break-title'>".$row1['Title']."</h4>";
    echo "<img class='break-img'' src='images/".$row1['Image']."'alt='Card image cap'>";
    echo "<div class='full-body'>";
    echo "<p class='break-des'>".$row1['des2']."</p>";
   echo "</div>";
  echo "</div>";
     
 }
}
    ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>