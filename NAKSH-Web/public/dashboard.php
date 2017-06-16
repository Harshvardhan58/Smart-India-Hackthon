<html>
<?php
    session_start();
    include("../include/DbConnect.php");
    if(!isset($_SESSION['email'])){
        header("Location:index.php");
    }
    $user=$_SESSION['email'];
    $login=$_SESSION['login'];
    
	$db = new DbConnect();
	$conn = $db->connect();
    $query = "Select cname,cid, image from college where email = '" . $user. "'";
    $run = mysqli_query($conn,$query);
    while($temp = mysqli_fetch_array($run)){
        $cname = $temp['cname'];
        $cid = $temp['cid'];
        $img = $temp['image'];
        $_SESSION['cid'] = $cid;
    }
?>

    <head>
        <title>SIH</title>
        <link href="../css/style1.css" rel="stylesheet"/>
        <link href= "../css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="../css/bootstrap-theme.min.css.map" rel="stylesheet"/>
        <link href="../css/bootstrap.min.css.map" rel="stylesheet"/>
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
        <link rel="stylesheet" href="../css/w3.css"/>
        
    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-default" >
                <a href="#" class="navbar-brand" style="color:black;" >AICTE</a>
                <button class="btn btn-warning  pull-right navbar-btnp" style="margin-right:15px; margin-top:10px;" onclick="logoutfn();">Logout</button>
                <div class="pull-right">
                    <ul style="padding-top:10px; list-style:none;">
                        <li style="padding-right:15px;" class=" navbar-ul fa fa-facebook fa-2x" aria-hidden="true"></li>
                        <li style="padding-right:15px;" class="fa fa-google-plus fa-2x" aria-hidden="true"></li>
                        <li style="padding-right:15px;" class="fa fa-twitter fa-2x" aria-hidden="true"></li>
                    </ul>
                    
                </div>
                
            </div>
         </div>
        <div class="container">
            
                <div class="col-md-5 fixed" style=" padding:0px;">
                   
                        <div class="col-md-10 well" style="background-color:#6666ff; border:1px solid green;" >
                            <img src="../images/<?php echo $img; ?>" class="img-circle  col-md-4 center-block" alt="clg-logo" width="30%" height="auto" id="logo-img" style="padding-left:0px;"/>
                            <h2 class="h2 col-md-9 text-center" id="clg-name" style="margin-top:30px; margin-left:-30px; padding-left:0px; padding-right:5px; line-height:150%; "><?php echo $cname; ?></h2>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-10 ">
                                <ul class="w3-ul w3-card-4">
                                    <li class="w3-display-container w3-hover-shadow cat" id="c1" onclick="side(this);"><h4>All</h4></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c2" onclick="side(this);"><h4>Research</h4></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c3" onclick="side(this);"><h4>Workshop</h4></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c4" onclick="side(this);"><h4>Training</h4></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c5" onclick="side(this);"><h4>Seminar</h4></li>
                                 </ul>    
                            </div>
                        </div>
                
                    </div>
                    <div class="col-md-6" style="height:1000px;" > 
                        <div class="row" id="post_card_row" style="padding-bottom:20px;">
                            <!--<div class="col-md-11 w3-card w3-hover-shadow card"  style="height:400px; margin-top:20px; ">
                                <div style="height:auto">Heading</div>
                                <div style="background-image:url('../images/iot_workshop123.jpg'); height:250px; background-size:cover;"></div>
                                <div class="footer"></div>
                            </div>
                            <div class="col-md-11 w3-card w3-hover-shadow card"  style="height:400px; margin-top:20px;"></div>
                            <div class="col-md-11 w3-card w3-hover-shadow card"  style="height:400px; margin-top:20px;"></div>
                            <div class="col-md-11 w3-card w3-hover-shadow card"  style="height:400px; margin-top:20px;"></div>-->
                        </div>
                        <button class="w3-button w3-teal w3-circle" type="button"  data-toggle="modal" data-target="#myModal" style=" height:50px;width:50px; position:fixed; right:80; bottom:80;">+</button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">

                              <!-- Modal content-->
                             <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Upload Post</h4>
                                 </div>
                                 <div class="modal-body">
                                    
                                    <form action="data.php" method="post" enctype="multipart/form-data">
                                         <center> 
                                    <select class="input-large form-control" name="category">
                                        <option value="">Select a Category</option>
                                        <option value="Research">Research</option>
                                        <option value="Workshop" >Workshop</option>
                                        <option value="Training">Training</option>
                                        <option value="Seminar">Seminar</option>
                                    </select>
                                     </center>
                                        <div class="form-group">
                                          <label for="Heading"></label>
                                          <input type="text" class="form-control" name="ptitle" id="text" placeholder="Heading">
                                        </div>
                                        <div class="form-group">
                                          <label for="details"></label>
                                          <textarea class="form-group " name="pdetail" placeholder="Description" id="details"></textarea>
                                        </div>
                                        <div class="form-group">
                                          <label for="email"></label>
                                          <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                          <label for="venue"></label>
                                          <input type="text" class="form-control" name="venue" id="venue" placeholder="venue">
                                        </div>
                                        <div class="form-group">
                                                <lable for="stime">Starting Time : </lable> <input type='datetime-local' id="stime" name="stime" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                                <lable for="etime">Ending Time : </lable> <input type='datetime-local' id="etime" name="etime" class="form-control" />
                                        </div>
                                            <div class="form-group">
                                          <label for="pimage"></label>
                                          <input type="file" name="image" id="pimage" value="Insert Picture" />
                                        </div>
                                         <button class="box__button btn btn-success" type="submit">Submit</button>

                                    </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
         <!--<div class="modal fade" id="myModal1" role="dialog">
         <!--   <div class="modal-dialog">

              <!-- Modal content
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Insert Picture</h4>
                </div>
                <div class="modal-body" id="pic_upload">
                  <form class="box" method="post" action="upload.php" enctype="multipart/form-data">
                      
                      
                      
                      <div class="box__input">
                        <input class="box__file" type="file" name="files" id="file" data-multiple-caption="{count} files selected" multiple />
                        <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                        <button class="box__button" type="submit">Upload</button>
                      </div>
                      
                      
                      
                      <div class="box__uploading">Uploading&hellip;</div>
                      <div class="box__success" style="display: block;">Done!</div>
                    <div class="box__error" style="display: block;">Error!</div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>-->
    </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/dashboard.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        var id = <?php echo $cid; ?> ;
        function dash(cat){
        $('#post_card_row').empty();
        $.post("../v1/getclgpost", {id : id} ,function(result){
            console.log(result);
            var len = Object.keys(result.feeds).length;
            /*var post_card = document.createElement('div');
            post_card.style.cssText = 'padding-top: 20px;  padding-bottom: 20px; margin-top:20px;';
            var row_div = document.getElementById('post_card_row');
            row_div.appendChild(post_card);
            post_card.className += 'col-md-11 w3-card w3-hover-shadow card';
            var newdiv = document.createElement('div');
            newdiv.addClass += 'col-md-12';
            var md = newdiv;
            post_card.appendChild(newdiv);
            var newdiv1 = document.createElement('div');
            newdiv1.addClass +='row';
            var r = newdiv1;
            newdiv.appendChild(newdiv1);
            newdiv = document.createElement('div');
            newdiv.addClass += 'col-md-2 center-block';
            newdiv1.appendChild(newdiv);
            newdiv1 = document.createElement('img');
            newdiv1.height='70px';
            newdiv1.width='70px';
            newdiv1.src='../images/techno.jpg';
            newdiv.appendChild(newdiv1);
            newdiv = document.createElement('div');
            newdiv.addClass += 'col-md-10';
            r.appendChild(newdiv);
            var h = document.createElement('h4');
            h.addClass += 'text-center';
            h.innerHTML='Techno India NJR Institute Of Technology';
            newdiv.appendChild(h);
            h = document.createElement('h6');
            h.addClass += 'text-center';
            h.innerHTML='Udaipur';
            newdiv.appendChild(h);
            h = document.createElement('hr');
            h.addClass += 'set';
            md.appendChild(h);*/
            for( var i=0;i<len;i++){
            if(cat=='c1' || (cat=='c2' && result['feeds'][i]['category']=='Research') || (cat=='c3' && result['feeds'][i]['category']=='Workshop') || (cat=='c4' && result['feeds'][i]['category']=='Training') || (cat=='c5' && result['feeds'][i]['category']=='Seminar') ){
                $('#post_card_row').append("<div class='col-md-11 w3-card w3-hover-shadow card'  style='padding-top: 20px; cursor:pointer;   padding-bottom: 20px; margin-top:20px;' id='"+result['feeds'][i]['id']+"' onclick=callfn(this);><div class='col-md-12'><div class='row'>      <div class='col-md-2 center-block'>           <img src='"+result['feeds'][i]['clg_pic']+"'            height='70px' width='70px'>      </div>      <div class='col-md-10'>       <h4 class='text-center'>"+result['feeds'][i]['clg_name']+"</h4>       <h6 class='text-center'>"+result['feeds'][i]['venue']+"</h6>      </div>   </div>   <hr class='set'/>   <div class='row title' >     <div class='col-md-12'>       <h4 class='h4 text-justified' style='margin-top: 5px;'>"+result['feeds'][i]['caption']+"</h4>     </div>   </div>   <hr class='set'/>   <div class='row'>     <div class='col-md-12 col-sm-12'      style='margin-top: 15px;'>       <img src='"+result['feeds'][i]['pimage']+"' alt='"+result['feeds'][i]['caption']+"' height='auto' width='350px'       class='imgres'/>        <h5 class='h5 pull-right' style='margin-top: 20px;'>"+result['feeds'][i]['timeStamp']+"</h5>     </div>   </div>   <hr id='set'/>   <div class='row'>     <div class='col-md-6 col-lg-6 col-sm-6 col-xs-6'>       <input type='image' class='center-block' data-toggle='tooltip' title='Join'       src='../images/like.png'  id='butimage'>     </div>     <div class='col-md-6 col-lg-6 col-sm-6 col-xs-6'>       <input type='image' data-toggle='tooltip' title='Report' class='center-block'        src='../images/spam.png'  id='butimage'>     </div>   </div></div></div>");
                }
            }
    });
        }
dash('c1');
function logoutfn(){
     window.location="logout.php";
} 
function callfn(ob){
    var id = ob.id;
    window.location="../public/college.php?id="+id;
}
    </script>
</html>