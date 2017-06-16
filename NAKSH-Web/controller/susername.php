<?php
	session_start();
	if(isset($_POST['email']))
		$email = $_POST['email'];
	else
	{
		$result = array();
		$result['error'] = true;
		$result['slogin'] = false;
		echo json_encode($result);
		return;
	}
	if(isset($_POST['password']))
		$password = $_POST['password'];
	else
	{
		$result = array();
		$result['error'] = true;
        $result['slogin'] = false;
		echo json_encode($result);
		return;
	}
	include("../include/DbConnect.php");
	$db = new DbConnect();
	$conn = $db->connect();
    $query = "Select * from student where email = '" . $email . "'";
    $run = mysqli_query($conn,$query);
    $pass="";
    if(!$run)
    {
    	$result['error'] = true;
        $result['slogin'] = false;
    	echo json_encode($result);
    	return ;
    }
    else
    {
    	if(mysqli_num_rows($run) > 0)
    	{
    		while($temp = mysqli_fetch_array($run))
    		{
    			$pass = $temp['password'];
                $sid = $temp['sid'];
    		}
    		if($pass == $password)
    		{
    			
    			$_SESSION['email'] = $email;
    			$_SESSION['slogin'] = true;
                $_SESSION['sid'] = $sid;
                $cookie_name = "sid";
                $cookie_value = $sid;
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    			$result = array();
    			$result['slogin'] = true;
    			$result['error'] = false;
    			echo json_encode($result);
    			return ;
    		}
    		else
    		{
    			$result = array();
    			$$result['error'] = true;
                $result['slogin'] = false;
    			echo json_encode($result);
    			return ;
    		}
    	}
    	else
    	{
            $result = array();
    		$result['error'] = true;
            $result['slogin'] = false;
            return json_encode($result);
    	}
    }
?>