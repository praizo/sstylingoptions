<?php 


class utilityUser

{
	protected $conn;			
	function __construct()
	{
		session_start();				
		$this->conn = new Mysqli('localhost','root','','chidesigns');
	}
}




?>