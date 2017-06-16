$(document).ready(function(){
	function checkUsername()
	{
		console.log("Hello World");
		var username = $("#email").val();
		var password = $("#pwd").val();
		var info = {
			email : username,
			password : password,
		};
		$.ajax({
			url : 'http://localhost/taskmanager/controller/username.php',
			type : 'POST',
			data : info,
			success : function(msg)
			{
				var obj = JSON.parse(msg)
				if(obj['error'] == true)
				{
					checkStudent(username,password);
				}
				else
				{
					window.location.replace("http://localhost/taskmanager/public/dashboard.php");
				}
			}
		});
	}

	function checkStudent(username ,password)
	{
        console.log("Hello World");
		var info = {
			email : username,
			password : password,
		};
		$.ajax({
			url : 'http://localhost/taskmanager/controller/susername.php',
			type : 'POST',
			data : info,
			success : function(msg)
			{
				var obj = JSON.parse(msg);
				if(obj['error'] == true)
				{
					document.getElementById('error').innerHTML = 'Wrong Username and Password';
				}
				else
				{
					window.location.replace("http://localhost/taskmanager/public/studentboard.php");
				}
			}
		});
	}

	$('#login').submit(function () {
 		checkUsername();
 		return false;
	});
});