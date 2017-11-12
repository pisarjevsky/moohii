<html>

<head>
    <title>Moohii</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="manager.js"></script>
    <script type="text/javascript" src="js/ajaxupload.3.5.js"></script>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
    <div id='window'>
        <h2 align='center'>Moohii</h2>
        <form id="mainForm" name="uploader1" enctype="multipart/form-data" method="POST">
            <span>Назовитесь:</span><br>
            <p><input type="text" class="form-control" name="author" id="author" placeholder="Автор" required></p>
            <span>Введите сообщение:</span><br>
            <textarea id="txtMessage" class="form-control" placeholder="Ваше сообщение" required></textarea><br>
            <span>Ваш сайт:</span><br>
            <p><input type="text" class="form-control" name="website" id="website" placeholder="Сайт"></p><br>          
            <input name="userfile" type="file" /><br>
            <button type="submit" id="btnSend" class="btn btn-info" onclick="event.preventDefault()">Отправить</button> 
        </form>
        <div id="files"></div>
        <hr>
        <div id="messages"></div>

    </div>
</body>

</html>