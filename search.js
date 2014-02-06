 $(document).ready(function(){
 	function_Ako("search");
	var typingTimer;
	var doneTypingInterval = 1000;
		$("#search").keyup(function(){
			clearTimeout(typingTimer);
			typingTimer = setTimeout(
			function(){
				function_Ako("search");},
				doneTypingInterval
				);
		});
		
	function function_Ako(variable_Ako){
		var query = $("#search").val();
		var params = "search="+query;
		var url_ako = variable_Ako+".php";
		$.ajax({
			type: 'POST',
			url: url_ako,
			dataType: 'html',
			data: params,
			beforeSend: function(){
				$("#searchout").html("loading");
			},
			
			success: function(dt){
				$("#searchout").html(dt);
			}
		});
	}

 });