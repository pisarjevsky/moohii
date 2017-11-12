<?php
require("db/conn.php");

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/chat/uploads/';
$uploadfile = $uploaddir .md5(rand(1, 100)*1000).'_'. basename($_FILES['userfile']['name']);
$link =$_FILES['userfile']['name'];
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
mysqli_query($conn,"INSERT INTO `images`(`adress`) VALUES ('$link')");

?>