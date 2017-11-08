<html>
<head>
    <title>Чат</title>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="js.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div id='window'>
        <h2 align='center'>Чат</h2>
        <div id="win2">
            <span>Назовитесь:</span><br>
            <p><input type="text" class="form-control" name="author" id="author" placeholder="Автор"></p>
            <span>Введите сообщение:</span><br>
            <textarea id="txtMessage" class="form-control"></textarea>
            <br>
            <button id="btnSend" class="btn btn-info">Отправить</button>
            <hr>
            <div id="messages"></div>
        </div>
    </div>
</body>
</html>