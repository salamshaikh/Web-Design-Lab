<?php
include("header.php");
include("nav.php"); ?>
<body>
	<h2> PHP using AJAX</h2>
	<div align = "center">
	Create your username <input type = "text" 
	name = "username" id = "username" placeholder = "Enter your UserName"> 
	<span id = "Result" align = "center"></span>
	</div>
</body>
	<script>
		$(document).ready(function() {
			$('#username').keyup(function(){
		      $.post("checkuser.php", {
		        username: $('#username').val()
		      }, function(response){
		        $('#Result').fadeOut();
				setTimeout("finishAjax('Result','"+escape(response)+"')", 400);
		      });
		    	return false;
			});
		});
		function finishAjax(id, response) {
		  $('#Result').hide();
		  $('#'+id).html(unescape(response));
		  $('#'+id).fadeIn();
		} 
	</script>