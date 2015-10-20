<?php
	$pageTitle = "WebLab Signup Form";
	require_once 'common/header.php';
	require_once "common/AllCommonUtils.php";
	require "data.php";
?>

	<form action="process.php" method="post">

	    <label for="title">Title:</label>
	    <select class="" name="title">
	        <option value="">Select a Title</option>
	        <option value="Mr">Mr.</option>
	        <option value="Mrs">Mrs.</option>
	        <option value="Ms">Ms.</option>
	        <option value="?">Undetermined</option>
	    </select>
	    <br /><br />
	    
	    <label for="first_name">First Name:</label><br>
	    <input type="text" name="first_name" id="first_name">
	    <br /> <br />
	    <label for="last_name">Last Name:</label><br>
	    <input type="text" name="last_name" id="last_name">
	
	    <br /><br />

		<!-- Beatle select list hardcoded -->
	    <label for="beatleHC">(HC) Your favorite Beatle?</label>
	    <select class="" name="beatleHC">
	        <option value="">Select a Beatle</option>
	        <option value="ringo">Ringo</option>
	        <option value="john">John</option>
	        <option value="paul">Paul</option>
	        <option value="george">George</option>
	    </select>
	    <br /><br />
	    	    
		<!-- construct select list from array in data.php -->
	    <label for="beatleArray">(array) Your favorite Beatle?</label>
	    <select class="" name="beatleArray">
	        <option value="">Select a Beatle</option>
		    <?php
			    foreach($beatleList as $key => $val) { 
			    	echo '<option value='.$key . '>'.$val.'</option>';
			    } 
			?>	        
	    </select>
	    <br /><br />
	    <!-- what this produces: 
	    <label for="beatleArray">(array) Your favorite Beatle?</label>
	    <select class="" name="beatleArray">
	        <option value="">Select a Beatle</option>
	        <option value=0>Ringo</option>
	        <option value=1>John</option>
	        <option value=2>Paul</option>
	        <option value=3>George</option>
	    </select>	    
	    -->
	    
	    <!--  construct beatle select list from class -->
	    <?php
	    	$BList = new SelectList("beatle",$beatleList);
	    	echo $BList->makeMenuWithKeys("(class) Your favorite Beatle?");
	    ?>
	    <br /><br />
	    <!-- what this produces: 
	    <label for="beatle">(class) Your favorite Beatle?</label>
	    <select class="" name="beatle">
	        <option value="">Select One</option>
	        <option value=0>Ringo</option>
	        <option value=1>John</option>
	        <option value=2>Paul</option>
	        <option value=3>George</option>
	    </select>	    
	    -->	    	    
	    	    
	    <input type="submit" value="submit">
	    <input type="reset" value="reset">
	    <br />
	   This information will not be shared with anyone who could incriminate you.
	</form>
	


<?php require "common/footer.php"; ?>

