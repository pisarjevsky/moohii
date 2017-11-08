<?php
require("conn.php");
$message = $_POST['message'];
$author = $_POST['author'];
$date = date("y.m.d");
$time = date("H:i:s");  
mysqli_query($conn,"INSERT INTO `mess`(`author`, `message`, `date`, `time`) VALUES ('$author','$message', '$date','$time')");
//Защита от вредоносных символов
/*function protect($var){
	$var = trim($var);
	$var = strip_tags($var);
	$var = mysql_escape_string($var);
	return $var;
}*/

//mysqli_query($conn,"INSERT INTO `mess`(`id`, `message`) VALUES (98, 'кек')");
//Добавление сообщения
if(isset($_POST['txtMessage']) && !empty($_POST['txtMessage'])){
	//$msg = protect($_POST['txtMessage']);
    
   // mysqli_query($conn,"insert into `mess` (`message`) values('$_POST['txtMessage']')");
};

?>