<?php
require("db/conn.php");
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/chat/uploads/';
$uploadfile = $uploaddir .md5(rand(1, 100)*1000).'_'. basename($_FILES['userfile']['name']);

mysqli_query($conn,"INSERT INTO `mess`(`author`, `message`, `website`, `date`, `time`) VALUES ('$author','$message', '$website', '$date','$time')");

if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "err!";
}



?>