<script src="liker.js" type="text/javascript"></script>
<?php
require("db/conn.php");
session_start();

if(!isset($_SESSION['likes']))   
       $_SESSION['likes'] = [];
   
$query = mysqli_query($conn, "SELECT * FROM `mess` ORDER BY `id` desc");
while($row = mysqli_fetch_assoc($query)){
	$id = $row['id'];
    if(!array_key_exists($id, $_SESSION['likes']))
    {
    $_SESSION['likes'][$id] = 0;
    }
	$message = $row['message'];
	$author = $row['author'];
	$website = $row['website'];
	$time = $row['time'];
	$date = $row['date'];
    $likes = $row['likes'];
    
	echo "<div data-id='$id' class='message'>
	<b>$author</b> пишет:
	<br>$message<br>";
    if(isset($website)&&$website!=NULL)
    echo "<b>Сайт:<b> <a href='$website'>$website</a>";
    echo "<br>Отправлено в: <b>$time, $date</b>
    <button id='$id' class='likeButton btn btn-danger  ".($_SESSION['likes'][$id] == 1 ? 'disabled' : '')."'  >Likes:$likes</button>
    </div>";
};
?>