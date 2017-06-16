<?php
	session_start();
	if(isset($_GET['sid']))
		$sid = $_GET['sid'];
	else
	{
		$result = array();
		$result['error'] = 'Student ID required';
		echo json_encode($result);
		return;
	}
	include("../include/DbConnect.php");
	$db = new DbConnect();
	$conn = $db->connect();
    $query = "SELECT * FROM `student` WHERE sid = " . $sid;
    $run = mysqli_query($conn,$query);
    if(!$run)
    {
    	$result['error'] = true;
    	echo json_encode($result);
    	return ;
    }
    else{

    	if(mysqli_num_rows($run) > 0)
    	{
    		$result = array();
    		while($temp = mysqli_fetch_array($run))
    		{
    			$result['name'] = $temp['sname'];
    			$result['college'] = $temp['scollege'];
    			$result['city'] = $temp['city'];
    			$result['error'] = false;
    			echo json_encode($result);
    			return ;
    		}
    		
    	}
    	else
    	{
    		$result = array();
    		$result['error'] = true;
    		echo json_encode($result);
    	}
    }
?>