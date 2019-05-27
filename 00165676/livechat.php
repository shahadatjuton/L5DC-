<?php 
 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Live chat </title>


<script>
	function submitChat() {
		
		if (chatform.uname.value =='' || chatform.msg.value =='') {
			alert("All fields are mandatory");
			return;
		}
		var cname= chatform.uname.value;
		var msg= chatform.msg.value;
		var xmlhttp= new XMLHttpRequest(); 

		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status ==200 ) {
				document.getElementById('chatlogs').innerHTML=xmlhttp.responseText;
			}
		}

		xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
		xmlhttp.send();


	}
</script>


</head>
<body>

<form class="chatform" name="chatform">
	<label>Enter your name</label><input type="text" name="uname"><br><br>
	<label>enter your message</label><textarea name="msg"></textarea><br>
	<a href="insert.php" onclick="submitChat">send</a>

	<div id="chatlogs">
		loading chatlogs please wait ...
	</div>
	
</form>

</body>
</html>