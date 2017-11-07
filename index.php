<html>
<head>
<title>Чат</title>
<script src="jquery.js" type="text/javascript"></script>
<script src="js.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id='window'>
    <h2 align='center'>Чат</h2>
    <div id="win2">
   
    <span>Назовитесь:</span><br>
    <p><input type="text" name="author" id="author" placeholder="Автор"></p>
	<span>Введите сообщение:</span><br>
	<textarea id="txtMessage"></textarea>
	<br>
	<button id="btnSend">Отправить</button>
	<hr>
	<div id="messages"></div>
      
</div>
        <?php require "show.php";?>
</div>
    
</body>
</html>
