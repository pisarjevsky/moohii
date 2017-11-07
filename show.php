<?php
include("conn.php");

//Выбираем сообщения

$query = mysqli_query($conn, "SELECT * FROM `mess` ORDER BY `id` desc");

while($row = mysqli_fetch_assoc($query)){
	$msg = $row['message'];
	
	echo "
	<div id='message'>
	<b>Name пишет:</b>
	<br>
	$msg
	</div>
	";
};

?>