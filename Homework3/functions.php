<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
    	$error_msg = array();
    	if(!isset($_POST['homework']))
    	{
    		$error_msg[] = "";
    	}
    	if(!isset($_POST['primary']))
    	{
    		$error_msg[] = "Graguate was checked";
    	}
    	if(isset($error_msg) && count($error_msg) == 0)
    	{
    		// do some form processing
    	}
    	else
    	{
    		// redirect to the form again.
    	}
    }
?>