<?php
require("conn.php");
session_start();

$query = mysqli_query($conn, "SELECT * FROM `mess` ORDER BY `id` desc");
$row_likes = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `likes` ORDER BY `id` desc"));

while($row = mysqli_fetch_assoc($query)){
	$id = $row['id'];
	$message = $row['message'];
	$author = $row['author'];
	$time = $row['time'];
	$date = $row['date'];

	echo "
	<div id='message'>
	<b>$author</b> пишет:
	<br>
	$message
    <br>
    Отправлено в: <b>$time, $date</b>
    <button class='likeButton'>Likes: </button>
	</div>";
};

?>

<script>
    /*var sendLikeRequest = function(id) {
    alert(id);
};
    
 $(document).on('click', '.likeButton', function(e) {
  //e.preventDefault();
    sendLikeRequest($(this).data('id'));
     
     
     
})
    	var a = "<?php echo $id ?>";
    alert (a);
    $('.likeButton').click(function(event){
    var id = $('#id').val();
        var elem = document.getElementById('message');
     alert (id);
        alert (elem);
    });*/
</script>