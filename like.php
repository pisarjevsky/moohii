<?php
require("db/conn.php");
session_start();
$messageId = $_POST['messageId'];
if(!$_SESSION['likes'][$messageId]==1){
       $_SESSION['likes'][$messageId]=1;
    mysqli_query($conn, "update `mess` set `likes` = `likes`+1 where `id`= $messageId");
}
die();
?>
