<?php
	$pageTitle = "WebLab Signup Form";
	require_once 'common/header.php';
	require "data.php";
	
?>

	<form action="process.php" method="post">

	    <label for="title">Title:</label>
	    <select class="" name="title">
	        <option value="">Select a Title</option>
	        <option value="mr">Mr.</option>
	        <option value="mrs">Mrs.</option>
	        <option value="ms">Ms.</option>
	        <option value="?">Undetermined</option>
	    </select>
	    <br /><br />
	    
	    <label for="first_name">First Name:</label><br>
	    <input type="text" name="first_name" id="first_name">
	    <br /> <br />
	    <label for="last_name">Last Name:</label><br>
	    <input type="text" name="last_name" id="last_name">
	
	    <br /><br />

	    <label for="beatle">Your favorite Beatle?</label>
	    <select class="" name="beatle">
	        <option value="">Select a Beatle</option>
		    <?php
			    foreach($beatleList as $key => $val) { 
			    	echo '<option value='.$key . '>'.$val.'</option>';
			    } 
			?>	        
	        <!--
	        <option value="ringo">Ringo</option>
	        <option value="john">John</option>
	        <option value="paul">Paul</option>
	        <option value="george">George</option>
	        -->
	    </select>
	    <br /><br />
	    <input type="submit" value="submit">
	    <input type="reset" value="reset">
	    <br />
	   This information will not be shared with anyone who could incriminate you.
	</form>
	


<?php require "common/footer.php"; ?>

