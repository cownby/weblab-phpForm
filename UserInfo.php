<?php

    require 'data.php';	
		
	class UserInfo {
		private $firstName;
		private $lastName;
		private $title;
		private $beatle;
		private $userName;
	
		function __construct($title, $fname, $lname, $beatle)
		{
			if (!($this->title = $title))
				$this->sendError("I need a title, please");
			if (!($this->firstName = $fname))
				$this->sendError("I need a first name, please");
			if (!($this->lastName = $lname))
				$this->sendError("I need a last name, please");
			if (!($this->beatle = $beatle))
				$this->sendError("You must select a beatle, please");					
		}
		
		public function username()
		{
			// construct a username:
			// First two letters of the firstname +
			// Last two letters of the lastname +
			// Index of the selected Beatle (0 or 1 or 2 or 3)+
			// first two letters and last letter of the selected Beatles name.
			
			require 'data.php';	
			$beatleName = $beatleList[$this->beatle];
			$username = 
				substr($this->firstName,0,2) . 
				substr($this->lastName,strlen($this->lastName)-2,2) . 
				$this->beatle .
				substr($beatleName,0,2) .
				substr($beatleName,strlen($beatleName)-1,1);
			
			return $username;	
				
		}
		public function sendError($error)
		{
			// send error message to the browser & exit.
			
			echo "<br /> UserInfo <br /> ";
			echo "<br /> " . $error . "<br /> ";
			die;
		}
	}
?>