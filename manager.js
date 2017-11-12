$(document).ready(function() {
    $('#btnSend').click(function(event) {
        var author = $('#author').val();
        var message = $('#txtMessage').val();
        var website = $('#website').val();

        $.ajax({
            type: "POST",
            url: "messageSave.php",
            data: ({
                "message": message,
                "author": author,
                "website": website,
            }),
            success: function(message) {
                $('#txtMessage').val("");
                $.ajax({
                    url: "show.php",
                    success: function(html) {
                        $('#messages').html(html);

                    }
                });
            }
        });
        var formData = new FormData($("#mainForm")[0]);
        $.ajax({
            url: 'pictureSave.php',
            type: "POST",
            data: formData,
            async: false,
            success: function() {
                
            },
            error: function(msg) {
                alert('err!');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
});

setInterval(showMess, 1000);

        function showMess() {
            $.ajax({
                type: "POST",
                url: "show.php",
                success: function(html) {
                    $('#messages').html(html);
                }
            });
        }