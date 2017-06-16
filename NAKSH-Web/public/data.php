<?php
    session_start();
    include("../include/DbConnect.php");
	$db = new DbConnect();
	$conn = $db->connect();
    //$query = "Select * from college where email = '" . $email . "'";
    //$run = mysqli_query($conn,$query);
    
        $cid = $_SESSION['cid'];
        $ptitle = $_POST['ptitle'];
        $pdetail = $_POST['pdetail'];
        
        $venue = $_POST['venue'];
        
        $category = $_POST['category'];
        
        $stime = $_POST['stime'];
        
        $etime = $_POST['etime'];
        //echo $cid." ".$ptitle." ".$pdetail." ".$venue." ".$category." ".$stime." ".$etime;

        if(isset($_FILES['image'])){
          $errors= array();
          $file_name = $_FILES['image']['name'];
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
          $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

          $expensions= array("jpeg","jpg","png");

          if(in_array($file_ext,$expensions)=== false){
             $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }

          if($file_size > 20971520){
             $errors[]='File size must be excately 2 MB';
          }

          if(empty($errors)==true){
             if(move_uploaded_file($file_tmp,"../images/".$file_name))
                $suc=1;
          }else{
             print_r($errors);
          }
            if($suc==1){
                $sql  = "INSERT INTO `post` (`pid`, `cid`, `ptitle`, `pdetail`, `ptime`, `pimage`, `category`, `plike`, `pdislike`, `venue`, `stime`, `etime`) VALUES (NULL, '".$cid."', '".$ptitle."', '".$pdetail."', CURRENT_TIMESTAMP, '".$file_name."', '".$category."', '0', '0', '".$venue."', '".$stime."', '".$etime."')";
                $run = mysqli_query($conn,$sql) or die("error".mysqli_error($conn));
                header('Location:dashboard.php');
            }
       }
        
?>