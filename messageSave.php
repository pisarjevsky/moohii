<?php
require("db/conn.php");
$message = $_POST['message'];
$author = $_POST['author'];
$website = $_POST['website'];
$date = date("y.m.d");
$time = date("H:i:s");  


mysqli_query($conn,"INSERT INTO `mess`(`author`, `message`, `website`, `date`, `time`) VALUES ('$author','$message', '$website', '$date','$time')");
mysqli_query($conn, "update `images` set `id_mess` = $id where `adress`= $link");

?>