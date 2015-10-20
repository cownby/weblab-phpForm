<?php
class MySql
{
		private $host;
		private $dbName;
		private $user;
		private $pswd;
		
	function __construct($host='',$dbName='',$user='',$pswd='')
	{
		// Define member properties
		
		if($host =='') 
			$host = DB_HOST;

		if($dbName =='') 
			$dbName = DB_NAME;
		
		if($user =='') 
			$user = DB_USER;
		
		if($pswd =='') 
			$pswd = DB_PSWD;
		
		
		$this->host = $host;
		$this->db = $dbName;
		$this->user = $user;
		$this->pswd = $pswd;
		$this->mySqlObj = new mysqli($host,$user,$pswd,$dbName);
		
		if ($this->mySqlObj->connect_errno)
	{
		$this->sendError( "db connect failed: " . $dbName->connect_errno);
	}

	}
	
	public function query($query)
	{
		// return query results or error
		
		if( ! $resultObj = $this->mySqlObj->query($query))
		{
			$error = 'Query failed: "' . $query .'"';
			$this->sendError($error);
		}
		return $resultObj;
	}

	public function getArray($query,$type=MYSQL_ASSOC)
	{
		// retrieve query results as an associative array
		
		if( ! $resultObj = $this->mySqlObj->query($query))
		{
			$error = 'Could not retrieve data.';
			$this->sendError($error);
		}
		
		if($resultObj->num_rows)
		{
			$data = array();
			while ($row = $resultObj->fetch_array($type))
			{
				$data[] = $row;
			}
			return $data;
		}
		else
		{
			return false;
		}
	}
	
	public function sendError($error)
	{
		// send error message to the browser & exit.
		
		echo "<br /> " . $error . "<br /> ";
		die;
	}

	public function connect()
	{
		$dbName = new mysqli('localhost','root','nip','lab-brewery');
	//echo "<br /> db connect result: " . $dbName->connect_errno;

	if ($dbName->connect_errno)
	{
		echo "<br /> db connect failed: " . $dbName->connect_errno;
	}
	
	}

}
?>