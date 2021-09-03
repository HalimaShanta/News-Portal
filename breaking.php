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
$sql3 = "SELECT * FROM top ORDER BY ID Desc Limit 1";
$query1 = mysqli_query($conn, $sql3);
while($row2= $query1->fetch_assoc()){
 echo "<div class='card-break'>";
 echo "<h2 class='break-h1'>"."<span>Breaking"."</span>"."News"."</h2>"."<br>";
 echo "<h4 class='break-cat'>".$row2['category']."</h4>"."<br>";
 echo "<h3 class='break-title'>".$row2['title']."</h3>"."<br>";
 echo "<img class='break-img'' src='images/".$row2['image']."'alt='Card image cap'>";
 echo "<p class='break-des'>".$row2['des']."</p>"."<br>";
 echo "</div>";
}
?>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
