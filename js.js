$(function(){
	var login = "";
$('#win2').css("display","block");
	//Послать сообщение
	$('#btnSend').click(function(event){
		var name = $('#txtName').val();
		var msg = $('#txtMessage').val();
		
		$.ajax({
				type:"POST",
				url:"messageSave.php",
				data: ({name:name, msg:msg}),
				success:function(msg){
					if(msg==1){
						$('#txtMessage').val("");
					}
					$.ajax({
						url:"show.php",
						success:function(html){
							$('#messages').html(html);
						}
					});
				}
			});
        setInterval(showMess,10);
	});

    
	
	function showMess(){
		$.ajax({
			type:"POST",
			url:"show.php",
			success:function(html){
				$('#messages').html(html);
			}
		});
	}
}); 