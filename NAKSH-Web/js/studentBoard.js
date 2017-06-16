$(function($){
	$(document).ready(function(){
		console.log($.cookie('sid'));
		var info = {
			sid : $.cookie('sid')
		}

		console.log(info);
		$.ajax({
			url : 'http://localhost/taskmanager/controller/student.php',
			type:'GET',
			data:info,
			success:function(result)
			{
				var object = $.parseJSON(result);
				if(object['error']==false)
				{
					$("#student").append('<p>Name : '+object['name']+'</p>'+
										'<p>City : '+object['city'] + '</p>'+
										'<p>College : ' + object['college'] + '</p>');

				}
				else
				{
					$("#student").append('<p>Some Error Occured Please Refresh the Page</p>');
				}
			},
			error:function(msg)
			{
				$("#student").append('<p>Some Error Occured Please Refresh the Page</p>');
			}
		});

		$.ajax({
			url:'http://localhost/taskmanager/v1/postlist',
			type:'GET',
			success:function(result)
			{
				var len = Object.keys(result.feeds).length;
				var feed = result['feeds'];
				for(var i = 0 ; i < len ; i++)
				{

					$("#showPost").append('<div class="col-md-11 w3-card w3-hover-shadow card" onclick="callfn(this)"  style="padding-top: 20px;  padding-bottom: 20px; margin-top:20px;">'+
                              '<div class="col-md-12">'+
                                '<div class="row">'+
                                   '<div class="col-md-2 center-block" style="margin-bottom:15px">'+
                                        '<img src="' + feed[i]['clg_pic'] + 
                                        ' "height="70px" width="100">'+
                                   '</div>'+
                                   '<div class="col-md-10">'+
                                    '<h4 class="h4 text-center">'
                                     +feed[i]['clg_name'] +'</h4>'+
                                    '<h6 class="text-center">'+feed[i]['venue']+
                                    '</h6>'+
                                   '</div>'+
                                '</div>'+
                                '<hr class="set"/>'+
                                '<div class="row title" >'+
                                  '<div class="col-md-12">'+
                                    '<h4 class="h4 text-center" style="margin-top: 5px;">'+feed[i]['caption'] + '</h4>'+
                                  '</div>'+
                                '</div>'+
                                '<hr class="set"/>'+
                                '<div class="row">'+
                                  '<div class="col-md-12 col-sm-12"'+
                                   'style="margin-top: 15px; margin-bottom:15px;">'+
                                    '<img src="'+ feed[i]['pimage'] +'"alt="Smart India Hackathon" height="250px" width="600px" '+
                                    'class="imgres"/>'+ 
                                    '<h5 class="h5 pull-right" style="margin-top: 20px;">'+ feed[i]['timeStamp'] + '</h5>'+
                                  '</div>'+
                                '</div>'+
                                '<hr class="set"/>'+
                                '<div class="row">'+
                                  '<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">'+
                                    '<input type="image" class="center-block" '+
                                    'src="../images/like.png"  id="butimage">'+
                                 ' </div>'+
                                  '<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">'+
                                    '<input type="image" class="center-block"'+ 
                                   ' src="../images/spam.png"  id="butimage">'+
                                  '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>');
				}
			},
			error:function(msg)
			{
				console.log(msg);
			}
		});
	});
});