$(document).ready(function (){

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
          console.log(response);
          $('.comment-container').
          append('<div class="reply_box border p-2 mb-2">\
                    <h6 class="border-bottom d-inline">halima</h6>\
                    <p class="para">Ki obostha</p>\
                    <button class="badge reply_btn">Reply</button>\
                    <button class="badge view_reply_btn">View Reply</button>\
                    <div class="ml-4 reply_section">\
                    </div>\
                  </div>\
                ');
        }
      });
    }
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

});
