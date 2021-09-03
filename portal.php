<?php
session_start();
include "db.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/
4.7.0/css/font-awesome.min.css">
</head>

<style>
body{
  background-color: black;
    color: aliceblue;
    font-family: emoji;
}
.news{
  margin-left: 40px;
}
.div1{
  border: 2px solid;
  float: left;
  margin-left: 10px;
  width: 470px;
  padding-bottom: 15px;
  margin-bottom: 5px;

}
.img{
  width: 220px;
  height:160px;
  float: left;
  margin-left: 20px;
  margin-top: 10px;
}
.div2{
  width: 200px;
  border: 1px solid black;
  max-height: 150px;
  overflow: hidden;
  float: left;
  margin-top: 10px;
  margin-left: 10px;
  padding:1px;
  font-weight: bold;
}
.div3{
  float: left;
  margin-top:10px;
  margin-right: 200px;

}
#label1{
  font-size: 20px;
  font-weight: bold;
  margin-left: 60px;
}
#label2{
  font-size: 20px;
  font-weight: bold;
  margin-left: 14px;
}
form{
    margin-top: -80px;
    float: right;
    margin-right: 80px;

  }
  .navbar{
      width: 100%;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 1;
      background: #000;
      position: fixed;
      border-bottom:1px solid;
   }
  .logo{
      width: 120px;
      cursor: pointer;
  }
  .navbar ul li{
      list-style: none;
      display: inline-block;
      margin: 0 20px;
      position : relative;
  }
  .navbar ul li a{
      text-decoration: none;
      color: #fff;
      text-transform: uppercase;
  }
  .navbar ul li::after{
      content:'' ;
      height: 3px;
      width: hidden;
      background: #009678;
      position: absolute;
      left: 0;
      bottom: -5px;
      transition: 0.5s;
  }
  .navbar ul li:hover::after{
      width: 100%
  } 
  #fullnews{
    text-allign: center;
    font-weight: bold;
    background: transparent;
    color: #009678;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    top: 15%;
    font-size: x-large;
    font-family: cursive;
    border-radius: 25px;
    border: 1px solid #009678;
 
  }
  #fullnews span{
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
#fullnews:hover span{
  width: 100%;
}
#fullnews:hover{
  border: none;
  color: #fff;
}
.follow{
     
  margin-top: 9%;
    font-size: x-large;
    color: yellow;
    /* margin-left: 1%; */
    display: grid;
      } 
       .fa{
        margin: 5px;
    border: solid;
    border-radius: 10px;
    padding: 3px;
    cursor: pointer;
      }
      .fa:hover{
        box-shadow: 0 5px 50px 0 #009678;
      }
 .cardy{
   float: right;
   width: 330px;
 }
 .card-body{
  position: absolute;
top: 90px;
 }
 h3{
  color: cadetblue;
 }
 .add_comment{
  background: transparent;
color: #fff;
border: double;
 }
 .comment{
  float: right;
  border-radius: 25px;
  background: transparent;
color: #fff;
cursor: pointer;
    position: relative;
    overflow: hidden;
 }
 .comment span{
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
 .comment:hover span{
  width: 100%;
}
.comment:hover{
  border: none;
  color: #fff;
}
.reply_box{
  background-color: maroon;
}
.name span{
  font-size: larger;
  color: gold;
text-transform: uppercase;
border-bottom: double gold;
}
.time{
  float:right;
}
.user{
  /* font-size: 2.5rem; */
font-style: italic;
font-family: fantasy;
font-weight: bolder;
color: brown;
}


  

</style>
<body>
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" style="color:aqua" href="home.php">Welcome To EWU Online News Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link"style="color:aqua;" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link user"  href="#"><?php if(isset($_SESSION['authuser_name'])){ echo $_SESSION['authuser_name'];}?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:aqua;" href="logout.php">LogOut</a>
        </li> 
      </ul>
    </div>
  </nav>
<br>
<br>
<div class="follow" style='position: fixed;'>
 <a href="#" class="fa fa-facebook" style="color: blue;"> </a>
 <a href="#" class="fa fa-twitter" style="color: aqua;"></a>
 <a href="#" class="fa fa-linkedin" style="color: navy;"></a>
 <a href="#" class="fa fa-youtube" style="color: red;"></a>
 </div> 
 <br>
 <br>
 
 <div class="news">
<?php
$sql2 = "SELECT * FROM news ORDER BY ID";
$query = mysqli_query($conn, $sql2);

 while($row1= $query->fetch_assoc()){
  ?>
  <div class="div1">
    <img class="img" src="images/<?php echo $row1['Image'];?>">
    <div class="div2">
      <?php echo $row1['Description']; ?>
    </div>
    <div class="div3">
      <label id="label1"><?php echo formatDate3($row1['date']); ?></label><br><br>
      <label id="label2"><?php echo formatDate1($row1['date']); ?></label>
      <label id="label3"><?php echo formatDate2($row1['date']); ?></label>
    </div>
    <form class="" action="full.php" method="post">
      <input type='text' name='id' value='<?php echo $row1["ID"]; ?>' hidden>
      <button id="fullnews" type="submit" name="full"><span></span>Full News</button>
    </form>
  </div>

<?php     
 } 
?> 
</div>
 
 <div class="cardy">
   <div class="card-body">
     <h3 class="com">Write a Comment</h3>
     <div id="error_status"></div>
     <textarea type="text" name="comm" class="add_comment" id="co" placeholder="write a comment"></textarea><br>
     <button type="submit" class="comment"><span></span>Comment</button>
     <hr>
     <div class="comment-container">
     </div>
    </div>
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
<script>
  $(document).ready(function (){
    $('.comment').click(function(e){
        e.preventDefault();
        var msg = $('.add_comment').val();
        if($.trim(msg).length == 0){
          error_msg = "Please type a comment";
          $('#error_status').text(error_msg);
        }else{
          error_msg = "";
          $('#error_status').text(error_msg);
        }
        if(error_msg != ''){
          return false;
        }
        else{
          var data ={
            'msg': msg,
            'add_comment': true,
          };
          $.ajax({
            type: "POST",
            url: "comment.php",
            data: data,
            success: function (response){
              alert(response);
              $('.add_comment').val("");
            }
          });

        }
    });
    load_comment();
    function load_comment(){
      $.ajax({
        type: "POST",
        url: "comment.php",
        data: {
          'comment_load_data': true
        },
        success: function(response){
          $('.comment-container').html("");
          // console.log(response);
          $.each(response, function(key, value){ 
            $('.comment-container').
            append('<div class="reply_box border p-2 mb-2">\
                <h6 class="d-inline name"><span>'+value.user['Name'] +'</span></h6>\
                <p class="border-bottom time">'+value.cmt['commented_on'] +'</p>\
                <p class="para">'+value.cmt['Comment'] +'</p>\
                <button value="'+value.cmt['id'] + '" class="badge btn btn-success reply_btn">Reply</button>\
                <button value="'+value.cmt['id'] + '" class="badge btn btn-primary view_reply_btn">View Reply</button>\
                <div class="ml-4 reply_section">\
                </div>\
              </div>\
            ');
          });
        }
      });
    }
    $(document).on('click','.reply_btn', function(){
      var thisClicked = $(this);
      var cmt_id = thisClicked;
      $('.reply_section').html("");
      thisClicked.closest('.reply_box').find('.reply_section').
      html('<input type="text" class="reply_msg form-control my-2" placeholder="reply">\
              <div class="text-end">\
                <button class="btn btn-sm btn-primary reply_add_btn">Reply</button>\
                <button class="btn btn-sm btn-danger reply_cancel_btn">Cancel</button>\
              </div>');
    });
    $(document).on('click', '.reply_cancel_btn', function () {
      $('.reply_section').html("");
    });
    $(document).on('click','.reply_add_btn', function(e) {
      e.preventDefault();

      var thisClicked = $(this);
      var cmt_id = thisClicked.closest('.reply_box').find('.reply_btn').val();
      var reply = thisClicked.closest('.reply_box').find('.reply_msg').val();

      var data ={
        'comment_id': cmt_id,
        'reply_msg': reply,
        'add_reply': true
      };

      $.ajax({
        type: "POST",
        url: "comment.php",
        data: data,
        success: function (response){
          alert(response);
          $('.reply_section').html("");
        }
      });
    });

    $(document).on('click', '.view_reply_btn', function(e){
      e.preventDefault();
      var thisClicked = $(this);
      var cmt_id = thisClicked.val();
      $.ajax({
        type: "POST",
        url: "comment.php",
        data: {
          'cmt_id': cmt_id,
          'view_comment_data': true
        },
        success: function(response){
          // console.log(response);
            $('.reply_section').html("");

            $.each(response, function (key, value){
            thisClicked.closest('.reply_box').find('.reply_section').
            append('<div class="sub_reply_box border-bottom p-2 mb-2">\
                      <h6 class="border-bottom d-inline">'+value.user['Name']+' : '+value.cmt['commented_on']+'</h6>\
                      <p class="para">'+value.cmt['reply_msg']+'</p>\
                      <button class="btn btn-sm btn-danger sub_cancel_btn">Cancel</button>\
                      <div class="ml-4 sub_reply_section">\
                      </div>\
                    </div>\
      ');
    });
    $(document).on('click', '.sub_cancel_btn', function () {
      $('.reply_section').html("");
    });
        }
    });
  });

});
</script>
</body>
</html>