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
        <script 
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
        </script>
        <script src="../js/collegescript.js"></script>
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
                <a href="http://localhost/naksh/public/studentboard.php" class="navbar-brand" style="color:black;" >All India Council For Technical Education </a>
                <button class="btn btn-warning  pull-right navbar-btnp" style="margin-right:15px; margin-top:10px; " onclick="logoutfn();">Logout</button>
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
          <div class="col-md-12" style="border-color:red; padding:0px;">
            <div class="col-md-8 col-md-offset-2" > 
              <div class="row">
                <div class="col-md-11 w3-card w3-hover-shadow card"  style="padding-top: 20px;  padding-bottom: 20px; margin-top:20px;">
                  <div class="col-md-12">
                    <div class="row">
                        <img src="" class="center-block" height="auto" width="30%" id="logo">
                        <h4 class="h4 text-center" id="title"></h4>
                        <h5 class="h5 text-center" id="venue"></h5>
                    </div>
                    <hr class="set"/>
                    <div class="row title" >
                      <div class="col-md-12">
                        <h4 class="h4 text-center" style="margin-top: 5px;" 
                        id="caption"></h4>
                        <h4 class="h4 text-center" style="margin-top: 5px;"
                        id="category"></h4>
                      </div>
                    </div>
                    <hr class="set"/>
                    <div class="row">
                      <div class="col-md-12 col-sm-12" 
                      style="margin-top: 15px;">
                        <img src="" alt="AICTE" id="pimage" width="700px" 
                        height="300px" class="imgres"/>
                        <h5 class="h5 pull-right" id="time" style="margin-top: 20px;"> 23 min ago </h5>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <p id="details"></p>
                      </div>    
                    </div>
                    <hr class="set"/>
                    <div class="row">
                      <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6" >
                        <input type="image" class="center-block" 
                          src="../images/like.png"  id="butimage">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                          <input type="image" class="center-block" 
                          src="../images/spam.png"  id="butimage">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </body>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/dashboard.js"></script>
    <script type="text/javascript">
        function logoutfn(){
            window.location="logout.php";
        } 
    </script>
</html>