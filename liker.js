         $('.likeButton').click(function (event) {

             var messageId = $(this).attr("id");
             var text = $(this).html();
             var data = text.split(":");
             data[1] = Number.parseInt(data[1]) + 1;
             $(this).html(data[0] + ":" + data[1]);

             $.ajax({
                 type: "POST",
                 url: "like.php",
                 data: ({
                     "messageId": messageId
                 }),
                 success: function () {

                 }
             });
         });
