(function($){
	$(document).ready(function(){
		function getUrlVars() {
			var vars = {};
			var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
				vars[key] = value;
			});
			return vars;
		}

		info = {
			id:getUrlVars()["id"],
		}

		$.ajax({
			url:'http://localhost/taskmanager/v1/getpost',
			type:'POST',
			data:info,
			//contentType: "application/json",
			success:function(msg)
			{
				var feed = msg['feeds'];
				document.getElementById("title").innerHTML = feed[0]['clg_name'];
				document.getElementById("venue").innerHTML = feed[0]['venue'];
				document.getElementById("caption").innerHTML = feed[0]['caption'];
				document.getElementById("category").innerHTML = "Category : " + feed[0]['category'];
				var image = '<img src="' + feed[0]['pimage'] + ' "alt="Smart India Hackathon" height="250px" class="imgres" width="500px"/>'; 
				document.getElementById("details").innerHTML = feed[0]['details'];
				$("#pimage").attr("src",feed[0]['pimage']);
				$("#logo").attr("src",feed[0]['clg_pic']);
				document.getElementById("time").innerHTML = feed[0]['timeStamp'];
			},
			error:function(msg)
			{
				console.log(msg);
			}
		});
	});

})(jQuery);

