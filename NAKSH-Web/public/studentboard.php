<html>
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
        <script type=></script>
        
    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-default" >
                <a href="#" class="navbar-brand" style="color:black;" >All India Council For Technical Education </a>
                <button class="btn btn-warning  pull-right navbar-btnp" style="margin-right:15px; margin-top:10px; ">Logout</button>
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
            
                <div class="col-md-4 fixed" style="border-color:red; padding:0px;">
                        <div class="col-md-10 well" style="background-color:#6666ff; border:1px solid green;" >
                          <img src="../images/speaker-1.jpg" class="col-md-4 center-block" alt="clg-logo" width="100px" id="logo-img" style="padding-left:0px;"/>
                            <h4 class="h4 col-md-9 text-center" id="student" style="margin-top:10px; margin-left:-30px; padding-left:0px; padding-right:5px; line-height:150%; "></h4>
                        </div>
                    
                        <div class="row">
                            <div class="col-sm-12 col-md-10 ">
                                <ul class="w3-ul w3-card-4">
                                    <li class="w3-display-container w3-hover-shadow cat" id="c1" onclick="side(this);"><h3>All</h3></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c2" onclick="side(this);"><h3>Research</h3></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c3" onclick="side(this);"><h3>Workshop</h3></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c4" onclick="side(this);"><h3>Training</h3></li>
                                    <li class="w3-display-container w3-hover-shadow cat" id="c5" onclick="side(this);"><h3>Seminar</h3></li>
                                 </ul>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" > 
                        <div class="row" id="showPost">
                        </div>
                    </div>
          </div>
    </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
     <script 
     src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js">
     </script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/studentboard.js"></script>
</html>