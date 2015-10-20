<?php
	$pageTitle = "WebLab Form Processor";
	require_once 'common/header.php';
	require_once 'UserInfo.php';
?>

<?php
/*	if (isset($_POST['title']))
	{
		echo "<br /><br />" . $_POST['title'];
	}*/
	
	$fullname = $_POST['title'] .' '. $_POST['first_name']  .' '. $_POST['last_name'];

	echo "Ok, $fullname, this is what I think you entered:<br />";

	echo "<br />Title: '" . $_POST['title'] ."'"; 	
	echo "<br />First Name: '" . $_POST['first_name']."'";    
 	echo "<br />Last Name: '" . $_POST['last_name']."'"; 
	echo "<br />Favorite Beatle: '" . $beatleList[$_POST['beatle']]."'"; 

	echo "<br /><br />";

	$userInfo = new UserInfo(
		$_POST['title'],
		$_POST['first_name'],
		$_POST['last_name'],
		$_POST['beatle']
		);
		
	echo "Your username is " . $userInfo->username();
	
?>

<?php require "common/footer.php"; ?>

<?php

	
?>