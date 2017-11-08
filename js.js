$(function(){
setInterval(showMess,1000);
	$('#btnSend').click(function(event){
		var author = $('#author').val();
		var message = $('#txtMessage').val();
		
		$.ajax({
				type:"POST",
				url:"messageSave.php",
				data: ({"message":message, "author":author,}),
				success:function(message){
						$('#txtMessage').val("");
					$.ajax({
						url:"show.php",
						success:function(html){
							$('#messages').html(html);
                         
						}
					});
				}
			});
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