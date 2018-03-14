<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
    	$error_msg = array();
    	if(!isset($_POST['myrdo']))
    	{
    		$error_msg[] = "No radio buttons were checked.";
    	}
    	if(!isset($_POST['mychk']))
    	{
    		$error_msg[] = "Graguate was checked";
    	}
    	if(!isset($_POST['country']))
    	{
    		$error_msg[] = "No country as selected.";
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